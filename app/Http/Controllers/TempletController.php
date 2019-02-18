<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Post;
use Illuminate\Http\Request;
use DB;
class TempletController extends Controller
{
    //

     public function about(){
        return view('templete.about');
    }

    public function home(){
        $posts=DB::table('posts')->get();
        return view('templete.home',compact('posts'));
    }

    public function samplepost(){
        return view('templete.samplepost');
    }

    public function contact(){
        return view('templete.contact');
    }

    public function insertPost(Request $request){
         $post = new Post;
        $post->title = $request->title;
        $post->writer_name = $request->writer_name;
        $post->content = $request->contentt;
        $this->validate($request, ['image_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',]);
       if ($request->hasFile('image_name')) {
            $image = $request->file('image_name');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('/img');
            $image->move($destinationPath, $name);
            $post->image_name = $name;
           $post->save();
           return back();
//           return new PostResource($post);
        }
        else
            echo 'erroe';


    }

     public function selectPost(){
         $posts=DB::table('posts')->get();
         return view('templete.home',compact('posts'));
//         return new PostResource($posts);
    }

    public function deletePost(Post $id){
         $id->delete();
         return back();
    }

    public function editPost(Post $id){
       return view('templete.updatePost',compact('id'));
    }

    public function Upost(Request $request,Post $id){
       // DB::table('posts')->where('id',$id)->update(array('title'=>$request->title,'writer_name'=>$request->writer_name));
        $id->update($request->all());
        return redirect('/');
    }

}

