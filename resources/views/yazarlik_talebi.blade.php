@extends('layouts.master')
@section('icerik')
    <header class="masthead mavi-back">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Yazarlık Talebi</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {!! Form::open(["url" => "/yazarlik-talebi/gonder","method" => "post"]) !!}
                {!! Form::bsTextArea("aciklama","Açıklama",null,["class" => "summernote"]) !!}
                {!! Form::bsSubmit("Talep Gönder") !!}
                {!! Form::close() !!}
            </div>
        </div>
@endsection

