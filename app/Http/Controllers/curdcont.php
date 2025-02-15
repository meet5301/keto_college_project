<?php

namespace App\Http\Controllers;
use App\Models\contact;

use Illuminate\Http\Request;

class curdcont extends Controller
{
    //
    public function search()
    {
        $info=contact::all();
        return view('cont',['info'=>$info]);
    }

    public function insert(Request $req)
    {
            $info=new contact;
            $info->name=$req->name;
            $info->email=$req->email;
            $info->phone=$req->phone;
            $info->message=$req->message;
            $id=$info->save();
            if($id>0)
            {
                return redirect('contact');
            }
    }

    public function delete($id)
    {
        $data=contact::find($id);
        $data->delete();
        return redirect('cont');
    }
}
