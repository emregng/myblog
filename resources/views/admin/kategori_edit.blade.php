@extends('layouts.master')
@section('icerik')
    <header class="masthead mavi-back">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Kategori Düzenle</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="m-b-40 text-center">
                {!! $kategori->kucuk_resim !!}
                </div>
                {!! Form::model($kategori, ['route' => ['kategori.update', $kategori->id],"method"=>"put","files"=>true])  !!}
                {!! Form::bsText("baslik","Baslik") !!}
                {!! Form::bsFile("resim","Resim") !!}

                {!! Form::bsSubmit("KAYDET") !!}
                {!! Form::close() !!}
            </div>
        </div>
@endsection

