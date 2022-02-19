 {{-- option1 --}}
 {{-- generated na value --}}
{{-- <form action="{{ url('/sample2') }}" method="POST"> --}}
{{-- option1 --}}
 {{-- {{ csrf_field() }} --}} {{-- requirement of laravel to generate --}}
{{-- value of csrf_field generated example = "2jOpZBcqoQiYmyzujMw1IbCR8C7eRZJzHPluWZSM" --}}


{{-- option2 --}}
 {{-- @csrf  --}}

 {{-- <input type="hidden" name="foo" value="bar" />
 <input type="hidden" name="baz" value="boo" /> 
 <input type="submit" value="Send" />

 </form>  --}}

{{-- ========================================================== --}}

{{-- option2 --}}
{{-- inputting value --}}
 {{-- <form action="{{ url('/sample2') }}" method="POST"> --}}

{{-- option1 --}}
 {{-- {{ csrf_field() }}  --}}

{{-- option2 --}}
 {{-- @csrf  --}}

 {{-- <input type="text" name="name"/>
 <input type="text" name="address"/>

 <input type="submit" value="Send" />

 </form>  --}}

{{-- ================================================== --}}
{{-- File upload form. --}}

<form action="{{ url('handle-form') }}"
 method="POST"
 enctype="multipart/form-data">

 {{ csrf_field() }}

 <input type="file" name="book" />
<input type="submit">
</form>

 
