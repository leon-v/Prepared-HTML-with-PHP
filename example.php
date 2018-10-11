?0<input type="?1" name="?2" value="?3" data-categories="?4">
<?
prep('Label', 'number', 'quantity', '10', [1,2,77,2,4,7,7]);





function prep(...$la_args){

	$la_reaplce = array_fill(0, count($la_args), '?');

	foreach ($la_reaplce as $li_index => &$ls_repalce){
		$ls_repalce.=$li_index;

		if (is_string($la_args[$li_index])) {
			$la_args[$li_index] = htmlentities($la_args[$li_index]);
		}
		elseif (is_array($la_args[$li_index])) {
			$la_args[$li_index] = htmlentities(implode(',', $la_args[$li_index]));
		}
	}
	
	$li_count = 1;
	echo str_replace($la_reaplce, $la_args, ob_get_clean(), $li_count);

	ob_start();
}
?>
