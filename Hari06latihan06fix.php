<!DOCTYPE html>
<html>
<head>
<title>
Latihan looping
</title>
<meta charset="UTF-8"></meta>
</head>
<body>
<?php

$batasatas=9;
$batastengah=5;

for($x=0;$x<$batasatas;$x++)
{
    if($x<5)
    {
    echo"*<br>";
    }
    else
    {
  
    for($y=0;$y<$batastengah;$y++)
     {
     if($x==5 || $y==0 || $y==$batastengah-1) {echo"*";}
     else 
     {  

           echo "&nbsp;&nbsp;";
     }
    }
    echo"<br>";
   }
}

?>
</html>