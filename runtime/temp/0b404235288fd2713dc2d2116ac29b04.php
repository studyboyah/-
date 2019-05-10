<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"F:\tp5\public/../application/index\view\personnel\peoplelist.html";i:1514015501;s:58:"F:\tp5\public/../application/index\view\public\header.html";i:1513940657;s:58:"F:\tp5\public/../application/index\view\public\footer.html";i:1514014160;s:60:"F:\tp5\public/../application/index\view\public\location.html";i:1513914309;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- 可选的Bootstrap主题文件（一般不使用） -->
	<!--<script src="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>-->

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->	
	<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="__JS__/bootstrap.min.js"></script>
	<!--加载公共样式-->
	<link rel="stylesheet" type="text/css" href="__CSS__/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="__CSS__/footer.css"> -->
	<link rel="stylesheet" type="text/css" href="__CSS__/public.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/peoplelist.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/public_header_pc.css" />
	
	<script type="text/javascript" src="__JS__/header.js"></script>
	
	<!-- 320加载样式 -->
	<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 350px) and (min-device-width: 319px)" href="__CSS__/phonepeople320.css"/>
	<!-- 414加载样式 -->
	<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 420px) and (min-device-width: 360px)" href="__CSS__/phonepeople414.css"/>
	<!-- 768加载样式 -->
	<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 780px) and (min-device-width: 750px)" href="__CSS__/ipadpeople768.css"/>
	<!-- 1024加载样式 -->
	<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 1030px) and (min-device-width: 1020px)" href="__CSS__/ipadpeople1024.css"/>
	<!-- 1366加载样式 -->
	<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 1370px) and (min-device-width: 1360px)" href="__CSS__/pcpeople1366.css"/>
	<!-- 1440加载样式 -->
	<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 1450px) and (min-device-width: 1430px)" href="__CSS__/pcpeople1440.css"/>
	<!-- 1920加载样式 -->
	<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 1925px) and (min-device-width: 1915px)" href="__CSS__/pcpeople1920.css"/>
	<title>人才共享列表</title>
</head>
<body>
<section id="box">
	<!--头部-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- 可选的Bootstrap主题文件（一般不使用） -->
	<!--<script src="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>-->
	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="__JS__/bootstrap.min.js"></script>
	<!--加载公共样式-->
	<link rel="stylesheet" type="text/css" href="__CSS__/public.css" />
	<!--<link rel="stylesheet" type="text/css" href="css/publicAA.css"/>-->
	<link rel="stylesheet" type="text/css" href="__CSS__/public_header_pc.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/aboutus.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/location.css" />
	<script type="text/javascript" src="__JS__/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="__JS__/header.js"></script>>
</head>
<body>
	<section class="box-header relative">
		<!--导航栏背景-->
		<section class="header-top-wrap absolute">
			<!--导航栏-->
			<header class="header-top">
				<!--logo-->
				<section class="fl logo">
					<a href="index.html">
						<img src="__IMG__/logo.png" alt="" height="60%"/>
					</a>
				</section>
				<!--导航nav-->
				<section class="fr topnav">
					<section class="absolute closeX displaynone">
						<img src="__IMG__/closeX.png" alt="" />
					</section>
					<nav>
						<a href="index.html" class="active"><span class="active yispan">一</span><span class="phoneline">——</span>首页<span class="phoneline">——</span></a>
						<a href="javascript:"><span class="yispan">一</span><span class="phoneline">——</span>业务体系<span class="phoneline">——</span></a>
						<a href="<?php echo url('product/outstandingWorkslist'); ?>"><span class="yispan">一</span><span class="phoneline">——</span>优秀作品<span class="phoneline">——</span></a>
						<a href="<?php echo url('personnel/index'); ?>"><span class="yispan">一</span><span class="phoneline">——</span>人才共享<span class="phoneline">——</span></a>
						<a href="<?php echo url('news/newslist'); ?>"><span class="yispan">一</span><span class="phoneline">——</span>新闻动态<span class="phoneline">——</span></a>
						<a href="<?php echo url('about/index'); ?>"><span class="yispan">一</span><span class="phoneline">——</span>关于我们<span class="phoneline">——</span></a>
					</nav>
				</section>
				<section class="phonenav fr">
					<img src="__IMG__/icon_phonenav.png" alt="" height="60%"/>	
				</section>
			</header>
		</section>	
		<!--banner图-->
		<section class="banner">
			<img src="__IMG__/1-01.png" width="100%" />
		</section>
		<!--头部主体内容-->
		<section class="top-main absolute">
			<!-- 关于我们 -->
			<section class="about absolute">
				<img src="__IMG__/1-02.png" alt="">
				<img src="__IMG__/1-02.png" alt="">
				<img src="__IMG__/1-03.png" alt="">
			</section>
			<!--当前位置-->
			<section class="currentPositon absolute">
				<p>您当前所在的位置：<a href="index.html">首页</a>/<a href="<?php echo url('about/index'); ?>">关于我们</a></p>
			</section>
		</section>
	</section>
</body>
</html>
	<section class="locate container">
		<p>您当前所在的位置：<a href="index.html">首页</a>/<a href="peoplelist.html">人才共享</a></p>
	</section>
	<!-- 这是内容 -->
	<section id="main">
		<ul>
		<?php if(is_array($talent) || $talent instanceof \think\Collection || $talent instanceof \think\Paginator): $i = 0; $__LIST__ = $talent;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
			<li>
				<section class="fl left_z">
					<p><?php echo $v['title']; ?></p>
					<h3>田静</h3>
					<p><?php echo $v['remark']; ?></p>
					<!-- <p>◆ 会各种设计软件，更是PS熟练程度达到90%，AI熟练度80%</p>
					<p>◆ 会手写代码HTML+css和JS的效果修改等</p>
					<p>◆ 对设计有浓郁的爱好和设计制作能力，可敏锐发觉现在社会的设计流行趋势，观擦设业的社会发展。</p> -->
					<a href="javascript:" class="hover">
						read more++
					</a>
				</section>
				<section class="fl right_y">
					<img src="__UPLOAD__./<?php echo $v['photo']; ?>" alt="" class="peo04">
					<section class="template">
						<img src="__IMG__/peoplelist/zym.png" alt="">
					</section>
				</section>
				<section class="clear"></section>
			</li>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			<!-- <li>
				<section class="fr left_z">
					<p>前端工程师</p>
					<h3 class="name">岑双华</h3>
					<p class="nones">十年工作经验。</p>
					<p>精通数据库技术、软件过程理论与研究、软件测试、面相对象方法研究<span>.java、jsp、ssh、ajax、dwr、javascript、j2EE</span>企业级架构、服务器集群、WebLogic中间件。</p>
					<a href="javascript:" class="act">
						read more++
					</a>
				</section>
				<section class="fl right_y">
					<img src="__IMG__/peoplelist/main02.png" alt="" class="peo04">
					<section class="template">
						<img src="__IMG__/peoplelist/zym.png" alt="">
					</section>
				</section>
				<section class="clear"></section>
			</li>
			<li>
				<section class="dw"></section>
				<section class="fl left_z">
					<p>UI设计师</p>
					<h3 class="name">何莉</h3>
					<p>掌握前端开发的知识，以及Photoshop、图形设计以及代码编写的能力。设计理念强<span>，在产品功能和视觉元素间能满足产品的功能需求。</span></p>
					<a href="javascript:">
						read more++
					</a>
				</section>
				<section class="fl right_y">
					<img src="__IMG__/peoplelist/main03.png" alt="" class="peo04">
					<section class="template">
						<img src="__IMG__/peoplelist/zym.png" alt="">
					</section>
				</section>

				<section class="clear"></section>
			</li>
			<li>
				<section class="fr left_z">
					<p>平面设计师</p>
					<h3 class="name">李佳乐</h3>
					<p>计算机相关专业毕业， 在J2EE体系结构使用Spring<span>MVC、mybatis</span>、Hibernate等开源框架 ,对MySQL,SQL<span>Server</span>等数据库性能<span>和系统性能</span>优化。</p>
					<a href="javascript:" class="act">
						read more++
					</a>
				</section>
				<section class="fl right_y">
					<img src="__IMG__/peoplelist/main04.png" alt="" class="peo04">
					<section class="template">
						<img src="__IMG__/peoplelist/zym.png" alt="">
					</section>
				</section>
				<section class="clear"></section>
			</li>
			<li>
				<section class="fl left_z">
					<p>Java工程师</p>
					<h3 class="name">何迪</h3>
					<p>从事java开发10多年，精通java基础、javaweb、javaservice，java中间件开发</p>
					<p class="none"> 精通mybaties,freemark,activities,shiro等。对缓存、优化、并发、大数据、集群，搜索引擎有深入研究。</p>
					<a href="javascript:">
						read more++
					</a>
				</section>
				<section class="fl right_y">
					<img src="__IMG__/peoplelist/main05.png" alt="" class="peo04">
					<section class="template">
						<img src="__IMG__/peoplelist/zym.png" alt="">
					</section>
				</section>
				<section class="clear"></section>
			</li> -->
		</ul>
		<section class="page">
			<ul>
				<li>
					<a href="javascript:">首页</a>
				</li>
				<li>
					<a href="javascript:">上一页</a>
				</li>
				<li>
					<a href="javascript:">1</a>
				</li>
				<li>
					<a href="javascript:">2</a>
				</li>
				<li>
					<a href="javascript:">3</a>
				</li>
				<li>
					<a href="javascript:">下一页</a>	
				</li>
				<section class="clear"></section>
			</ul>
		</section>
	</section>
	<!-- 底部 -->
	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="__CSS__/footer.css">
</head>
<body>
	<footer class="container-fluid wrap">
		<!-- 提交 -->
		<section class="container-fluid box_top">
			<section class="container top_center">
				<section class="advice fl">留下您的意见和建议:</section>
				<input type="text" class="advice_content fl" name="user_advice" value="">
				<button type="submit" class="button fl">提交</button>
			</section>
		</section>
		<section class="clear"></section>
		<!-- 黑色部分 -->
		<section class="container box_bottom">
			<section class="container-fluid fax">
				<ul>
				
					<li>
						<section class="pic">
							<a href="javascript:">
								<img src="__IMG__/footer/phone.png" alt="">
							</a>
						</section>
						<section class="bug">
							<section class="text">电话<span>:</span></section>
							<section class="whitebar"></section>
							<section class="number"><?php echo $contact['phone']; ?></section>
						</section>
					</li>

					<li>
						<section class="pic">
							<a href="javascript:">
								<img src="__IMG__/footer/fax.png" alt="">
							</a>
						</section>
						<section class="bug">
							<section class="text">传真<span>:</span></section>
							<section class="whitebar"></section>
							<section class="number"><?php echo $contact['fax']; ?></section>
						</section>
					</li>
					<li>
						<section class="pic">
							<a href="javascript:">
								<img src="__IMG__/footer/qq.png" alt="">
							</a>
						</section>
						<section class="bug">
							<section class="text">QQ<span>:</span></section>
							<section class="whitebar"></section>
							<section class="number"><?php echo $contact['qq']; ?></section>
						</section>
					</li>
					<li>
						<section class="pic">
							<a href="javascript:">
								<img src="__IMG__/footer/email.png" alt="">
							</a>
						</section>
						<section class="bug">
							<section class="text">邮箱<span>:</span></section>
							<section class="whitebar"></section>
							<section class="number"><?php echo $contact['email']; ?></section>
						</section>
					</li>
					<li>
						<section class="pic">
							<a href="javascript:">
								<img src="__IMG__/footer/address.png" alt="">
							</a>
						</section>
						<section class="bug">
							<section class="text">地址<span>:</span></section>
							<section class="whitebar"></section>
							<section class="number"><?php echo $contact['address']; ?></section>
							<section class="clear"></section>
						</section>
					</li>	
					<section class="clear"></section>				
				</ul>
			</section>
			<section class="clear"></section>
			<section class="container andbusiness">
				<section class="left">
					<section class="business">
						<a href="javascript:">业务体系</a>
						<?php if(is_array($bu_cate) || $bu_cate instanceof \think\Collection || $bu_cate instanceof \think\Paginator): $i = 0; $__LIST__ = $bu_cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
						<a href="web.html"><?php echo $v['name']; ?></a>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						<!-- <a href="UIsheji.html">UI设计</a>
						<a href="graphic.html">平面设计</a>
						<a href="website_construction.html">网站建设</a>
						<a href="shopping.html">购物商城</a>
						<a href="vx.html">微信开发</a> -->
					</section>
					<section class="aboutus">
						<a href="aboutus.html">关于我们</a>
						<a href="javascript:">关于我们</a>
						<a href="javascript:">加入我们</a>
						<a href="<?php echo url('contact/index'); ?>">联系我们</a>

					</section>
				</section>
				<section class="right">
					<section class="weiChat">
						<img src="__IMG__/footer/qrCode.png" alt=""><br>
						<p>商脉微信公众号</p>				
					</section>
					<section class="official">
						<img src="__IMG__/footer/qrCode.png" alt=""><br>
						<p>商脉官方微博</p>				
					</section>
				</section>
				<section class="clear"></section>
				<section class="container copyright">
					<p>版权归成都商脉科技有限公司所有</p>
				</section>
			</section>			
		</section>
	</footer>
</body>
<script type="text/javascript" src="__JS__/jquery-1.9.1.js"></script>
	<script type="text/javascript">
		$('.peo').animate({
			top:'37%',
		},2000);
		$('.peo01').animate({
			top:'30%',
			left:'25%',
		},2000);
		 $('.peo02').animate({
		 	top:'26%',
			right:'28%',
		 },2000); 	
		$('.you ul li').mouseover(function(){
			var index = $(this).index();
			$('.you ul li').eq(index).addClass('actv').siblings().removeClass('actv');
		});
		// $('.you ul li').mouseout(function(){
		// 	var index = $(this).index();
		// 	$('.you ul li').eq(index).removeClass('actv');
		// });
var windowWidth = $(window).width();
	if(windowWidth > 770){
		$('.fax ul li').mouseover(function(){
			var index = $(this).index();
			$('.bug').eq(index).show();
		});
		$('.fax ul li').mouseout(function(){
			var index = $(this).index();
			$('.bug').eq(index).hide();
		});
	}
		
		
	</script>
</html>
	<!-- 定位 -->
	<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="__CSS__/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="__CSS__/public.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/public_header_pc.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/outstandingWorkslist.css">

	<!-- <link rel="stylesheet" type="text/css" media="screen and (max-device-width: 420px) and (min-device-width: 350px)" href="css/iPhone6.css"/>
	<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 350px) and (min-device-width: 300px)" href="css/iPhone5.css"/>
	<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 770px) and (min-device-width: 700px)" href="css/iPad.css"/> -->
	<link rel="stylesheet" type="text/css" media="screen and (min-device-width:320px) and (max-device-width:414px)" href="__CSS__/outstandingWorkslistPhone.css"/>
	<link rel="stylesheet" type="text/css"  media="screen and (min-device-width:768px) and (max-device-width:1025px)" href="__CSS__/outstandingWorkslistIpad.css">
	<link rel="stylesheet" type="text/css" href="__CSS__/location.css">
	<script type="text/javascript" src="__JS__/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="__JS__/bootstrap.js"></script>
	<script type="text/javascript" src="__JS__/header.js"></script>
</head>
<body>
<section id="location">
			<section class="contact_us">
				<img src="__IMG__/tele.png" alt="">
				联系我们
			</section>
			<section class="dwproduct">
				<img src="__IMG__/qq.png" alt="">
				QQ
			</section>
			<section class="returntop">
				<a href="#top"><img src="__IMG__/top.png" alt=""></a>
			</section>
		</section>
	
</body>
</html>
</section>
	</body>
	<script type="text/javascript" src="__JS__/jquery-1.9.1.js"></script>
	<script type="text/javascript">
		$('.peo').animate({
			top:'37%',
		},2000);
		$('.peo01').animate({
			top:'30%',
			left:'25%',
		},2000);
		 $('.peo02').animate({
		 	top:'26%',
			right:'28%',
		 },2000);
		
		
		 
		
		$('.you ul li').mouseover(function(){
			var index = $(this).index();
			$('.you ul li').eq(index).addClass('actv').siblings().removeClass('actv');
		});
		// $('.you ul li').mouseout(function(){
		// 	var index = $(this).index();
		// 	$('.you ul li').eq(index).removeClass('actv');
		// });
var windowWidth = $(window).width();
	if(windowWidth > 770){
		$('.fax ul li').mouseover(function(){
			var index = $(this).index();
			$('.bug').eq(index).show();
		});
		$('.fax ul li').mouseout(function(){
			var index = $(this).index();
			$('.bug').eq(index).hide();
		});
	}
		
		
	</script>
	
</html>