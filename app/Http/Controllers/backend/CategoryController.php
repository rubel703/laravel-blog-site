<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return view('backend.category.index',["category"=>Category::all()]);
    }




    public function create()
    {
        return view('backend.category.create');
    }



    
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required | max:30',
            'icon' => 'image',
        ], [
            'name.required' => 'Please give me a Name',
        ]);

        $category              = new Category();
        $category->name        = $request->name;
        $category->description = $request->description;
        $icon                  = $request->icon;
        if($icon)
        {
            $iconName  = 'category-icon'.time().rand().'.'.$icon->extension();
            $directory = 'category-icons/';
            $icon->move($directory, $iconName);
            $category->icon = $directory.$iconName;
        }
        $category->save();

        return back()->with('message', 'Category Added Successfully...!');
    }

    /*
        >>this function do the route edit page.
    */
    public function edit(int $id){
        $category = Category::where('id',$id)->first();
        return view('backend.category.edit',['ctg' => $category]);
    }

     /*
        >>this function do the update category.
    */
    public function update(Request $request, int $id){
        $request->validate([
            'name' => 'required | max:30',
            'icon' => 'image | mimes:jpg,png,svg',
            'description' => 'min:5 | max:100',
        ], [
            'name.required' => 'please give a name',
            'name.max' => 'name must be less than 30 charecters!',
            'icon.mimes' => 'image extension must be a jpg,svg and png',
            'description.max' =>'description must be less than 100 charecters.'

        ]);

        $category              = Category::find($id);
        $icon                  = $request->icon;
        $category->name        = $request->name;
        $category->description = $request->description;
        if($icon){
            if(file_exists($category->icon)){
                unlink($category->icon);
            }
            $iconName   = 'category-icon'.time().rand().'.'.$icon->extension();
            $directory  = 'category-icons/';
            $icon->move($directory, $iconName);
            $category->icon = $directory.$iconName;
        }
        $category->save();
        return to_route('manage.category')->with('notification', 'Category Updated successfully');;
    }


   /*
        >>this function do the delete category from databes categories table.
    */
    public function destroy(int $id)
    {
        $category = Category::find($id);
        if($category->image){
            if(file_exists($category->image)){
                unlink($category->image);
            }
        }
        $category->delete();
        return back()->with('notification', 'Category deleted successfully');
    }
}
