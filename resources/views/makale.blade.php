@extends("layouts.master")
@section('icerik')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{asset("uploads/".$makale->resim->isim)}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{$makale->baslik}}</h1>
                        <span class="meta">{{$makale->user->name}} tarafından {{$makale->created_at->formatLocalized('%A %d %B %Y - %H:%M')}} tarihinde yayınlandı.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {!! $makale->icerik!!}
            </div>
        </div>
    </div>
@endsection