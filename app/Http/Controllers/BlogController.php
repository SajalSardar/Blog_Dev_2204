<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    

    public function create(){
        return view('blog.create');
    }

    public function insert(Request $request){
        
        DB::table('blogs')->insert([
            'title' => $request->title,
            'body' => $request->body
        ]);

        return back();

    }
}
