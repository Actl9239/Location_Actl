<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
    // 定义自动验证
    protected $_validate    =   array(
        array('user','require','用户名不能为空'),
        array('pwd','require','密码不能为空'),
        );


    // 定义自动完成
    protected $_auto    =   array(
        array('create_time','time',1,'function'),
        );
 }
