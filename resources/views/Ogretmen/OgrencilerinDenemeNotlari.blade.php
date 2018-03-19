<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Deneme Notu Gir</title>
</head>
<body>
<div class="container">
    <h2>Öğrenci Deneme Bilgileri</h2>
    <table class="table" border="1">
        <thead>
        <tr class="active">
            <th>Deneme</th>
            <th>Ogrenci_id</th>
            <th>Puan</th>

        </tr>
        <?php  $denemeno=1; ?>
        @foreach($denemeNotlari as $deneme)

            <?php
            if($denemeno%2==0){

                echo "<tr class='success'>";
                $denemeno++;
            }
            else{
                echo "<tr class='info'>";
                $denemeno++;
            }

            ?>

            <td> {{$deneme->deneme_id}}.deneme </td>
            <td> {{$deneme->ogrenci_id}}</td>
            <td>{{$deneme->puan}}</td>
            </tr>
        @endforeach
        </thead>
        <tbody>



        </tbody>
    </table>
</div>

</body>
</html>

