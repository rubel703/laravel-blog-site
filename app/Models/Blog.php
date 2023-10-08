<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Blog extends Model
{
    use HasFactory;

    public static $blog, $image, $imageName, $imgUrl, $directory, $slug;
    
    public static function saveBlog($request)
    {
        self::$blog = new Blog();
        self::$blog->title = $request->title;
        self::$blog->slug = $request->slug;
        self::$blog->category_id = $request->category_id;
        self::$blog->description = $request->description;
        self::$blog->image = self::getImage($request);
        self::$blog->save();
    }
    private static function getImage($request)
    {
        self::$image = $request->file('image');
        self::$imageName = rand() . '.' . self::$image->getClientOriginalExtension();
        self::$directory = 'blog-image/';
        self::$imgUrl = self::$directory . self::$imageName;
        self::$image->move(self::$directory, self::$imageName);
        return self::$imgUrl;
        
    }
    public static function makeSlug($request)
    {
        if ($request) {
            self::$slug = Str::slug($request->slug, '-');
        }
        return self::$slug;
    }
    public function category(){
        return $this->belongsTo(Category::class); #one to one database table connection connection.
    }
}
