<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2018/1/19
 * Time: 16:46
 */
namespace app\home\model;
use think\Exception;
use think\Log;
use think\Model;

class TaskCategory extends Base{

    //当前操作表
    protected $table = 'tb_task_category';
}