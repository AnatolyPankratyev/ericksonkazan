<?php

namespace app\controllers\admin;

use RedBeanPHP\R;

class MainController extends AppController {

    public function indexAction(){
        $countNewRequests = R::count('request');
        $countUsers = R::count('user');
        $countProducts = R::count('product');
        $countCategories = R::count('category');
        $this->setMeta('Панель управления');
        $this->set(compact('countNewRequests', 'countCategories', 'countProducts', 'countUsers'));
    }


}