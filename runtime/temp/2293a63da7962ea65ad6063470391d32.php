<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:58:"F:\tp5\public/../application/index\view\news\newslist.html";i:1514008710;s:58:"F:\tp5\public/../application/index\view\public\footer.html";i:1514014160;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>新闻列表页</title>
	<link rel="stylesheet" href="__CSS__/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="__CSS__/public.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/public_header_pc.css" />
	<link rel="stylesheet" href="__CSS__/newslist.css">
	<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 1025px) and (min-device-width: 319px)" href="__CSS__/newslistphone.css" />
	<link rel="stylesheet" href="__CSS__/footer.css">
	<!-- <link rel="stylesheet" type="text/css" media="screen and (max-device-width: 420px) and (min-device-width: 350px)" href="css/iPhone6.css"/>
	<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 350px) and (min-device-width: 300px)" href="css/iPhone5.css"/>
	<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 770px) and (min-device-width: 700px)" href="css/iPad.css"/> -->
	<link rel="stylesheet" href="__CSS__/location.css">
	<script type="text/javascript" src="__JS__/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="__JS__/bootstrap.js"></script>
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
	</section>
	<section id="center" class="container-fluid">
		<!-- 轮播图 -->
		<section class="container-fluid banner">
			<!-- PC端图 -->
			<img src="__IMG__/newslist/banner.png" alt="" class="bannerimg">
			<!-- 手机页面图 -->
			<img src="__IMG__/newslist/banner1.png" alt="" class="bannerimg1">
			<img src="__IMG__/newslist/copy.png" alt="" class="copy">
		</section>
		<!-- 当前位置 -->
		<p class="container current">您当前所在的位置：首页/<a href="<?php echo url('newslist'); ?>"><span>新闻动态</span></a></p>
		<!-- 选项卡 -->
		<p class="container xuanxiang">
			<!-- <a href="" class="action">ALL</a> -->
		<?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
			<a href="<?php echo url('newslist',['id'=>$cate['id']]); ?>" <?php if($cate['cate_id'] == $cate['id']): ?> class="action" <?php endif; ?>><?php echo $cate['name']; ?></a>  
		<?php endforeach; endif; else: echo "" ;endif; ?>
			<!-- <a href="javascript:">行业动态</a> -->
		</p>
		<!-- 主要内容 -->
		<section class="container main dismain">
			<ul>
			<?php if(is_array($all) || $all instanceof \think\Collection || $all instanceof \think\Paginator): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?>
				<a href="<?php echo url('news_page',['id'=>$v['id']]); ?>"><li>
					<section>
						<img src="__UPLOAD__./<?php echo $v['photo']; ?>" alt="">
						<section class="template">+</section>
					</section> 
					<section class="explain">
						<p><?php echo $v['title']; ?></p>
						<p>time：<?php echo $v['update_time']; ?></p>
						<p><?php echo $v['content']; ?></p>
					</section>
				</li></a>
			<?php endforeach; endif; else: echo "" ;endif; ?>
			
			</ul>
		</section>
	<?php foreach($cate as $k => $v){?>
		<section class="container main">
			<ul>
			<?php if(is_array($all) || $all instanceof \think\Collection || $all instanceof \think\Paginator): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?>
				<a href="<?php echo url('news_page',['id'=>$val['id']]); ?>"><li>
					<section>
						<img src="__UPLOAD__./<?php echo $val['photo']; ?>" alt="">
						<section class="template">+</section>
					</section>
					<section class="explain">
						<p><?php echo $val['title']; ?></p>
						<p>time：<?php echo $val['update_time']; ?></p>
						<p><?php echo $val['content']; ?></p>
					</section>
				</li></a>
			<?php endforeach; endif; else: echo "" ;endif; ?>
				
			</ul>
		</section>
	<?php }?>
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
	<!-- 右边固定定位 -->
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
<script type="text/javascript" src="__JS__/newslist.js"></script>
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
	// function cate(id){
 //    $.ajax({
 //        type:'POST',
 //        url:'news.php',
 //        data: id,
        
 //    });
}
</script>
</html>