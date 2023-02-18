@extends('layouts.app')

@section('title', 'Admin')

@section('content')
<div class="w-100 h-100 p-5 text-dark">
    <h3>{{ __('message.admin.title') }}</h3>
    <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">{{ __('message.account') }}</th>
                <th scope="col">{{ __('message.action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="align-middle">
                <td>{{ $user->first_name }} {{ $user->last_name}} - {{ $user->roles->role_name }}</td>
                <form action="{{ route('user.destroy') }}" method="POST">
                {{ method_field('DELETE') }}
                @csrf
                <td>
                    <a href="admin/update-role/{{ $user->id }}" class="me-3">Update Role</a>
                    <input type="hidden" name="account_id" value="{{ $user->id }}">
                    <button class="btn text-primary text-decoration-underline" type="submit">{{ __('message.delete') }}</button>
                </td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
