<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use Image;


class ImageController extends Controller
{

    public function hhh()
    {
        return Response::download('/awais/a.png', 'a.png');
    }

    //The file "/public/download/info.pdf"

    public function donwloading()
    {
         $file= public_path(). "/images/bb.jpeg";   
        return response()->download($file);
     }


	/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImage()
    {
    	return view('resizeImage');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImagePost(Request $request)
    {
	    $this->validate($request, [
	    	'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);


        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
     
   
        $destinationPath = public_path('/thumbnail');
        $img = Image::make($image->getRealPath());
        $img->resize(300, 300, function ($constraint) {
		    $constraint->aspectRatio();
		})->save($destinationPath.'/'.$input['imagename']);


        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);


        #$this->postImage->add($input);


        return back()
        	->with('success','Image Upload successful')
        	->with('imageName',$input['imagename']);
    }

    public function show(){
        return Storage::download('/home/farooq/image/public/thumbnail','1567421527.png');
    }


}