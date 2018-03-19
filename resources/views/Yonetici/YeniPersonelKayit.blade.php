<!doctype html>
<html lang="en">
<head>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- Website CSS style -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Website Font style -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <!-- Google Fonts -->
        <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

        <title>Yeni Pesonel Kaydı</title>
        <style>
            /*
    /* Created by Filipe Pina
     * Specific styles of signin, register, component
     */
            /*
             * General styles
             */
            #playground-container {
                height: 500px;
                overflow: hidden !important;
                -webkit-overflow-scrolling: touch;
            }
            body, html{
                height: 100%;
                background-repeat: no-repeat;
                background:url(https://i.ytimg.com/vi/4kfXjatgeEU/maxresdefault.jpg);
                font-family: 'Oxygen', sans-serif;
                background-size: cover;
            }

            .main{
                margin:50px 15px;
            }

            h1.title {
                font-size: 50px;
                font-family: 'Passion One', cursive;
                font-weight: 400;
            }

            hr{
                width: 10%;
                color: #fff;
            }

            .form-group{
                margin-bottom: 15px;
            }

            label{
                margin-bottom: 15px;
            }

            input,
            input::-webkit-input-placeholder {
                font-size: 11px;
                padding-top: 3px;
            }

            .main-login{
                background-color: #fff;
                /* shadows and rounded borders */
                -moz-border-radius: 2px;
                -webkit-border-radius: 2px;
                border-radius: 2px;
                -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

            }
            .form-control {
                height: auto!important;
                padding: 8px 12px !important;
            }
            .input-group {
                -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
                -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
                box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
            }
            #button {
                border: 1px solid #ccc;
                margin-top: 28px;
                padding: 6px 12px;
                color: #666;
                text-shadow: 0 1px #fff;
                cursor: pointer;
                -moz-border-radius: 3px 3px;
                -webkit-border-radius: 3px 3px;
                border-radius: 3px 3px;
                -moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
                -webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
                box-shadow: 0 1px #fff inset, 0 1px #ddd;
                background: #f5f5f5;
                background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
                background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
                background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
                background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
                background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
                filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
            }
            .main-center{
                margin-top: 30px;
                margin: 0 auto;
                max-width: 400px;
                padding: 10px 40px;
                background:#009edf;
                color: #FFF;
                text-shadow: none;
                -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
                -moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
                box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

            }
            span.input-group-addon i {
                color: #009edf;
                font-size: 17px;
            }

            .login-button{
                margin-top: 5px;
            }

            .login-register{
                font-size: 11px;
                text-align: center;
            }

        </style>

    </head>
<body>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form class="form-horizontal" method="post" action="/ogretmenekle{{isset($ogretmenListele)? "/".$ogretmenListele->id:""}}">
    {{csrf_field()}}

    @if(isset($ogretmenListele))
        <input type="hidden" name="_method" value="PUT">
    @endif
    <fieldset>
    </fieldset>

    <!-- Form Name -->
    <legend>Öğretmen Ekle</legend>


    <!-- Text input-->
    <div class="form-group">

        <div class="row main">
            <div class="main-login main-center">
                <h5>Sign up once and watch any of our free demos.</h5>


                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Branş</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="brans" class="form-control">

                            <option value="{{isset($ogretmenListele) ? $ogretmenListele->brans:old('seilmedi ')}}">{{isset($ogretmenListele) ? $ogretmenListele->brans:old('brans girin: ')}}</option>
                            <option value="matematik">matematik</option>
                            <option value="fizik">fizik</option>
                            <option value="biyoloji">biyoloji</option>
                            <option value="kimya">kimya</option>
                            <option value="tarih">tarih</option>
                            <option value="türkçe">türkçe</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Sorumlu Yonetici</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="yonetici_id" class="form-control">
                        @foreach($yoneticiListele as $yonetici)
                                <option value="{{$yonetici->id}}">{{$yonetici->adi}}  {{$yonetici->soyadi}}</option>
                            @endforeach


                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">TC</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input  type="text" class="form-control" name="tc" id="tc"  placeholder="TC giriniz" value="{{isset($ogretmenListele) ? $ogretmenListele->tc:old('tc: ')}}"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Ad</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="adi" id="email"  placeholder="Ad giriniz..." value="{{isset($ogretmenListele) ? $ogretmenListele->adi:old('adi: ')}}" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Soyadı</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="soyadi" id="username"  placeholder="soyad giriniz..." value="{{isset($ogretmenListele) ? $ogretmenListele->soyadi:old('soyadi: ')}}" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Kullanıcı Adı</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="kulaniciadi" id="email"  placeholder="Ad giriniz..." value="{{isset($ogretmenListele) ? $ogretmenListele->kulaniciadi:old('kullanıcı adı: ')}}"/>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Adres</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="adres" id="username"  placeholder="Adres giriniz..." value="{{isset($ogretmenListele) ? $ogretmenListele->adres:old('adres girin: ')}}" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Telefon</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="telefon" id="username"  placeholder="Telefon no giriniz..." value="{{isset($ogretmenListele) ? $ogretmenListele->telefon:old('telefon girin: ')}}"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Şifre</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="sifre" id="username"  placeholder="Şifre belirle..." value="{{isset($ogretmenListele) ? $ogretmenListele->sifre:old('şifre girin: ')}}"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Maaş</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="maas" id="username"  placeholder="Alacağı Maaş..."value="{{isset($ogretmenListele) ? $ogretmenListele->maas:old('maas girin: ')}}" />
                        </div>
                    </div>
                </div>

                <!-- Select Basic -->


                <div></div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submit"></label>
                    <div class="col-md-4">
                        <p align="center"><button id="submit" name="submit" class="btn btn-primary">Ekle</button>
                    </div>
                </div>

                </fieldset>
</form>
<div></div>

</body>
</html>