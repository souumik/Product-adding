<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;
class AdminController extends Controller
{
    public function get_user_list()
    {
        $user_info=Registration::select('*')->get();
        return view ('/db')->with('user_info',$user_info);

    }
    public function save_info(Request $request)
    {
        $data = new Registration;
        $data->product = $request->product;
        $data->gender = $request->gender;
        $data->color = $request->color;
        $data->size = $request->size;
        $data->screw_size = $request->screw_size;
        $data->price = $request->price;

        $data->save();
        
        return redirect('user_list');
    }   

    public function delete_user($id)
    {
        Registration::where('id','=',$id)->delete();
        return redirect('user_list'); 
    }

    public function edit_user($id)
    {
        $result = Registration::select('*')->where('id','=',$id)->first();
        return view ('edit')->with('data',$result);
    }

    public function edit_info(Request $request, $id)
    {
        $data = Registration::find($id);
        $data->product = $request->product;
        $data->gender = $request->gender;
        $data->color = $request->color;
        $data->size = $request->size;
        $data->screw_size = $request->screw_size;
        $data->price = $request->price;

        $data->save();
        
        return redirect('user_list');
    }
}
