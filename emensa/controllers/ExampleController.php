<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/../models/kategorie.php');
<<<<<<< Updated upstream
=======
require_once ($_SERVER['DOCUMENT_ROOT'].'/../models/gericht.php');
>>>>>>> Stashed changes

class ExampleController
{
    public function m4_6a_queryparameter(RequestData $rd) {
        /*
           Wenn Sie hier landen:
           bearbeiten Sie diese Action,
           so dass Sie die Aufgabe löst
        */

        return view('notimplemented', [
            'request'=>$rd,
            'url' => 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"
        ]);
    }
}