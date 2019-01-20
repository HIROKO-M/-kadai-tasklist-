@extends('layouts.app')

@section('content')

    <h1>id = {{ $job->id }}のタスク詳細ページ</h1>
    
    <p>{{ $job->content}}</p>


@endsection