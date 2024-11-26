<?php

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/blogs', function () {
    return Blog::all()->map(function ($blog) {
        return [
            'id' => $blog->id,
            'title' => $blog->title,
            'description' => $blog->description,
            'image' => $blog->image('image', 'default'),
        ];
    });
});
