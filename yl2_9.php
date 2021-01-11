<!-- Ülesanne 2_9 Mary-Ann Talvistu. 10/01/2021 -->
<?php
class auto{
    var $varv;
    var $tootja;
    var $kiirus = '0';
    function kiirendus() {
    for($this->kiirus; $this->kiirus <= 100; $this->kiirus+=10)
        echo "Kiirus: ".$this->kiirus."<br>";
    }
    function uus_auto() {
        echo "Minu uus ".$this->tootja." on ".$this->varv."<br><br>";
    }

}
$auto1 = new auto;
$auto1->tootja='Audi';
$auto1->varv='punane';
$auto1->kiirus=10;
$auto1->uus_auto();
$auto1->kiirendus();
