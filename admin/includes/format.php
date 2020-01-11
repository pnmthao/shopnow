<?php

function number_format_short( $n, $precision = 1 ) {
	if ($n < 900) {
		// 0 - 900
		$n_format = number_format($n, $precision);
		$suffix = '';
	} else if ($n < 900000) {
		// 0.9k-850k
		$n_format = number_format($n / 1000, $precision);
		$suffix = 'K';
	} else if ($n < 900000000) {
		// 0.9tr-850tr
		$n_format = number_format($n / 1000000, $precision);
		$suffix = 'TR';
	} else if ($n < 900000000000) {
		// 0.9t-850t
		$n_format = number_format($n / 1000000000, $precision);
		$suffix = 'T';
	} else {
		// 0.9nt
		$n_format = number_format($n / 1000000000000, $precision);
		$suffix = 'NT';
	}
  // xóa khoảng trắng sau dãy decimal. "1.0" -> "1"; "1.00" -> "1"

	if ( $precision > 0 ) {
		$dotzero = '.' . str_repeat( '0', $precision );
		$n_format = str_replace( $dotzero, '', $n_format );
	}
	return $n_format . $suffix;
}

?>
