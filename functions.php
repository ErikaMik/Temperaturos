<?php

function getFeel($t) {
	if ($t > 30) {
		return "Karšta";

	} else if ($t >= 15) {
		return "Šilta";
	
	} else if ($t >=0 && $t <= 14) {
		return "Vėsu";
	}
}