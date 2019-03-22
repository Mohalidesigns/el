<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Commercial;

class CommercialController extends Controller
{
    //
    public function index()
{
  $images = Commercial::get();
  return view('cproject',compact('images'));
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
    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
    $request->image->move(public_path('commercial'), $input['image']);

    $input['title'] = $request->title;
    Commercial::create($input);

  return back()
    ->with('success','Image Uploaded successfully.');
}

public function display()
{
  $commercials = Commercial::all();
  return view('commercialproject')->with('commercials', $commercials);


}



/**
 * Remove Image function
 *
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
  Commercial::find($id)->delete();
  return back()
    ->with('success','Image removed successfully.');
}
}
