@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="card-deck p-5">
    @foreach ($items as $item)
    <div class="card m-1 mt-0" style="display:inline-block">
        <a href="/item/{{ $item->id }}">
            <img class="card-img-top" src="https://play-lh.googleusercontent.com/0mZfLv5FdBhNu8nB-MTAvj7_BIwOa55AfN7pOBqFiZ-GWBQlGfOZDYpoION9AdObzx75=w220-rw" alt="Card image cap">
        </a>
        <div class="card-body">
            <p class="card-text">{{ $item->item_name}}</p>
            <p class="card-text"><a href="/item/{{ $item->id }}">Detail</a></p>
        </div>
    </div>
    @endforeach
    <div class="d-flex justify-content-center mt-3">
        {{ $items->withQueryString()->links() }}
    </div>
</div>
@endsection
