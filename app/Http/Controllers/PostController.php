<?php
namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Post as AppPost;

class PostController extends Controller
{
/**
* Display a listing of the resource.
*
* @return \Illuminate\Http\Response
*/
public function index()
{
$posts = Post::all();
return view('posts.index', compact('posts'));
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
return view('posts.create');
}
/**
* Store a newly created resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @return \Illuminate\Http\Response
*/
public function store(Request $request)
{
$request->validate([
'title'=>'required',
'body'=>'required',
]);
Post::create($request->all());
return redirect()->route('posts.index');
}
/**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function show($id)
{
$post = Post::find($id);
// dd(Comment::where('post_id',$id)->get());
return view('posts.show', compact('post'));
}
}
