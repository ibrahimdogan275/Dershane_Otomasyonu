<!doctype html>
<html lang="en">
<head>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="menu.css">
        <title>Yonetici Ekle</title>
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


<form class="form-horizontal" method="post" action="/ogrencideneme{{isset($denemeogrenciListele)? "/".$denemeogrenciListele->id:""}}">
    {{csrf_field()}}

    @if(isset($denemeogrenciListele))
        <input type="hidden" name="_method" value="PUT">
    @endif
    <fieldset>
    </fieldset>

    <!-- Form Name -->
    <legend>Deneme Notu Gir</legend>


    <!-- Text input-->
    <div class="form-group">

        <div class="row main">
            <div class="main-login main-center">
                <h5>Deneme Sonucu Yayınlama</h5>


                <div class="form-group">
                    <label class="col-md-2 control-label" for="selectbasic">Ogrenci Adı:</label>
                    <div class="col-md-8">
                        <select id="selectbasic" name="ogrenci_id" class="form-control" >

                            @foreach($ogrenciListele as $ogrenci)
                                <option value={{$ogrenci->id}}>{{$ogrenci->adi}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Select Basic -->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="selectbasic">Deneme id:</label>
                    <div class="col-md-8">
                        <select id="selectbasic" name="deneme_id" class="form-control" >

                            <@foreach($denemeListele as $deneme)
                                <option value={{$deneme->id}}>{{$deneme->id}}.deneme</option>
                            @endforeach
                        </select>
                    </div>
                </div>



                <div class="form-group">
                    <label class="col-md-2 control-label">Puan</label>
                    <div class="col-md-8">
                        <input id="trh" name="puan" type="text" placeholder="puan Giriniz" class="form-control input-md" required="" ">
                    </div>
                </div>



                <div></div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submit"></label>
                    <div class="col-md-4">
                        <p align="center"><button id="submit" name="ogretmen_id" class="btn btn-primary" value="{{$ogretmen_id}}">Ekle</button>
                    </div>
                </div>

                </fieldset>
</form>
<div></div>

</body>
</html>





