<?php
<<<<<<< Updated upstream
require_once($_SERVER['DOCUMENT_ROOT'].'/E-Mensa/emensa/models/gericht.php');
=======
require_once($_SERVER['DOCUMENT_ROOT'].'/../models/gericht.php');
>>>>>>> Stashed changes

/* Datei: controllers/HomeController.php */
class HomeController
{
    public function index(RequestData $request) {
        return view('home', ['rd' => $request ]);
    }
    
    public function debug(RequestData $request) {
        return view('debug');
    }
}