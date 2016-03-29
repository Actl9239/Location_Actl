<?php
namespace Home\Model;
use Think\Model;
class NewsModel extends Model {
    // 定义自动验证
    protected $_validate    =   array(
        array('id','require','id必须填写'),
        array('name','require','name必须填写'),
        array('year','require','year必须填写'),
        array('month','require','month必须填写'),
        );
    // 定义自动完成
    protected $_auto    =   array(
        array('create_time','time',1,'function'),
        );

 }