<!DOCTYPE html>
<html>
<head>
<title>Latihan PHP</title>
<meta charset="UTF-8"></meta>
</head>
<body>
<?PHP
$siswa=array(0=>"Cika",1=>"Andre",2=>"Dona");
$nilai=array(0=>90,1=>80,2=>67);
if($nilai[0]>$nilai[1] && $nilai[0]>$nilai[2])
{
    echo "List Nilai tertingi: <br></br>";
    echo "1. &nbps".$siswa[0]."Dengan nilai:".$nilai[0]."<br></br>";
    if($nilai[1]>$nilai[2])
    {
        echo "2. &nbps".$siswa[1]."Dengan nilai:".$nilai[1]."<br></br>";
        echo "3. &nbps".$siswa[2]."Dengan nilai:".$nilai[2]."<br></br>";
    }
    else
    {
        echo "2. &nbps".$siswa[2]."Dengan nilai:".$nilai[2]."<br></br>";
        echo "3. &nbps".$siswa[1]."Dengan nilai:".$nilai[1]."<br></br>";
    }
}
else if($nilai[1]>$nilai[0] && $nilai[1]>$nilai[2])
{
    echo "List Nilai tertingi: <br></br>";
    echo "1. &nbps".$siswa[1]."Dengan nilai:".$nilai[1]."<br></br>";
    if($nilai[2]>$nilai[0])
    {
        echo "2. &nbps".$siswa[2]."Dengan nilai:".$nilai[2]."<br></br>";
        echo "3. &nbps".$siswa[0]."Dengan nilai:".$nilai[0]."<br></br>";
    }
    else
    {
        echo "2. &nbps".$siswa[0]."Dengan nilai:".$nilai[0]."<br></br>";
        echo "3. &nbps".$siswa[2]."Dengan nilai:".$nilai[2]."<br></br>";
    }
}
else
{
    echo "List Nilai tertingi: <br></br>";
    echo "1. &nbps".$siswa[0]."Dengan nilai:".$nilai[0]."<br></br>";
    if($nilai[2]>$nilai[1])
    {
        echo "2. &nbps".$siswa[2]."Dengan nilai:".$nilai[2]."<br></br>";
        echo "3. &nbps".$siswa[1]."Dengan nilai:".$nilai[1]."<br></br>";
    }
    else
    {
        echo "2. &nbps".$siswa[1]."Dengan nilai:".$nilai[1]."<br></br>";
        echo "3. &nbps".$siswa[2]."Dengan nilai:".$nilai[2]."<br></br>";
    }
}
?>
</body>
</html>