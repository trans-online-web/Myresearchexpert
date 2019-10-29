<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use App\BlogImages;
use App\Category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        $parent = array();

        foreach ($blogs as $blog) {
            $id = $blog['id'];
            $title = $blog['title'];
            $status = $blog['status'];
            $content = $blog['content'];
            $image = BlogImages::where('blog_id', $id)->value('path');
            $category = Category::where('id', $blog['category'])->value('name');
            $date = $blog['created_at'];
//            $title = $blog['title'];

            $child = array([
                'id' => $id,
                'title' => $title,
                'status' => $status,
                'content' => $content,
                'category' => $category,
                'date' => $date,
                'image' => substr($image, 7)

            ]);

            array_push($parent, $child);

        }

        return ['parent' => $parent];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'status' => 'required',
            'bcontent' => 'required',
            'category' => 'required',
            'image' => 'required'
        ]);

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->status = $request->status;
        $blog->content = $request->bcontent;
        $blog->category = $request->category;
        $blog->image = $request->image;
        $blog->save();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $details = Blog::where('id', $id)->first();
        $image = BlogImages::where('blog_id', $id)->value('path');
        $path = substr($image, 7);

        return ['details' => $details, 'path' => $path];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
