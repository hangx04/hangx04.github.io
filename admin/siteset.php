<?php
/**
 * 站点设置
**/
$mod='blank';
include("../include/common.php");
$title='站点设置';
include './head.php';
if($islogin==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");
?>
<?php
if(isset($_POST['submit'])) {
	$sitename=daddslashes($_POST['sitename']);
	$description=daddslashes($_POST['description']);
	$keywords=daddslashes($_POST['keywords']);
	saveconfig('sitename',$sitename);
	saveconfig('description',$description);
	saveconfig('keywords',$keywords);
	showmsg('修改成功！',1);
}else{
?>
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">站点设置</h3></div>
        <div class="panel-body">
          <form action="" method="post" class="form-horizontal" role="form">
            <div class="form-group">
              <label class="col-sm-2 control-label">站点名称</label>
              <div class="col-sm-10"><input type="text" name="sitename" value="<?php echo $sitename; ?>" class="form-control" required/></div>
            </div><br/>
			<div class="form-group">
              <label class="col-sm-2 control-label">SEO描述</label>
              <div class="col-sm-10"><input type="text" name="description" value="<?php echo $description; ?>" class="form-control" required/></div>
            </div><br/>
			<div class="form-group">
              <label class="col-sm-2 control-label">SEO关键词</label>
              <div class="col-sm-10"><input type="text" name="keywords" value="<?php echo $keywords; ?>" class="form-control" required/></div>
            </div><br/>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10"><input type="submit" name="submit" value="修改" class="btn btn-primary form-control"/>
            </div>
          </form>
        </div>
      </div>
<?php
}?>
    </div>
  </div>