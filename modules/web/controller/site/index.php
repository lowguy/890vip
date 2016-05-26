<?php
/**
 * Created by PhpStorm.
 * User: Monk
 * Date: 2016/1/8
 * Time: 13:58
 */
namespace web\controller\site;

use model\logic\User;
use web\common\Controller;
class Index extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
#       	$user = new User();
#	$data = $user->lists();
	$this->view->render();
    }
}
