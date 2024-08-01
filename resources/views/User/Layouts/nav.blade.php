<!-- navigation -->
<div class="border-bottom pb-5">
    <div class="bg-light py-1">
        <div class="container">
            <div class="row">
                <div class="col-6 text-end d-none d-md-block">
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-light py-lg-5 pt-3 px-0 pb-0">
        <div class="container">
            <div class="row w-100 align-items-center g-3">
                <div class="col-xxl-2 col-lg-3">
                    <a class="navbar-brand d-none d-lg-block" href="{{route('home.index')}}">
                        {{-- <img src="/assets/images/logo/freshcart-logo.svg" alt="eCommerce HTML Template"> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42"
                            height="42" id="mobile">
                            <defs>
                                <linearGradient id="b" x1="1073.403" x2="1097.116" y1="516.451" y2="544.308"
                                    gradientTransform="translate(-1438.388 316.47) scale(1.34562)"
                                    gradientUnits="userSpaceOnUse" xlink:href="#a"></linearGradient>
                                <linearGradient id="a">
                                    <stop offset="0" stop-color="#16ff6a"></stop>
                                    <stop offset="1" stop-color="#0090a5"></stop>
                                </linearGradient>
                            </defs>
                            <g transform="translate(0 -1010.362)">
                                <rect width="42" height="42" y="1010.362" fill="url(#b)" rx="8.876" ry="8.876">
                                </rect>
                                <path
                                    style="line-height:normal;text-indent:0;text-align:start;text-decoration-line:none;text-decoration-style:solid;text-decoration-color:#000;text-transform:none;block-progression:tb;isolation:auto;mix-blend-mode:normal;marker:none"
                                    fill="#fff" fill-opacity=".98"
                                    d="M22 1020.362v1h.5c3.043 0 5.5 2.457 5.5 5.5v.5h1v-.5c0-3.584-2.916-6.5-6.5-6.5H22zm0 2v1h.5c1.939 0 3.5 1.561 3.5 3.5v.5h1v-.5c0-2.48-2.02-4.5-4.5-4.5H22zm0 2v1h.5c.834 0 1.5.666 1.5 1.5v.5h1v-.5c0-1.375-1.125-2.5-2.5-2.5H22zm-8.5 2a.5.5 0 0 0-.5.5v15a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-15a.5.5 0 0 0-.5-.5h-9zm.5 1h8v2.008a.5.5 0 0 0-.094-.01H14v-2zm8 2.99v8.018a.5.5 0 0 0-.094-.01H14v-8h7.906a.5.5 0 0 0 .094-.008Zm0 9v2.01h-8v-2h7.906a.5.5 0 0 0 .094-.01Z"
                                    color="#000" font-family="sans-serif" font-weight="400" overflow="visible">
                                </path>
                            </g>
                        </svg>
                        Phone store
                    </a>
                    <div class="d-flex justify-content-between w-100 d-lg-none">
                        <a class="navbar-brand" href="{{route('home.index')}}">
                            <img src="/User/assets/images/logo/phone-store.svg" alt="Phone store">
                            Phone store
                        </a>
                        <div class="d-flex align-items-center lh-1">
                            <div class="list-inline me-2">
                                @guest
                                <div style="display: flex; justify-content: space-between;">
                                    <div class="list-inline-item">
                                        <a href="{{ route('login') }}" class="text-muted">Login</a>
                                    </div>
                                    <div class="list-inline-item">
                                        <a href="{{ route('register') }}" class="text-muted">Register</a>
                                    </div>
                                </div>

                                @else
                                @if (auth()->check())
                                <div class="list-inline-item">
                                    <a href="{{route('home.wishlist')}}" class="text-muted position-relative">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-heart">
                                            <path
                                                d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                            </path>
                                        </svg>
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                            @livewire('user.count-cart-wish-list',['type'=>'wishlist'])
                                        </span>
                                    </a>
                                </div>
                                <div class="list-inline-item">
                                    <div class="dropdown">
                                        <a href="#" class="text-muted" id="dropdownUser" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownUser">
                                            <li><a class="dropdown-item"
                                                    href="{{route('home.YourInvoices')}}">Account</a>
                                            </li>
                                            <li><a class="dropdown-item" href="{{route('home.logout')}}">Logout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="list-inline-item">

                                    <a href="{{route('home.cart')}}" class="text-muted position-relative">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-shopping-bag">
                                            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                            <line x1="3" y1="6" x2="21" y2="6"></line>
                                            <path d="M16 10a4 4 0 0 1-8 0"></path>
                                        </svg>
                                        <span
                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                            @livewire('user.count-cart-wish-list',['type'=>'cart'])
                                        </span>
                                    </a>
                                </div>
                                @endif
                                @endguest
                            </div>
                            <!-- Button -->
                            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="icon-bar top-bar mt-0"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>

                        </div>
                    </div>

                </div>
                <div class="col-xxl-6 col-lg-5 d-none d-lg-block">

                    <form action="{{route('home.searchProduct')}}" method="GET" class="search-header">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control border-end-0"
                                placeholder="Search for products.." aria-label="Search for products.."
                                aria-describedby="basic-addon2">
                            <span class="input-group-text bg-transparent" id="basic-addon2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg></span>
                        </div>
                    </form>
                </div>
                <div class="col-md-2 col-xxl-1 text-end d-none d-lg-block">

                    <div class="list-inline">
                        @guest
                        <div style="display: flex; justify-content: space-between;">
                            <div class="list-inline-item">
                                <a href="{{ route('login') }}" class="text-muted">Login</a>
                            </div>
                            <div class="list-inline-item">
                                <a href="{{ route('register') }}" class="text-muted">Register</a>
                            </div>
                        </div>

                        @else
                        @if(auth()->check())
                        <div class="list-inline-item">

                            <a href="{{route('home.wishlist')}}" class="text-muted position-relative">

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-heart">
                                    <path
                                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                    </path>
                                </svg>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                    @livewire('user.count-cart-wish-list',['type'=>'wishlist'])
                                </span>
                            </a>
                        </div>
                        <div class="list-inline-item">
                            <div class="dropdown">
                                <a href="#" class="text-muted" id="dropdownUser" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownUser">
                                    <li><a class="dropdown-item" href="{{route('home.YourInvoices')}}">Account</a></li>
                                    <li><a class="dropdown-item" href="{{route('home.logout')}}">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="list-inline-item">

                            <a href="{{route('home.cart')}}" class="text-muted position-relative">

                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-shopping-bag">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                                    <line x1="3" y1="6" x2="21" y2="6"></line>
                                    <path d="M16 10a4 4 0 0 1-8 0"></path>
                                </svg>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                                    @livewire('user.count-cart-wish-list',['type'=>'cart'])
                                </span>
                            </a>
                        </div>
                        @endif
                        @endguest






                    </div>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light navbar-default pt-0 pb-0">
        <div class="container px-0 px-md-3">
            <div class="dropdown me-3 d-none d-lg-block">
                <a class="btn btn-primary px-6 " id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-grid">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg></span>Categories
                </a>
                {{-- category --}}
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    @foreach ($menu as $key =>$item)
                    <li><a class="dropdown-item" href="{{route('home.category.detail',$key)}}">{{$item}}</a></li>
                    @endforeach
                    <li><a class="dropdown-item" href="{{route('home.categories')}}">Show all</a></li>
                </ul>
            </div>
            <div class="dropdown me-3 d-none d-lg-block">
                <a class="btn btn-primary px-6 " id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <span class="me-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-grid" data-darkreader-inline-stroke=""
                            style="--darkreader-inline-stroke: currentColor;">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg></span>Brands
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    @foreach ($brands as $key => $brand)
                    <li><a class="dropdown-item" href="{{route('home.brand.detail',$key)}}">{{$brand}}</a></li>
                    @endforeach
                    <li><a class="dropdown-item" href="{{route('home.brands')}}">Show all</a></li>
                </ul>
            </div>


            <div class="d-none d-lg-block">
                <ul class="navbar-nav ">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('home.allProducts')}}">
                            All products
                        </a>
                    </li>
                </ul>
            </div>



            <div class="offcanvas offcanvas-start p-4 p-lg-0 overflow-auto" style="height: 500px;" id="navbar-default">

                <div class="d-flex justify-content-between align-items-center mb-2 d-block d-lg-none">
                    <div><img src="/User/assets/images/logo/phone-store.svg" alt="Phone store"> Phone store</div>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="d-block d-lg-none mb-2 pt-2">
                    <form action="{{route('home.searchProduct')}}" method="GET" class="search-header">
                        <div class="d-flex align-items-center">
                            <input type="text" class="form-control border-end-0" name="search"
                                placeholder="Search for products.." aria-label="Search for products.."
                                aria-describedby="basic-addon2">
                            <span class="input-group-text bg-transparent" id="basic-addon2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-search"
                                    data-darkreader-inline-stroke="" style="--darkreader-inline-stroke: currentColor;">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg></span>
                        </div>
                    </form>
                </div>
                <div class="d-block d-lg-none mb-2 pt-2">
                    <a class="btn btn-primary w-100 d-flex justify-content-center align-items-center"
                        data-bs-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false"
                        aria-controls="collapseExample1">
                        <span class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg></span> Categories
                    </a>
                    <div class="collapse mt-2" id="collapseExample1">
                        <div class="card card-body">
                            <ul class="mb-0 list-unstyled">
                                @foreach ($menu as $key =>$item)
                                <li><a class="dropdown-item" href="{{route('home.category.detail',$key)}}">{{$item}}</a>
                                </li>
                                @endforeach
                                <li><a class="dropdown-item" href="{{route('home.categories')}}">Show all</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-block d-lg-none mb-2 pt-2">
                    <a class="btn btn-primary w-100 d-flex justify-content-center align-items-center"
                        data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                        aria-controls="collapseExample">
                        <span class="me-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg></span> Brands
                    </a>
                    <div class="collapse mt-2" id="collapseExample">
                        <div class="card card-body">
                            <ul class="mb-0 list-unstyled">
                                @foreach ($brands as $key => $brand)
                                <li><a class="dropdown-item" href="{{route('home.brand.detail',$key)}}">{{$brand}}</a>
                                </li>
                                @endforeach
                                <li><a class="dropdown-item" href="{{route('home.brands')}}">Show all</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-block d-lg-none mb-2 pt-2">
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('home.allProducts')}}">
                                All products
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </nav>
</div>