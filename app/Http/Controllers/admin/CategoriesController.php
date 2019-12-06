<?php

namespace App\Http\Controllers\admin;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('is_admin');
    }
	public function index(){
		$categories=Category::get();
//	    dd($products);
//	    $i=0;
		return view('admin.categories.index',compact('categories'));
	}
	public function create()
	{
		return view('admin.categories.create');

	}//end of create

	public function store(Request $request)
	{

		$category=new Category();
		$category->name=$request->name;
		$category->user_id=1;
		$category->save();
		return redirect()->route('admin.category.index');
	}//end of store

	public function edit(Category $category)
	{
		return view('admin.categories.edit', compact('category'));

	}//end of edit

	public function update(Request $request, Category $category)
	{
		$category->name=$request->name;
        $category->user_id=1;
		$category->save();
		return redirect()->route('admin.category.index');

	}//end of update

	public function destroy(Category $category)
	{
		$category->delete();
		return redirect()->route('admin.category.index');

	}//end of destroy
	public function show(Category $category)
	{
		return view('admin.categories.show', compact('category'));

	}
}
