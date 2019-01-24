@extends('layouts.app')

@section('content')
            <ul class="nav nav-tabs nav-justified">
                <li role="presentation" class="{{ Request::is('users/' . $user->id) ? 'active' : '' }}">
                    <a href="{{ route('users.show', ['id' => $user->id]) }}">Your Tasks 
                    <span class="badge">{{ $count_tasklists }}</span></a></li>
                
            </ul>
            @if (count($tasklists) > 0)
                    @include('tasklists.tasklists', ['tasklists' => $tasklists])
            @endif
@endsection