<?php

namespace App\Http\Controllers;
use App\Models\booking;

use Illuminate\Http\Request;

class curdbooking extends Controller
{
    //
    public function search()
    {
        $info=booking::all();
        return view('booking',['info'=>$info]);
    }

    public function insert(Request $req)
    {
            $info=new booking;
            $info->email=$req->email;
            $info->rooms=$req->rooms;
            $info->arrive=$req->arrive;
            $info->departure=$req->departure;
            $id=$info->save();
            if($id>0)
            {
                return redirect('home');
            }
    }

    public function delete($id)
    {
        $data=booking::find($id);
        $data->delete();
        return redirect('booking');
    }
}
