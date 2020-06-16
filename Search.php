<?php
    //链接数据库
    include ('mysql.php');
    $search_product=[];
    //判断查询内容是否传入
    if ($_POST){
        $serch_text = $_POST['serch_text'];

        $sql="select * from `product` where name like '%$serch_text%' order by name desc ";
        //获取查询 结果
        $result=$mysqli->query($sql);
        $result_data=mysqli_num_rows($result);
        if(!$result_data){
            echo "<script language=\"JavaScript\">alert(\"您搜索的商品不存在！\");</script>";
        }
        while($search_row = $result->fetch_array(MYSQLI_ASSOC)){
            $search_product[] = $search_row;
//            echo $search_product;
        }
    }

    ?>
<!DOCTYPE HTML>
<html>
<title>搜索列表</title>
<?php
include('link.php');
?>
<!-- //end-smoth-scrolling -->
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" id="sourcecode">
    $(function()
    {
        $('.scroll-pane').jScrollPane();
    });
</script>
<!-- //the jScrollPane script -->
<script src="js/simpleCart.min.js"> </script>
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
include('header.php');
?>
<div >
    <div>
        <input type="text" id="myInput"  placeholder="搜索结果列表..."/>
    </div>
    <div>
        <form action="upload_file.php" method="post" enctype="multipart/form-data">
            <label for="file">文件名：</label>
            <input type="file" name="file" id="file"><br>
            <input type="submit" name="submit" value="提交">
        </form>
    </div>
</div>



<ul id="myUL">
    <?php
    if($search_product){
        foreach($search_product as $searchs_row){
            ?>
            <li><a href="<?php echo $searchs_row['linkhtml']; ?>"><?php echo $searchs_row['name']; ?></a></li>
            <?php
        }
    }
    ?>

    <!--   <li><a href="#" class="header">A</a></li>
      <li><a href="#">Adele</a></li>
      <li><a href="#">Agnes</a></li>

      <li style=""><a href="#" class="header">B</a></li>
      <li style=""><a href="#">Billy</a></li>
      <li style=""><a href="#">Bob</a></li>

      <li style=""><a href="#" class="header">C</a></li>
      <li><a href="#">Calvin</a></li>
      <li><a href="#">Christina</a></li>
      <li style=""><a href="#">Cindy</a></li> -->
</ul>
<style>
    #myInput {
        background-image: url('https://static.runoob.com/images/mix/searchicon.png'); /* 搜索按钮 */
        background-position: 10px 12px; /* 定位搜索按钮 */
        background-repeat: no-repeat; /* 不重复图片*/
        width: 50%;
        font-size: 16px; /* 加大字体 */
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-left: 25%;
        margin-bottom: 12px;
    }

    #myUL {
        /* 移除默认的列表样式 */
        list-style-type: none;
        padding: 0;
        margin: 0;
        width: 50%;
        margin-left: 25%;
        position: absolute;
        z-index: 9999;
        display: none;
    }

    #myUL li a {
        border: 1px solid #ddd; /* 链接添加边框 */
        margin-top: -1px;
        background-color: #f6f6f6;
        padding: 12px;
        text-decoration: none;
        font-size: 18px;
        color: black;
        display: block;
    }

    #myUL li a.header {
        background-color: #e2e2e2;
        cursor: default;
    }

    #myUL li a:hover:not(.header) {
        background-color: #eee;
    }</style><script>function myFunction() {
        // 声明变量
        var input, filter, ul, li, a, i;
        input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName('li');

        input.onblur = function(){
            for (var i = li.length - 1; i >= 0; i--) {
                li[i].onclick = function(){
                    ul.style.display = "none";
                }
            }
            document.querySelector("body").onclick = function(){
                ul.style.display = "none";
            };
        }

        // 循环所有列表，查找匹配项
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                ul.style.display = "block";
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }</script>
<div class="product">
    <div class="container">
        <div class="product-main">
            <div class=" product-menu-bar">
                <?php
                include ('product_left.php');
                ?>
            </div>
            <div class="col-md-9 product-block">
                <?php
                    if($search_product){
                    foreach($search_product as $search_row){
                        ?>
                        <div class="col-md-4 home-grid">
                            <div class="home-product-main">
                                <div class="home-product-top">
                                    <a href="<?php
                                    if($search_row['linkhtml']=='linkphp.php'){
                                        echo 'linkphp.php?name='.$search_row['name'].'&urlimg='.$search_row['urlimg'].'&price='.$search_row['price'];
                                    }
                                    else{
                                        echo $search_row['linkhtml'];
                                    }

                                    ?>"><img src="<?php echo $search_row['urlimg']; ?>" alt="" style="width: 245px;height: 245px;"class="img-responsive zoom-img"></a>
                                </div>
                                <div class="home-product-bottom">
                                    <h3><a href="amani.php"><?php echo $search_row['name']; ?></a></h3>
                                    <p>查看更多</p>
                                </div>
                                <div class="srch">
                                    <span><?php echo "￥".$search_row['price']; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>


<!--search product end here-->
<!--footer strat here-->
<?php
include('footer.php');
?>
<!--footer end here-->
</body>
</html>


