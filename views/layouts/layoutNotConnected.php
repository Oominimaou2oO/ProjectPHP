<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 13/01/2016
 * Time: 11:44
 */
$view->extend('layouts/section_home');
$this->render('forms/loginForm');
$this->render('forms/preRegisterForm', $this->output('errors'));