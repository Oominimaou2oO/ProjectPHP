<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 19/01/2016
 * Time: 14:07
 */
$view->extend('layouts/layout');
$this->render('persists/header');
echo $this->output('_content');
?>
<h1>
    <?php
    if (isset($channel))
    {
        echo '<a href="' . View::getUrlFromRoute('channel/' . $channel) . '">Blog de  ' . $this->escape($channel) . '</a>';
    }
    else
    {
        echo $this->escape($this->output('title', 'Mes actualités'));
    }
    ?>
</h1>
<div id="layout_connected">
    <?php
    if (isset($articles))
        $this->render('persists/feed', array('articles' => $articles));
    if (isset($categories))
        $this->render('persists/categories', array('categories' => $categories));
    if (isset($streams))
        $this->render('persists/streams', $streams);
    ?>
</div>