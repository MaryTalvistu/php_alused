<!-- Ülesanne 12. Mary-Ann Talvistu. 31/12/2020 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Yl 12</title>
    <style type="text/css">
        body {
            margin: 20px;
        }
    </style>
</head>
<body>

<form class="home-newsletter" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="form-group row">
        <label for="time" class="col-sm-2 m-3 col-form-label">Start (hh:mm):</label>
        <div class="col-sm-6">
            <input type="text" class="m-3 form-control" name="start">
        </div>
    </div>
    <div class="form-group row">
        <label for="time" class="col-sm-2 m-3 col-form-label">Lõpp (hh:mm):</label>
        <div class="col-sm-6">
            <input type="text" class="m-3 form-control" name="finish">
        </div>
    </div>
    <button class="btn btn-success m-5" name="submit" type="submit">Arvuta</button>
</form>
</body>
</html>
<?php

//Leia auto sõiduaeg tundides ja minutites.
// Lisa tühja välja kontroll ja näiteks, kas lisatud ajad on vähemalt viis sümbolit pikad.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //andmete kogumine vormist
  $start = $_POST['start'];
  $finish = $_POST['finish'];
  if (empty($start) || empty($finish) || strlen($start)!==5 || strlen($finish)!==5){
    echo "Sisend on vigane";
  } else {
      $timeStart = new DateTime($start);//string => date variable
      $timeEnd = new DateTime($finish);
      $interval = date_diff($timeStart, $timeEnd);//vahe leidmine
      echo $interval->format("%H:%I");// $interval->format("Days = %a Time = %H:%I:%S .");
  }
}

?>

<?php

//Kasuta tootajad.csv andmefaili.

// Koosta programm, mis analüüsib kas firmas toimub diskrimineerimist soo järgi.

//https://phpenthusiast.com/blog/parse-csv-with-php

$allikas = 'tootajad.csv';

$info = [];

//Ava fail lugemiseks
if (($ava = fopen("{$allikas}", "r")) !== FALSE)
{
    //Iga rida muudetakse massiiviks nimega $data
    while (($data = fgetcsv($ava, 1000, ";")) !== FALSE)
    {
        //Iga individuaalne massiiv on osa suurest massiivist $info
        $info[] = [(string)$data[0], (string)$data[1], (int)$data[2]];
    }

    //Faili sulgemine
    fclose($ava);
}

$mehed = array();
$naised = array();

foreach ($info as $isik) {
    if ($isik[1] == "m") {
        $mehed[] = $isik[2];
    } else {
        $naised[] = $isik[2];
    }
}


arsort($mehed);
arsort($naised);

$nkeskmine = array_sum($naised) / count($naised);
echo "Naiste keskmine palk on ".$nkeskmine.".<br><br>";

echo "Naiste kõrgeim palk on ".max($naised).".<br><br>";

$mkeskmine = array_sum($mehed) / count($mehed);
echo "Meeste keskmine palk on ".round($mkeskmine).".<br><br>";

echo "Meeste kõrgeim palk on ".max($mehed).".<br><br>";


?>

