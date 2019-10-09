<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use App\BlogImages;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Blog::latest()->paginate(5);
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
        $blog->save();

        $blog_id = $blog->id;

//        $file[] = $request->image;

        if ($request->image){
            $uploadedFiles = $request->image;
            foreach ($uploadedFiles as $file){
                $filename = $file->store('uploads');
                $blog_image = new BlogImages();
                $blog_image->path = $filename;
                $blog_image->blog_id = $blog_id;
                $blog_image->save();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
