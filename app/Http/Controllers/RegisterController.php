<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Support\Facades\DB;
use App\Models\accountount;
use App\Models\Gender;
use App\Models\Role;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index()
    {
        $data = [
            'genders' => Gender::all(),
            'roles' => Role::all()
        ];
       return view('auth.register', $data);
    }
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'genders_id' => 'required|in:1,2',
            'roles_id' => 'required|in:1,2',
            'first_name' => 'required|max:25',
            'last_name' => 'required|max:25',
            'email' => 'required|email:dns|unique:accounts,email',
            'password'=> ['required', 'confirmed', 'max:255', Password::min(8)->numbers()],
            'display_picture_link' => 'required|image'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['display_picture_link'] = $request->display_picture_link->store('account_image', 'public');

        Account::create($validatedData);
        return redirect('/login')->with('status', __('Account created successfully! Please login to continue'));
    }
}

