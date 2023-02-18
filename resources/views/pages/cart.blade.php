@extends('layouts.app')

@section('title', 'Cart')

@section('content')
<div class="w-100 h-100 p-5 text-dark">
    <h3>{{ __('message.cart.title') }}</h3>
    <table class="table table-borderless">
        <thead>
            <tr>
                <th scope="col">{{ __('message.cart.image') }}</th>
                <th scope="col">{{ __('message.cart.image') }}</th>
                <th scope="col">{{ __('message.cart.price') }}</th>
                <th scope="col">{{ __('message.action') }}</th>
            </tr>
        </thead>
        <tbody>
            @php
                $total = 0;
            @endphp
            @foreach ($user->items as $item)
            @php
                $total += $item->price
            @endphp
            <tr class="align-middle">
                <td class="w-25">
                    <img style="width: 30%" src="https://play-lh.googleusercontent.com/0mZfLv5FdBhNu8nB-MTAvj7_BIwOa55AfN7pOBqFiZ-GWBQlGfOZDYpoION9AdObzx75=w220-rw">
                </td>
                <td>{{ $item->item_name}}</td>
                <td>Rp {{ number_format($item->price, 0, ',', '.') }},-</td>
                <td>
                    <form action="{{ route('remove-from-cart') }}" method="POST">
                    {{ method_field('DELETE') }}
                    @csrf
                        <button class="btn btn-warning" type="submit">{{ __('message.delete') }}</button>
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="col-12 mx-3">
        <h2>{{ __('message.cart.total') }}: Rp {{ number_format($total, 0, ',', '.') }},-</h2>
        <form action="{{ route('item.destroy') }}" method="POST">
        {{ method_field('DELETE') }}
        @csrf
            <button type="submit" class="btn btn-warning">
                <a class="text-decoration-none text-dark">Check Out</a>
            </button>
        </form>
    </div>
</div>
@endsection
