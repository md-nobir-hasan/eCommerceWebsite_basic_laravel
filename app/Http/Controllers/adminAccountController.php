<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\adminAccountModel;
use Symfony\Contracts\Service\Attribute\Required;
use Session;
Session_start();

class adminAccountController extends Controller
{


    function show()
    {
       
        
            $db_data = adminAccountModel::all();;
            return view('admin.adminAccount',compact('db_data'));

       
    }



    function insert(request $request)
    {

        
        request()->validate([
                            'name' => 'required',
                            'email' => 'required',
                            'role' => 'required',
                            'password' => 'required'
                            ],
                    
                            [
                            'name.required' => 'অনুগ্রহ করে নাম লিখুন',
                            'email.required' => 'অনুগ্রহ করে ই-মেইল লিখুন',
                            'role.required' => 'অনুগ্রহ করে রোল বাছাই করুন',
                            'password.required' => 'অনুগ্রহ করে করে পাসওয়ার্ড দিন',
                            ]);


        $user = adminAccountModel::where('email',$request->email)->first();

            if($user===null)
            {
                
                $insert = new adminAccountModel;
        
                $insert->name= $request->name;
                $insert->email= $request->email;
                $insert->role= $request->role;
                $insert->password= $request->password;

                $insert->save();
                return redirect('/admin/show_admin_account_info')->with('message', '1');

            }else{
                 return redirect('/admin/show_admin_account_info')->with('message', '0');
                 }


    }




    function update(request $request)
    {
       

        request()->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required'
            ],
    
            [
            'name.required' => 'অনুগ্রহ করে নাম লিখুন',
            'email.required' => 'অনুগ্রহ করে ই-মেইল লিখুন',
            'role.required' => 'অনুগ্রহ করে রোল বাছাই করুন',
            'password.required' => 'অনুগ্রহ করে করে পাসওয়ার্ড দিন',
            ]);



        $id = $request->id;
            


        $update = adminAccountModel::find($id);
        
        $update->name= $request->name;
        $update->email= $request->email;
        $update->role= $request->role;
        $update->password= $request->password;
        
       
        $update->save();

        return redirect('/admin/show_admin_account_info')->with('message', '5');
            
            
        
    
    }



}
