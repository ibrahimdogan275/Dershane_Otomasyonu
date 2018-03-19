<!doctype html>

<head>
    <style>

        body{
            bgcolor:black;
        }

        #top{
            border-top-color : #a6e145;
        }

        #mid{
            border-top-color : green;
        }

        #dwn1{
            border-top-color: yellow;
        }

        #dwn2{
            border-top-color: red;
        }

        #frstDiv{
            height:130px;
            width :290px;
        }

        #mainBar{
            height: 40px;
            width: 100%;
            background-color : rgba(0,0,0,0.5);
            box-shadow: 0 0 15px #66ffff;
            border-radius: 10px;
        }

        #mainBarUl li {
            list-style-type: none;
            display: inline;
            padding-right: 10px;
            padding-left: 10px;
            line-height: 40px;
        }

        #mainBarUl li a {
            text-decoration: none;
            color: white;
        }

        #mainBarUl li a:hover{
            color: yellow;
        }

        #log{
            float: right;
            padding-right: 50px;
        }

        #reg{
            float: right;
            padding-right: 50px;
        }

        #frsDivTop{
            height:100%;
            width:100%;
            background-color: black;
            margin-left: auto ;
            margin-right: auto ;
        }

        #form{
            width : 300px;
            heiight : 300px;
            background-color : rgba(0,0,0,0.5);
            margin :0 auto;
            border-radius : 15px;
            box-shadow: 0 0 15px #ffff99;
            padding-bottom: 20px;
            padding-top: 25px;
        }





    </style>
    <title>Login</title>
</head>

<body>
<div class="form-control" id="frsDivTop">
    <hr id="top"/>

    <div id="frstDiv">
        <h2>
            <span style="color : #dc143c" class = "glyphicon glyphicon-heart" ></span> <span style=" color : green; font-weight : bolder; font-family:Calligrapher,Arial;">True</span>
            <span style="color : red; font-weight : bolder; font-family:Calligrapher,Arial;">Love.com </span><span style="color : #dc143c" class = "glyphicon glyphicon-heart" ></span>
            <div style="background-color : rgba(0,0,0,0.5); border-radius:5px;"> <marquee direction ="right"  behaviour = "alternate"><span style="color : #ff1493;" class = "glyphicon glyphicon-heart" ></span></marquee>
            </div>
        </h2>
    </div>

    <div id="mainBar">
        <ul id="mainBarUl">
            <li><a href="#">Home</a></li>
            <li><a href="#" id="ab">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#" id="log">Login</a></li>
            <li><a href="#" id="reg" data-toggle="modal" data-target="#myModal">Register</a></li>
        </ul>
    </div>
    <hr id="mid" />
    <br/>

    <div align="center">
        <br/><br/>
        <div id="form" style=" ">
            <form action="" method="" autocomplete="off">
                <h2 style="color : white; font-family:Calligrapher;">Login Here</h2><br>
                <input type="email" name="email" placeholder="Email" autofocus="autofocus" style="border-radius : 10px; padding : 5px" >
                <br/><br/>
                <input type="password" name="" placeholder="Password" style="border-radius : 10px;padding : 5px" ><br><br>
                <!-- <a href="#"><button class="btn btn-primary"><strong>Login</strong></button></a> -->
                <input type="submit" name="sub" value="Login" class="btn btn-primary">
            </form><br/><br/>

            <p align="center"><a href="#" style="color:white;">Forgot your Password?</a></p>

        </div>
    </div><br><br>
    <hr id="dwn1"/>
    <div align="center" style="font-family:Calligrapher;">
        <h3><b><span style="color : green">©</span> <span style="color : pink">By</span> : <span style ="color : red">A<span style="color:blue;">yaa</span>l</span> <span style="color : red">S</span><span style="color : blue">hahi</span><span style="color : red">M</span></b></h3>
    </div>
    <hr id="dwn2"/>
    <br/><br/>
</div>
</body>
</html>

</body>
</html>