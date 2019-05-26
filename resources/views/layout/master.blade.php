<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title') - PC Shop Laravel</title>
        <script src="/assets/js/jquery-3.4.1.min.js" defer></script>
        <script src="/assets/js/bootstrap.min.js" defer></script>
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="">電子商城</a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="">首頁</a></li>
                        <li><a href="">熱銷</a></li>
                        <li><a href="">新品</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        @if (session()->has('user_id'))
                            <li><a href="/user/auth/sign-out"><span class="glyphicon glyphicon-log-out"></span> 登出</a></li>
                        @else
                            <li><a href="/user/auth/sign-in"><span class="glyphicon glyphicon-log-in"></span> 登入</a></li>
                            <li><a href="/user/auth/sign-up"><span class="glyphicon glyphicon-user"></span> 註冊</a></li>
                        @endif
                    </ul>
                </div>
            </nav>
        </header>

        <div class="container">
            @yield('content')
        </div>

        <footer class="footer" style="font-size:15px">
            <nav class="navbar navbar-inverse navbar-fixed-bottom">
                <div class="container">
                    <div class="nav navbar-nav col-lg-10">
                        <p style="color:#9d9d9d">Copyright © 2019 長榮大學 Cai Yu Xuan & Chang Ting Tsung 版權所有，並保留所有權利。</p>
                    </div>
                    <div class="nav navbar-right col-lg-1"><a href="#" title="回頂端"><i class="fa fa-sort-asc"></i>TOP</a></div>
                    <div class="nav navbar-right col-lg-1"><a href='#'>聯絡我們</a></div>
                </div>
            </nav>
        </footer>
    </body>
</html>