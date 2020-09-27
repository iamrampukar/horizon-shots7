<?php

namespace App\Http\Controllers;

use App\Model\Photo;
use Illuminate\Http\Request;
use File;

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
                $path = public_path('file_box') .DIRECTORY_SEPARATOR. $request->post_id;
                File::makeDirectory($path, $mode = 0777, true, true);

                foreach($request->file('img_url') as $file)
                {
                    $imageName = time().'.'.$file->getClientOriginalName();
                    $file->move(public_path('file_box/'.$request->post_id), $imageName);
                    Photo::create([
                        'post_id' => $request->post_id,
                        'img_url' => $imageName
                    ]);
                }
            } catch (Throwable $e) {
                echo "<pre>";
                print_r($e->getMessage());
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
}
