<?php
include("./include/common.php");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<!--网站收录数据抓取-->
	<meta charset="UTF-8">
	<meta name="language" content="zh-CN">
	<meta name="title" content="<?php echo $title;?>">
	<meta name="author" content="<?php echo $author;?>">
	<meta name="description" content="<?php echo $description;?>">
	<meta name="keywords" content="<?php echo $keyword;?>">
	<meta name="robots" content="All">
	<!--数据抓取完成-->
	<title><?php echo $title;?></title>
	<!-- 调用ICON地址 -->
	<link rel="icon" href="img/cnm.sb.ico">
	<!-- 自适应 -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<!-- Css样式调用 -->
	<link rel="stylesheet" type="text/css" href="css/cnm.sb_load.css" />
	<link rel="stylesheet" type="text/css" href="css/cnm.sb_bg.css" />
	<link rel="stylesheet" type="text/css" href="css/cnm.sb_pc.css" />
	<link rel="stylesheet" type="text/css" href="css/cnm.sb_mp.css" />
	<!-- Javascript样式调用 -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/cnm.sb_judge.js"></script>
	<script src="js/cnm.sb_pc.js"></script>
	<script src="js/cnm.sb_mp.js"></script>
	<script src="js/cnm.sb_copy.js"></script>

</head>

<body>
	<!-- 电脑PC端 -->
	<div id="pc">
		<div id="content">
			<!-- 内容左侧选择区域 -->
			<ul id="cleft">
				<div class="cleft_top">
					<div class="cleft_topbg">
						<div class="cleftbg_img"><img src="http://q2.qlogo.cn/headimg_dl?dst_uin=<?php echo $qq;?>&spec=640" alt="头像"></div>
					</div>
					<div class="cleftbg_p">要每天都有好心情吖~</div>
				</div>
				<li id="cleft_li01" style="background-color: #ececec;"><img src="font/cnmsb01.png" /><span>官网首页</span>
				</li>
				<li id="cleft_li02"><img src="font/cnmsb02.png" /><span>关于本站</span></li>
				<li id="cleft_li03"><img src="font/cnmsb03.png" /><span>站长团队</span></li>
				<li id="cleft_li04"><img src="font/cnmsb04.png" /><span>商业合作</span></li>
				<li id="cleft_li05"><img src="font/cnmsb05.png" /><span>站点展示</span></li>
				<li id="cleft_li06" onclick="AddFavorite('<?php echo $title;?>官网',location.href)"><img
						src="font/cnmsb06.png" /><span>收藏页面</span></li>

				<!-- <li class="cleft_bottom"><img src="font/nav_bottom.png"><span>宽度设置</span></li> -->
			</ul>


			<!-- 内容左侧选择区域 -->
			<div id="cright">

				<!--第一页 - 首页-HTML页面-->
				<div id="nav01">
					<div class="nav01_left">
						<div class="nav01_logo">
							<img src="img/cnm.sb_logo.svg" />
							<h4><?php echo $weba;?><span><?php echo $webb;?></span></h4>
						</div>
						<div class="nav01_wz">
							<h5>初次见面，正在人间奋斗的你！</h5>
							<h1>欢迎来到</h1>
							<h4><?php echo $title;?></h4>
							<h3><?php echo $web;?></h3>
							<div class="bar"></div>
						</div>
						<div class="nav01_but">
							<div class="nav01_but01">探索</div>
							<div class="nav01_but02">商业合作</div>
						</div>
					</div>
					<div class="nav01_right">
						<div class="nav01_tpw">
							<h3><?php echo $author;?>是一位酷酷的站长</h3>
							<p>me a hard working hacker</p>
						</div>
						<div class="nav01_fpw">
							<p>愿成长- 不负众望</p>
						</div>
					</div>
					<!-- 版权信息，可修改,可删除,不强求 -->
					<div class="nav01_fooder">版权所有 <?php echo $title;?> &nbsp;&nbsp;|&nbsp;&nbsp; 备案号:<?php echo $record;?>
						&nbsp;&nbsp;|&nbsp;&nbsp; © 2020-2021 <?php echo $web;?> All Copyright Reserved</div>
				</div>


				<!-- 第二页 - 关于本站 -->
				<div id="nav02">
					<div class="nav02_bg">
						<div class="nav02_bt">关于本站</div>
					</div>
					<!-- 站长资料 -->
					<div class="nav02_kj" style="height: 600px;">
						<h3>😁站/长/资/料</h3>
						<div class="nav02_grzl_headimg">
							<img src="http://q2.qlogo.cn/headimg_dl?dst_uin=<?php echo $qq;?>&spec=640" alt="[头像]">
							<a href="mailto:<?php echo $mail;?>" target="_blank" rel="noopener noreferrer">联系站长</a>
						</div>
						<div class="nav02_grzl_txt">
							<p>网名：<?php echo $author;?></p>
							<p>QQ：<?php echo $qq;?></p>
							<p>邮箱：<?php echo $mail;?></p>
							<p>性别：<?php echo $gender;?></p>
							<p>年龄：<?php echo $year;?></p>
							<p>个人签名：<?php echo $signature;?></p>

						</div>
					</div>
					<!-- 个人介绍 -->
					<div class="nav02_kj">
						<h3>😁个/人/介/绍</h3>

						<p>
							本人学识渊博，经验丰富，代码风骚，效率恐怖。C/C＋＋，java，php无不精通，熟练掌握各种框架。
						</p>
						<p>
							会DDOS一秒钟死一个站，会注入，会上传，会Xss，会破解，会嗅探，会开发，会业务，会运维，会渗透。互联网内，我无处不在。
						</p>
						<p>
							全国漏洞认识深刻，熟练掌握各种操作系统内核。认真学习过《黑客攻防技术宝典》，《逆向工程》，《游戏waigua攻防艺术》等专业书籍。深山苦练十余载，一天只睡2小时。
						</p>
						<p>
							听指挥，执行快，脾气好，不喷人，操作虎，意识强，渗透快，shell多，能过狗，能过盾。
						</p>
						<p>
							千里之外取服务器首级，瞬息之间爆管理员狗头，压安全狗如压草芥。电话通知出Bug后，秒登vpn，千里之外定位问题，瞬息之间修复上线。
						</p>
						<p>
							只有你想不到的，没有我做不到的。
						</p>
						<p>
							以上都是吹的，我只会划水摸鱼，我是个废物。
						</p>
						<p>
							&nbsp;
						</p>
						<h3>😁网站的艰难运行环境</h3>
						<p>
							服务器时常罢工，官方部分站点已瘫痪，恢复时间不确定。网页访问速度相对较慢，请耐心等待。哈哈哈哈哈哈哈嗝~
						</p>
						<p>
							&nbsp;
						</p>

					</div>
					<!-- 知识掌握 -->
					<div class="nav02_kj mb03">
						<h3>知/识/掌/握</h3>
						<p>掌握的技能</p>
						<div>
							<img src="img/huashui.jpg" />
							<span>&nbsp;划水&nbsp;</span>
						</div>
						<div>
							<img src="img/huashui.jpg" />
							<span>&nbsp;划水&nbsp;</span>
						</div>
						<div>
							<img src="img/huashui.jpg" />
							<span>&nbsp;划水&nbsp;</span>
						</div>
						<div>
							<img src="img/huashui.jpg" />
							<span>&nbsp;划水&nbsp;</span>
						</div>
						<div>
							<img src="img/huashui.jpg" />
							<span>&nbsp;划水&nbsp;</span>
						</div>
						<p>精通掌握的技能</p>
						<div>
							<img src="img/huashui.jpg" />
							<span>&nbsp;摸鱼&nbsp;</span>
						</div>
						<div>
							<img src="img/huashui.jpg" />
							<span>&nbsp;摸鱼&nbsp;</span>
						</div>
					</div>

					<!-- 每日必做 -->
					<div class="nav02_kj mb04">
						<h3>每/日/必/做</h3>
						<div id="ejn">
							<a href="javascript:;">摸鱼摸鱼，摸鱼摸鱼，摸鱼摸鱼，摸鱼摸鱼，摸鱼摸鱼，摸鱼摸鱼</a>
							<a href="javascript:;">划水划水，划水划水，划水划水，划水划水，划水划水，划水划水</a>
							<a href="javascript:;">闲聊闲聊，闲聊闲聊，闲聊闲聊，闲聊闲聊，闲聊闲聊，闲聊闲聊</a>
							<a href="javascript:;">abcdefghigklmnopqrstuvwxyz</a>
							<a href="javascript:;">ABCDEFGHIJKLMNOPQRSTUVWXYZ</a>
						</div>
					</div>
					<!-- 到底了-提示 -->
					<p class="ebpx">--- 暂时先展示这么多啦 ---</p>
				</div>

				<!-- 第三页 - 站长团队 -->
				<div id="nav03">
					<div class="enav03_p">
						<h3><?php echo $titlea;?><span><?php echo $titleb;?></span></h3>
						<h5><?php echo $signature;?></h5>
						<p>2020-2021</p>
						<p>我们是黑暗中照亮书本的明灯，光明下抒写思绪的墨笔。</p>

					</div>
					<div class="enav03_team">
						<img src="img/cnmteam01.png" alt="[组织者]">
						<img src="img/cnmteam02.png" alt="[组织者]">
						<img src="img/cnmteam03.png" alt="[组织者]">
						<img src="img/cnmteam04.png" alt="[组织者]">
						<img src="img/cnmteam05.png" alt="[组织者]">
					</div>
				</div>

				<!-- 第四页 - 商业合作 -->
				<div id="nav04">
					<div class="nav04_bg"></div>
					<div class="nav04_zsc">
						<div>
							<p>商业合作 - 微信二维码</p>
							<img src="img/qywx.png" alt="[企业微信二维码]" title="[企业微信二维码]">
						</div>
						<p>即使夜深人静，我们依然在努力！</p>
					</div>
				</div>

				<!-- 第五页 - 站点展示 -->
				<div id="nav05">
					<!-- 第五页-头部图片动态 -->
					<div class="nav05_top">
						<div class="nav05_topbgkj">
							<div class="nav05_top_bg"></div>
							<div class="nav05_top_tx01"></div>
							<div class="nav05_top_tx02"></div>
						</div>
						<div class="nav05_top_fj"><img src="img/nav05_fj.png" alt="△"></div>
					</div>
					<!-- 第五页-内容区域 -->
					<div class="nav05_centent">
						<div class="nav05_centent_tit">
							<h1>🦄官方站点🦄</h1>
							<p>注:如果官方站点打不开则因为服务器罢工了</p>
						</div>
						<!-- 作品展示模板NO1 -->
						<div class="nav05_centent_mb">
							<a href="http://blog.hangx.work" target="_blank" rel="noopener noreferrer">
								<div><img src="img/nav05_zp01.jpg" alt="[]"></div>
								<h3>个人博客</h3>
								<p>爱生活，爱分享</p>
							</a>
							<div>立即前往</div>
						</div>
						<!-- 作品展示模板NO2 -->
						<div class="nav05_centent_mb">
							<a href="http://bbs.hangx.work/" target="_blank" rel="noopener noreferrer">
								<div><img src="img/nav05_zp02.jpg" alt="[]"></div>
								<h3>官方论坛</h3>
								<p>你喜欢的这里都有哦~</p>
							</a>
							<div>立即前往</div>
						</div>
						<!-- 作品展示模板NO3 -->
						<div class="nav05_centent_mb">
							<a href="http://class.hangx.work/" target="_blank" rel="noopener noreferrer">
								<div><img src="img/nav05_zp03.jpg" alt="[]"></div>
								<h3>同学录</h3>
								<p>致敬我们的青春！</p>
							</a>
							<div>立即前往</div>
						</div>
					</div>


					<div class="nav05_centent">
						<div class="nav05_centent_tit">
							<h1>🦄团队成员·优秀站点🦄</h1>
							<p>优秀的站点，就要被展示出来！</p>
						</div>
						<!-- 作品展示模板NO1 -->
						<div class="nav05_centent_mb">
							<a href="http://blog.hangx.work" target="_blank" rel="noopener noreferrer">
								<div><img src="img/nav05_zp01.jpg" alt="[]"></div>
								<h3>个人博客</h3>
								<p>爱生活，爱分享</p>
							</a>
							<div>立即前往</div>
						</div>
						<!-- 作品展示模板NO2 -->
						<div class="nav05_centent_mb">
							<a href="http://bbs.hangx.work/" target="_blank" rel="noopener noreferrer">
								<div><img src="img/nav05_zp02.jpg" alt="[]"></div>
								<h3>官方论坛</h3>
								<p>你喜欢的这里都有哦~</p>
							</a>
							<div>立即前往</div>
						</div>
						<!-- 作品展示模板NO3 -->
						<div class="nav05_centent_mb">
							<a href="http://class.hangx.work/" target="_blank" rel="noopener noreferrer">
								<div><img src="img/nav05_zp03.jpg" alt="[]"></div>
								<h3>同学录</h3>
								<p>致敬我们的青春！</p>
							</a>
							<div>立即前往</div>
						</div>
					</div>
					<p class="nav05_footer">你有酷酷或者实用的站点推荐嘛？~</p>
				</div>



			</div>


		</div>



		<!-- 入场动画 -->
		<div id="etext"></div>

		<!-- 背景图片+背景灰度 -->
		<div id="ebg"></div>
		<div id="ebga"></div>

		<!-- 背景飘落 -->
		<div id="xuna"></div>
		<script src="js/cnm.sb_bg.js"></script>
	</div>




	<!-- 手机MP端 -->
	<div id="mp">
		<div id="excontent">
			<!-- NO1-首页内容 -->
			<div id="exnav01">
				<div class="exn1_top">
					<img src="img/cnm.sb.svg" />
					<span><?php echo $web;?></span>
				</div>
				<div class="exn1_banner">
					<h3>欢迎来到</h3>
					<p><?php echo $description;?>~</p>
					<p>API延缓加载速度，请耐心等待</p>
				</div>
				<ul class="exn1_but">
					<li id="exn1_01">
						<div><img src="font/cnmsb01.png" /></div>
						<h5>官网首页</h5>
						<p>当前页面-可以前往<span class="red">PC端</span>观看美景哟！</p>
					</li>
					<li id="exn1_02">
						<div><img src="font/cnmsb02.png" /></div>
						<h5>关于本站</h5>
						<p>关于本站站长的相关信息与爱好哟！</p>
					</li>
					<li id="exn1_03">
						<div><img src="font/cnmsb03.png" /></div>
						<h5>站长团队</h5>
						<p>站长的小伙伴们，也许你也可以加入喔~</p>
					</li>
					<li id="exn1_04">
						<div><img src="font/cnmsb04.png" /></div>
						<h5>商业合作</h5>
						<p>想找我们定制模板？谈合作？点这里！</p>
					</li>
					<li id="exn1_05">
						<div><img src="font/cnmsb05.png" /></div>
						<h5>站点展示</h5>
						<p>这里包含了站长的所有奇怪的站点哟！</p>
					</li>
				</ul>
			</div>
			<!-- NO2-关于本站 -->
			<div id="exnav02">
				<div class="exn02_bg">
					<p>关于本站</p>
				</div>
				<div class="exn02_zl">
					<h3 class="exn_bt">站/长/资/料</h3>
					<div class="exn02_kjt">
						<p>网名：<?php echo $author;?></p>
						<p>QQ：<?php echo $qq;?></p>
						<p>邮箱：<?php echo $mail;?></p>
						<p>性别：<?php echo $gender;?></p>
						<p>年龄：<?php echo $year;?></p>
						<p>个人签名：<?php echo $signature;?></p>
					</div>
				</div>
				<div class="exn02_zl">
					<h3 class="exn_bt">个/人/介/绍</h3>
					<div class="exn02_kjt">

						<p>
							本人学识渊博，经验丰富，代码风骚，效率恐怖。C/C＋＋，java，php无不精通，熟练掌握各种框架。
						</p>
						<p>
							会DDOS一秒钟死一个站，会注入，会上传，会Xss，会破解，会嗅探，会开发，会业务，会运维，会渗透。互联网内，我无处不在。
						</p>
						<p>
							全国漏洞认识深刻，熟练掌握各种操作系统内核。认真学习过《黑客攻防技术宝典》，《逆向工程》，《游戏waigua攻防艺术》等专业书籍。深山苦练十余载，一天只睡2小时。
						</p>
						<p>
							听指挥，执行快，脾气好，不喷人，操作虎，意识强，渗透快，shell多，能过狗，能过盾。
						</p>
						<p>
							千里之外取服务器首级，瞬息之间爆管理员狗头，压安全狗如压草芥。电话通知出Bug后，秒登vpn，千里之外定位问题，瞬息之间修复上线。
						</p>
						<p>
							只有你想不到的，没有我做不到的。
						</p>
						<p>
							以上都是吹的，我只会划水摸鱼，我是个废物。
						</p>
						<p>
							&nbsp;
						</p>

						<h3>😁网站的艰难运行环境</h3>
						<p>
							服务器时常罢工，官方部分站点已瘫痪，恢复时间不确定。网页访问速度相对较慢，请耐心等待。哈哈哈哈哈哈哈嗝~
						</p>
						<p>
							&nbsp;
						</p>


					</div>
				</div>
				<div class="exn02_kj exmb03">
					<h3 class="exn_bt">知/识/掌/握</h3>
					<p>已掌握的技能</p>
					<div>
						<img src="img/huashui.jpg" />
						<span>划水</span>
						<span>划水摸鱼</span>
					</div>
					<div>
						<img src="img/huashui.jpg" />
						<span>划水</span>
						<span>划水摸鱼</span>
					</div>
					<div>
						<img src="img/huashui.jpg" />
						<span>划水</span>
						<span>划水摸鱼</span>
					</div>
					<div>
						<img src="img/huashui.jpg" />
						<span>划水</span>
						<span>划水摸鱼</span>
					</div>
					<div>
						<img src="img/huashui.jpg" />
						<span>划水</span>
						<span>划水摸鱼</span>
					</div>

					<p>精通掌握的技能</p>
					<div>
						<img src="img/huashui.jpg" />
						<span>摸鱼</span>
						<span>摸鱼划水</span>
					</div>
					<div>
						<img src="img/huashui.jpg" />
						<span>摸鱼</span>
						<span>摸鱼划水</span>
					</div>
				</div>

				<!-- 每日必做 -->
				<div class="exn02_kj exmb04">
					<h3 class="exn_bt">每/日/必/做</h3>
					<div id="exjn">
						<a href="javascript:;">摸鱼摸鱼，摸鱼摸鱼，摸鱼摸鱼，摸鱼摸鱼，摸鱼摸鱼，摸鱼摸鱼</a>
						<a href="javascript:;">划水划水，划水划水，划水划水，划水划水，划水划水，划水划水</a>
						<a href="javascript:;">闲聊闲聊，闲聊闲聊，闲聊闲聊，闲聊闲聊，闲聊闲聊，闲聊闲聊</a>
						<a href="javascript:;">abcdefghigklmnopqrstuvwxyz</a>
						<a href="javascript:;">ABCDEFGHIJKLMNOPQRSTUVWXYZ</a>
					</div>
				</div>
				<!-- 到底了-提示 -->
				<p class="exbpx">--- 暂时先展示这么多啦 ---</p>
			</div>
			<!-- NO3-站长团队 -->
			<div id="exnav03">
				<div class="exnav03_p">
					<h3><?php echo $titlea;?><span><?php echo $titleb;?></span></h3>
					<h5><?php echo $signature;?></h5>
					<p>2020-2021</p>
					<p>我们是黑暗中照亮书本的明灯，光明下抒写思绪的墨笔。</p>
				</div>
				<div class="exnav03_team">
					<img src="img/cnmteam01.png" alt="[组织者]" />
					<img src="img/cnmteam02.png" alt="[组织者]" />
					<img src="img/cnmteam03.png" alt="[组织者]" />
					<img src="img/cnmteam04.png" alt="[组织者]" />
					<img src="img/cnmteam05.png" alt="[组织者]" />
				</div>
			</div>
			<!-- NO4-商业合作 -->
			<div id="exnav04">
				<div class="exnav04_zsc">
					<div>
						<p>商业合作 - 微信二维码</p>
						<img src="img/qywx.png" alt="[联系二维码]" title="[联系二维码]">
					</div>
					<p>即使夜深人静，我们依然在努力！</p>
				</div>
			</div>
			<!-- NO5-站点展示 -->
			<div id="exnav05">
				<div class="exn5_bg">
					<div class="exn5_bg_nav">
						<img src="img/nav05_fj.png" />
						<span>站点展示</span>
					</div>
				</div>
				<!-- 第五页-内容区域 -->
				<div class="exn5_nr">
					<div class="exnav05_centent_tit">
						<h2>🦄官方站点🦄</h2>
						<p>注:如果官方站点打不开则因为服务器瘫痪了</p>
					</div>
					<!-- 作品展示模板NO1 -->
					<div class="exnav05_centent_mb">
						<h2>官方站点</h2>
						<a href="http://blog.hangx.work/" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp01.jpg" alt="[]" /></div>
							<h3>个人博客</h3>
							<p>爱生活，爱分享</p>
						</a>
						<div>立即前往</div>
					</div>
					<!-- 作品展示模板NO2 -->
					<div class="exnav05_centent_mb">
						<a href="http://bbs.hangx.work/" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp02.jpg" alt="[]" /></div>
							<h3>官方论坛</h3>
							<p>你喜欢的这里都有</p>
						</a>
						<div>立即前往</div>
					</div>
					<!-- 作品展示模板NO3 -->
					<div class="exnav05_centent_mb">
						<a href="http://class.hangx.work" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp03.jpg" alt="[]" /></div>
							<h3>同学录</h3>
							<p>致敬我们的青春！</p>
						</a>
						<div>立即前往</div>
					</div>
				</div>

				<!--团队成员优秀站点-->
				<div class="exn5_nr">
					<div class="exnav05_centent_tit">
						<h2>🦄团队成员·优秀站点🦄</h2>
						<p>优秀的站点就应该被展示出来！</p>
					</div>
					<!-- 作品展示模板NO1 -->
					<div class="exnav05_centent_mb">
						<a href="http://blog.hangx.work/" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp01.jpg" alt="[]" /></div>
							<h3>个人博客</h3>
							<p>爱生活，爱分享</p>
						</a>
						<div>立即前往</div>
					</div>
					<!-- 作品展示模板NO2 -->
					<div class="exnav05_centent_mb">
						<a href="http://bbs.hangx.work/" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp02.jpg" alt="[]" /></div>
							<h3>官方论坛</h3>
							<p>你喜欢的这里都有</p>
						</a>
						<div>立即前往</div>
					</div>
					<!-- 作品展示模板NO3 -->
					<div class="exnav05_centent_mb">
						<a href="http://class.hangx.work" target="_blank" rel="noopener noreferrer">
							<div><img src="img/nav05_zp03.jpg" alt="[]" /></div>
							<h3>同学录</h3>
							<p>致敬我们的青春！</p>
						</a>
						<div>立即前往</div>
					</div>
				</div>
				<p class="exnav05_footer">你有酷酷或者实用的站点推荐嘛？~</p>
			</div>
		</div>
		<!-- 页面截止 -->
		<!-- 导航区域 -->
		<ul id="exnav">
			<li><img src="font/cnmsb01.png" />
				<p>首页</p>
			</li>
			<li><img src="font/cnmsb02.png" />
				<p>关于本站</p>
			</li>
			<li><img src="font/cnmsb03.png" />
				<p>站长团队</p>
			</li>
			<li><img src="font/cnmsb04.png" />
				<p>商业合作</p>
			</li>
			<li><img src="font/cnmsb05.png" />
				<p>站点展示</p>
			</li>
		</ul>
		<!-- 背景飘落 -->
		<div id="xuna"></div>
		<script src="js/cnm.sb_bg.js"></script>
	</div>

	<p id="eixp">当你在凝视深渊的时候，深渊也正在凝视着你！</p>

</body>

</html>