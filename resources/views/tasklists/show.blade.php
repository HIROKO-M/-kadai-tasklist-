@extends('layouts.app')

@section('content')

    <h1>id = {{ $job->id }}のタスク詳細ページ</h1>
    
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $job->id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $job->status }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $job->content}}</td>
        </tr>
    </table>
    

    {!! link_to_route('tasklists.edit', 'このタスク編集', ['id' => $job->id], ['class' => 'btn btn-default']) !!}

    {!! Form::model($job, ['route' => ['tasklists.destroy', $job->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}


@endsection