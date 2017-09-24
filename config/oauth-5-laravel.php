<?php

return [

	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => '\\OAuth\\Common\\Storage\\Session',

	/**
	 * Consumers
	 */
	'consumers' => [

        'Google' => [
            'client_id'     => '547311092140-46lcjqpt6bmfnobfknidgh798glcokco.apps.googleusercontent.com',
            'client_secret' => 'M-Et3EPe68wM4f-gQ7qbnI7N',
            'scope'         => ['userinfo_email', 'userinfo_profile'],
        ],

    ]

];