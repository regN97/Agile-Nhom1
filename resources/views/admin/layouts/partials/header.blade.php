<!-- Header -->
<header class="cr-header">
            <div class="container-fluid">
                <div class="cr-header-items">
                    <div class="left-header">
                        <a href="javascript:void(0)" class="cr-toggle-sidebar">
                            <span class="outer-ring">
                                <span class="inner-ring"></span>
                            </span>
                        </a>
                        <div class="header-search-box">
                            <div class="header-search-drop">
                                <a href="javascript:void(0)" class="open-search"><i class="ri-search-line"></i></a>
                                <form class="cr-search">
                                    <input class="search-input" type="text" placeholder="Search...">
                                    <a href="javascript:void(0)" class="search-btn"><i class="ri-search-line"></i>
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="right-header">
                        <div class="cr-right-tool display-screen">
                            <a class="cr-screen full" href="javascript:void(0)"><i
                                    class="ri-fullscreen-line"></i></a>
                            <a class="cr-screen reset" href="javascript:void(0)"><i
                                    class="ri-fullscreen-exit-line"></i></a>
                        </div>
                        <div class="cr-right-tool display-dark">
                            <a class="cr-mode dark" href="javascript:void(0)"><i class="ri-moon-clear-line"></i></a>
                            <a class="cr-mode light" href="javascript:void(0)"><i class="ri-sun-line"></i></a>
                        </div>
                        <div class="cr-right-tool cr-user-drop">
                            <div class="cr-hover-drop">
                                <div class="cr-hover-tool">
                                    <img class="user" src="{{ asset('admin/assets/img/user/1.jpg') }}"
                                        alt="user">
                                </div>
                                <div class="cr-hover-drop-panel right">
                                    <div class="details">
                                        <h6>Wiley Waites</h6>
                                        <p>wiley@example.com</p>
                                    </div>
                                    <ul class="border-top">
                                        <li><a href="{{route('home')}}">Home Page</a></li>
                                    </ul>
                                    <ul class="border-top">
                                        <li><a href="{{route('auth.logout')}}"><i class="ri-logout-circle-r-line"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>