<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <title>添加年月日</title>
</head>
<body>
  <form action="/index.php/Home/News/archive" method="post" >
  <input type="text" id="id" name="id" class="form-control" placeholder="ID">ID:</br></br>
  <input type="text" id="name" name="name" class="form-control" placeholder="名字">Name:</br></br>
  <input type="text" id="year" name="year" class="form-control" placeholder="年">Year:</br></br>
  <input type="text" id="month" name="month" class="form-control" placeholder="月">Month:</br></br>

<button type="submit" class="btn btn-sm btn-info"><span class="glyphicon glyphicon-off"></span> 提交</button>
</form>

</body>
</html>