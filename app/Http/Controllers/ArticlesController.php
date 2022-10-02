<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    //
    public function index(){
        $articles = Articles::all();
        return view('articles', ['articles' => $articles]);
    }

    public function tambah(){
        return view('articles_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'id' => 'required',
    		'title' => 'required',
    		'content' => 'required',
    		'image' => 'required',
    		'created_at' => 'required',
    		'updated_at' => 'required'
    	]);
 
        Articles::create([
    		'id' => $request->id,
            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->image,
            'user_id' => "",
            'category_id' => "",
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
    	]);
 
    	return redirect('/articles');
    }

    public function edit($id)
    {
        $articles = Articles::find($id);
        return view('articles_edit', ['articles' => $articles]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'id' => 'required',
            'title' => 'required',
            'content' => 'required',
    		'image' => 'required',
            'user_id' => 'required',
            'category_id' => 'required',
    		'created_at' => 'required',
    		'updated_at' => 'required'
        ]);
    
        $articles = articles::find($id);
        $articles->id = $request->id;
        $articles->title = $request->title;
        $articles->content = $request->content;
        $articles->image = $request->image;
        $articles->user_id = $request->user_id;
        $articles->category_id = $request->category_id;
        $articles->created_at = $request->created_at;
        $articles->updated_at = $request->updated_at;
        $articles->save();
        return redirect('/articles');
    }

    public function delete($id)
    {
        $articles = Articles::find($id);
        $articles->delete();
        return redirect('/articles$articles');
    }
}
