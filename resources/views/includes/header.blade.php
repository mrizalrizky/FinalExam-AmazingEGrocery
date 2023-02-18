<header>
    <div class="text-center p-2 text-black" style="background-color: #b0ecd4">
        <h1>Amazing Grocery - 2440035091</h1>
        @if (request()->is('/') || request()->is('logout-success'))
        <a class="btn btn-warning" href="{{ route('login') }}">{{ __('auth.login')}}</a>
        <a class="btn btn-warning" href="{{ route('register') }}">{{ __('auth.register') }}</a>
        @endif
    </div>
</header>
