<?php
//Ülesanne 8. Mary-Ann Talvistu. 29/12/2020

//Kuva kuupäev ja kellaaeg formaadis 20.03.2023 17:31
echo date('d.m.Y G:i');
echo "<br><br>";

//Leia kui vana on või kui vanaks saab kasutaja sellel aastal
$vanus = date('Y') - 1984;
echo $vanus."<br><br>";

//Mitu päeva on käesoleva kooliaasta lõpuni?
$tana = new DateTime();
$lopp = date("Y") . "-05-25";
if (date("m") == 12 && date("d") > 25) {
    $lopp = (date("Y")+1)."-05-25";
}
$lopp = new DateTime($lopp);
$paevi = $lopp -> diff($tana);

echo $paevi->days."<br><br>";

//Väljasta vastavalt aastaajale pilt (kevad, suvi, sügis, talv)
//https://css-tricks.com/snippets/php/change-graphics-based-on-season/
function current_season()
{
    //piltide asukoht
    $icons = array(
        "spring" => "img/spring.jpg",
        "summer" => "img/summer.jpg",
        "autumn" => "img/autumn.jpg",
        "winter" => "img/winter.jpg"
    );

    //mis kuupäev täna on?
    $day = date("z");

    //kevad
    $spring_starts = date("z", strtotime("March 21"));
    $spring_ends = date("z", strtotime("June 20"));

    //suvi
    $summer_starts = date("z", strtotime("June 21"));
    $summer_ends = date("z", strtotime("September 22"));

    //sügis
    $autumn_starts = date("z", strtotime("September 23"));
    $autumn_ends = date("z", strtotime("December 20"));

    // Kas $day langeb kevadesse, suvve, sügisesse või talve
    if ($day >= $spring_starts && $day <= $spring_ends) :
        $season = "spring";
    elseif ($day >= $summer_starts && $day <= $summer_ends) :
        $season = "summer";
    elseif ($day >= $autumn_starts && $day <= $autumn_ends) :
        $season = "autumn";
    else :
        $season = "winter";
    endif;

    $image_path = $icons[$season];

    echo $image_path;


}
?>

<img src="<?php current_season() ?>" height="130" width="150" alt="" />