﻿<?php
	//session缓存
	session_start();
	//连接数据 库
	include ('mysql.php');
	//获取用户信息
	include ('getadmin.php');

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>古奇女士手提包</title>
<?php
	include('link.php');
?>
<!-- //end-smoth-scrolling -->
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!--flex slider-->
<script src="js/imagezoom.js"></script>
<script src="js/simpleCart.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<!--header strat here-->
<?php
	include('header.php');
?>
<!--header end here-->
<!--single start here-->
<div class="single">
   <div class="container">
   	 <div class="single-main">
   	 	<div class="single-top-main">
	   		<div class="col-md-5 single-top">	
			   <div class="flexslider">
				  <ul class="slides">
				    <li data-thumb="images/kk5.jpg">
				        <div class="thumb-image"> <img src="images/kk5.jpg" data-imagezoom="true" class="img-responsive"> </div>
				    </li>
				    <li data-thumb="images/kk6.jpg">
				         <div class="thumb-image"> <img src="images/kk6.jpg" data-imagezoom="true" class="img-responsive"> </div>
				    </li>
				    <li data-thumb="images/kk7.jpg">
				       <div class="thumb-image"> <img src="images/kk7.jpg" data-imagezoom="true" class="img-responsive"> </div>
				    </li> 
				<li data-thumb="images/kk8.jpg">
				       <div class="thumb-image"> <img src="images/kk8.jpg" data-imagezoom="true" class="img-responsive"> </div>
				    </li> 
				  </ul>
			</div>
			</div>
			<div class="col-md-7 single-top-left simpleCart_shelfItem">
				
				<h1>Gucci/古奇女士手提包</h1>
				<h4><b>Gucci/古奇2018新款女士时尚简约大号手提包‎500772 CWGEX 2579<b></h4>
				<h6 class="item_price">¥32590.00</h6>			
				</p><h5>运费：00.00&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;国家：意大利</h5></p>
				<h4>颜色分类</h4>
				<ul class="bann-btns">
					<li><select class="bann-size">
						<option value="select your location">颜色</option>
						<option value="saab">咖色</option>
						<option value="saab">黑色</option>
					</select>
					</li>
					<li><a href="#" class="item_add">添加到购物车</a></li>					
	            </ul>
			</div>
		   <div class="clearfix"> </div>
	   </div>
	   <div class="singlepage-product">
		   	 <div class="col-md-3 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="single3.php"><img src="images/kk1.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3><a href="single3.php">Gucci古奇手提包</a></h3>
								<p>查看更多</p>						
						</div>
						<div class="srch">
							<span>¥21010</span>
						</div>
					</div>
				 </div>
			      <div class="col-md-3 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="babi.php"><img src="images/babi2.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3><a href="babi.php">套装大礼盒Barbie</a></h3>
								<p>查看更多</p>
						</div>
						<div class="srch">
							<span>¥279</span>
						</div>
					</div>
				 </div>
				 <div class="col-md-3 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="forlove.php"><img src="images/forlove1.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3><a href="forlove.php">挚爱一生</a></h3>
								<p>查看更多</p>
						</div>
						<div class="srch">
							<span>¥2042</span>
						</div>
					</div>
				 </div>
			      <div class="col-md-3 home-grid">
					<div class="home-product-main">
					   <div class="home-product-top">
					      <a href="amaniwoman.php"><img src="images/amn2.jpg" alt="" class="img-responsive zoom-img"></a>
					   </div>
						<div class="home-product-bottom">
								<h3><a href="amaniwoman.php">Armani女士石英表</a></h3>
								<p>查看更多</p>						
						</div>
						<div class="srch">
							<span>¥2590</span>
						</div>
					</div>
				 </div>
		  <div class="clearfix"> </div>
	   </div>
   	 </div>
   </div>
</div>
<!--single end here-->
<!--footer strat here-->
<?php 
	include('footer.php');
?>
<!--footer end here-->
</body>
</html>



