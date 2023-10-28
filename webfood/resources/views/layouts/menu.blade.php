<div class="container px-0">
    <nav class="navbar navbar-light bg-white navbar-expand-xl">
        <a href="index.html" class="navbar-brand">
            <h1 class="text-primary display-6">Web Food ORG</h1>
        </a>
        <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars text-primary"></span>
        </button>
        <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
            <div class="navbar-nav mx-auto">
                <a href="{{ route('home') }}" class="nav-item nav-link {{ $page == 'home' ? 'active' : '' }}">Home</a>
                <a href="{{ route('Shop.index') }}"
                    class="nav-item nav-link {{ $page == 'shop' ? 'active' : '' }}">Shop</a>
                <a href="{{ route('shop-detail') }}"
                    class="nav-item nav-link {{ $page == 'shop-detail' ? 'active' : '' }}">Shop Detail</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ $isPages == true ? 'active' : '' }}"
                        data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0 bg-secondary rounded-0">
                        <a href="{{ route('carts.index') }}"
                            class="dropdown-item {{ $page == 'cart' ? 'active' : '' }}">Cart</a>
                        <a href="{{ route('chackout') }}"
                            class="dropdown-item {{ $page == 'chackout' ? 'active' : '' }}">Chackout</a>
                        <a href="{{ route('testimonial') }}"
                            class="dropdown-item {{ $page == 'testimonial' ? 'active' : '' }}">Testimonial</a>
                        <a href="{{ route('error') }}"
                            class="dropdown-item {{ $page == 'error' ? 'active' : '' }}">404
                            Page</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}"
                    class="nav-item nav-link {{ $page == 'contact' ? 'active' : '' }}">Contact</a>
            </div>
            <div class="d-flex m-3 me-0 align-items-center">
                <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4"
                    data-bs-toggle="modal" data-bs-target="#searchModal"><i
                        class="fas fa-search text-primary"></i></button>
                <a href="#" class="position-relative me-4 my-auto">
                    <i class="fa fa-shopping-bag fa-2x"></i>
                    <span
                        class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1"
                        style="top: -5px; left: 15px; height: 20px; min-width: 20px;">3</span>
                </a>
                <div class="dropdown">
                    <a class="position-relative my-1 me-4" type="button" id="userDropdown" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        @if (Auth::check())
                            <style>
                                .border-avatar {
                                    border: 3px solid #81c408;
                                }

                                .dropdown-user {
                                    right: 20% !important;
                                }

                                .show>.border-avatar {
                                    border-color: rgb(231, 118, 118);
                                    ;
                                }

                                .rounded-100 {
                                    border-radius: 100px !important;
                                }

                                .avatar {
                                    width: 40px;
                                    height: 40px;
                                }
                            </style>
                            <img src="{{ asset('img/avatar.jpg') }}"
                                class="avatar border-avatar text-white rounded-circle">
                        @else
                            <i class="fas fa-user fa-2x"></i>
                        @endif
                    </a>
                    <ul class="dropdown-menu ms-auto dropdown-user" aria-labelledby="userDropdown">
                        @if (Auth::check() == false)
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><div disable class="dropdown-item">User : {{ Auth::user()->firstName }} {{ Auth::user()->lastName }}</div></li>
                            <li><a class="dropdown-item" href="{{ route('inforUser') }}">Infomation</a></li>
                            <li><button class="dropdown-item" type="submit"
                                    form="logout">{{ __('Log out') }}</button></li>
                            <form method="POST" action="{{ route('logout') }}" name="logout" id="logout">
                                @csrf
                            </form>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
