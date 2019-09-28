<?php
/**
 * Created by PhpStorm.
 * User: tian yu
 * Date: 2018/1/18 0018
 * Time: 10:49
 */

namespace app\Manage\controller;

use app\common\controller\Manage;
use app\common\model\OperationLog as LogModel;
use Request;

class OperationLog extends Manage
{
    public function index()
    {
        $logModel = new LogModel();
        if(Request::isAjax())
        {
            $request = input('param.');
            return $logModel->tableData($request);
        }
        return $this->fetch();
    }

    public function getLastLog(){
        $logModel = new LogModel();
        $request['limit'] = 10;//最近10条数据
        return $logModel->tableData($request);
    }


    /**
     * 删除日志
     * @return array
     */
    public function delLog()
    {
        $result = [
            'status' => false,
            'msg' => '失败',
            'data' => ''
        ];

        $ids = input('ids/a', []);
        if(!$ids)
        {
            return $result;
        }
        $logModel = new LogModel();
        $res = $logModel->where([['id','in',$ids]])->delete();
        if($res !== false)
        {
            $result['msg'] = '删除成功';
            $result['status'] = true;
        }
        return $result;
    }

}