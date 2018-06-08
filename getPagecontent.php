<?php

	if (isset($_REQUEST['id'])) {
			$page = $_REQUEST['id'];
			
			$page_data = explode("/", $page);
		

			if(file_exists('pages/'.$page_data[0].'.php'))
			{
					require_once('pages/'.$page_data[0].'.php');
			}
			else 
			{
					echo 'There is no such page!';
			}
					
	}

	?>
