<?php
/**
 * 修改密码
**/
$mod='blank';
include("../include/common.php");
$title='修改密码';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
<?php
if(isset($_POST['submit'])) {
$oldpass=daddslashes($_POST['oldpass']);
if(md5($oldpass)!=$udata['pass']) {
	showmsg('原密码错误',4);
	exit;
}
$newpass=md5(daddslashes($_POST['newpass']));
$sql="update `black_admin` set `pass` ='{$newpass}' where `uid`='{$udata['uid']}'";
if($DB->query($sql)){
	setcookie("admin_token", "", time() - 604800);
	@header('Content-Type: text/html; charset=UTF-8');
	exit("<script language='javascript'>alert('修改成功，请重新登陆！');window.location.href='./login.php';</script>");
}else{
	showmsg('修改失败！<br/>'.$DB->error(),4,$_POST['backurl']);
	exit();
	}
}
?>
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">修改密码</h3></div>
        <div class="panel-body">
          <form action="" method="post" class="form-horizontal" role="form">
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
              <input type="password" name="oldpass" value="<?php echo @$_POST['oldpass'];?>" class="form-control" placeholder="旧密码" required="required"/>
            </div><br/>
            <div class="input-group">
              <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
              <input type="password" name="newpass" class="form-control" placeholder="新密码" required="required"/>
            </div><br/>
            <div class="form-group">
              <div class="col-xs-12"><input type="submit" name="submit" value="修改" class="btn btn-primary form-control"/></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>