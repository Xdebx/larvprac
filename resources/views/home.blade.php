{{-- template inheritance
    inject content into body --}}
{{-- @extends('layouts.base') 

 @section('body')
 <h1>Hurray!</h1>
 <p>We have a template!</p>
 @stop --}}

{{-- =============================================== --}}

{{-- Override default content of section  --}}
 @extends('layouts.base') {{-- foldername.filename --}}

 @section('head')
 @parent
 <link rel="stylesheet" href="another.css" />
 @stop

 @section('body')
 <h1>Hurray!</h1>
 <p>We have a template!</p>
 @stop