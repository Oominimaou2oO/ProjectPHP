<?php

/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 16/12/2015
 * Time: 14:37
 */
class IndexController extends Controller
{
    public function __construct() {
        parent::__construct(new IndexModel());
    }

    public function IndexAction()
    {
        $this->render('persists/home');
    }
}