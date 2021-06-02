<?php

namespace Kulka\OxLearn\Model;

class KulkaArticleList extends KulkaArticleList_parent
{
    public function loadRandomParentId(){
        $this->selectString(
            "SELECT oxarticles.OXPARENTID FROM oxarticles WHERE OXPARENTID != '' ORDER BY RAND() LIMIT 1"
        );
    }
}
