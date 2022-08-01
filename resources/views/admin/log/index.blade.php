@extends('layouts.main')

@section('content')

    @include('layouts.flash_message')

    <h3>List Log Entries</h3>

    {{ $logs->links() }}

    <table class="table table-success table-striped">
        <thead class="thead-light">
        <tr>
            <th scope="col">Timestamp</th>
            <th scope="col">User</th>
            <th scope="col">Title</th>
        </tr>
        </thead>
        <tbody>
        @foreach($logs as $log)
            <tr>
                <td>{{ $log->created_at }}</td>
                <td>{{ $log->user_id ? $log->user->full_name : 'n/a' }}</td>
                <td><a href="/admin/logs/{{ $log->id }}">{{ $log->title }}</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $logs->links() }}

@endsection
