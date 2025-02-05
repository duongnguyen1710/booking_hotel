<!-- header inner -->
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                <div class="full">
                    <div class="center-desk">
                        <div class="logo">
                            <a href="index.html" style="font-size: 32px; font-weight: bold; text-transform: uppercase; color: black; text-decoration: none;">BookingHotel</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                <nav class="navigation navbar navbar-expand-md navbar-dark d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse d-flex align-items-center" id="navbarsExample04">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">Chi tiết</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="room.html">Chọn phòng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="blog.html">Tin tức</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Liên hệ</a>
                            </li>
                        </ul>

                        <div class="auth-nav ml-auto d-flex align-items-center">
                            @if (Route::has('login'))
                            @auth
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenu">
                                    <a class="dropdown-item" href="{{ route('profile.show') }}">Hồ sơ</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Đăng xuất
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            @else
                            <a class="btn btn-success mr-2" href="{{ url('login') }}">Đăng nhập</a>

                            @if (Route::has('register'))
                            <a class="btn btn-primary" href="{{ url('register') }}">Đăng ký</a>
                            @endif
                            @endauth
                            @endif
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<style>
    .auth-nav {
        position: relative;
        top: -12px;
    }
</style>