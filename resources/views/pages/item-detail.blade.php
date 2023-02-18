@extends('layouts.app')

@section('title', 'Item Detail')

@section('content')
<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-md-6">
                <img class="card-img-top mb-5 mb-md-0" style="max-width: 50%" src="https://play-lh.googleusercontent.com/0mZfLv5FdBhNu8nB-MTAvj7_BIwOa55AfN7pOBqFiZ-GWBQlGfOZDYpoION9AdObzx75=w220-rw" alt="..." />
            </div>
            <div class="col-md-6">
                <h1 class="display-5 fw-bolder">{{ $item->item_name}}</h1>
                <div class="fs-5 mb-5">
                    <span>Rp {{ number_format($item->price, 0, ',', '.') }},-</span>
                </div>

                <p class="lead">{{ $item->item_desc }}</p>
                <div class="d-flex">
                    <form action="{{ route('cart.store') }}" method="POST">
                    @csrf
                        <button class="btn btn-outline-dark flex-shrink-0" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            {{ __('message.cart.add') }}
                        </button>
                        <input type="hidden" name="item_id" value="{{ $item->id }}">
                        <input type="hidden" name="price" value="{{ $item->price }}">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
