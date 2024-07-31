

@extends('layout.main')

@section('container')
    <article>
        <h1>{{ $posted["title"] }}</h1>
        <h4>By: {{ $posted["author"] }}</h4>
        <h4>{{ $posted["content"] }}</h4>
    </article>
    <a href="/blog">back</a>
@endsection