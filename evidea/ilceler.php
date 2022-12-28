<?php
include("baglan.php");

$sorgu = $db->prepare('SELECT * FROM ilce_hasilati');
$sorgu->execute();
$ilcelerlist = $sorgu->fetchAll(PDO::FETCH_OBJ);

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
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
         <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawVisualization);

            function drawVisualization() {
            // Some raw data (not necessarily accurate)
            var data = google.visualization.arrayToDataTable([
               ['İlçeler', 'Hasılat'],
               <?php
               $sql ="SELECT * FROM encokhasilatyapanilceler";
               $fire = mysqli_query($con,$sql);
               while ($result = mysqli_fetch_assoc($fire)){
                  echo"['".$result['ilce_ad']."',".$result['ilceHasilatlari']."],";
               }

               ?>
            ]);

            var options = {
               title : 'HASILATLAR',
               vAxis: {title: 'Hasılat'},
               hAxis: {title: 'İlçe Adı'},
               seriesType: 'bars',
               series: {5: {type: 'line'}}
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div1'));
            chart.draw(data, options);
            }
      </script>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
         <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawVisualization);

            function drawVisualization() {
            var data = google.visualization.arrayToDataTable([
               ['İlçe Adı', 'Sipariş Sayısı'],
               <?php
               $sql ="SELECT * FROM encoksiparisverenilceler";
               $fire = mysqli_query($con,$sql);
               while ($result = mysqli_fetch_assoc($fire)){
                  echo"['".$result['ilce_ad']."',".$result['siparisSayisi']."],";
               }

               ?>
            ]);

            var options = {
               title : 'SİPARİŞ SAYISI',
               vAxis: {title: 'Sipariş Sayısı'},
               hAxis: {title: 'İlçe Adı'},
               seriesType: 'bars',
               series: {5: {type: 'line'}}
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div2'));
            chart.draw(data, options);
            }
      </script>
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
         <script type="text/javascript">
            google.charts.load('current', {'packages':['corechart']});
            google.charts.setOnLoadCallback(drawVisualization);

            function drawVisualization() {
            // Some raw data (not necessarily accurate)
            var data = google.visualization.arrayToDataTable([
               ['İlçe Adı', 'Adet'],
               <?php
               $sql ="SELECT * FROM encokurunadedisatanilceler";
               $fire = mysqli_query($con,$sql);
               while ($result = mysqli_fetch_assoc($fire)){
                  echo"['".$result['ilce_ad']."',".$result['ilcedeSatilanUrunAdedi']."],";
               }

               ?>
            ]);

            var options = {
               title : 'ÜRÜN ADEDİ',
               vAxis: {title: 'Toplam Adet'},
               hAxis: {title: 'İlçe Adı'},
               seriesType: 'bars',
               series: {5: {type: 'line'}}
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div3'));
            chart.draw(data, options);
            }
      </script>

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
                                 <h2>İLÇELERE GÖRE SATIŞLAR</h2>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-12">
                              <div class="white_shd full margin_bottom_30">
                                 <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                       <h2>İZMİR</h2>
                                    </div>
                                 </div>
                                 <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                       <table class="table table-hover">
                                          <thead>
                                             <tr>
                                                <th>İlçe ID</th>
                                                <th>İlçe Adı</th>
                                                <th>Toplam Sipariş Sayısı</th>
                                                <th>İlçe İçin Satılan Ürün Adedi</th>
                                                <th>İlçeden Elde Edilen Hasılat</th>
                                                <th class="red_color font-weight-bold">Sil</th>
                                             </tr>
                                          </thead>
                                          <?php foreach ($ilcelerlist as $ilist){?>
                                          <tbody>
                                             <tr>
                                                <td><?= $ilist->ilce_id ?></td>
                                                <td><?= $ilist->ilce_ad ?></td>
                                                <td><?= $ilist->siparisSayisi ?></td>
                                                <td><?= $ilist->ilcedeSatilanUrunAdedi ?></td>
                                                <td><?= $ilist->ilceHasilatlari ?></td>
                                                <td><a href="sil.php?ilcelerid=<?= $ilist->ilce_id ?>" class="red_color font-weight-bold">Sil</a></td>
                                             </tr>
                                          </tbody>
                                          <?php } ?>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="full">
                                 <div class="full">
                                    <div id="chart_div1" style="width: auto; height: 600px;"></div>
                                    <br>
                                    <div id="chart_div2" style="width: auto; height: 600px;"></div>
                                    <br>
                                    <div id="chart_div3" style="width: auto; height: 600px;"></div>
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
               </div>            
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