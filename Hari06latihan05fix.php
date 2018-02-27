<!DOCTYPE html>
<html>
<head>
<title>Latihan PHP</title>
<meta charset="UTF-8"></meta>
</head>
<body>
<?PHP
$siswa=array(0=>"Citra",1=>"Andre",2=>"Dona");
$nilaiMatematika=array("Citra"=>90,"Andre"=>80,"Dona"=>67);
if($nilaiMatematika["Citra"]>$nilaiMatematika["Andre"] && $nilaiMatematika["Citra"]>$nilaiMatematika["Dona"])
{
  
    echo "array \$siswa <br></br>";
    echo "array([0]=>\"Cika\",[1]=>\"Andre\",[2]=>\"Dona\") <br></br>";
    echo "array \$nilaiMatematika <br></br>";
    echo "array([Citra]=>90,[Andre]=>80,[Dona]=>67)";
    echo "<br></br>";
    echo "Bandingkan nilai Dona,Citra,ataukah Andre yang manakah paling besar di Matematika <br></br>";

    echo "Nilai ".$siswa[0]."Lebih besar dengan nilai".$nilaiMatematika["Citra"]."<br></br>";
  
}
else if($nilaiMatematika["Andre"]>$nilaiMatematika["Citra"] && $nilaiMatematika["Andre"]>$nilaiMatematika["Dona"])
{
   
    echo "array \$siswa <br></br>";
    echo "array([0]=>\"Cika\",[1]=>\"Andre\",[2]=>\"Dona\") <br></br>";
    echo "array \$nilaiMatematika <br></br>";
    echo "array([Citra]=>90,[Andre]=>80,[Dona]=>67)";
    echo "<br></br>";
    echo "Bandingkan nilai Dona,Citra,ataukah Andre yang manakah paling besar di Matematika <br></br>";

    echo "Nilai ".$siswa[1]."Lebih besar dengan nilai".$nilaiMatematika["Andre"]."<br></br>";
}
else
{
    echo "array \$siswa <br></br>";
    echo "array([0]=>\"Cika\",[1]=>\"Andre\",[2]=>\"Dona\") <br></br>";
    echo "array \$nilaiMatematika <br></br>";
    echo "array([Citra]=>90,[Andre]=>80,[Dona]=>67)";
    echo "<br></br>";
    echo "Bandingkan nilai Dona,Citra,ataukah Andre yang manakah paling besar di Matematika <br></br>";

    echo "Nilai ".$siswa[2]."Lebih besar dengan nilai".$nilaiMatematika["Dona"]."<br></br>";
}
?>
</body>
</html>