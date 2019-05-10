<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"F:\tp5\public/../application/index\view\contact\contact_us.html";i:1513925820;s:58:"F:\tp5\public/../application/index\view\public\footer.html";i:1513935333;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	 <meta name="keywords" content="百度地图,百度地图API，百度地图自定义工具，百度地图所见即所得工具" />
    <meta name="description" content="百度地图API自定义地图，帮助用户在可视化操作下生成百度地图" />
	<title>联系我们</title>
	<link rel="stylesheet" type="text/css" href="__CSS__/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="__CSS__/public.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/public_header_pc.css" />
	<link rel="stylesheet" type="text/css" href="__CSS__/contact_us.css">
	<script type="text/javascript" src="__JS__/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="__JS__/bootstrap.js"></script>
    <script type="text/javascript" src="__JS__/bootstrapValidator.min.js"></script>
    <link rel="stylesheet" type="text/css" href="__CSS__/bootstrapValidator.min.css" />
	<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=B3f7707c25da5b29a6ff69618788a296"></script>
	<script type="text/javascript" src="__JS__/header.js"></script>
	<link rel="stylesheet" type="text/css" media="screen and (min-device-width:320px) and (max-device-width:415px)" href="__CSS__/contactPhone.css"/>
	<link rel="stylesheet" type="text/css" media="screen and (min-device-width:768px) and (max-device-width:1025px)" href="__CSS__/contactIpad.css"/>
	<link rel="stylesheet" href="__CSS__/footer.css">
<!-- 	<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 420px) and (min-device-width: 350px)" href="css/iPhone6.css"/>
	<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 350px) and (min-device-width: 300px)" href="css/iPhone5.css"/>
	<link rel="stylesheet" type="text/css" media="screen and (max-device-width: 770px) and (min-device-width: 700px)" href="css/iPad.css"/> -->
	<link rel="stylesheet" type="text/css" href="__CSS__/location.css">
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
							<a href="{news/index}"><span class="yispan">一</span><span class="phoneline">——</span>新闻动态<span class="phoneline">——</span></a>
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
				<img src="__IMG__/contact_us/banner_bg.png" alt="" class="bannerimg">
				<section class="banner_zi">
					<img src="__IMG__/contact_us/banner_zi.png">
				</section>
			<!-- 	<img src="images/contact_us/banner.png" alt="" class="bannerimg"> -->
				<!-- 手机页面图 -->
				<img src="__IMG__/contact_us/banner1_bg.png" alt="" class="bannerimg1">
			<!-- 	<img src="images/contact_us/banner1.png" alt="" class="bannerimg1"> -->
			</section>
			<!-- 当前位置 -->
			<p class="container current">您当前所在的位置：首页/<a href=""><span>关于我们</span></a></p>
			<!-- 联系我们的中间内容部分 -->
			<section class="container main">
				<!-- 标题 -->
				<section class="container-fluid help">
					<?php echo $contact['title']; ?>
				</section>
				<!--百度地图容器-->
				<section  lass="container-fluid map" id="map">
				</section>
				<!-- 联系方式 -->
				<section class="container-fluid contactWay">
					<!-- 联系方式左边的内容 -->
					<section class="container contactWay_l">
						<!-- 联系我们 -->
						<section class="container contactUs">
							<p><?php echo $contact['name']; ?></p>
							<p><?php echo $contact['ename']; ?></p>
						</section>
						<!-- 其他几个联系方式 -->
						<section class="container-fluid way">
							<ul>
								<li>
									<img src="__IMG__/contact_us/phone.png">
									<span>电话：<?php echo $contact['phone']; ?></span>
								</li>
								<li>
									<img src="__IMG__/contact_us/fax.png">
									<span>传真：<?php echo $contact['fax']; ?></span>
								</li>
								<li>
									<img src="__IMG__/contact_us/qq.png">
									<span>QQ：<?php echo $contact['qq']; ?></span>
								</li>
								<li>
									<img src="__IMG__/contact_us/email.png">
									<span>邮箱：<?php echo $contact['email']; ?></span>
								</li>
								<li>
									<img src="__IMG__/contact_us/address.png">
									<span>地址：<?php echo $contact['address']; ?></span>
								</li>
							</ul>
						</section>
					</section>
					<!-- 联系方式 -->
					<section class="container contactWay_r">
						<!-- 表单 -->
						<form role="form">
						<section class="biaodan">
							<section class="biaodan_top">
							  <section class="form-group username">
							    <label for="name">姓名:</label>
							    <input type="text" class="form-control user" id="name" name="userna">
							  </section>
							   <section class="form-group phone">
							    <label for="name">电话:</label>
							    <input type="text" class="form-control user" id="name" name="mobilePhone">
							  </section>
							   <section class="form-group address">
							    <label for="name">地址:</label>
							    <input type="text" class="form-control user" id="name" name="homeAddress">
							  </section>
							  </section>
							   <section class="form-group message">
							    <label for="name">留言内容:</label>
							    <textarea class="form-control mes" name="messageContent">
							    </textarea>
							  </section>
						  </section>
						  <section class="clear"></section>
						  <button type="submit" class="btn btn-default tijiao">提交</button>
						</form>
					</section>
				</section>
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
	</section>  
</body>
<script type="text/javascript" src="__JS__/map.js"></script>
<script type="text/javascript">
        $(function () {
        $('form').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                userna: {
                    message: '用户名验证失败',
                    validators: {
                        notEmpty: {
                            message: '姓名不能为空'
                        },
                        regexp: {
                            regexp: /^([\u4E00-\uFA29]*[a-z]*[A-Z]*)+$/,
                            message: '不能有特殊字符'
                        }
                    }
                },
                mobilePhone: {
                    validators: {
                        notEmpty: {
                            message: '电话不能为空'
                        },
                       regexp: {
                            regexp:  /^1[3|4|5|7|8][0-9]{9,9}$/,
                            message: '电话号码不正确'
                        }
                    }
                },
                homeAddress: {
                    validators: {
                        notEmpty: {
                            message: '地址不能为空'
                        },
                       regexp: {
                            regexp:  /^[\u4E00-\u9FA5A-Za-z\d\-\_]{5,60}$/,
                            message: '地址不正确'
                        }
                    }
                },
            }
        });
    });
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
  </script>
</html>