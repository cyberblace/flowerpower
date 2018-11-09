<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ route("home") }}">Flowerpower</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("home") }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("products") }}">Producten</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("cart") }}">Winkelwagen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("orders") }}">Mijn orders</a>
                </li>
                @if(Auth::check())
                    <li class="nav-item">
                        <form action="{{ route("logout") }}" method="post">
                            {{ csrf_field() }}
                            <a href="#" onclick="$(this).closest('form').submit(); return false;" class="nav-link">
                                Logout
                            </a>
                        </form>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>