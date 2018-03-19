<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">SAAT/GÜN</th>
            <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PAZARTESİ</th>
            <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SALI</th>
            <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ÇARŞAMBA</th>
            <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PERŞEMBE</th>
            <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CUMA</th>
            <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CUMARTESİ</th>
        </tr>
        </thead>
<form action="dersprogramiekle" method="get">
        <tbody>



        @for($j=8;$j<17;$j++)
            <tr>
                <th scope='row'><?php echo $j.":00"?></th>

                <?php $sayac=0?>
            @for($i=0;$i<6;$i++)

                <td><label class='col-md-0 control-label' ></label>
                    <div class='col-md-12'>

                        <select id='' name='<?php echo $sayac.$j; $sayac++; ?>' class='form-control'>

                            @foreach($dersListele as $item)

                                <option value='{{$item->dersadi}}'>{{$item->dersadi}}</option>";

                            @endforeach
                        </select>
                    </div>
                </td>
           @endfor
            </tr>
@endfor

        <tr>



        </tbody>
    </table>
                                            <div></div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label" for="submit"></label>
               <div class="col-md-4">
                     <p align="center"><button id="submit" name="submit" class="btn btn-primary">Ekle</button>
                </div>
   </div>

</form>


</head>
</html>