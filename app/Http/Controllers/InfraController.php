<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infrastructure;

class InfraController extends Controller
{
    //
    public function index()
{
  $images = Infrastructure::get();
  return view('iproject',compact('images'));
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
    $request->image->move(public_path('infra'), $input['image']);

    $input['title'] = $request->title;
    Infrastructure::create($input);

  return back()
    ->with('success','Image Uploaded successfully.');
}

public function display()
{
  $infrastructures = Infrastructure::all();
  return view('infrastructure')->with('infrastructures', $infrastructures);


}



/**
 * Remove Image function
 *
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
  Infrastructure::find($id)->delete();
  return back()
    ->with('success','Image removed successfully.');
}
}
