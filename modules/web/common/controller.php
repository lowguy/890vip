<?php
/**
 * Created by PhpStorm.
 * User: Monk
 * Date: 2016/1/20
 * Time: 16:47
 */

namespace web\common;

use model\logic\Market;
use model\logic\Order;

class Controller{
    protected $view = null;

    public function __construct(){
        $this->view = new View();
        $this->view->css('bootstrap.css');
        $this->view->css('font-awesome.css');
        $this->view->css('bootstrap-responsive.css');
        $this->view->css('bootstrap-theme.css');
        $this->view->css('common.css');
        $this->view->js('jquery-1.11.3.js');
        $this->view->js('bootstrap.js');

    }

}