<!doctype html>
 <html lang="en">
 <head>
 <title>Albums</title>
 </head>
 <body>
@foreach($albums as $album)
 <p>{{$album->title}}</p>
@endforeach
 </body>
 </html>