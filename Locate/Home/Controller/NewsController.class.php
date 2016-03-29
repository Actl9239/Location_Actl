<?php
namespace Home\Controller;
use Think\Controller;
class NewsController extends Controller{

    public function insert()
    {
       $News =D('News');
        if($News->create())
        {
            $result=$News->add();
            if($result)
            {
                $this->success('数据添加成功！');
            }
            else
            {
                $this->error('数据添加错误！');
            }
        }
        else
        {
            $this->error($News->getError());
        }
    }
    public function read()
    {
      //读取函数
      $News=M('News');
      if(isset($_GET['id'])) {
            // 根据id查询结果
            $data = $News->find($_GET['id']);
        }
        else
        if(isset($_GET['name'])){
            // 根据name查询结果
            $data = $News->getByName($_GET['name']);
        }
        $this->data = $data;
        $this->display();
    }
    //归档函数
    public function archive(){
      //无需提交表单给Model类 进行检验
        $News = M('News');
        $year   =   $_GET['year'];
        $month  =   $_GET['month'];
        $begin_time = strtotime($year . $month . "01");
        $end_time = strtotime("+1 month", $begin_time);
        $map['create_time'] =  array(array('gt',$begin_time),array('lt',$end_time));
        //$map['status']  =   1;
        $list = $News->where($map)->select();
        $this->list =   $list;
        $this->display();
      }

}