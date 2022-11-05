<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    // index 
    function index()
    {
        $posts = DB::table('blogs')->select('id', 'title', 'body')->get();

        return view('blog.index', compact('posts'));
    }

    //display create form
    public function create()
    {
        return view('blog.create');
    }

    //insert
    public function insert(Request $request)
    {

        $request->validate(
            [
                'title' => 'required|max:100',
                'body' => 'required'
            ],
            [
                'title.required' => "Title Custom error Message",
            ]
        );

        DB::table('blogs')->insert([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return back();
    }

    //show single 
    public function show($id)
    {
        $post = DB::table('blogs')->find($id);
        return view('blog.show', compact('post'));
    }

    //display edit form
    public function edit($id)
    {
        $post = DB::table('blogs')->find($id);
        return view('blog.edit', compact('post'));
    }

    // update data
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title' => 'required|max:100',
                'body' => 'required'
            ]
        );

        DB::table('blogs')->where('id', $id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return redirect(route('blog.index'))->with('success', "Blog Data update!");
    }

    // delete 
    function delete($id)
    {
        DB::table('blogs')->where('id', $id)->delete();
        return redirect(route('blog.index'))->with('success', "Blog Delete update!");
    }
}