<?php
include("baglan.php");

$query1 = "SELECT * FROM toplamgelir";
$query2 = "SELECT * FROM toplamadet";
$query3 = "SELECT * FROM magazasayisi";
$query4 = "SELECT * FROM urunsayisi";
$query5 = "SELECT * FROM musterisayisi";
$query6 = "SELECT * FROM siparissayisi";

$result1 = mysqli_query($connect, $query1);
$result2 = mysqli_query($connect, $query2);
$result3 = mysqli_query($connect, $query3);
$result4 = mysqli_query($connect, $query4);
$result5 = mysqli_query($connect, $query5);
$result6 = mysqli_query($connect, $query6);

?>

<!DOCTYPE html>
<html lang="tr">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>evidea</title>
      <link rel="icon" type="image/png" href="images/logo/evidea_icon.png">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <link rel="stylesheet" href="style.css" />
      <link rel="stylesheet" href="css/responsive.css" />
      <link rel="stylesheet" href="css/colors.css" />
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <link rel="stylesheet" href="css/custom.css" />
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="images/layout_img/user.png" alt="#" /></div>
                        <div class="user_info">
                           <h6>ADMİN</h6>
                           <p><span class="online_animation"></span> ÇEVRİMİÇİ</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <h4>YÖNETİCİ PANELİ</h4>
                  <ul class="list-unstyled components">
                     <li><a href="index.php"><i class="fa fa-home orange_color"></i> <span>ANA SAYFA</span></a></li>
                     <li><a href="magazalar.php"><i class="fa fa-shopping-cart orange_color"></i> <span>MAĞAZALAR</span></a></li>
                     <li><a href="siparisler.php"><i class="fa fa-check orange_color"></i> <span>SİPARİŞLER</span></a></li>
                     <li><a href="ilceler.php"><i class="fa fa-building-o orange_color"></i> <span>İLÇELER</span></a></li>
                     <li><a href="musteriler.php"><i class="fa fa-users orange_color"></i> <span>MÜŞTERİLER</span></a></li>
                     <li><a href="urunler.php"><i class="fa fa-list orange_color"></i> <span>ÜRÜNLER</span></a></li>
                     <li><a href="kargo.php"><i class="fa fa-truck orange_color"></i> <span>KARGO ŞİRKETLERİ</span></a></li>
                  </ul>
               </div>
            </nav>
            <div id="content">
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full" style="background-color: lightsalmon;">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.php"><img class="img-responsive" src="images/logo/evidea_logo.png" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="images/layout_img/user.png" alt="#" /><span class="name_user">ADMİN</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="#"><span>ÇIKIŞ YAP</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>ANA SAYFA</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                        <div class="col-md-7 col-lg-4">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-usd green_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">TOPLAM HASILAT</p>
                                    <p class="head_couter mt-4" style="font-size: large; font-weight: 600; color:black;">
                                       <?php while($row1 = mysqli_fetch_array($result1)):;?>
                                       <?php echo $row1[0];?>
                                       <?php endwhile;?> TL
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-7 col-lg-4">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-area-chart purple_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">SATILAN ÜRÜN ADEDİ</p>
                                    <p class="head_couter mt-4" style="font-size: large; font-weight: 600; color:black;">
                                       <?php while($row2 = mysqli_fetch_array($result2)):;?>
                                       <?php echo $row2[0];?>
                                       <?php endwhile;?>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-7 col-lg-4">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-shopping-cart orange_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">MAĞAZA SAYISI</p>
                                    <p class="head_couter mt-4" style="font-size: large; font-weight: 600; color:black;">
                                       <?php while($row3 = mysqli_fetch_array($result3)):;?>
                                       <?php echo $row3[0];?>
                                       <?php endwhile;?>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-7 col-lg-4">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-heart red_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">ÜRÜN ÇEŞİDİ</p>
                                    <p class="head_couter mt-4" style="font-size: large; font-weight: 600; color:black;">
                                       <?php while($row4 = mysqli_fetch_array($result4)):;?>
                                       <?php echo $row4[0];?>
                                       <?php endwhile;?>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-7 col-lg-4">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-users yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">MÜŞTERİ SAYISI</p>
                                    <p class="head_couter mt-4" style="font-size: large; font-weight: 600; color:black;">
                                       <?php while($row5 = mysqli_fetch_array($result5)):;?>
                                       <?php echo $row5[0];?>
                                       <?php endwhile;?>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-7 col-lg-4">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-check brown_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                                 <div>
                                    <p class="total_no">SİPARİŞ ADEDİ</p>
                                    <p class="head_couter mt-4" style="font-size: large; font-weight: 600; color:black;">
                                       <?php while($row6 = mysqli_fetch_array($result6)):;?>
                                       <?php echo $row6[0];?>
                                       <?php endwhile;?>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2022 Designed by DEUYBS. All rights reserved.<br><br>
                           Distributed By: <a href="https://ybs.deu.edu.tr">DEUYBS</a>
                        </p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <!-- jQuery -->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style1.js"></script>
   </body>
</html>