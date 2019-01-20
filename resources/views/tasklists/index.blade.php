@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>
    
    @if(count($jobs) > 0)
        <ul>
            @foreach($jobs as $job)
               <li>{!! link_to_route ('tasklists.show', $job->id, ['id' => $job->id]) !!} : {{ $job->content }}</li>
            @endforeach
        </ul>
    @endif
    
     {!! link_to_route('tasklists.create', '新規タスク登録') !!}


@endsection


