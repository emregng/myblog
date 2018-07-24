@extends("layouts.master")
@section('icerik')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($makaleler as $makale)
                <div class="post-preview">
                    <a href="/yayinlanan-makale/{{$makale->slug}}">
                        <h2 class="post-title">
                           {{$makale->baslik}}
                        </h2>
                    </a>
                    <p class="post-meta">
                        {{$makale->user->name}} tarafından {{$makale->created_at->formatLocalized('%A %d %B %Y - %H:%M')}} tarihinde yayınlandı.
                    </p>
                </div>

                <hr>
                @endforeach
                <!-- Pager -->
                <div class="tex-center">
                    {{$makaleler->links()}}
                </div>
            </div>
        </div>
    </div>
    @endsection