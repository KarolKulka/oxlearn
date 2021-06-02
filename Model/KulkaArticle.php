<?php

namespace Kulka\OxLearn\Model;

class KulkaArticle extends KulkaArticle_parent
{
    /**
     * Method for loading random article from DB
     *
     * After changing extension Class form ArticleList to Article method needs to changed
     */
    public function kulka_loadRandomArticle(){
        $sArticleTable = getViewName('oxarticles');

        $this->selectString(
            "SELECT * FROM $sArticleTable WHERE $sArticleTable.oxparentid = '' ORDER BY RAND() LIMIT 1"
        );
    }
}
