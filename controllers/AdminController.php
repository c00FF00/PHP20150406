<?php

require __DIR__ . '/../classes/News.php';

class AdminController {

    public function addNews() {
        include __DIR__ . '/../view/addnews.php';
    }
}