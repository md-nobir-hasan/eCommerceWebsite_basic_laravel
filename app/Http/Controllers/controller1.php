<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\parlament_seat;
use App\Models\model1;
use Symfony\Contracts\Service\Attribute\Required;
use Session;
Session_start();

class controller1 extends Controller
{


    function show()
    {


            $db_data = model1::orderBy('id','DESC')->get();
            return view('admin.products_info',compact('db_data'));


    }



    function insert(request $request)
    {


        request()->validate([
                            'name' => 'required',
                            'price' => 'required',
                            'discount' => 'required',

                            'img' => 'required'

                            ],

                            [
                            'name.required' => 'অনুগ্রহ করে নাম লিখুন',
                            'price.required' => 'অনুগ্রহ করে মূল্য লিখুন',
                            'discount.required' => 'অনুগ্রহ করে ছাড় মূল্য লিখুন',
                            'img.required' => 'অনুগ্রহ করে করে ছবি আপলোড করুন',
                            ]);


        $user = model1::where('name',$request->name)->first();

            if($user===null)
            {

                $insert = new model1;

                $insert->name= $request->name;
                $insert->price= $request->price;
                $insert->discount= $request->discount;
                $insert->img= $request->img;

                if($request->hasFile('img')){
                    $img = $request->File('img');
                    $img_name =time().'.'.$img->getClientOriginalExtension();
                    $img->move('storage/images/products',$img_name);

                    $insert['img']=$img_name;
                    }
                $insert->save();
                return redirect('/admin/show_products_info')->with('message', '1');

            }else{
                 return redirect('/admin/show_products_info')->with('message', '0');
                 }


    }




    function update(request $request)
    {


        request()->validate([
            'name' => 'required',
            'price' => 'required',
            'discount' => 'required',

            'img' => 'required'

            ],

            [
            'name.required' => 'অনুগ্রহ করে নাম লিখুন',
            'price.required' => 'অনুগ্রহ করে মূল্য লিখুন',
            'discount.required' => 'অনুগ্রহ করে ছাড় মূল্য লিখুন',
            'img.required' => 'অনুগ্রহ করে করে ছবি আপলোড করুন',
            ]);



        $id = $request->id;



        $update = model1::find($id);

        $update->name= $request->name;
        $update->price= $request->price;
        $update->discount= $request->discount;
        $update->img = $request->img;

        $db_data = DB::table('products_details')
                    ->select('products_details.*')
                    ->where('id',$id)
                    ->get();
        $delete_img = $db_data['0']->img;



        if($request->hasFile('img')){

            $img = $request->File('img');
            $img_name =time().'.'.$img->getClientOriginalExtension();
            $img->move('storage/images/products',$img_name);

            $update['img']=$img_name;

            }

        $update->save();
        unlink('storage/images/products/'.$delete_img);

        return redirect('/admin/show_products_info')->with('message', '5');




    }



}
