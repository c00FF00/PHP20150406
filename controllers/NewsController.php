<?php

require __DIR__ . '/../model/News.php';


class NewsController {

    public function AllNews() {
        $model = new News();
        $result = $model->GetAllSubject();
        include $this->getTemlatePath();
    }

    protected function getTemlatePath() {
        return __DIR__ . '/../view/newssubject.php';
    }

}