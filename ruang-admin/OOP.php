<?php 
    class oven{
        var $pemilik;
        var $merk;
        var $warna;
        var $tipe;
        var $ukuran;
        var $isian;

        function hidupkan_oven(){
            return "Hidupkan Oven";
        }
        function matikan_oven(){
            return "Matikan Oven";
        }
        function set_isian($isi){
            $this->isian = $isi;
        }
    }
    $oven_arkan = new oven();
    
    $oven_arkan->pemilik="arkan";
    $oven_arkan->merk="hock";
    $oven_arkan->warna="hitam";
    $oven_arkan->tipe="type b";
    $oven_arkan->isian="kosong";

    echo $oven_arkan->pemilik;
    echo "<br/>";
    echo $oven_arkan->merk;
    echo "<br/>";
    echo $oven_arkan->warna;
    echo "<br/>";
    echo $oven_arkan->tipe;
    echo "<br/>";
    echo $oven_arkan->isian;
    echo "<br/>";
    echo $oven_arkan->hidupkan_oven();
    $oven_arkan->set_isian('Ayam Goreng');
    echo "<br/>";
    echo $oven_arkan->isian;
    echo "<br/>";
    echo $oven_arkan->matikan_oven();
    echo "<br/>";

?>