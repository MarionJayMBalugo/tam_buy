<!DOCTYPE html>
<html>

<head>
    <title>tamBUY - @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/layout.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md fixed-top">
        <div class="name">
            <a class="navbar-brand" href=""><img id="name" src="{{ URL::to('/') }}/assets/name.png"
                    alt="name"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbarText">
        </div>
        <form method="get" action="" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 btn-lg" name="product_title" type="search" placeholder="Search"
                aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0 btn-lg" type="submit">Search</button>
        </form>
        <span class="navbar-text">
        </span>
        <form class="form-inline my-2 my-lg-0">
            <a href=""><img id="cart" src="{{ URL::to('/') }}/assets/cart.png" width="50" alt="cart"></a>
        </form>
        <span class="navbar-text">
        </span>
    </nav>

    <div class="sidenav">
        <img src="./profiles/profile1.jpg" alt="profile" id="profile" width='180'>
        <a href="">Home</a>
        <a href="">Profile</a>
        <a href="">Pendings</a>
        <a href="">Paid Items</a>
        <a href="{{ route('logout') }}">Logout</a>
    </div>

    <div class="container w-90">
        @yield('content')
    </div>
</body>

</html>