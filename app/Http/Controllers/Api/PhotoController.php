<?php

namespace App\Http\Controllers\Api;

use App\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    public function index() {

        $photo = Photo::all();

        return response()->json($photo);
    }
}
