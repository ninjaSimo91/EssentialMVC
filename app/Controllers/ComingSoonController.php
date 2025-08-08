<?php

namespace Controllers;

use EssentialMVC\Controller;
use EssentialMVC\App;

class ComingSoonController extends Controller
{

    public function __construct(public App $app)
    {
        parent::__construct($app);
        $this->setLayout('coming-soon');
    }

    public function index()
    {
        if (getenv('MAINTENANCE') === 'true') {
            $this->render('coming-soon', []);
        } else {
            $this->app->response->redirect('/');
        }
    }
}
