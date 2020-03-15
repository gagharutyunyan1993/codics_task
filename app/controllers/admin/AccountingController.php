<?php


namespace app\controllers\admin;


use RedBeanPHP\R;

class AccountingController extends AppController
{
    public function indexAction(){
        $this->setMeta('Учет');
        $earnings = R::getRow("SELECT SUM(`order_product`.`qty`) AS `qty_sum`, SUM(`order_product`.`price`) AS `price_sum` FROM `order_product`");
        $this->set(compact('earnings'));
    }


}