@extends('layouts.app')

@section('title', 'Transaction Success')

@section('content')
@if (session()->has('success'))
<div class="d-flex w-100 alert alert-success justify-content-center align-items-center">
    {{ session()->get('success') }}
</div>
@endif
<div class="d-flex justify-content-center align-items-center p-5">
    <div style="width: 400px; height: 400px;" class="row d-flex border border-5 border-warning my-5 text-center rounded-circle justify-content-center align-items-center">
        <h3>{{ __('message.success') }}</h3>
        <h6>{{ __('message.Checkout Success') }}</h6>
        <a href="{{ route('home') }}">{{ __('message.back') }}</a>
    </div>
</div>
@endsection
