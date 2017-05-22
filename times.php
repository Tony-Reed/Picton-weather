<?php

mb_internal_encoding("UTF-8");

//echo date((DATE_RFC850), 1494116640);
//echo date('l jS F Y H:i:s e', 1494116640);


$output = shell_exec('/usr/bin/bash parse_now.sh');
	printf($output);

