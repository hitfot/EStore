<?php

    namespace core\admin\controller;

use core\admin\model\Model;
use core\base\controller\BaseController;

    class IndexController extends BaseController{

        protected function inputData(){

            $db = Model::instance();

            $table = 'article';
            
            $res = $db->get($table, [
                'fields' => ['id', 'name'],
                'where' => ['if' => 1, 'name' => 'Masha', 'id' => 1],
                'operand' => ['LIKE', 'LIKE%', '<>'],
                'condition' => ['OR'],
                'order' => ['name'],
                'order_direction' => ['DESC']
            ]);

            exit('I am admin panel');
            
        }

    }

?>