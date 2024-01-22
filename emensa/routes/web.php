    <?php
/**
 * Mapping of paths to controllers.
 * Note, that the path only supports one level of directory depth:
 *     /demo is ok,
 *     /demo/subpage will not work as expected
 */

return array(
    '/'             => "MainPageController@mainPageController",
    '/anmeldung' => 'AnmeldungController@anmeldung',
    '/reg' => 'AnmeldungController@reg',
    '/bewertungen' => 'BewertungController@bewertungen',
    '/meineBewertung' => 'BewertungController@meineBewertung',
    '/profil' => 'ProfilController@profil',
    '/abmelden' => 'AnmeldungController@abmelden',
    '/public/ver' => 'AnmeldungController@ver',
    "/demo"         => "DemoController@demo",
    '/dbconnect'    => 'DemoController@dbconnect',
    '/debug'        => 'HomeController@debug',
    '/error'        => 'DemoController@error',
    '/requestdata'   => 'DemoController@requestdata',

    // Erstes Beispiel:
    '/m4_6a_queryparameter' => 'ExampleController@m4_6a_queryparameter',
    '/m4' => 'ExampleController@m4_6a_queryparameter',
    '/m4_6a_queryparameter' => 'ExampleController@m4_6a_queryparameter',
    '/m4_7a_queryparameter' => 'ExampleController@m4_7a_queryparameter',
    '/m4_7b_kategorie' => 'ExampleController@m4_7b_kategorie',
    '/m4_7c_gerichte' => 'ExampleController@m4_7c_gerichte',

    '/m4_7d_page' => 'ExampleController@m4_7d_page',

    );