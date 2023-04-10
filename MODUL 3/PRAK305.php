<!DOCTYPE html> 
<html > 
    <head>     
<title>Soal 5</title> 
</head>
<body>    
    <form method="post">         
    <input type="text"name="kata">       
    <input type="submit"value="submit">    
</form>
</br>     
<?php         
$Kata = NULL;         
if($_SERVER['REQUEST_METHOD']=='POST'){             
if(isset($_POST['kata'])){                 
$Kata=$_POST['kata'];                 
echo "<h2>Input:</h2> <br>$Kata<br>";                 
echo "<h2>Output:</h2> <br>";             
}         
}                  
for($i = 0 ;$i<strlen($Kata);$i++){             
    $katabesar = strtoupper($Kata);             
    echo $katabesar[$i];             
    for($j=1;$j<strlen($Kata);$j++){                 
        $katakecil = strtolower($Kata);                 
        echo $katakecil[$i];             
        }            
        }     
?> 
</body> 
</html>
