<?php

return [
    'users1' => [
        'base_uri' => env('USER1_SERVICE_BASE_URL', 'https://ddsbe1-iu8w.onrender.com/'),
        'secret' => env('USERS1_SERVICE_SECRET'),
    ],
    'users2' => [
        'base_uri' => env('USER2_SERVICE_BASE_URL', 'https://ddsbe2.onrender.com/'),
        'secret' => env('USERS2_SERVICE_SECRET'),
    ],
];