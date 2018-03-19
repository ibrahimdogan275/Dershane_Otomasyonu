<!DOCTYPE html>
<html>
<head>

    <style>
        .yon
        {
            margin-left:45px ;
        }
        .sil
        {
            margin-top:-57px;
        }
    </style>

    <script src="https://use.fontawesome.com/1f2f75a8c0.js"></script>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
    <link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=170d96f69db52446b9aa21d2653da1f4">
    <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <style type="text/css" class="init">

    </style>
    <script type="text/javascript" src="/media/js/site.js?_=2ec2144600499da11df5c1cee6ac09df">
    </script>
    <script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fstyling%2Fbootstrap.html" async>
    </script>
    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.4.js">
    </script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js">
    </script>
    <script type="text/javascript" language="javascript" src="../resources/demo.js">
    </script>
    <script type="text/javascript" class="init">

        $(document).ready(function() {
            $('#listem').DataTable();
        } );

    </script>
<title>Öğrenci Listele</title>
</head>

<body class="wide comments example dt-example-bootstrap"><br>
<div class="container">
    <table id="listem" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>


            <th>id:</th>
            <th>TC</th>
            <th>Öğrenci Adı</th>
            <th>SoyAdı</th>
            <th>Adres</th>
            <th>Telefon NO</th>
            <th>Alan</th>


        </tr>
        <tbody>
        @foreach($ogrenciListem as $ogrenci )
            <tr>

                <th>{{$ogrenci->id}}</th>
                <th>{{$ogrenci->tc}}</th>
                <th>{{$ogrenci->adi}}</th>
                <th>{{$ogrenci->soyadi}}</th>
                <th>{{$ogrenci->adres}}</th>
                <th>{{$ogrenci->telefon}}</th>
                <th>{{$ogrenci->alan}}</th>




            </tr>
        @endforeach
        </tbody>
        </thead>
    </table>
</div>
<div></div>

</body>
</html>








