<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\model1;
use App\Models\adminAccountModel;

class deleteController extends Controller
{
    function deletes($model,$id)
    {
        // $id = $request->id;

            if($model=="model1")
            {
                $delete_row=model1::find($id);
                $delete_row->delete();
                return redirect()->route('admin.pShow')->with('message', 'deleted');
            }
            elseif($model=="adminAccountModel"){
                $delete_row=adminAccountModel::find($id);
                $delete_row->delete();
                return redirect()->route('admin.accShow')->with('message', 'deleted');
            }



    }
}
