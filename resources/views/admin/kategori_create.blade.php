@extends('layouts.master')
@section('icerik')
    <header class="masthead mavi-back">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Yeni Kategori Ekle</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {!! Form::open(["url" => "/kategori","method" => "post","files" => true]) !!}
                {!! Form::bsText("baslik","Baslik") !!}
                {!! Form::bsFile("resim","Resim") !!}

                {!! Form::bsSubmit("KAYDET") !!}
                {!! Form::close() !!}
            </div>
        </div>
@endsection

