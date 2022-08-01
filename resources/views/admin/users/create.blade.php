@extends('layouts.main')

@section('content')

    @include('layouts.flash_message')

    <div class="main d-flex justify-content-center algin-items-center">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="m-card d-flex justify-content-center align-items-center">
                <div class="m-card-body py-5 px-2">

                    <h3>Create a new user</h3>

                    <form method="post" action="/admin/users">
                        @csrf()

                        <div class="mb-3">
                            <label class="form-label" for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control"
                                   value="{{ old('name') }}"
                                   {{ $errors->has('name') ? ' autofocus' : '' }} required>
                            @if ($errors->has('name'))
                                <div class="alert alert-warning">{{ $errors->first('name') }}</div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="email">Email:</label>
                            <input type="email" id="email" name="email" class="form-control"
                                   value="{{ old('email') }}"
                                   placeholder="e.g. fred@example.com"
                                   {{ $errors->has('email') ? ' autofocus' : '' }} required>
                            @if ($errors->has('email'))
                                <div class="alert alert-warning">{{ $errors->first('email') }}</div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="username">Username:</label>
                            <input type="text" id="username" name="username" class="form-control"
                                   value="{{ old('username') }}"
                                   {{ $errors->has('username') ? ' autofocus' : '' }} required>
                            @if ($errors->has('username'))
                                <div class="alert alert-warning">{{ $errors->first('username') }}</div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password">Password:</label>
                            <input type="password" id="password" name="password"
                                   class="form-control" {{ $errors->has('password') ? ' autofocus' : '' }}>
                            @if ($errors->has('password'))
                                <div class="alert alert-warning">{{ $errors->first('password') }}</div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="password_confirmation">Confirm:</label>
                            <input type="password" id="password_confirmation" name="password_confirmation"
                                   class="form-control"
                                    {{ $errors->has('password_confirmation') ? ' autofocus' : '' }}>
                            <input type="checkbox"
                                   onchange="document.getElementById('password').type = this.checked ? 'text' : 'password';document.getElementById('password_confirmation').type = this.checked ? 'text' : 'password'">
                            Show password
                            @if ($errors->has('password_confirmation'))
                                <div class="alert alert-warning">{{ $errors->first('password_confirmation') }}</div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="school_id">School:</label>
                            <select id="school_id" name="school_id" class="form-control"
                                    {{ $errors->has('school_id') ? ' autofocus' : '' }}>
                                <option value="">Select School</option>
                                @foreach($schools as $school)
                                    <option value="{{ $school->id }}"{{ $school->id == old('school_id') ? ' selected' : '' }}>{{ $school->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('school_id'))
                                <div class="alert alert-warning">Please select a school</div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="roles">Roles:</label>
                            <select id="roles" name="roles[]" class="form-control"
                                    {{ $errors->has('roles') ? ' autofocus' : '' }} multiple>
                                <option value="">Select roles</option>
                                @foreach($roles as $role)
                                    <option value="{{ $role->name }}"{{ in_array($role->name, old('roles', [])) ? ' selected' : '' }}>{{ $role->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('roles'))
                                <div class="alert alert-warning">Please select a role</div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="admin_password">Your Password:</label>
                            <input type="password" id="admin_password" name="admin_password"
                                   class="form-control"
                                   {{ $errors->has('admin_password') ? ' autofocus' : '' }} required>
                            @if ($errors->has('admin_password'))
                                <div class="alert alert-warning">{{ $errors->first('admin_password') }}</div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="submit">&nbsp;</label>
                            <input type="submit" id="submit" name="submit" value="Create">
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#roles").select2([]);
        });
    </script>

@endsection
