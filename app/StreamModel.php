<?php

/**
 * Created by PhpStorm.
 * User: l14011190
 * Date: 21/01/16
 * Time: 16:49
 */

interface StreamModel
{
    function cron(DateTime $firstUpdate, DateTime $lastUpdate);

    function createStream($data = array(), DateTime $firstUpdate);

    function getStreamById($id);
}