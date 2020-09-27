<?php

namespace App\Http\Controllers;

use App\Model\Photo;
use Illuminate\Http\Request;
use File;
use DB;
use Image;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('photo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photo.create');
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
                $path = public_path('file_box') .$separator. $request->post_id. $separator.'thumb';
                File::makeDirectory($path, $mode = 0777, true, true);
                foreach($request->file('img_url') as $file)
                {
                    $imageName = time().'_'.$file->getClientOriginalName();
                    $basePath = 'file_box'.$separator.$request->post_id;
                    $thumbPath = $basePath.$separator.'thumb'.$separator.$imageName;

                    Image::make($file)->fit(250,250)->save(public_path($thumbPath));
                    $file->move(public_path($basePath), $imageName);
                    Photo::create([
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
     * @param  \App\Model\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }

    public function list(Request $request) {
        $matchPostId = ['post_id' => $request->id];
        $modelRec = Photo::where($matchPostId)->get();

        // $model = DB::table('posts')->where('id',$request->id)
        // ->join('photos', 'post_id', '=', $request->id);
        // dd($model);
        return view('photo.list',compact('modelRec'));
    }
}
