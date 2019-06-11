<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title') - PC Shop Laravel</title>
        <script src="/assets/js/jquery-3.4.1.min.js" defer></script>
        <script src="/assets/js/bootstrap.min.js" defer></script>
        <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/font-awesome/fontawesome.min.css">
        <link rel="stylesheet" href="/assets/css/font-awesome/brand.css">
        <link rel="stylesheet" href="/assets/css/font-awesome/solid.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-dark bg-dark navbar-expand-sm">
                <a class="navbar-brand" href="#">電子商城</a>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="">熱銷</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">新品</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    @if (session()->has('user_id'))
                        <li class="nav-item">
                            <a class="nav-link" href="/user/auth/sign-out"><i class="fas fa-sign-out-alt"></i></span> 登出</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="/user/auth/sign-in"><i class="fas fa-sign-in-alt"></i></span> 登入</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/auth/sign-up"><i class="fas fa-user"></i></span> 註冊</a>
                        </li>
                    @endif
                </ul>
            </nav>
        </header>

        <div class="container">
            @yield('content')
        </div>

        <footer class="footer" style="font-size:15px">
            <nav class="navbar navbar-dark bg-dark fixed-bottom">
                <div class="container">
                    <div class="navbar-nav col-lg-10">
                        <p style="color:#9d9d9d">Copyright © 2019 長榮大學 IM2A Cai Yu Xuan & Chang Ting Tsung 版權所有，並保留所有權利。</p>
                    </div>
                    <div class="col-lg-1"><a href="#" title="回頂端"><i class="fa fa-sort-up"></i>TOP</a></div>
                    <div class="col-lg-1"><a href='#'>聯絡我們</a></div>
                </div>
            </nav>
        </footer>
    </body>
</html>