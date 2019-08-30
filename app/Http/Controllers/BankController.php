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
        $has_bank = \App\model\Bank::where('user_id', $id )->count();

        if($has_bank==0)
        {
            $data_bank = \App\model\Bank::create(['bank_name'=>'',
                                                  'bank_account_number'=>'',
                                                  'bank_account_holder'=>'',
                                                  'user_id'=>$id,
                                           ]);
                                           
            return view('bank.update',['data_bank'=>$data_bank]);
        }
        else
        {

            $data_bank = \App\model\Bank::find($id);
            
            return view('bank.update',['data_bank'=>$data_bank]);
        }
    }

    public function update(Request $request, $id)
    {
        $data_bank = \App\model\Bank::find($id);
        $data_bank->update($request->all());

        return redirect('bank/update');
    }
}

