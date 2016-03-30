<?php
	exit; 
	/* NOTE: This file not in use - Needs to be removed. */ 
	
	foreach($__FILES as $key=>$val) {
		foreach ($val as $i=>$v){
			$__FILES[$i]=$val[$i];
		}	
	}
	foreach($__FILES as $key=>$details) {
		$isFile = is_uploaded_file($__FILES[$key]['tmp_name']); 
		$target = "test/".basename($__FILES[$key]['name']) ;
			if($isFile && $__FILES[$key]['error']!= 4){
				echo '<textarea name='.$__FILES[$key]['name'].' id='.$key.'>';
				move_uploaded_file($__FILES[$key]['tmp_name'],$target);
				echo '</textarea>';
			}
	}
		//echo serialize($__FILES);
?>