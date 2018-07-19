@extends('layouts.master')
@section('icerik')
    <header class="masthead mavi-back">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Kullanıcı Düzenle</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="panel panel-default">
                    <div class="panel-body">
                        {!! Form::model($user, ['route' => ['user.update', $user->id],"method"=>"put"])  !!}
                        {!! Form::bsCheckbox("rol","Roller :",[
                            ["value" => 1,"text" => "Admin","is_checked" => $user->yetkisi_var_mi("admin")],
                            ["value" => 2,"text" => "Author","is_checked" => $user->yetkisi_var_mi("author")],
                            ["value" => 3,"text" => "Standart","is_checked" => $user->yetkisi_var_mi("standart")],
                        ])!!}
                        {!! Form::bsText("name","İsim") !!}
                        {!! Form::bsText("email","Email") !!}
                        {!! Form::bsPassword("password","Şifre") !!}
                        {!! Form::bsSubmit("KAYDET") !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection

