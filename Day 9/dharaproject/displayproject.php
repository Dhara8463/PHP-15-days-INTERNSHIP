<?php
require './class/aclass.php';
?>

<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>Esteem  An Admin Panel Category Flat Bootstrap Responsive Website Template | Tables  :: w3layouts</title>
        <!-- custom-theme -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- //custom-theme -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" type="text/css" href="css/table-style.css" />
        <link rel="stylesheet" type="text/css" href="css/basictable.css" />
        <link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- font-awesome-icons -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome-icons -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
    </head>
    <body>
        <!-- banner -->
        <div class="wthree_agile_admin_info">
            <!-- /w3_agileits_top_nav-->
            <!-- /nav-->
            <?php
            include './themepart/sidebar.php';
            ?>
            <div class="clearfix"></div>
            <!-- //w3_agileits_top_nav-->

            <!-- /inner_content-->
            <div class="inner_content">
                <!-- /inner_content_w3_agile_info-->

                <!-- breadcrumbs -->
                <div class="w3l_agileits_breadcrumbs">
                    <div class="w3l_agileits_breadcrumbs_inner">
                        <ul>
                            <li><a href="main-page.html">Home</a><span>«</span></li>

                            <li>Tables</li>
                        </ul>
                    </div>
                </div>
                <!-- //breadcrumbs -->

                <div class="inner_content_w3_agile_info two_in">
                    <h2 class="w3_inner_tittle">Project Tables</h2>
                    <!-- tables -->

                    <div class="agile-tables">




                        <div class="w3l-table-info agile_info_shadow">
                            
                            <a href="addproject.php"><h3 class="w3_inner_tittle two">Project details Add</h3></a>
                            <table id="table-no-resize">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    if(isset($_GET['did']))
                                    {
                                    $did = $_GET['did'];

                               

                                    $deleteq = mysqli_query($connection, "delete from tbl_projec  where pro_id='{$did}'")
                                            or die("Error" . mysqli_error($connection));

                                    if ($deleteq) {
                                        echo"<script>alert('Record Deleted');</script>";
                                    }
                                    }




                                    $selectq = mysqli_query($connection, "select * from tbl_projec") or die(mysqli_error($connection));
                                    $count = mysqli_num_rows($selectq);
                                    echo $count . " Records Found ";
                                    
                                    while ($projectrow = mysqli_fetch_array($selectq)) {
                                        echo "<tr>";
                                        echo "<td>{$projectrow['pro_id']}</td>";
                                        echo "<td>{$projectrow['pro_name']}</td>";
                                        echo "<td>{$projectrow['pro_price']}</td>";
                                        echo "<td>{$projectrow['pro_details']}</td>";
                                        echo "<td><a href='editproject.php?eid={$projectrow['pro_id']}'><img style='width:16px;' src='myimages/edit.png'>Edit</a>  |  <a href='displayproject.php?did={$projectrow['pro_id']}'><img style='width:16px;' src='myimages/trash.png'>Delete </a></td>";
                                        echo "</tr>";
                                    }
                                    ?>


                                </tbody>
                            </table>


                        </div>

                    </div>
                    <!-- //tables -->

                    <!-- /social_media-->
                    <div class="social_media_w3ls">

                        <div class="col-md-3 socail_grid_agile facebook">
                            <ul class="icon_w3_info">
                                <li><a href="#" class="wthree_facebook"> <i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li>Facebook</li>
                            </ul>
                            <ul class="icon_w3_social">
                                <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-user" aria-hidden="true"></i></li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="bottom_info_social">
                                <div class="col-md-4 agile_w3l_social_media_text_img">
                                    <img src="images/admin.jpg" alt="">
                                </div>
                                <div class="col-md-8 agile_w3l_social_media_text">
                                    <h4>Hurisa Joe</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-3 socail_grid_agile twitter">
                            <ul class="icon_w3_info">
                                <li><a href="#" class="wthree_facebook"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li>Twitter</li>
                            </ul>
                            <ul class="icon_w3_social">
                                <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-user" aria-hidden="true"></i></li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="bottom_info_social">
                                <div class="col-md-4 agile_w3l_social_media_text_img">
                                    <img src="images/a1.jpg" alt="">
                                </div>
                                <div class="col-md-8 agile_w3l_social_media_text">
                                    <h4>Jasmin Joe</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-3 socail_grid_agile gmail">
                            <ul class="icon_w3_info">
                                <li><a href="#" class="wthree_facebook"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                <li>Google+</li>
                            </ul>
                            <ul class="icon_w3_social">
                                <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-user" aria-hidden="true"></i></li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="bottom_info_social">
                                <div class="col-md-4 agile_w3l_social_media_text_img">
                                    <img src="images/a2.jpg" alt="">
                                </div>
                                <div class="col-md-8 agile_w3l_social_media_text">
                                    <h4>John Pal</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-md-3 socail_grid_agile dribble">

                            <ul class="icon_w3_info">
                                <li><a href="#" class="wthree_facebook"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                <li>Dribbble</li>
                            </ul>
                            <ul class="icon_w3_social">
                                <li><i class="fa fa-comment-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i></li>
                                <li><i class="fa fa-user" aria-hidden="true"></i></li>
                            </ul>
                            <div class="clearfix"></div>
                            <div class="bottom_info_social">
                                <div class="col-md-4 agile_w3l_social_media_text_img">
                                    <img src="images/a4.jpg" alt="">
                                </div>
                                <div class="col-md-8 agile_w3l_social_media_text">
                                    <h4>Honey Pal</h4>
                                    <p>Lorem ipsum dolor sit amet</p>
                                </div>

                                <div class="clearfix"></div>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <!-- //social_media-->
                </div>
                <!-- //inner_content_w3_agile_info-->
            </div>
            <!-- //inner_content-->
            <!--copy rights start here-->
            <?php
            include './themepart/footer.php';
            ?>
            <!--copy rights end here-->
            <!-- js -->

            <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
            <script src="js/modernizr.custom.js"></script>

            <script src="js/classie.js"></script>
            <script src="js/gnmenu.js"></script>
            <script>
                new gnMenu(document.getElementById('gn-menu'));
            </script>
            <!-- tables -->

            <script type="text/javascript" src="js/jquery.basictable.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#table').basictable();

                    $('#table-breakpoint').basictable({
                        breakpoint: 768
                    });

                    $('#table-swap-axis').basictable({
                        swapAxis: true
                    });

                    $('#table-force-off').basictable({
                        forceResponsive: false
                    });

                    $('#table-no-resize').basictable({
                        noResize: true
                    });

                    $('#table-two-axis').basictable();

                    $('#table-max-height').basictable({
                        tableWrapper: true
                    });
                });
            </script>
            <!-- //js -->
            <script src="js/screenfull.js"></script>
            <script>
                $(function () {
                    $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

                    if (!screenfull.enabled) {
                        return false;
                    }



                    $('#toggle').click(function () {
                        screenfull.toggle($('#container')[0]);
                    });
                });
            </script>
            <script src="js/jquery.nicescroll.js"></script>
            <script src="js/scripts.js"></script>

            <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


    </body>
</html>