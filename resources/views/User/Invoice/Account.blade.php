@extends('User.Layouts.app')
@section('content')
<section>
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- col -->
            <div class="col-12">
                <div class="p-6 d-flex justify-content-between align-items-center d-md-none">
                    <!-- heading -->
                    <h3 class="fs-5 mb-0">Account Setting</h3>
                    <!-- button -->
                    <button class="btn btn-outline-gray-400 text-muted d-md-none btn-icon " type="button"
                        data-bs-toggle="offcanvas" data-bs-target="#offcanvasAccount" aria-controls="offcanvasAccount">
                        <i class="feather-icon icon-menu fs-4"></i>
                    </button>
                </div>
            </div>
            <!-- col -->
            <div class="col-lg-3 col-md-4 col-12 border-end  d-none d-md-block">
                <div class="pt-10 pe-lg-10">
                    <!-- nav -->
                    <ul class="nav flex-column nav-pills nav-pills-dark">
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('YourInvoices')?'active':''}}" aria-current="page"
                                href="{{route('home.YourInvoices')}}"><i
                                    class="feather-icon icon-shopping-bag me-2"></i>Your Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('profile')?'active':''}}"
                                href="{{route('home.profile')}}"><i class="bi bi-person-lines-fill me-2"></i>Profile</a>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <hr>
                        </li>
                        <!-- nav item -->
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('home.logout')}}"><i
                                    class="feather-icon icon-log-out me-2"></i>Log
                                out</a>
                        </li>
                    </ul>
                </div>
            </div>
            @if (Request::is('YourInvoices'))
            @include('User.Invoice.YourInvoices')
            @endif
            @if (Request::is('profile'))
            @include('User.profile')
            @endif
        </div>
    </div>
</section>
<!-- modal -->

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasAccount" aria-labelledby="offcanvasAccountLabel">
    <!-- offcanvas header -->
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasAccountLabel">Offcanvas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <!-- offcanvas body -->
    <div class="offcanvas-body">
        <ul class="nav flex-column nav-pills nav-pills-dark">
            <li class="nav-item">
                <a class="nav-link {{Request::is('YourInvoices')?'active':''}}" aria-current="page"
                    href="{{route('home.YourInvoices')}}"><i class="feather-icon icon-shopping-bag me-2"></i>Your
                    Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('profile')?'active':''}}" href="{{route('home.profile')}}"><i
                        class="feather-icon icon-credit-card me-2"></i>Profile</a>
            </li>
        </ul>
        <hr class="my-6">
        <div>
            <!-- nav  -->
            <ul class="nav flex-column nav-pills nav-pills-dark">
                <!-- nav item -->
                <li class="nav-item">
                    <a class="nav-link " href="{{route('home.logout')}}"><i
                            class="feather-icon icon-log-out me-2"></i>Log out</a>
                </li>

            </ul>
        </div>
    </div>
</div>
@endsection