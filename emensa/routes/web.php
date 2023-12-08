<?php
/**
 * Mapping of paths to controllers.
 * Note, that the path only supports one level of directory depth:
 *     /demo is ok,
 *     /demo/subpage will not work as expected
 */

return array(
<<<<<<< Updated upstream
    '/'             => "HomeController@index",
    "/demo"         => "DemoController@demo",
=======
    '/public/'             => "MainPageController@mainPageController",
    '/demo'        => "DemoController@demo",
>>>>>>> Stashed changes
    '/dbconnect'    => 'DemoController@dbconnect',
    '/debug'        => 'HomeController@debug',
    '/error'        => 'DemoController@error',
    '/requestdata'   => 'DemoController@requestdata',

    // Erstes Beispiel:
    '/m4_6a_queryparameter' => 'ExampleController@m4_6a_queryparameter',
    '/m4' => 'ExampleController@m4_6a_queryparameter',
<<<<<<< Updated upstream

);
=======
    '/../public/m4_6a_queryparameter' => 'ExampleController@m4_6a_queryparameter',
    '/../public/m4_7a_queryparameter' => 'ExampleController@m4_7a_queryparameter',
    '/../public/m4_7b_kategorie' => 'ExampleController@m4_7b_kategorie',
    '/../public/m4_7c_gerichte' => 'ExampleController@m4_7c_gerichte',

    '/../public/m4_7d_page' => 'ExampleController@m4_7d_page',

    );
>>>>>>> Stashed changes
