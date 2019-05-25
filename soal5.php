<?php
function ubah_kata($asli,$ganti,$gantikan) {

	$asli = str_split($asli);

	for($i=0; $i <count($asli) ; $i++) {
		if ($asli[$i] == $ganti) {
			$asli[$i] = $gantikan;
		}
	}
	$me = '';
	for ($i=0; $i < count($asli); $i++) {
		$me .=$asli[$i];

	}
	echo $me;
}

ubah_kata('purwakerto','a','o');



?>