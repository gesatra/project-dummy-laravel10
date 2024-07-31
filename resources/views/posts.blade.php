



@extends('layout.main')

@section('container')
    
        @foreach($post as $posts)
        <article class="mb-5">
            <h1>
                <a href="/post/{{ $posts['slug'] }}">{{ $posts["title"] }}</a>
            </h1>
            <h4>By: {{ $posts["author"] }}</h4>
            <h4>{{ $posts["content"] }}</h4>
        </article>
        @endforeach
    
@endsection

