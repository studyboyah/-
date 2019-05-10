<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:58:"F:\tp5\public/../application/index\view\about\aboutus.html";i:1514017291;s:58:"F:\tp5\public/../application/index\view\public\footer.html";i:1514014160;s:60:"F:\tp5\public/../application/index\view\public\location.html";i:1513914309;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>关于我们</title>
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
	<script type="text/javascript" src="__JS__/header.js"></script>
</head>
<body>
	<!-- 返回顶部的定位 -->
	<a name="top"></a>
	<!--头部-->
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
				<p>您当前所在的位置：<a href="index.html">首页</a>/<a href="aboutus.html">关于我们</a></p>
			</section>
		</section>
	</section>
	<!-- 内容 -->
	<section class="profile">
		<p><?php echo $profile['title']; ?><br>
			<span><?php echo $profile['e_title']; ?></span>
		</p>
	</section>
	<section class="Company_profile">
		<p><?php echo $profile['name1']; ?></p>
	</section>
	<section class="Company">
		<img src="__IMG__/1-05.png" alt="" class="fl" width="55.92%">
		<section class="fr">
			<p><?php echo $profile['name2']; ?></p>
			<span>
				<p><?php echo $profile['name3']; ?></p>
				<p><?php echo $profile['name4']; ?></p>
				<p><?php echo $profile['name5']; ?></p>
			</span>
		</section>
		<section class="clear"></section>
	</section>
	<section class="corporate_culture">
		<section class="corporate">
			<p><?php echo $culture['name']; ?><br>
				<span><?php echo $culture['e_name']; ?></span>
			</p>
		</section>
		<section class="culture">
			<ul>
			<?php if(is_array($ideas) || $ideas instanceof \think\Collection || $ideas instanceof \think\Paginator): $i = 0; $__LIST__ = $ideas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<li>
					<a href="JavaScript:">
						<img src="__UPLOAD__./<?php echo $v['map']; ?>" alt="">
					</a>
					<p><b><?php echo $v['idea']; ?></b><br>
					<span><?php echo $v['content']; ?></span></p>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
				<!-- <li>
					<a href="JavaScript:">
						<img src="__IMG__/1-08.png" alt="">
					</a>
					<p><b>人才理念</b><br>
					<span>不拘一格，人尽其才</span></p>
				</li>
				<li>
					<a href="JavaScript:">
						<img src="__IMG__/1-10.png" alt="">
					</a>
					<p><b>人才理念</b><br>
					<span>不拘一格，人尽其才</span></p>
				</li>
				<li>
					<a href="JavaScript:">
						<img src="__IMG__/1-09.png" alt="">
					</a>
					<p><b>人才理念</b><br>
					<span>不拘一格，人尽其才</span></p>
				</li>
				<li>
					<a href="JavaScript:">
						<img src="__IMG__/1-11.png" alt="">
					</a>
					<p><b>人才理念</b><br>
					<span>不拘一格，人尽其才</span></p>
				</li> -->
			</ul>
			<section class="clear"></section>
		</section>
	</section>
	<section class="worth">
		<section class="worth_left fl">
			<p><?php echo $culture['pc_content']; ?></p>
			<!-- <p>行业价值——成为一个聚集众多IT精英自由发挥的平台</p>
			<span>
				<p>人文价值——成为一个跨时代、有主张、有号召力的信息网络</p>
				<p>不拘一格 人尽其才</p>
				<p>优秀的人才是全方位的素质提升</p>
				<p>优秀的人才是商脉生存发展的源动力</p>
				<p>不一味迎合市场，创造来源于客户与设计师的良性互动</p>
			</span> -->
		</section>
		<section class="worth_right fr relative">
	
			<img src="__UPLOAD__./<?php echo $culture['cul_img']; ?>" alt="">

			<img src="__IMG__/1-13.png" alt="" class="worth_cen absolute">
			<img src="__IMG__/1-14.png" alt="" class="worth_con absolute">
		</section>
		<section class="clear"></section>
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
</body>
<script type="text/javascript">	
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
<script type="text/javascript" src="__JS__/aboutus.js"></script>
</html>