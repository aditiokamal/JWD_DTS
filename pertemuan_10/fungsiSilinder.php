<?php
    //deklarasi function menghitung silinder atau tabung
    function volumeSilinder($radius, $tinggi){
		$hitungVolumeSilinder = 3.14 * $tinggi * pow($radius,2);
		return $hitungVolumeSilinder;
	}
?>