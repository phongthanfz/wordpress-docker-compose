<?php

//
// redis config cache
//
define( 'W3TC_CONFIG_CACHE_ENGINE', 'redis');
define( 'W3TC_CONFIG_CACHE_REDIS_SERVERS', 'redis:6379' );

// optional redis settings
define( 'W3TC_CONFIG_CACHE_REDIS_PERSISTENT', true );
define( 'W3TC_CONFIG_CACHE_REDIS_DBID', 0 );
define( 'W3TC_CONFIG_CACHE_REDIS_PASSWORD', '' );
