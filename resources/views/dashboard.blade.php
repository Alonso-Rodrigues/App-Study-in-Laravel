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
                                        <a href="/events/{{ $event->id }}">
                                            {{ $event->title }}
                                        </a>
                                    </td>
                                    <td>0</td>
                                    <td>
                                        <button>
                                            <a href="#">Edit</a>
                                        </button>    
                                        <form action="/events/{{ $event->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button>Delete</button>
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
        </section>
    </section>
@endsection
                   
