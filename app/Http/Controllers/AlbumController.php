<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use \App\Models\Album; //declare this one

class AlbumController extends Controller
{
    public function index() {
        // $albums = Album::all();
        // //dump($albums);
        // $data['albums'] = $albums;
        // return View::make('album.index',$data);
        //======================================
        $albums = Album::all();
        dd($albums);
        //dd(compact($albums)); //die and dump

     }
}
