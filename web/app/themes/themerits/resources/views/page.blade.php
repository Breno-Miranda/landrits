@extends('layouts.app')

@section('content')
@include('partials.sectionone') 

<!-- <img src="@asset('images/example.jpg')"> -->
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
  
@endsection