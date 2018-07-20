@extends('layouts.master')
@section('icerik')
    <header class="masthead mavi-back">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Makalelerim</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-b-40 text-center">
                    <a href="/makalem/create" class="btn btn-danger">
                        <i class="fa fa-plus"></i>
                        Yeni Makale Ekle
                    </a>
                </div>
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>Durum</th>
                        <th>Resim</th>
                        <th>Başlık</th>
                        <th>Slug</th>
                        <th>Kategori</th>
                        <th>Yayınlanma Tarihi</th>
                        <th>Eylem</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($makaleler as $makale)
                        <tr>
                            <td>
                                {{$makale->durum ? "Yayında" : "Yayında Değil"}}
                            </td>
                            <td>{!!$makale->kucuk_resim  !!}</td>
                            <td>{{$makale->baslik}}</td>
                            <td>{{$makale->slug}}</td>
                            <td>{{$makale->kategori->baslik}}</td>
                            <td>{{$makale->created_at->diffForHumans()}}</td>
                            <td>
                                <a href="/makalem/{{$makale->id}}/edit" class="btn btn-primary eylem" data-toggle="tooltip" title="Düzenle"><i class="fa fa-edit"></i> </a>
                                <a href="/makalem/{{$makale->id}}" class="btn btn-danger eylem" data-toggle="tooltip" title="Sil" data-method="delete" data-confirm="Emin misin ?"><i class="fa fa-remove"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-center">
                    {{$makaleler->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection

