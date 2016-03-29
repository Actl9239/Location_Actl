<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller
{
	public function login()
    {
		$this->display();
	}

    public function read($id=0)
    {
        $Form=M('User');
        //读取数据
        $data= $Form->find($id);
        if ($id) {
            $this->assign('data',$data);//模板变量赋值
        }
        else
        {
            $this->error('数据错误');
        }
        $this->display();
    }

    // action URL/insert调用了insert方法
    public function insert(){
        $Form =D('User');
        if($Form->create())
        {
            $result=$Form->add();
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
            $this->error($Form->getError());
        }
        /*不通过表单 添加数据内容
        $Form= D('Form');
        $data['title']='Think';
        $data['content']= '内容';
        $Form->add($data);
        */
    }
 }