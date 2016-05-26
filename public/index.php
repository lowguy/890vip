<?php
/**
 * User: Fox
 * Date: 2016/05/25
 * Time: 12:36
 */

chdir(dirname(__DIR__));

require_once 'modules/web/common/app.php';
$app = \web\common\App::instance();

try{
    $app->run();
}
catch (Exception $e){
    $log_file = date('Y-m-d') . 'run.log';
    file_put_contents($log_file, PHP_EOL . date('Y-m-d H:i:s') . PHP_EOL, FILE_APPEND);
    file_put_contents($log_file, $e, FILE_APPEND);
    \web\common\Request::instance()->FOF();
}
