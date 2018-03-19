<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="menu.css">
    <title>Yonetici Panel</title>
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
            <a class="navbar-brand" href="#">YÖNETİCİ ANASAYFA</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav">


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Öğretmen <b class="caret"></b></a>

                    <ul class="dropdown-menu">

                        <li><a href="/ogretmenekle/create">Öğretmen Ekle</a></li>
                        <li><a href="/ogretmenekle">Öğretemen Listele</a></li>

                        <ul class="dropdown-menu">
                            </li>
                        </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Öğrenci <b class="caret"></b></a>
                    <ul class="dropdown-menu">

                        <li><a href="/ogrenci/create">Öğrenci Ekle</a></li>
                        <li><a href="/ogrenci">Öğrenci Listele</a></li>
                        <li><a href="/ogrencideneme">Deneme Notlarını Listele</a></li>
                        </li>
                        <ul class="dropdown-menu">
                            <ul class="dropdown-menu">
                            </ul>
                        </ul>
                        </li>
                    </ul>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Deneme/Dersler <b class="caret"></b></a>

                    <ul class="dropdown-menu">


                        <li><a href="/ders">Ders Programi Listele</a></li>
                        <li><a href="/dersprogramiolustur">Ders Programi Ekle</a></li>
                        <li><a href="/denemegir">Deneme Sınavı tarihlerini listele</a></li>
                        <li><a href="/denemegir/create">Yeni Deneme Sınavı Tarihi belirle</a></li>
                        <ul class="dropdown-menu">
                            </li>
                        </ul>
                        </li>

                        </li>

                    </ul>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Yonetici <b class="caret"></b></a>

                    <ul class="dropdown-menu">


                        <li><a href="/yonetici">Yonetici Listele</a></li>
                        <li><a href="/yonetici/create">Yonetici Ekle</a></li>

                        <ul class="dropdown-menu">
                            </li>
                        </ul>
                        </li>

                        </li>


                    </ul>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Genel bilgi <b class="caret"></b></a>

                    <ul class="dropdown-menu">


                        <li><a href="/genelbilgi">Genel Bilgi Listele</a></li>


                        <ul class="dropdown-menu">
                            </li>
                        </ul>
                        </li>

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
                                        İBRAHİM DOĞAN  </button>
                                </div>
                            </div>
                        </li>
                    </td>

                    <td>
                        <li class="dropdown">
                            <div class="form-group">
                                <label class="col-md-5 control-label" for="button1id"></label>
                                <div class="col-md-0">
                                    <a href="yoneticicikis"><button id="button1id" name="button1id" class="btn btn-inverse">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ÇIKIŞ</button></a>
                                </div>
                            </div>
                        </li>
                    </td>
                </tr>


        </div>
    </div>



    </nav>
</div>

<h1></h1>
<div class="container">
    <div id="carousel">

        <figure><img src="a1.jpg" alt=""></figure>
        <figure><img src="a2.jpg" alt=""></figure>
        <figure><img src="a3.jpg" alt=""></figure>
        <figure><img src="a4.jpg" alt=""></figure>
        <figure><img src="a5.jpg" alt=""></figure>
        <figure><img src="a6.jpg" alt=""></figure>
        <figure><img src="a2.jpg" alt=""></figure>
        <figure><img src="a3.jpg" alt=""></figure>
        <figure><img src="a4.jpg" alt=""></figure>
    </div>
</div>

<style>
    @import url(http://fonts.googleapis.com/css?family=Anaheim);

    *{
        margin: 0;
        padding: 0;
        outline: none;
        border: none;
        box-sizing: border-box;
    }
    *:before,
    *:after{
        box-sizing: border-box;
    }
    html,
    body{
        min-height: 100%;
    }
    body{
        background-image: radial-gradient(mintcream 0%, lightgray 100%);
    }
    h1{
        display: table;
        margin: 5% auto 0;
        text-transform: uppercase;
        font-family: 'Anaheim', sans-serif;
        font-size: 4em;
        font-weight: 400;
        text-shadow: 0 1px white, 0 2px black;
    }
    .container{
        margin: 4% auto;
        width: 210px;
        height: 140px;
        position: relative;
        perspective: 1000px;
    }
    #carousel{
        width: 100%;
        height: 100%;
        position: absolute;
        transform-style: preserve-3d;
        animation: rotation 20s infinite linear;
    }
    #carousel:hover{
        animation-play-state: paused;
    }
    #carousel figure{
        display: block;
        position: absolute;
        width: 90%;
        height: 50%px;
        left: 10px;
        top: 10px;
        background: black;
        overflow: hidden;
        border: solid 5px black;
    }
    #carousel figure:nth-child(1){transform: rotateY(0deg) translateZ(288px);}
    #carousel figure:nth-child(2) { transform: rotateY(40deg) translateZ(288px);}
    #carousel figure:nth-child(3) { transform: rotateY(80deg) translateZ(288px);}
    #carousel figure:nth-child(4) { transform: rotateY(120deg) translateZ(288px);}
    #carousel figure:nth-child(5) { transform: rotateY(160deg) translateZ(288px);}
    #carousel figure:nth-child(6) { transform: rotateY(200deg) translateZ(288px);}
    #carousel figure:nth-child(7) { transform: rotateY(240deg) translateZ(288px);}
    #carousel figure:nth-child(8) { transform: rotateY(280deg) translateZ(288px);}
    #carousel figure:nth-child(9) { transform: rotateY(320deg) translateZ(288px);}

    img{
        -webkit-filter: grayscale(1);
        cursor: pointer;
        transition: all .5s ease;
    }
    img:hover{
        -webkit-filter: grayscale(0);
        transform: scale(1.2,1.2);
    }

    @keyframes rotation{
        from{
            transform: rotateY(0deg);
        }
        to{
            transform: rotateY(360deg);
        }
    }
</style>
</body>
</html>
