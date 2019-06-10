<?php

// This is the database connection configuration.
if(strpos($_SERVER['HTTP_HOST'], '.app') === false) {
    return array(
        // Production
        'connectionString' => 'mysql:host=localhost;dbname=engagex_ehrapplication',
        'emulatePrepare' => true,
        'username' => 'engagex_hraplcnt',
        'password' => '[vDbWz-gg(n8',
        'charset' => 'utf8',
    );
} else {
    return array(
        // Local Machine
        'connectionString' => 'mysql:host=localhost;dbname=engagex_ehrapplication',
        'emulatePrepare' => true,
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8',
    );
}