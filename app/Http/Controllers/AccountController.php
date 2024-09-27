<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Role;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $data = [
            'accounts' => Account::all()
        ];
        return view('admin.account', $data);
    }

    public function update($id)
    {
        $data = [
            'account' => Account::find($id),
            'roles' => Role::all()
        ];
        return view('admin.update', $data);
    }

    public function save(Request $request, $id)
    {
        $account = Account::findOrFail($id);
        $account->roles_id = $request->role;
        $account->save();
        return redirect('/account');
    }

    public function delete($id)
    {
        $account = Account::findOrFail($id);
        $account->delete();
        return redirect('/account');
    }
}
