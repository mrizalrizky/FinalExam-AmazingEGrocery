@extends('layouts.app')

@section('title', 'Update Role')

@section('content')
<div class="w-100 h-100 p-5 text-black">
    <h3 class="mb-3">Update Role</h3>
    <h6 class="mb-3">{{ $user->first_name }} {{ $user->last_name }}</h6>

    <form action="{{ $user->id }}" method="POST">
    {{ method_field('PUT') }}
    @csrf
        <div class="col-md-6 mb-3">
            <label for="role">Role<span class="text-danger">*</span></label>
            <br>
            <select class="form-control @error('role_id') is-invalid @enderror" name="role_id" id="role_id">
                <option class="text-secondary" value="">-- Select Your Role --</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>

            @error('role_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <button class="btn btn-warning" type="submit">Submit</button>
    </form>
</div>
@endsection
