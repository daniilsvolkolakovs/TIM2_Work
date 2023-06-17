<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        $post=Post::all();
        return view('home.index', compact('post'));
    }

    public function upload(Request $request){
        
        $data=new Post;

        $data->username=Auth::user()->name;

        $data->desription=$request->desription;

        //image insert part

        $image=$request->image;

        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('post', $imagename);
        
        //image part end here

        $data->image=$imagename;
        }

        $data->save();

        return redirect()->back();


    }
}
