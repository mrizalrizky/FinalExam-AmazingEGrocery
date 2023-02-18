@extends('layouts.auth')

@section('title', 'Logout')

@section('content')
<div class="d-flex justify-content-center">
    <div style="width: 400px; height: 400px;" class="border border-5 border-warning my-5 text-center d-flex rounded-circle justify-content-center align-items-center">
        <h3>Log Out {{ __('message.success') }}</h3>
    </div>
</div>
@endsection
