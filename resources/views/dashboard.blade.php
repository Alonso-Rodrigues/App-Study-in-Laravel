@extends('home')

@section('title', 'Dashboard')

@section('content')
    <section class="dashboard-container">
        <section class="dashboard-content">
            @if(session('msg'))
            <p id="msg">{{session('msg')}}</p>
            @endif
            <h1 id="dashboard-title">My Events</h1>
            <section class="dashboard-content-table">
                @if(count($events ?? []) > 0)
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Participants</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <a class="btn-dashboard-title" href="/events/{{ $event->id }}">
                                            {{ $event->title }}
                                        </a>
                                    </td>
                                    <td>{{ count($event->users) }}</td>
                                    <td class="test">
                                        <div class="btn-dashboard-edit">
                                            <a href="/events/edit/{{ $event->id }}">EDIT</a> 
                                        </div>      
                                        <form action="/events/delete/{{ $event->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-dashboard-delete">
                                                DELETE
                                            </button>
                                        </form> 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>        
                    @else
                    <p id="create-one">You don't have any events yet. 
                        <a href="/events/create">Let's create one!</a>
                    </p>
                @endif
            </section>
            <h1 id="dashboard-title">Events I'm attending</h1>
            <section class="dashboard-my-events">
                @if(count($eventsAsParticipant) > 0)
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Participants</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($eventsAsParticipant as $event)
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>
                                        <a class="btn-dashboard-title" href="/events/{{ $event->id }}">
                                            {{ $event->title }}
                                        </a>
                                    </td>
                                    <td>{{ count($event->users) }}</td>
                                    <td>
                                        <form action="/events/leave/{{ $event->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-dashboard-delete">
                                                LEAVE
                                            </button>
                                        </form> 
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table> 
                    @else
                    <p class="dashboard-participate">
                        You are not yet participating in any event
                        <a href="/">See all events</a>
                    </p>
                @endif
            </section>
        </section>
    </section>
@endsection

