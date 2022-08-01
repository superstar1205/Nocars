@extends('layouts.main')

@section('content')

    @include('layouts.flash_message')

    <h3>View a log entry</h3>

    <form method="post" action="#">

        <fieldset>

            <legend>Log Details</legend>

            <div class="mb-3">
                <label class="form-label" for="title">Title :</label>
                <input type="text" id="title" name="title" class="form-control" readonly value="{{ $log->title }}">
            </div>

            <div class="mb-3">
                <label class="form-label" for="owner">Owner :</label>
                <input type="text" id="owner" name="owner" class="form-control" readonly
                       value="{{ $log->userid ? $log->user->full_name : 'n/a' }}">
            </div>

            <div class="mb-3">
                <label class="form-label" for="created_at">Timestamp :</label>
                <input type="text" id="created_at" name="created_at" class="form-control" readonly
                       value="{{ $log->created_at }}">
            </div>

            <div class="mb-3">
                <label class="form-label" for="content">Content :</label>
                <textarea class="form-control" rows="10">{{ $log->content }}</textarea>
            </div>

        </fieldset>

    </form>

@endsection
