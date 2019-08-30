<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BankController extends Controller
{
    //
    public function showUpdateForm()
    {
        $id = Auth::user()->id;
        $data_user = \App\User::find($id);
        return view('bank.update');
    }
}
