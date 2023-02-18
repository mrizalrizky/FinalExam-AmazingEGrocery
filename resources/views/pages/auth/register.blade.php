@extends('layouts.auth')

@section('title', 'Register')

@section('content')
<div class="w-100 h-100 p-5 text-black">
    <h3 class="mb-3">{{ __('auth.register') }}</h3>

    <form enctype="multipart/form-data" action="{{ route('register') }}" method="POST">
    @csrf
        <div class="col-md-6 mb-3">
            <label for="first_name">{{ __('auth.first_name') }}<span class="text-danger">*</span></label>
            <input class="form-control @error('first_name') is-invalid @enderror" type="text" name="first_name" id="first_name">

            @error('first_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="last_name">{{ __('auth.last_name') }}<span class="text-danger">*</span></label>
            <input class="form-control @error('last_name') is-invalid @enderror" type="text" name="last_name" id="last_name">

            @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="email">Email<span class="text-danger">*</span></label>
            <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="password">{{ __('auth.password') }}<span class="text-danger">*</span></label>
            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="password-confirm">{{ __('auth.pass-conf') }}<span class="text-danger">*</span></label>
            <input class="form-control" type="password" name="password_confirmation" id="password_confirmation">
        </div>

        <div class="col-md-6 mb-3">
            <label for="gender">{{ __('auth.gender') }}<span class="text-danger">*</span></label>
            <br>
            <input class="@error('gender_id') is-invalid @enderror" type="radio" name="gender_id" value="1">
            <label class="me-2" for="male">{{ __('auth.male') }}</label>
            <input type="radio" name="gender_id" value="2">
            <label for="female">{{ __('auth.female') }}</label>

            @error('gender_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="role">{{ __('auth.role') }}<span class="text-danger">*</span></label>
            <br>
            <select class="form-select @error('role_id') is-invalid @enderror" name="role_id" id="role_id">
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

        <div class="col-md-6 mb-3">
            <label for="display_picture_link">{{ __('auth.displaypic') }}<span class="text-danger">*</span></label>
            <input class="form-control @error('display_picture_link') is-invalid @enderror" type="file" name="display_picture_link" id="display_picture_link">

            @error('display_picture_link')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6">
            <p>{{ __('auth.existUser') }} <a href="/login">{{ __('auth.login') }}</a></p>
        </div>

        <button class="btn btn-warning" type="submit">{{ __('auth.register') }}</button>
    </form>
</div>
@endsection
