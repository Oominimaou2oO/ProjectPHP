<?php

/**
 * Le Controlleur correspondant a l'index
 */

class IndexController extends Controller
{
    public function IndexAction(Request $request)
    {
        $this->loadModel('IndexModel');
        if ($request->getSession()->isGranted(Session::USER_IS_CONNECTED))
        {
            $this->render('layouts/home', array('home' => 'Connecté'));
        }
        else
        {
            $this->render('layouts/layoutNotConnected');
        }
    }

    public function RssAction()
    {
        $firstUpdate = new DateTime('01/01/2016');
        $lastUpdate = new DateTime('21/01/2016');
        //var_dump($feed->getPosts());
        $this->loadModel('RssModel');
        $this->rssmodel->createStream("http://www.journaldunet.com/rss/", time() - 608400);
        $this->rssmodel->cron($firstUpdate, $lastUpdate);

    }
}