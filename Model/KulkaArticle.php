<?php

namespace Kulka\OxLearn\Model;

class KulkaArticle extends KulkaArticle_parent
{
    public function loadRandomArticle(){
        $sArticleTable = getViewName('oxarticles');

        $this->selectString(
            "SELECT * FROM $sArticleTable WHERE $sArticleTable.oxparentid = '' ORDER BY RAND() LIMIT 1"
        );
    }
}
