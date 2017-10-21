<?php

	function runMyFunction() {
	$items =  get_items();
			
			foreach($items as $item){
				
				if ( $item['Location'] == $_POST['location']){

					echo '<strong>'.$item['Title'].': <br></strong>';
					echo $item['Description'].'<br><br>';
				}
			}

	}

	function runMyFunction2() {
	$items =  get_items();
			
			foreach($items as $item){
				echo '<strong>'.$item['Title'].': <br></strong>';
				echo $item['Description'].'<br><br>';

			}
	}


	if (isset($_GET['location'])) {
		echo $_GET['name'] ;
		if ( isset($_GET['location']) )
	    	runMyFunction( $_POST['name'],$_POST['location']);
	    else
	    	runMyFunction2($_POST['name']);
	}
					
?>