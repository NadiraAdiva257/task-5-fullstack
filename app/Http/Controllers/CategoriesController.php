<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function index(){
        $categories = Categories::all();
        return view('categories', ['categories' => $categories]);
    }

    public function tambah(){
        return view('categories_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request,[
    		'id' => 'required',
    		'name' => 'required',
    		'created_at' => 'required',
    		'updated_at' => 'required'
    	]);
 
        Categories::create([
    		'id' => $request->id,
            'name' => $request->name,
            'user_id' => "",
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
    	]);
 
    	return redirect('/categories');
    }

    public function edit($id)
    {
        $categories = Categories::find($id);
        return view('categories_edit', ['categories' => $categories]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'id' => 'required',
            'name' => 'required',
            'user_id' => 'required'
        ]);
    
        $categories = categories::find($id);
        $categories->id = $request->id;
        $categories->name = $request->name;
        $categories->user_id = $request->user_id;
        $categories->created_at = $request->created_at;
        $categories->updated_at = $request->updated_at;
        $categories->save();
        return redirect('/categories');
    }

    public function delete($id)
    {
        $categories = Categories::find($id);
        $categories->delete();
        return redirect('/categories');
    }
}
