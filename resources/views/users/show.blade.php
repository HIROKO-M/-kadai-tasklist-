@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
                
                <div class="panel-body">
                    <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email, 500) }}" alt="">
                </div>
            </div>
        </aside>
                
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li><a href="#">TaskLists</a></li>
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}">
                    <a href="{{ route('users.show', ['id' => $user->id]) }}">TaskLists </a>
                </li>
            </ul>
            @if (count($tasklists) > 0)
                    @include('tasklists.index', ['jobs' => $tasklists])
            @endif
        </div>
    </div>
    
@endsection