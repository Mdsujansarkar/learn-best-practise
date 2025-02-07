<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    echo '    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f0f0f0; /* Optional: Add a background color */
        }

        h1 {
            text-align: center;
            color: #333; /* Optional: Change text color */
        }
    </style>';
    echo '<h1>Make Something Nice</h1>';
});

