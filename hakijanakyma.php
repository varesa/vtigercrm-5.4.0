<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hakijan koodi</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div style="width: 100px; margin: 0 auto;">
        <?php
            $weights = array(1, 3, 7, 1, 3, 7, 1, 3, 7);

            $id = $_GET['id'];
            $sum = 0;
            for($i = 0; $i < strlen($id); $i++) {
                $mul = $id[$i] * $weights[$i];
                $sum += $mul;
                //echo "$id[$i] * $weights[$i] = $mul<br>";
            }
            $check = $sum % 10;
            //echo "$sum % 10 = $check <br>";
            
            echo "<h3>Koodi: $id$check <h3><br>";
            echo "<a href='http://hakijat.intra.alrekry.fi/lomakkeet/show_form.php?id=$id$check'>Avaa tässä</a>"; 
        ?>
        </div>
    </div>
</body>
</html>
