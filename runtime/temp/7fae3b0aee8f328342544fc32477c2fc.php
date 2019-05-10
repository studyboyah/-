<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:73:"F:\tp5\public/../application/index\view\product\outstandingWorkslist.html";i:1514015733;s:58:"F:\tp5\public/../application/index\view\public\footer.html";i:1514014160;s:60:"F:\tp5\public/../application/index\view\public\location.html";i:1513914309;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<title>优秀作品列表页</title>
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
	<!-- 返回顶部的定位 -->
	<a name="top"></a>
	<section id="box" class="container-fluid">
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
							<a href="<?php echo url('product/index'); ?>"><span class="yispan">一</span><span class="phoneline">——</span>优秀作品<span class="phoneline">——</span></a>
							<a href="<?php echo url('personnel/index'); ?>"><span class="yispan">一</span><span class="phoneline">——</span>人才共享<span class="phoneline">——</span></a>
							<a href="<?php echo url('news/index'); ?>"><span class="yispan">一</span><span class="phoneline">——</span>新闻动态<span class="phoneline">——</span></a>
							<a href="<?php echo url('about/index'); ?>"><span class="yispan">一</span><span class="phoneline">——</span>关于我们<span class="phoneline">——</span></a>

						</nav>
					</section>
					<section class="phonenav fr">
						<img src="__IMG__/icon_phonenav.png" alt="" height="60%"/>	
					</section>
				</header>
			</section>
		</section>
		<section id="content" class="container-fluid">
			<section class="container-fluid banner">
				<!-- PC端图 -->
				<!-- <img src="images/excellentCase/bannner.png" alt="" class="bannerimg"> -->
				<section class="banner_zi">
					<img src="__IMG__/excellentCase/banner_zi.png">
				</section>
				<img src="__IMG__/excellentCase/banner_bg.png" alt="" class="bannerimg">
				<!-- 手机页面图 -->
				<img src="__IMG__/excellentCase/banner1_bg.png" alt="" class="bannerimg1">
				<!-- <img src="images/excellentCase/banner1.png" alt="" class="bannerimg1"> -->
			</section>
			<!-- 当前位置 -->
			<p class="container current">您当前所在的位置：首页/<a href="<?php echo url('outstandingWorkslist'); ?>"><span>优秀作品</span></a></p>
			<section class="container main">
				<!-- 标题 -->
				<section class="container topic">
					<ul>
					<?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
						<li onclick="on()" class="cc"><a href="<?php echo url('outstandingWorkslist',['id'=>$cate['id']]); ?>" <?php if($cate['cate_id'] == $cate['id']): endif; ?>><?php echo $cate['name']; ?></a> </li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						<!-- <li>网页设计</li>
						<li>UI设计</li>
						<li>平面设计</li>
						<li>设计</li>
						<li>网站建设</li>
						<li>购物商城</li>
						<li>微信开发</li> -->
					</ul>
				</section>
				<!-- 作品列表 -->
				<section class="container-fluid list">
					<!-- ALL的全部作品列表 -->
					<section class="block cs">
						<!-- 作品列表上面部分 -->
						<section class="container-fluid list_top">
								<ul>
								<?php if(is_array($all) || $all instanceof \think\Collection || $all instanceof \think\Paginator): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
									<li>
										<section class="pict">
											<a href="#">
												<img src="__UPLOAD__./<?php echo $v['img']; ?>">
											</a>
											<section class="mengban">
												<a href="#"><img src="__IMG__/excellentCase/more.png"></a>
											</section>
										</section>
										<p class="brand"><?php echo $v['title']; ?></p>
										<p class="company"><?php echo $v['describe']; ?></p>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
						</section>
					</section>
					<!-- 网页设计的作品列表 -->
					<section class="cs">
						<!-- 作品列表上面部分 -->
						<?php foreach($cate as $k => $v){?>
						<section class="container-fluid list_top">
								<ul>
								<?php if(is_array($all) || $all instanceof \think\Collection || $all instanceof \think\Paginator): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
									<li>
										<section class="pict">
											<a href="#">
												<img src="__UPLOAD__./<?php echo $val['img']; ?>">
											</a>
											<section class="mengban">
												<a href="#"><img src="images/excellentCase/more.png"></a>
											</section>
										</section>
										<p class="brand">Auall珠宝</p>
										<p class="company">珠宝品牌商城设计</p>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
						</section>
						<?php }?>
					</section>
					<!-- UI设计的作品列表 -->
					<section class="cs">
						<!-- 作品列表上面部分 -->
						<?php foreach($cate as $k => $v){?>
						<section class="container-fluid list_top">
								<ul>
								<?php if(is_array($all) || $all instanceof \think\Collection || $all instanceof \think\Paginator): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
									<li>
										<section class="pict">
											<a href="#">
												<img src="__UPLOAD__./<?php echo $val['img']; ?>">
											</a>
											<section class="mengban">
												<a href="#"><img src="images/excellentCase/more.png"></a>
											</section>
										</section>
										<p class="brand">Auall珠宝</p>
										<p class="company">珠宝品牌商城设计</p>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
						</section>
						<?php }?>
					</section>
					<!-- 平面设计的作品列表 -->
					<section class="cs">
						<?php foreach($cate as $k => $v){?>
						<section class="container-fluid list_top">
								<ul>
								<?php if(is_array($all) || $all instanceof \think\Collection || $all instanceof \think\Paginator): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
									<li>
										<section class="pict">
											<a href="#">
												<img src="__UPLOAD__./<?php echo $val['img']; ?>">
											</a>
											<section class="mengban">
												<a href="#"><img src="images/excellentCase/more.png"></a>
											</section>
										</section>
										<p class="brand">Auall珠宝</p>
										<p class="company">珠宝品牌商城设计</p>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
						</section>
						<?php }?>
					</section>
					<!-- 网站建设的作品列表 -->
					<section class="cs">
						<!-- 作品列表上面部分 -->
						<?php foreach($cate as $k => $v){?>
						<section class="container-fluid list_top">
								<ul>
								<?php if(is_array($all) || $all instanceof \think\Collection || $all instanceof \think\Paginator): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
									<li>
										<section class="pict">
											<a href="#">
												<img src="__UPLOAD__./<?php echo $val['img']; ?>">
											</a>
											<section class="mengban">
												<a href="#"><img src="images/excellentCase/more.png"></a>
											</section>
										</section>
										<p class="brand">Auall珠宝</p>
										<p class="company">珠宝品牌商城设计</p>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
						</section>
						<?php }?>
					</section>
					<!-- 购物商城的作品列表 -->
					<section class="cs">
						<!-- 作品列表上面部分 -->
						<?php foreach($cate as $k => $v){?>
						<section class="container-fluid list_top">
								<ul>
								<?php if(is_array($all) || $all instanceof \think\Collection || $all instanceof \think\Paginator): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
									<li>
										<section class="pict">
											<a href="#">
												<img src="__UPLOAD__./<?php echo $val['img']; ?>">
											</a>
											<section class="mengban">
												<a href="#"><img src="images/excellentCase/more.png"></a>
											</section>
										</section>
										<p class="brand">Auall珠宝</p>
										<p class="company">珠宝品牌商城设计</p>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
						</section>
						<?php }?>
					</section>
					<!-- 微信开发的作品列表 -->
					<section class="cs">
						<!-- 作品列表上面部分 -->
						<?php foreach($cate as $k => $v){?>
						<section class="container-fluid list_top">
								<ul>
								<?php if(is_array($all) || $all instanceof \think\Collection || $all instanceof \think\Paginator): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
									<li>
										<section class="pict">
											<a href="#">
												<img src="__UPLOAD__./<?php echo $val['img']; ?>">
											</a>
											<section class="mengban">
												<a href="#"><img src="images/excellentCase/more.png"></a>
											</section>
										</section>
										<p class="brand">Auall珠宝</p>
										<p class="company">珠宝品牌商城设计</p>
									</li>
									<?php endforeach; endif; else: echo "" ;endif; ?>
								</ul>
						</section>
						<?php }?>
					</section>
				</section>
			</section>
				<!-- 翻页 -->
<!-- 				<ul class="pagination">
<li><a href="?page=1">&laquo;</a></li>
<li><a href="?page=1">1</a></li>
<li class="active"><span>2</span></li>
<li class="disabled"><span>&raquo;</span></li>
</ul> -->
		
			<section class="container flip">
				<ul>
					<li>首页</li>
					<li>上一页</li>
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>下一页</li>
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
<script type="text/javascript">
	$('.topic ul li').click(function(){
		 var a= $(this).index(); //获取用户点击的索引值
     $('.topic ul li').eq(a).addClass('act').siblings().removeClass('act');
     $('.list .cs').eq(a).addClass('block').siblings().removeClass('block');
	});
</script>
<script type="text/javascript">	
	$(document).ready(function(){
		$('.fax ul li').mouseover(function(){
			var index = $(this).index();
			$('.bug').eq(index).show();
		});
		$('.fax ul li').mouseout(function(){
			var index = $(this).index();
			$('.bug').eq(index).hide();

		});
		// // 意见正则验证过滤脏话
		// var oInput = $('advice_content');
		// var exp = /草|原/g;
		// oInput.value = oInput.value.replace(exp,'*');
	});
	function on(){
		var index=$(this).index;
		$('.cc').click().eq().addClass('act').siblings().removeClass('act');
	}
</script>
</html>