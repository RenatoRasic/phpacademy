<?php

class FormController
{
    /**
     * Registration page with form
     */

    public function index()
    {
        $view = new View();
        //$view->layout('layout');
        $view->render('form', [
            'message' => 'This is message passed from controller.'
        ]);
    }

    /**
     * Form submit
     */
    public function submit()
    {
        //@todo
    }

    /**
     * Thank you page
     */
    public function thankyou()
    {
        //@todo
    }

}