<!DOCTYPE html> 
<html > 
    <head>     
        <title>Soal 1</title> 
    </head> 
    <body>     
        <form method ="POST">         
            <label for="">Jumlah Peserta : </label>         
            <input type="text" name = "peserta" ><br>         
            <input type="submit" name = "cetak" value = "Cetak">     
        </form>     
        <?php
         $loop = 1;          
         $peserta =NULL;          
         if($_SERVER ["REQUEST_METHOD"]=="POST"){             
            if(isset($_POST['peserta'])){                 
                $peserta = $_POST['peserta'];}    
                }         
                while($loop <= $peserta){             
                    if($loop%2==0){                 
                        echo  "<h2  style  =  color:green>Peserta  ke-$loop </h2>";             
                        }             
                        else{                 
                            echo  "<h2  style  =  color:red>Peserta  ke-$loop </h2>";             
                            }             
                            $loop++;         
                            }     
                            ?> 
                            </body> 
                            </html>