<?php
namespace Home\Controller;
use Think\Controller;
class FormController extends Controller{

public function read($id=0){
    $Form   =   M('Form');
    // 读取数据
    /**
    $data =   $Form->find($id);
    if($data) {
        $this->assign('data',$data);// 模板变量赋值
    }else{
        $this->error('数据错误');
    }**/

 // 获取标题
    $title = $Form->where('id=6')->getField('title');
    //给模板变量赋值
    $this->assign('title',$title);
    $this->display();

 }


    public function insert(){
        $Form   =   D('Form');
        //创建表单
        if($Form->create()) {
            $result =   $Form->add();

            if($result) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }
        }else{
            $this->error($Form->getError());
        }

    }

     public function edit($id=0){
        $Form   =   M('Form');
        $this->assign('vo',$Form->find($id));
        $this->display();
     }


     public function update()
    {

        /**更新方法
        $Form= D('Form');
        if ($Form->create())
        {
            $result=$Form->save();
            if($result)
            {
                //Form页面弹出操作成功
                $this->success('操作成功');
            }
            else
            {
                $this->error('写入错误');
            }
        }
        else
        {
            $this->error($Form->getError());
        }**/

         /**不依赖表单提交 更新数据库 方法1
        $Form=M('Form');
        $data['id']=5;
        $data['title']='ThinkPHP';
        $data['content']='ThinkPHP3.2版本发布';
        $Form->save($data);**/

        /**
        $Form=M('Form');
        //要修改的数据对象属性赋值
        $Form->title="Think";
        $Form->content="Hello Think";
        $Form->where('id=5')->save();//根据条件保存修改的数据
        **/
        //链接数据库
        $Form = M("Form");
        // 更改title值
        $Form->where('id=5')->setField('title','ThinkPHP');


    }



 }