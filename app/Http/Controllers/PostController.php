<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PostController extends Controller
{
    
    public function writePost(){
        return view('write_post');
    }

    public function addPost(Request $request){
        $data=array();
        $data['title']=$request->title;
        $data['author']=$request->author;
        $data['description']=$request->description;
        $data['category']=$request->category;
        $data['image']=$request->image;

        $post=DB::table('post')->insert($data);

        if($post){
            $notification=array(
                'message'=>'Successfully Post Inserted',
                'alert-type'=>'success'
            );
            return Redirect()->route('all_post')->with($notification);
        }else{
            $notification=array(
                'message'=>'Something went wrong',
                'alert-type'=>'error'
            );
            return Redirect()->route('write_post')->with($notification);
        }


    }

    public function allPost(){
        $post=DB::table('post')->get();

        return view('allpost',compact('post'));
    }

    public function viewPost($id){
       $post=DB::table('post')->where('id',$id)->first();
        return view('viewpost',compact('post'));
    }

    public function editPost($id){
        $post_edit=DB::table('post')->where('id',$id)->first();
         return view('updatepost',compact('post_edit'));
     }
     

    
    public function deletePost($id){
        $post_delete=DB::table('post')->where('id',$id)->delete();
        if($post_delete){
            $notification=array(
                'message'=>'Successfully Post Deleted',
                'alert-type'=>'success'
            );
            return Redirect()->route('all_post')->with($notification);
        }
    }

    public function updatePost(Request $request,$id){
        $data=array();
        $data['title']=$request->title;
        $data['author']=$request->author;
        $data['description']=$request->description;
        $data['category']=$request->category;
        $data['image']=$request->image;

        $update_post=DB::table('post')->where('id',$id)->update($data);

        if($update_post){
            $notification=array(
                'message'=>'Successfully Post Inserted',
                'alert-type'=>'success'
            );
            return Redirect()->route('all_post')->with($notification);
        }
        else{
            $notification=array(
                'message'=>'Something went wrong',
                'alert-type'=>'error'
            );
            return Redirect()->route('write_post')->with($notification);
        }

    }
}
