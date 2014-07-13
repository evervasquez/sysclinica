<?php

class ErrorsController extends \BaseController {

    public function error404()
    {
        return View::make('error404');
    }
}