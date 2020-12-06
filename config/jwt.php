<?php

return [

    /*
     *  Allows JWT algorithms
    */

    'algs' => ['HS256'],

    /*
     *  Used algorithm for JWT
    */
    'alg' => env('JWT_ALG', 'HS256'),

    /*
     *  JWT secret key
    */
    'secret' => env('JWT_SECRET', ''),

];
