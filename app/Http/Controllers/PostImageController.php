<?php

namespace App\Http\Controllers;

use App\Model\PostImage;
use Illuminate\Http\Request;
use File;
use DB;
use Image;

class PostImageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post_image.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post_image.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'img_url' => 'required',
            'img_url.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        if($request->hasfile('img_url'))
        {
            try {
                $separator = DIRECTORY_SEPARATOR;
                $path = public_path('file_box') .$separator.'post'. $separator.$request->post_id. $separator.'thumb';
                File::makeDirectory($path, $mode = 0777, true, true);
                foreach($request->file('img_url') as $file)
                {
                    $imageName = time().'_'.$file->getClientOriginalName();
                    $basePath = 'file_box'.$separator.'post'.$separator.$request->post_id;
                    $thumbPath = $basePath.$separator.'thumb'.$separator.$imageName;

                    // Image::make($file)->fit(250,250)->save(public_path($thumbPath));
                    Image::make($file)->resize(50, null, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save(public_path($thumbPath));

                    $file->move(public_path($basePath), $imageName);
                    PostImage::create([
                        'post_id' => $request->post_id,
                        'img_url' => $imageName
                    ]);
                }
            } catch (Throwable $e) {
                dd($e->getMessage());
            }
        }
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\PostImage  $postImage
     * @return \Illuminate\Http\Response
     */
    public function show(PostImage $postImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\PostImage  $postImage
     * @return \Illuminate\Http\Response
     */
    public function edit(PostImage $postImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\PostImage  $postImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostImage $postImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\PostImage  $postImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostImage $postImage)
    {
        $separator = DIRECTORY_SEPARATOR;
        $basePath = 'file_box'.$separator.'post'.$separator.$postImage->post_id;
        $thumbPath = $basePath.$separator.'thumb'.$separator.$postImage->img_url;
        $filePath = public_path($basePath.$separator.$postImage->img_url);
        if (File::exists($filePath)){
            @unlink($thumbPath);
            @unlink($filePath);
        }
        $postImage->delete();
        return back()->withInput();
    }

    public function list(Request $request) {
        $matchPostId = ['post_id' => $request->id];
        $modelRec = PostImage::where($matchPostId)->get();
        return view('post_image.list',compact('modelRec'));
    }

    public function delete($id) {
        $separator = DIRECTORY_SEPARATOR;
        $basePath = 'file_box'.$separator.'post'.$separator.$id;
        File::deleteDirectory(public_path($basePath));
        $modelPost = PostImage::find($id);
        $modelPost->delete();
        
        $modelPostImage=PostImage::where("post_id","=",$id);
        $modelPostImage->delete();
        return redirect()->route('post.index');
    }
}
