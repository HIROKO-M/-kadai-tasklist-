@extends('layouts.app')

@section('content')

    <h1>id = {{ $job->id }}のタスク詳細ページ</h1>
    
    <p>ステータス：{{ $job->status }}</p>
    <p>タスク：{{ $job->content}}</p>

    {!! link_to_route('tasklists.edit', 'このタスク編集', ['id' => $job->id]) !!}

    {!! Form::model($job, ['route' => ['tasklists.destroy', $job->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}


@endsection