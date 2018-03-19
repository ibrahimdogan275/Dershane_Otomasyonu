<!DOCTYPE html>
<html lang="en">
<head>

    <title>DersProgrami</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Ders Proğramı...</h2>
    <table class="table">
        <thead>
        <tr>
            <th>SAAT/GÜN</th>
            <th>Pazartersi</th>
            <th>Salı</th>
            <th>Çarşamba</th>
            <th>Perşembe</th>
            <th>Cuma</th>
            <th>Cumartesi</th>
        </tr>
        </thead>
        <tbody>
        <?php $say=0?>
       @foreach($dersProgrami as $gun )
                <?php


                if($say==0){
                   echo "<tr class='success'>";

                    echo "<th>8:00</th>";
                }
                if($say==1){
                    echo "<tr class='danger'>";
                    echo "<th>9:00</th>";
                }
                if($say==2){
                    echo "<tr class='info'>";
                    echo "<th>10:00</th>";
                }
                if($say==3){
                    echo "<tr class='warning'>";
                    echo "<th>11:00</th>";
                }
                if($say==4){
                    echo "<tr class='active'>";
                    echo "<th>13:00</th>";
                }
                if($say==5){
                    echo "<tr class='success'>";

                    echo "<th>14:00</th>";
                }
                if($say==6){
                    echo "<tr class='info'>";

                    echo "<th>15:00</th>";
                }
                if($say==7){
                    echo "<tr class='warning'>";

                    echo "<th>16:00</th>";
                }

                 $say++;
                ?>

            <td>{{$gun->ptesi}}</td>
            <td>{{$gun->sali}}</td>
            <td>{{$gun->carsamba}}</td>
            <td>{{$gun->persembe}}</td>
            <td>{{$gun->cuma}}</td>
            <td>{{$gun->ctesi}}</td>
        </tr>
      @endforeach

        </tbody>
    </table>
</div>

</body>
</html>

