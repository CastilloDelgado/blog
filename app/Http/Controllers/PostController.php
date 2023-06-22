<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function store(Request $request)
    {
        if($request->hasFile('image')){
            try {
                $file = $request->file('image');

                $result = Storage::put('', $file);
                $imageUrl = Storage::temporaryUrl("Svct7YO0VxxFliyGe2jx4kd22RFZiNS8Xm6tXyO1.png", now()->addMinutes(5));
                return($imageUrl);
            } catch(Exception $e){
                return ($e);
            }
        } else{
            return("Not working yet");
        }
    }
}
