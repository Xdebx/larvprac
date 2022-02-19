{{--  <h1>Dear Lord Otwell</h1>
 <p>I hereby challenge you to a duel for the honour of Laravel.</p> --}}
 
{{-- option1 --}}
{{-- {{$sqrl}} --}}

{{-- option2 --}}
{{-- <?php echo $sqrl; ?> --}}

{{-- <p> {{ date('d/m/y')}}</p> --}}

<!-- literal na eto yung lalabas sa page -->
 {{-- <p>{{ '<script>alert("CHUNKY BACON!");</script>'}}</p> --}}


<!-- Message na lalabas parang confirmation popup -->
{{-- <p>{!! '<script>alert("CHUNKY BACON!");</script>'!!}</p> --}}


{{--  @if ($something == 'Red Panda')
<p>Something is red, white, and brown!</p>
@elseif ($something == 'Giant Panda')
<p>Something is black and white!</p>
@else
<p>Something could be a squirrel.</p>
@endif --}}


{{-- Foreach --}}
{{-- @foreach ($manyThings as $thing)
 <p>{{ $thing }}</p>
@endforeach --}}

{{-- For loop --}}
{{-- @for ($i = 0; $i < 999; $i++)
 <p>Even {{ $i }} red pandas, aren't enough!</p>
@endfor --}}

{{-- while loop --}}
{{-- @while (isPretty($keiraKnightley))
<p>This loop probably won't ever end.</p>
@endwhile --}}

 <!doctype html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <title>Narwhals</title>
 </head>
 <body>
 @include('header')
 <p>Why, the Narhwal surely bacons at midnight, my good sir!</p>
 @include('footer')
 </body>
 </html>