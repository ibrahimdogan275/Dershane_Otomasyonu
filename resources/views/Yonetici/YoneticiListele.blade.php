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
            $('#example').DataTable();
        } );

    </script>

    <script language="javascript">
        function confirmDel() {
            var agree=confirm("Silmek istediğinizden emin misiniz? Bu işlem geri alınamaz!");
            if (agree) {
                return true ; }
            else {
                return false ;}
        }
    </script>
    <title>Yonetici Listele</title>
</head>

<body class="wide comments example dt-example-bootstrap"><br>
<div class="container">
    <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>

            <th>işlemler</th>
            <th>sıra</th>
            <th>Adı</th>
            <th>Soyadı</th>
        </tr>
        <tbody>
        @foreach($yoneticiListe as $yonetici )
            <tr>
                <td><a href="yonetici/{{$yonetici->id}}/edit"><button type="submit" value="Güncelle" class="yon btn btn-primary" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i>

                        </button></a>
                    <form method="post" action="/yonetici/{{$yonetici->id}}">
                        {{csrf_field()}}
                        <input type="hidden"name="_method" value="DELETE">
                        <button type="submit" value="SİL" class="sil btn btn-danger" onclick="return confirmDel('yonetici/{{$yonetici->id}};')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </a>
                    </form>



                </td>
                <th>{{$yonetici->id}}</th>
                <th>{{$yonetici->adi}}</th>
                <th>{{$yonetici->soyadi}}</th>


            </tr>
        @endforeach
        </tbody>
        </thead>
    </table>
</div>
<div></div>

</body>
</html>








