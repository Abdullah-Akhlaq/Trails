<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class submit extends Controller
{
    function index(Request $req)
    {
      $submit =new User;
      $submit->id=$req->id;
      $submit->YourName=$req->YourName;
      $submit->YourEmail=$req->YourEmail;
      $submit->subject=$req->subject;
      $submit->message=$req->message;
      $submit->save();
      return redirect('index');
    }
    function index1()
    {
        $data=User::all();

        return view('index',['list1'=>$data]);
    }
    function delete($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect('index');

    }
    function showdata($id)
    {
        $data=User::find($id);
        return view('update',['data'=>$data]);
    }
    function update1(Request $req)
    {
      $submit=User::find($req->id);
      $submit->YourName=$req->YourName;
      $submit->YourEmail=$req->YourEmail;
      $submit->subject=$req->subject;
      $submit->message=$req->message;
      $submit->save();
      return redirect('index');
    }
}
