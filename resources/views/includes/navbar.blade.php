<nav class="bg-warning">
    <ul class="nav d-flex justify-content-center">
        <li class="nav-item"><a class="nav-link {{ (request()->is('home') ? 'text-decoration-underline' : '') }}" href="{{ route('home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link {{ (request()->is('cart') ? 'text-decoration-underline' : '') }}" href="{{ route('cart') }}">{{ __('message.cart.title') }}</a></li>
        <li class="nav-item"><a class="nav-link {{ (request()->is('profile') ? 'text-decoration-underline' : '') }}" href="{{ route('profile') }}">{{ __('message.profile') }}</a></li>
        @if (auth()->user()->role_id == 1)
        <li class="nav-item"><a class="nav-link {{ (request()->is('admin') ? 'text-decoration-underline' : '') }}" href="{{ route('admin') }}">{{ __('message.admin.title') }}</a></li>
        @endif
        <form action="{{ route('logout') }}" method="POST">
        @csrf
            <button class="btn btn-warning" type="submit">Logout</button>
        </form>
    </ul>
</nav>
