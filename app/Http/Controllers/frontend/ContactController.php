<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index(){
        $category = Category::where('status',1)->get();
        return view('frontend.contact.index',['category'=>$category]);
    }
}
