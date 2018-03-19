<!DOCTYPE html>
<html lang="en">
<head>
    <title>Öğretmen Bilgi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Ogretmen Genel Bilgileri</h2>
    <table class="table" border="1">
        <thead>
        @foreach($ogretmenBilgi as $ogretmen)
            <tr>
                <th>TC :</th>
                <td>{{$ogretmen->tc}} </td>

            </tr>
        </thead>
        <thead>
        <tr>
            <th>Ad :</th>
            <td>{{$ogretmen->adi}} </td>

        </tr>
        </thead>
        <thead>
        <tr>
            <th>Soyad :</th>
            <td>{{$ogretmen->soyadi}} </td>

        </tr>

        <thead>
        <tr>
            <th>Adres :</th>
            <td>{{$ogretmen->adres}} </td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th>Telefon :</th>
            <td>{{$ogretmen->telefon}} </td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th>Branş :</th>
            <td>{{$ogretmen->brans}} </td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th>Kullanıcı Adı :</th>
            <td>{{$ogretmen->kulaniciadi}} </td>
        </tr>
        </thead>
        <thead>
        <tr>
            <th>Şifre :</th>
            <td>{{$ogretmen->sifre}} </td>
        </tr>
        <tr>
            <th>Maaş :</th>
            <td>{{$ogretmen->maas}} </td>
        </tr>

        @endforeach
        </thead>

    </table>
</div>

</body>
</html>

