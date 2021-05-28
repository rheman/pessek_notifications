<?php

return [

	'db.notifications' => \DI\object(\Pessek\PessekNotifications\SiteNotificationsTable::class)
		->constructor(\DI\get('db')),

	'db.digest' => \DI\object(\Pessek\PessekNotifications\DigestTable::class)
		->constructor(\DI\get('db')),

	'notifications.site' => \DI\object(\Pessek\PessekNotifications\SiteNotificationsService::class)
		->constructor(\DI\get('db.notifications')),

	'notifications.digest' => \DI\object(\Pessek\PessekNotifications\DigestService::class)
		->constructor(\DI\get('db.digest')),
];
