<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="top-header">
                    <a href="/" class="cr-logo">
                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo" class="logo">
                        <img src="{{ asset('assets/img/logo/dark-logo.png') }}" alt="logo" class="dark-logo">
                    </a>
                    <form class="cr-search" method="POST" action="{{ route('post.search') }}">
                        @csrf
                        <input class="search-input" type="text" placeholder="Search here..." name="search">
                        <button type="submit" class="search-btn"><i class="ri-search-line"></i></button>
                    </form>
                    <div class="cr-right-bar">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle cr-right-bar-item" href="javascript:void(0)">
                                    <i class="ri-user-3-line"></i>
                                    @if (Auth::check())
                                        <span>{{ Auth::user()->name }}</span>
                                    @else
                                        <span>Account</span>
                                    @endif
                                </a>
                                <ul class="dropdown-menu">
                                    @if (Auth::check())
                                        @if (Auth::user()->role_id == 1)
                                            <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.dashboard') }}">Dashboard</a>
                                            </li>
                                        @endif
                                        <li>
                                            <a class="dropdown-item" href="{{ route('auth.logout') }}">Logout</a>
                                        </li>
                                    @else
                                        <li>
                                            <a class="dropdown-item" href="{{ route('auth.register') }}">Register</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('auth.login') }}">Login</a>
                                        </li>
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cr-fix" id="cr-main-menu-desk">
        <div class="container">
            <div class="cr-menu-list">
                <div class="cr-category-icon-block">
                    <div class="cr-category-menu">
                        <div class="cr-category-toggle">
                            <i class="ri-menu-2-line"></i>
                        </div>
                    </div>
                    <div class="cr-cat-dropdown">
                        <div class="cr-cat-block">
                            <div class="cr-cat-tab">
                                <div class="cr-tab-list nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-home" type="button" role="tab"
                                        aria-controls="v-pills-home" aria-selected="true">
                                        Dairy &amp; Bakery</button>
                                    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-profile" type="button" role="tab"
                                        aria-controls="v-pills-profile" aria-selected="false" tabindex="-1">
                                        Fruits &amp; Vegetable</button>
                                    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-messages" type="button" role="tab"
                                        aria-controls="v-pills-messages" aria-selected="false" tabindex="-1">
                                        Snack &amp; Spice</button>
                                    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill"
                                        data-bs-target="#v-pills-settings" type="button" role="tab"
                                        aria-controls="v-pills-settings" aria-selected="false" tabindex="-1">
                                        Juice &amp; Drinks </button>
                                    <a class="nav-link" href="shop-left-sidebar.html">
                                        View All </a>
                                </div>
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                        aria-labelledby="v-pills-home-tab">
                                        <div class="tab-list row">
                                            <div class="col">
                                                <h6 class="cr-col-title">Dairy</h6>
                                                <ul class="cat-list">
                                                    <li><a href="shop-left-sidebar.html">Milk</a></li>
                                                    <li><a href="shop-left-sidebar.html">Ice cream</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Cheese</a></li>
                                                    <li><a href="shop-left-sidebar.html">Frozen
                                                            custard</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Frozen
                                                            yogurt</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <h6 class="cr-col-title">Bakery</h6>
                                                <ul class="cat-list">
                                                    <li><a href="shop-left-sidebar.html">Cake and
                                                            Pastry</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Rusk Toast</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Bread &amp;
                                                            Buns</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Chocolate
                                                            Brownie</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Cream Roll</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                        aria-labelledby="v-pills-profile-tab">
                                        <div class="tab-list row">
                                            <div class="col">
                                                <h6 class="cr-col-title">Fruits</h6>
                                                <ul class="cat-list">
                                                    <li><a href="shop-left-sidebar.html">Cauliflower</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Bell
                                                            Peppers</a></li>
                                                    <li><a href="shop-left-sidebar.html">Broccoli</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Cabbage</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Tomato</a></li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <h6 class="cr-col-title">Vegetable</h6>
                                                <ul class="cat-list">
                                                    <li><a href="shop-left-sidebar.html">Cauliflower</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Bell
                                                            Peppers</a></li>
                                                    <li><a href="shop-left-sidebar.html">Broccoli</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Cabbage</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Tomato</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                        aria-labelledby="v-pills-messages-tab">
                                        <div class="tab-list row">
                                            <div class="col">
                                                <h6 class="cr-col-title">Snacks</h6>
                                                <ul class="cat-list">
                                                    <li><a href="shop-left-sidebar.html">French
                                                            fries</a></li>
                                                    <li><a href="shop-left-sidebar.html">potato
                                                            chips</a></li>
                                                    <li><a href="shop-left-sidebar.html">Biscuits &amp;
                                                            Cookies</a></li>
                                                    <li><a href="shop-left-sidebar.html">Popcorn</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Rice Cakes</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <h6 class="cr-col-title">Spice</h6>
                                                <ul class="cat-list">
                                                    <li><a href="shop-left-sidebar.html">Cinnamon
                                                            Powder</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Cumin
                                                            Powder</a></li>
                                                    <li><a href="shop-left-sidebar.html">Fenugreek
                                                            Powder</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Pepper
                                                            Powder</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Long Pepper</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                        aria-labelledby="v-pills-settings-tab">
                                        <div class="tab-list row">
                                            <div class="col">
                                                <h6 class="cr-col-title">Juice</h6>
                                                <ul class="cat-list">
                                                    <li><a href="shop-left-sidebar.html">Mango Juice</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Coconut
                                                            Water</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Tetra Pack</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Apple
                                                            Juices</a></li>
                                                    <li><a href="shop-left-sidebar.html">Lychee
                                                            Juice</a></li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <h6 class="cr-col-title">soft drink</h6>
                                                <ul class="cat-list">
                                                    <li><a href="shop-left-sidebar.html">Breizh Cola</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Green Cola</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Jolt Cola</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Mecca Cola</a>
                                                    </li>
                                                    <li><a href="shop-left-sidebar.html">Topsia Cola</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>
                            @foreach ($categories as $category)
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('category.show', $category->id)}}">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </nav>
                <div class="cr-calling">
                    <i class="ri-phone-line"></i>
                    <a href="javascript:void(0)">0395183309</a>
                </div>
            </div>
        </div>
    </div>
</header>
