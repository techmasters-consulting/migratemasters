<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
class UserAvatarController extends Controller
{
    public function store(Request $request)
    {
        // validate the image
        $this->validate($request, [
            'avatar' => 'required|image|max:2000'
        ]);

        // get the user
        $user = auth()->user();

        // upload and resize using Intervention Image
        $filename = 'avatar-'.$user->id.'.jpg';

        Image::make($request->file('avatar'))
            ->fit(200, 200)
            ->save($filename, 80);

        // update model
        $user = auth()->user();
        $oldAvatar = $user->avatar;

        $user->update(['avatar' => $filename]);

        // delete old image
        //unlink($oldAvatar);

        return response()->json([
            'avatar' => asset($filename)
        ]);
    }

public function getit()
{


    $avatar = $this->getAuthUser ()->avatar;


    return response()->json($avatar);

//    $path = storage_path() . '/uploads/' . $filename;
//
//    if(!File::exists($path)) abort(404);
//
//    $file = File::get($path);
//    $type = File::mimeType($path);
//
//    $response = Response::make($file, 200);
//    $response->header("Content-Type", $type);
//    return $response;
}

    public function getAuthUser ()
    {
        return Auth::user();
    }
}
