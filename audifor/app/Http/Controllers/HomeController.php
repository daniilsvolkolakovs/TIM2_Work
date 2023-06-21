<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;



class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $post = Post::all();
            $usertype=Auth()->user()->usertype;

            if($usertype=='user'){
                return view('dashboard');
            }
            else if($usertype=='admin'){
                return view('admin.adminhome');
            }
            else{
                return redirect()->back();
            }
            return view('index', ['post' => $post]);
        }
    }

    public function post_admin(){
        return view('admin.post_admin');
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

    public function view_post(){
        $name=Auth::user()->name;

        $post=Post::where('username','=',$name)->get();

        return view('post_page',compact('post'));
    }

    public function delete_post($id){
        $data=post::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function update_post($id){
        $data=post::find($id);

        return view('updatepost', compact('data'));
    }

    public function confirm_update(Request $request ,$id){
        $post=post::find($id);

        $post->desription=$request->desription;

        $image=$request->image;

        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->image->move('post', $imagename);
        
        //image part end here

        $post->image=$imagename;
        }

        $post->save();

        return redirect()->back();
    }
}
