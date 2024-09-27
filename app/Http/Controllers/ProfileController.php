<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Gender;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function index()
    {
        $data = [
            'user' => Auth::guard('accounts')->user(),
            'genders' => Gender::all(),
            'roles' => Role::all()
        ];
        return view('profile', $data);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'genders_id' => 'required|in:1,2',
            'first_name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'email' => 'required|email:dns|unique:accounts,email,'. Auth::guard('accounts')->user()->id,
            'password'=> ['required', 'confirmed', 'max:255', Password::min(8)->numbers()],
            'display_picture_link' => 'required|image'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['display_picture_link'] = $request->display_picture_link->store('account_image', 'public');

        Account::where('id', Auth::guard('accounts')->user()->id)->update($validatedData);
        return redirect('/saved');
    }
}
