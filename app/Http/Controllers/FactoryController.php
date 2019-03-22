<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factory;

class FactoryController extends Controller
{
    //
    public function index()
{
  $images = Factory::get();
  return view('fproject',compact('images'));
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
    $request->image->move(public_path('factory'), $input['image']);

    $input['title'] = $request->title;
    Factory::create($input);

  return back()
    ->with('success','Image Uploaded successfully.');
}

public function display()
{
  $factories = Factory::all();
  return view('factories')->with('factories', $factories);


}



/**
 * Remove Image function
 *
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
  Factory::find($id)->delete();
  return back()
    ->with('success','Image removed successfully.');
}
}
