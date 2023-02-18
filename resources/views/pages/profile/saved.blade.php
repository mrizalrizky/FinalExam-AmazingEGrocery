@extends('layouts.app')

@section('title', 'Profile Saved')

@section('content')
<div class="d-flex justify-content-center align-items-center p-5">
    <div style="width: 400px; height: 400px;" class="row d-flex border border-5 border-warning my-5 text-center rounded-circle justify-content-center align-items-center">
        <h3>{{ __('message.saved') }}</h3>
        <a href="{{ route('home') }}">{{ __('message.back') }}</a>
    </div>
</div>
@endsection
