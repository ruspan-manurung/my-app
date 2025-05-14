@extends('layouts.app')

@section('title', 'Dashboard')

@section('contents')
    <h1 class="mb-4">Dashboard</h1>

    <!-- Profile Data -->
    <div class="card mb-4">
        <div class="card-header">Your Profile</div>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item"><strong>Name:</strong> {{ auth()->user()->name }}</li>
                <li class="list-group-item"><strong>Email:</strong> {{ auth()->user()->email }}</li>
                <li class="list-group-item"><strong>Phone:</strong> {{ auth()->user()->phone }}</li>
                <li class="list-group-item"><strong>Address:</strong> {{ auth()->user()->address }}</li>
            </ul>
        </div>
    </div>

    <!-- Product / Meeting Data -->
    <div class="card">
        <div class="card-header">Meetings</div>
        <div class="card-body">
            @if($meetings->isEmpty())
                <p>No meetings found.</p>
            @else
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Location</th>
                            <th>Title</th>
                            <th>Time</th>
                            <th>Organized By</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($meetings as $meeting)
                            <tr>
                                <td>{{ $meeting->meeting_location }}</td>
                                <td>{{ $meeting->meeting_title }}</td>
                                <td>{{ $meeting->meeting_time }}</td>
                                <td>{{ $meeting->organized_by }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
