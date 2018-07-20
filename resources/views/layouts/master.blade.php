<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{!! config("ayarlar.aciklama") !!}">
    <meta name="author" content=""{!! config("ayarlar.author") !!}>
     <meta name="keywords" content="{!! config("ayarlar.keywords") !!}">
    <title>{!! config("ayarlar.baslik") !!}</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset("vendor/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{asset("vendor/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Custom styles for this template -->
    <link href="{{asset("css/clean-blog.min.css")}}" rel="stylesheet">
    <link href="{{asset("css/custom.css")}}" rel="stylesheet">
    <link href="{{asset("css/toastr.min.css")}}" rel="stylesheet">
    <link href="{{asset("css/bootstrap-switch.min.css")}}" rel="stylesheet">
    <link href="{{asset("vendor/summernote/summernote.css")}}" rel="stylesheet" type="text/css">
    <script>
        window.csrfToken = "{{csrf_token()}}"
    </script>
</head>
<body data-status="{{Session::get("durum")}}">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container-fluid" id="topbar">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li><a href="/"><i class="fa fa-home"></i>Anasayfa</a></li>
                    @if(Auth::guest())
                    <li><a href="/login"><i class="fa fa-sign-in"></i> Üye Girişi</a></li>
                    <li><a href="/register"><i class="fa fa-users"></i> Üye Ol</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                @if(Auth::user()->yetkisi_var_mi("admin"))
                                    <li><a href="{{ url('/site-ayarlari') }}"><i class="fa fa-btn fa-wrench"></i>Site Ayarları</a></li>
                                    <li><a href="{{ url('/user') }}"><i class="fa fa-btn fa-users"></i>Kullanıcılar</a></li>
                                    <li><a href="{{ url('/kategori') }}"><i class="fa fa-btn fa-cube"></i>Kategoriler</a></li>
                                    <li><a href="{{ url('/makale') }}"><i class="fa fa-btn fa-list-ol"></i>Tüm Makaleler</a></li>
                                    <li><a href="{{ url('/talep') }}"><i class="fa fa-btn fa-envelope-o"></i>Yazarlık Talepleri</a></li>
                                    <li class="divider"></li>
                                @endif
                                @if(Auth::user()->yetkisi_var_mi("author"))
                                    <li><a href="{{ url('/makalem') }}"><i class="fa fa-btn fa-list"></i>Makalelerim</a></li>
                                    <li><a href="{{ url('/makalem/create') }}"><i class="fa fa-btn fa-plus"></i>Yeni Makale Ekle</a></li>
                                @endif
                                @if(!Auth::user()->yetkisi_var_mi("admin") && !Auth::user()->yetkisi_var_mi("author"))
                                    <li><a href="{{ url('/yazarlik-talebi') }}"><i class="fa fa-btn fa-envelope"></i>Yazarlık Talebi</a></li>
                                @endif
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Çıkış</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <a class="navbar-brand" href="index.html">Start Bootstrap</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="post.html">Sample Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@yield('icerik')
<hr>
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="{!! config("ayarlar.twitter") !!}">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{!! config("ayarlar.facebook") !!}">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="{!! config("ayarlar.github") !!}">
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                  </span>
                        </a>
                    </li>
                </ul>
                <p class="copyright text-muted">Copyright &copy; Your Website 2018</p>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JavaScript -->
<script src="{{asset("vendor/jquery/jquery.min.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.0.4/popper.js"></script>
<script src="{{asset("vendor/bootstrap/js/bootstrap.min.js")}}"></script>
<script src="{{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

<!-- Custom scripts for this template -->
<script src="{{asset("js/clean-blog.min.js")}}"></script>
<script src="{{asset("vendor/summernote/summernote.min.js")}}"></script>
<script src="{{asset("vendor/summernote/lang/summernote-tr-TR.js")}}"></script>
<script src="{{asset("js/toastr.min.js")}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
<script src="{{asset("js/bootstrap-switch.min.js")}}"></script>
<script src="{{asset("js/custom.js")}}"></script>
<script src="{{asset("js/laravel-delete.js")}}"></script>
</body>

</html>
