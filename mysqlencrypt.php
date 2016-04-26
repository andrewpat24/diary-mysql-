<?php

	//$salt="sad67f5123fgh12f3hf47`io12389yhbsdm";
	
	
	echo md5(md5($row['id'])."password"); //recommended way to hash pw


?>