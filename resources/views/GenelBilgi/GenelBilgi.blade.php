<!DOCTYPE html>
<html lang="en">
<head>
    <title>Öğrenci Bilgi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @include("Yonetici.YoneticiPanel")
</head>
<body>

<div class="container">
    <h2>Dershane Genel Bilgi</h2>
    <table class="table">
        <thead>

            <tr>
                <th>Toplam Gider :</th>
                <td>{{$toplamGelir}} </td>

            </tr>
        </thead>

        <thead>

        <tr>
            <th>Toplam Gelir :</th>
            <td>{{$toplamGider}} </td>

        </tr>
        </thead>

        <thead>

        <tr>
            <th>Aktif Okuyan Öğrenci Sayısı :</th>
            <td>{{$ogrenciSayisi}} </td>

        </tr>


        <thead>

        <tr>
            <th>Çalışan Personel Sayısı :</th>
            <td>{{$calisanSayisi}} </td>

        </tr>
        </thead>

    </table>
</div>

</body>
</html>

