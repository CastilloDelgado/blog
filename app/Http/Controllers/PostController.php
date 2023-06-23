<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function store(Request $request){
        try {
            $request->validate([
                'title' => 'required|string|max:255',
                'location' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'country' => 'required|string|max:255',
                'state' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'concertDate' => 'required',
                'band' => 'required|string|max:255'
            ]);

            $file = $request->file('image');
    
            $result = Storage::put('', $file);
            $imageUrl = Storage::temporaryUrl("Svct7YO0VxxFliyGe2jx4kd22RFZiNS8Xm6tXyO1.png", now()->addMinutes(5));
            return($imageUrl);
        } catch(Exception $e){
            return($e);
        }
    }
}
