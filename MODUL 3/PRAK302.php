<!DOCTYPE html> 
<html> 
    <head>     
        <title>Soal 2</title>     
        <style>         
        img{             
            width: 20px;             
            height: 20px;         
            }     
            </style> 
            </head>

<body>
    <form action="" method="post">
        Tinggi :<input type="text" name="tinggi"> <br>
        Alamat Gambar : <input type="text" name="url"> <br>
        <input type="submit" value="cetak" name="submit">

    </form>
    <?php
    if (isset($_POST['submit'])) {

        $tinggi = $_POST['tinggi'];
        $url = $_POST['url'];

        $a = 1;
        while ($a <= $tinggi) {
            $b = 1;
            while ($b < $a) {
                echo "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;" . "&nbsp;";
                $b++;
            }
            $c = $tinggi;
            while ($c >= $a) {
                echo "<img src='$url'class='gambar'>";
                $c--;
            }
            echo '<br>';
            $a++;
        }
    }
    ?>
</body>

</html>