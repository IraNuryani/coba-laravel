@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>
     <!-- <h5>{{ $post["author"] }}</h5> -->

   {!! $post->body !!}
        
   

    <a href="/posts">Back to blog></a>
@endsection
