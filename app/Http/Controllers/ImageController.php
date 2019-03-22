<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    //
    public function index()
{
  $images = Image::get();
  return view('image',compact('images'));
}


/**
 * Upload image function
 *
 * @return \Illuminate\Http\Response
 */
public function upload(Request $request)
{
  $this->validate($request, [
    'title' => 'required',
    'imageone' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    'imagetwo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $input['imageone'] = time().'.'.$request->imageone->getClientOriginalExtension();
    $request->imageone->move(public_path('imagesindex'), $input['imageone']);

    $input['imagetwo'] = time().'.'.$request->imagetwo->getClientOriginalExtension();
    $request->imagetwo->move(public_path('imagesindex'), $input['imagetwo']);

    $input['title'] = $request->title;
    Image::create($input);

  return back()
    ->with('success','Image Uploaded successfully.');
}

public function display()
{
  $image = Image::all();
  return view('welcome')->with('image', $image);
}



/**
 * Remove Image function
 *
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
  Image::find($id)->delete();
  return back()
    ->with('success','Image removed successfully.');
}
}
