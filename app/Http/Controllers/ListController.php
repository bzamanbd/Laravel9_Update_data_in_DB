<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class ListController extends Controller
{
    function showData(){
        $data =  Member::all();
        return view('list',['collection'=>$data]);
    }

    function deleteData($id){
        $data = Member::find($id);
        $data->delete();
        return redirect('list');

    }

    function editData($id){
        $data = Member::find($id);
        $data->edit();
        return redirect('list');

    }

    function showUpdate($id){
        $data= Member::find($id);
        return view('update',['data'=>$data]);
    }

    function UpdateData(Request $req){
        $data = Member::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->save();
        return redirect('list');
    }
}