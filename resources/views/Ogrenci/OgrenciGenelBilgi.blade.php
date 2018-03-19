<!DOCTYPE html>
<html lang="en">
<head>
    <title>Öğrenci Bilgi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Öğrenci Genel Bilgileri</h2>
    <table class="table">
        <thead>
        @foreach($ogrenciBilgi as $ogrenci)
        <tr>
            <th>TC :</th>
            <td>{{$ogrenci->tc}} </td>

        </tr>
        </thead>
        <thead>
        <tr>
            <th>Ad :</th>
            <td>{{$ogrenci->adi}} </td>

        </tr>
        </thead>
        <thead>
        <tr>
            <th>Soyad :</th>
            <td>{{$ogrenci->soyadi}} </td>

        </tr>

        <thead>
        <tr>
            <th>Adres :</th>
            <td>{{$ogrenci->adres}} </td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th>Telefon :</th>
            <td>{{$ogrenci->telefon}} </td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th>Alan :</th>
            <td>{{$ogrenci->alan}} </td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th>Kullanıcı Adı :</th>
            <td>{{$ogrenci->kulaniciadi}} </td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th>Şifre :</th>
            <td>{{$ogrenci->sifre}} </td>
        </tr>

        @endforeach
        </thead>

    </table>
</div>

</body>
</html>

