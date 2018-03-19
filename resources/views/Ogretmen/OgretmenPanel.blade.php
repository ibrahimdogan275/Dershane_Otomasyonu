

<html>
<head>
<title>Öğretmen Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="menu.css">
</head>
<body>

<div id="navbar">
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            @foreach($ogretmenadi as $ogretmen)
            <a class="navbar-brand" href="#">ÖĞRETMEN ANASAYFA</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bilgiler <b class="caret"></b></a>

                    <ul class="dropdown-menu">

                        <li><a href="Ogretmengenelbilgi/{{$ogretmen->id}}">Genel Bilgi</a></li>


                        <ul class="dropdown-menu">
                            </li>
                        </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Öğrenci <b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li><a href="ogrencidenemeyedekcreat/{{$ogretmen->id}}">Deneme Notu Gir</a></li>
                        <li><a href="ogrencilerim/{{$ogretmen->id}}">Öğrencilerim</a></li>

                        </li>
                        <ul class="dropdown-menu">
                            <ul class="dropdown-menu">
                            </ul>
                        </ul>
                        </li>
                    </ul>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Deneme<b class="caret"></b></a>

                    <ul class="dropdown-menu">


                        <li><a href="denemenotlarılistele/{{$ogretmen->id}}">Deneme Notlarını Listele</a></li>

                        <ul class="dropdown-menu">
                            </li>
                        </ul>
                        </li>

                    </ul>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Ders Programı<b class="caret"></b></a>

                    <ul class="dropdown-menu">


                        <li><a href="ogretmendersprogrami">Ders Programı Listele</a></li>

                        <ul class="dropdown-menu">
                            </li>
                        </ul>
                        </li>

                    </ul>
                </li>
                <tr>
                    <td>
                        <li class="dropdown">

                            <div class="form-group">
                                <label class="col-md-6 control-label" for="button1id"></label>
                                <div class="col-md-0">
                                    <button id="button1id" name="button1id" class="btn btn-inverse">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        {{$ogretmen->adi}}  {{$ogretmen->soyadi}} </button>
                                </div>
                            </div>
                        </li>
                    </td>

                    <td>
                        <li class="dropdown">
                            <div class="form-group">
                                <label class="col-md-5 control-label" for="button1id"></label>
                                <div class="col-md-0">
                                    <a href="ogretmencikis"><button id="button1id" name="button1id" class="btn btn-inverse">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ÇIKIŞ</button></a>
                                </div>
                            </div>
                        </li>
                    </td>
                </tr>

        </div>
    </div>
    </nav>
</div>
@endforeach

</body>
</html>
