<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Auth;
use App\Traits\UploadImage;
use Validator;


class PostController extends Controller

{
  
    function __construct()
    {
        $this->middleware('role_or_permission:Post access|Post create|Post edit|Post delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Post create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Post edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Post delete', ['only' => ['destroy']]);
    }


    public function index()
    {
        $Post = Post::orderBy('id', 'DESC')->paginate(6);
        return view('post.index',['posts'=>$Post]);
    }

    public function create()
    {
        return view('post.new');
    }
    
    public function store(Request $request)
    {  
         $request->validate([
        'title' => 'required',
        'slug' => 'required',
        'description' => 'required',
        'long_description' => 'required',
        ]);

        $data = $request->all();
        if($request->file('postimg')){
          $file= $request->file('postimg');
          $filename= time().'_'.$file->getClientOriginalName();
          $file-> move(public_path('/blogimages'), $filename);
          $data['postimg']= $filename;
        }
        
        $data['user_id'] = Auth::user()->id;
        $Post = Post::create($data);
        return redirect()->back()->withSuccess('Post created !!!');
    }

    public function show($id)
    {
        //
    }
   
    public function edit(Post $post)
    {
       return view('post.edit',['post' => $post]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => '',
            'long_description' => 'required',
            ]);

        $post = Post::find($id);
          if($request->file('postimg')){
            $file= $request->file('postimg');
            $filename= time().'_'.$file->getClientOriginalName();
            $file-> move(public_path('blogimages'), $filename);
            $post['postimg']= $filename;
        }
        
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->description = $request->description;
        $post->long_description = $request->long_description;
        $post->publish = $request->publish;
        $post->save();
        return redirect()->back()->withSuccess('Post updated !!!');
    }
  
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->withSuccess('Post deleted !!!');
    }
}
