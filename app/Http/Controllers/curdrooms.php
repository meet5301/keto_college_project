<?php

namespace App\Http\Controllers;
use App\Models\rooms;

use Illuminate\Http\Request;

class curdrooms extends Controller
{
    //
    public function search()
    {
        $info=rooms::all();
        return view('roomdis',['info'=>$info]);
    }

    public function display()
    {
        $info=rooms::all();
        return view('room',['info'=>$info]);
    }

    public function insert(Request $req)
    {
            $info=new rooms;
            $info->rooms_name=$req->rooms_name;
            $info->rooms_image=$req->rooms_image;
            $info->price=$req->price;
            $info->details=$req->details;
            $id=$info->save();
            if($id>0)
            {
                return redirect('roomdis');
            }
    }

    public function delete($id)
    {
        $data=rooms::find($id);
        $data->delete();
        return redirect('roomdis');
    }

    public function edit($id)
    {
        $data=rooms::find($id);
        return view('roomedit',['data'=>$data]);
    }
    public function update(Request $req)
    {
        $data=rooms::find($req->id);
        $data->rooms_name=$req->rooms_name;
        $data->rooms_image=$req->rooms_image;
        $data->price=$req->price;
        $data->details=$req->details;
        $data->save();
        return redirect('roomdis');
    }
}
