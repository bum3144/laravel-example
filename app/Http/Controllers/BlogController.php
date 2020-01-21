<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{

    public function show($id)
    {
        $blog = Blog::with(['comments'])->where('id', $id)->firstOrFail();
        // dd($blog);

        return view('blogs.show', compact('blog'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        // dd($request->url());
        // return $request->all() or dd($request->all()); // 결과 체크

        // Way 1
        // $blog = new Blog();
        // $blog->user_id = $request->user()->id;
        // $blog->title = $request->title;
        // $blog->description = $request->description;
        // $blog->save();

        // Way 2 //==> Mass Assignment arror ==> Blog.php에 protected $fillable = [ 'name', 'email', 'password', ]; or protected $guarded = [];
        Blog::create([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->back();
    }
}
