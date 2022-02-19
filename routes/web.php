<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Models;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//==================================================
//Saving a game instance.

 //   Route::get('/db', function() {
 //     $game = new \App\Models\Game;
 //     $game->name = 'Mobile Legends';
 //     $game->description = 'Pang Jejemon';
 //     $game->save();
 // });

//==================================================

//Reading Existing Models

 //   Route::get('/db', function() {
 //    $game = \App\Models\Game::find(3);
 //    //dump($game);
 //        return $game->name;
 //    // the output is depend to the ID you type
 // });

//==================================================

//Updating Existing Models

 //   Route::get('/db', function() {
 //    $game = \App\Models\Game::find(3);
 //    $game->description ='joke lang';
 //    $game->save();
 //        return $game->description;
 // });

//==================================================

//Update a model several times.

//  Route::get('/db', function() {
// $game = new \App\Models\Game;
//  $game->name = 'Assassins Creed';
//  $game->description = 'Show them what for, Altair.';
//  $game->save();

// $game = new \App\Models\Game;
//  $game->name = 'Assassins Creed 2';
//  $game->description = 'Requiescat in pace, Ezio.';
//  $game->save();

// $game = new \App\Models\Game;
//  $game->name = 'Assassins Creed 3';
//  $game->description = 'Break some faces, Connor.';
//  $game->save();
//  });

//=================================================

//Find a previously saved model by ID.
//parang ooverwrite

 // Route::get('/db', function() {
 // $game = \App\Models\Game::find(1);
 // $game->name = 'Assassins Creed 4';
 // $game->description = 'Shiver me timbers, Edward.';
 // $game->save();
 // });

//=================================================

//Deleting Existing Models

//option1
 // Route::get('/db', function() {
 // $game = \App\Models\Game::find(7);
 // $game->delete();
 // });

//option2
//Delete a model by ID.

//  Route::get('/db', function() {
// //\App\Models\Game::destroy(5);
// \App\Models\Game::destroy([3,4]);
//  });

 //=================================================

//A seeding route.

Route::get('/seed', function() {
$album = new \App\Models\Album;
 $album->title = 'Some Mad Hope';
 $album->artist = 'Matt Nathanson';
 $album->genre = 'Acoustic Rock';
 $album->year = 2007;
 $album->save();

$album = new \App\Models\Album;
 $album->title = 'Please';
 $album->artist = 'Matt Nathanson';
 $album->genre = 'Acoustic Rock';
 $album->year = 1993;
 $album->save();

$album = new \App\Models\Album;
 $album->title = 'Leaving Through The Window';
 $album->artist = 'Something Corporate';
 $album->genre = 'Piano Rock';
 $album->year = 2002;
 $album->save();

$album = new \App\Models\Album;
 $album->title = 'North';
 $album->artist = 'Something Corporate';
 $album->genre = 'Piano Rock';
 $album->year = 2002;
 $album->save();

$album = new \App\Models\Album;
 $album->title = '...Anywhere But Here';
 $album->artist = 'The Ataris';
 $album->genre = 'Punk Rock';
 $album->year = 1997;
 $album->save();

$album = new \App\Models\Album;
 $album->title = '...Is A Real Boy';
 $album->artist = 'Say Anything';
 $album->genre = 'Indie Rock';
 $album->year = 2006;
 $album->save();
 });

//================================================

//Return a model instance.

// Route::get('/db', function() {
//  return \App\Models\Album::find(1);
//  });

//================================================

//Iterate our albums.

// Route::get('/db', function() {
//     $albums = \App\Models\Album::all();
//     dump($albums);
//         foreach ($albums as $album) {     
//     echo $album->title;
//     }
//  });

//================================================

// Route::get('/db', function() {
//     $albums = \App\Models\Album::all();
//     //dump($albums);
//         foreach ($albums as $album) {
//             dump($albums);
//     echo $album->title;
//  }
//  });

//================================================

// Route::get('/db', function() {
//     $albums = \App\Models\Album::all();
//         foreach ($albums as $album) {
//     echo $album->title;
//  }
//     return \App\Models\Album::all();
//  });

//================================================

// Route::get('/db', function() {
//     $albums = \App\Models\Album::all();
//         foreach ($albums as $album) {
//     echo $album->title;
//  }
//     return \App\Models\Album::find([1, 3]);
//  });

//================================================

//First.

// Route::get('/db', function() {
//     return \App\Models\Album::first(); // one object return
//  });

//================================================

//Update.

// Route::get('/db', function() {
//  \App\Models\Album::where('artist', '=', 'Dayle Rees')
//  ->update(array('artist' => 'black pinky','genre' =>'Kpop'));
//  return \App\Models\Album::all();
//  });

//================================================

//Delete.
// Route::get('/db', function() {
//     //option1 with = sign in condition
//  //\App\Models\Album::where('artist', '=', 'black pinky')

//      //option2 without = sign in condition
//  \App\Models\Album::where('artist', 'Something Corporate')
//  ->delete();
//  return \App\Models\Album::all();
//  });

//================================================

// Route::get('/db', function() {
//      \App\Models\Album::truncate();
//  return \App\Models\Album::all();
//  });

//================================================

//Get.

// Route::get('/db', function() {
//     //option1
//  // return \App\Models\Album::where('artist', '=', 'Something Corporate')
//  // ->get();
//     //option2
//  return \App\Models\Album::where('artist', '=', 'Something Corporate')
//  ->get(['artist','title']);
//  });

//================================================

//Pluck.

// Route::get('/db', function() {
//  return \App\Models\Album::pluck('artist');
//  });

//================================================

//tosql
//output select * from `albums` where `artist` = ?

// Route::get('/db', function() {
//  return \App\Models\Album::where('artist', '=', 'Something Corporate')
//  ->toSql();
//  });

//================================================

//first

// Route::get('/db', function() {
//  return \App\Models\Album::where('artist', '=', 'Something Corporate')
//  ->first();
//  });

//================================================

//Like
//output  select * from `albums` where `title` LIKE ?

// Route::get('/db', function() {
//  return \App\Models\Album::where('title', 'LIKE', '...%')->toSql();
//  });

//================================================

//Multiple Wheres
//output select * from `albums` where `title` LIKE ? and `artist` = ?

// Route::get('/db', function() {
//  return \App\Models\Album::where('title', 'LIKE', '...%')
//  ->where('artist', '=', 'Say Anything')
//  ->toSql();
//  });

//================================================

//orwhere
//output select * from `albums` where `title` LIKE ? or `artist` = ?

// Route::get('/db', function() {
//  return \App\Models\Album::where('title', 'LIKE', '...%')
//  ->orwhere('artist', '=', 'Say Anything')
//  ->toSql();
//  });

//================================================

//output select * from `albums` where `title` LIKE ? or `artist` = ? and `genre` = ?

// Route::get('/db', function() {
//  return \App\Models\Album::where('title', 'LIKE', '...%')
//  ->orwhere('artist', '=', 'Say Anything')
//  ->where('genre','Kpop')
//  ->toSql();
//  });

//================================================

//whereRaw
//Ayaw gumana sakin gumana pag tosql

// Route::get('/db', function() {
//  return \App\Models\Album::whereRaw('artist = ? AND title LIKE ?', ['Say Anything','...%'])->get();
//  });

//================================================

//whereBetween
//Ayaw gumana sakin gumana pag tosql

// Route::get('/db', function() {
//  return \App\Models\Album::whereBetween('year', array('2000', '2010'))
//  ->get();
//  });

//================================================

//whereNested
//Ayaw gumana sakin gumana pag tosql


// Route::get('/db', function() {
//  return \App\Models\Album::whereNested(function($query)
//  {
//  $query->where('year', '>', 2000);
//  $query->where('year', '<', 2005);
//  })
//  ->get();
//  });

//================================================

//Or where Closure.
//Ayaw gumana sakin gumana pag tosql

// Route::get('/db', function() {
//  return \App\Models\Album::whereNested(function($query)
//  {
//  $query->where('year', '>', 2000);
//  $query->where('year', '<', 2005);
//  })
//  ->orWhere(function($query)
//  {
//  $query->where('year', '=', 1997);
//  })
//  ->get();
//  });

//================================================

//whereIn

// Route::get('/db', function() {
//  $values = ['Something Corporate', 'The Ataris'];
//  return \App\Models\Album::whereIn('artist', $values)->get();
//  });

//================================================

//whereNotIn

// Route::get('/db', function() {
//  $values = ['Something Corporate', 'The Ataris'];
//  return \App\Models\Album::whereNotIn('artist', $values)->get();
//  });

// Route::get('/db', function() {
//  return \App\Models\Album::whereNull('artist')->get();
//  });

//================================================

// Route::get('/db', function() {
//  return \App\Models\Album::whereNotNull('artist')->get();
//  });

//================================================

//orderBy

// Route::get('/db', function() {
//     $value = ['Something Corporate', 'The Ataris'];
//  return \App\Models\Album::where('artist','Matt Nathanson')
//  ->orderBy('year')
//  ->get();
//  });

//================================================

// Route::get('/db', function() {
//  return \App\Models\Album::where('artist', '=', 'Matt Nathanson')
//  ->orderBy('year', 'desc')
//  ->get();
// });

//================================================

// Route::get('/db', function() {
//  return \App\Models\Album::where('artist', '=', 'Matt Nathanson')
//  ->orderBy('year', 'asc')
//  ->get();
// });

//================================================

 // Route::get('/db', function() {
 // return \App\Models\Album::take(2)
 // ->get();
 // });

//================================================

 // Route::get('/db', function() {
 // return \App\Models\Album::take(2)->skip(2)
 // ->get();
 // });

//================================================

//Magic Where Queries

 // Route::get('/db', function() {
 // return \App\Models\Album::whereArtist('Something Corporate')->get();
 // });

//================================================

// Route::get('/db', function() {
//  return \App\Models\Album::whereTitle('North')->get();
//  });

//================================================

Route::get('/album','AlbumController@index');

   
















   
