@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="w-100 h-100 p-5 text-black">
    <h3 class="mb-3">{{ __('message.profile') }}</h3>

    <form enctype="multipart/form-data" action="{{ route('profile.save') }}" method="POST">
    {{ method_field('PUT') }}
    @csrf
        <div class="col-md-6 mb-3">
            <img class="w-25" src="{{ Storage::url(auth()->user()->display_picture_link) }}" alt="">
        </div>

        <div class="col-md-6 mb-3">
            <label for="first_name">{{ __('auth.first_name') }}<span class="text-danger">*</span></label>
            <input class="form-control @error('first_name') is-invalid @enderror" type="text" value="{{ auth()->user()->first_name }}" name="first_name" id="first_name">
        </div>

        <div class="col-md-6 mb-3">
            <label for="last_name">{{ __('auth.last_name') }}<span class="text-danger">*</span></label>
            <input class="form-control @error('last_name') is-invalid @enderror" type="text" value="{{ auth()->user()->last_name }}"name="last_name" id="last_name">

            @error('last_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="email">Email<span class="text-danger">*</span></label>
            <input class="form-control @error('email') is-invalid @enderror" type="email" value="{{ auth()->user()->email }}" name="email" id="email">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="password">{{ __('auth.password') }}<span class="text-danger">*</span></label>
            <input class="form-control @error('password') is-invalid @enderror" type="password" value="{{ auth()->user()->password }}" name="password" id="password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="col-md-6 mb-3">
            <label for="password-confirm">{{ __('auth.pass-conf') }}<span class="text-danger">*</span></label>
            <input class="form-control" type="password" value="{{ auth()->user()->password }}" name="password_confirmation" id="password_confirmation">
        </div>

        <div class="col-md-6 mb-3">
            <label for="gender">{{ __('auth.gender') }}<span class="text-danger">*</span></label>
            <br>
            <input class="@error('gender_id') is-invalid @enderror" type="radio" name="gender_id" @if(auth()->user()->gender_id == 1) checked @endif>
            <label class="me-2" for="male">{{ __('auth.male') }}</label>
            <input type="radio" name="gender_id" @if(auth()->user()->gender_id == 2) checked @endif>
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
            <input class="form-select" type="text" name="role_id" value="{{ auth()->user()->roles->role_name }}" disabled>
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

        <button class="btn btn-warning" type="submit">{{ __('message.save') }}</button>

    </form>
</div>
@endsection
