@extends('layouts.app')

@section('content')

    <h1>id: {{ $job->id }}のタスク編集ページ</h1>
    
    {!! Form::model($job, [ 'route' => [ 'tasklists.update', $job->id ], 'method' => 'put' ]) !!}

        {!! Form::label('status', 'ステータス：') !!}
        {!! Form::text('status') !!}
        
        {!! Form::label('content', 'タスク：') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('更新') !!}
    
    {!! Form::close() !!}
        
@endsection