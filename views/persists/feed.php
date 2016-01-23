<?php
/**
 * Created by PhpStorm.
 * User: maxbook
 * Date: 22/01/16
 * Time: 11:33
 */
?>

<div id="feed">
    <?php
    if(!empty($articles))
    {
        /** @var ArticleEntity $article */
        foreach ($articles as $article)
        {
            ?>
            <div class="post">
                <?php

                switch($article->getStreamType()) {
                    case ArticleModel::EMAIL:
                        echo 'Email';
                        break;
                    case ArticleModel::RSS:
                        echo 'RSS';
                        break;
                    case ArticleModel::TWITTER:
                        echo 'Twitter';
                        break;
                }
                ?>
                <?= $article->getTitle(); ?>
                <hr>
                <?php
                if($article->getStreamType() == ArticleModel::TWITTER) {
                    preg_match_all('/<a[^>]+>/i', $article->getContent(), $result);
                    print_r($result);
                }
                ?>
            </div>
            <?php
        }
    }
    ?>
</div>
