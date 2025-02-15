<?php

namespace App\Http\Controllers;
use App\Models\user;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class user_crud extends Controller
{
    //
    public function search()
    {
        $info=user::all();
        return view('user',['info'=>$info]);
    }
    public function insert(Request $req)
    {
        if($req->pass==$req->c_pass)
        {
            $info=new user;
            $info->fname=$req->fname;
            $info->lname=$req->lname;
            $info->username=$req->username;
            $info->email=$req->email;
            $info->password=Hash::make($req->pass);
            $id=$info->save();
            if($id>0)
            {
                $req->session()->put('username',$req->username);
                return redirect('home');
            }
        }
        else{
            return redirect()->back()->withErrors(['failure'=>'password & confirm-password must be same']);

        }

    }
    public function index(Request $req)
    {
        $data=user::where('username',$req->username)->get();
        if($data->isNotEmpty())
        {
            if(Hash::check($req->pass,$data[0]->password))
            {
                if($data[0]->role=='user')
                {
                    $req->session()->put('username',$data[0]->username);
                    return redirect('home');
                }
                else if($data[0]->role=='admin')
                {
                    $req->session()->put('username',$data[0]->username);
                    return redirect('admin');
                }
                
            }
        }
        else{
            return redirect()->back()->withErrors(['failure'=>'Invalid User or Password']);

        }
    }

    public function Delete($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect('user');
    }

    public function Edit($id)
    {
        $data=user::find($id);
        return view('editloginData',['data'=>$data]);
    }
    public function Update(Request $req)
    {
        $data = user::find($req->id);
        $data->fname = $req->fname;
        $data->lname = $req->lname;
        $data->username = $req->username;
        $data->email = $req->email;
        // $data->password = $req->password;
        $data->save();
        return redirect('user');
    }
}
