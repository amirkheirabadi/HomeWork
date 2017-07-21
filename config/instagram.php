<?php

return [

	'client_id' 	=>  env('INSTAGRAM_KEY'),
	'client_secret' => env('INSTAGRAM_SECRET'),
	'redirect_uri' 	=> env('INSTAGRAM_CALLBACK'),
	'scopes'		=> 'basic public_content'

];	