<?php if (!defined('THINK_PATH')) exit();?>
<html>


<body>

<table>
 <tr>
    <td>id:</td>
    <td><?php echo ($data["id"]); ?></td>
 </tr>
 <tr>
    <td>标题：</td>
    <td><?php echo ($title); ?></td>
 </tr>
 <tr>
    <td>内容：</td>
    <td><?php echo ($data["content"]); ?></td>
 </tr>
 </table>

 </body>
 </html>