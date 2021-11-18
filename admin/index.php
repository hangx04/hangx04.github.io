<?php
$mod='blank';
include("../include/common.php");
$title='航心互娱工作室后台';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">后台首页</h3></div>
          <ul class="list-group">
            <li class="list-group-item"><span class="glyphicon glyphicon-time"></span> <b>现在时间：</b> <?=$date?></li>
            <li class="list-group-item"><span class="glyphicon glyphicon-tint"></span> <b>欢迎你：</b> 超级管理员</li>
            <li class="list-group-item"><span class="glyphicon glyphicon-list"></span> <b>功能菜单：</b> 
              <a href="./siteset.php" class="btn btn-xs btn-success">site设置</a>
              <a href="./passwd.php" class="btn btn-xs btn-success">修改密码</a>
            </li>
          </ul>
      </div>
    </div>
  </div>