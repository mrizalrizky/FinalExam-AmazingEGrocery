@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<div class="w-100 h-100 p-5 text-black">
    <h3 class="mb-3">{{ __('auth.login') }}</h3>
    @if (session()->has('failed'))
        <div class="w-50 alert alert-danger">
            {{ session()->get('failed') }}
        </div>
    @elseif (session()->has('success'))
        <div class="w-50 alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
    @csrf
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

        <div class="col-md-6">
            <p>{{ __('auth.newUser') }} <a href="/register">{{ __('auth.register') }}</a></p>
        </div>

        <button class="btn btn-warning" type="submit">{{ __('auth.login') }}</button>
    </form>
</div>
@endsection
