<?php
include("baglan.php");

try{
    $db= new PDO("mysql:host=localhost; dbname=evidea; charset=utf8", 'root','');
    //echo "Başarılı";//
}
catch(Exception $e)
{
    echo $e->message;
}

$sorgu = $db->prepare('SELECT * FROM mevcutmagazalar');
$sorgu->execute();
$magazalarlist = $sorgu->fetchAll(PDO::FETCH_OBJ);

$query1 = "SELECT * FROM ilceler";
$result1 = mysqli_query($connect, $query1);

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
                                 <h2>MAĞAZALAR</h2>
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
                                                <th>Mağaza ID</th>
                                                <th>Mağaza Adı</th>
                                                <th>İlçe</th>
                                                <th class="red_color font-weight-bold">Sil</th>
                                             </tr>
                                          </thead>
                                          <?php foreach ($magazalarlist as $mlist){?>
                                          <tbody>
                                             <tr>
                                                <td><?= $mlist->magaza_id ?></td>
                                                <td><?= $mlist->magaza_ad ?></td>
                                                <td><?= $mlist->ilce_ad ?></td>
                                                <td><a href="sil.php?magazalarid=<?= $mlist->magaza_id ?>" class="red_color font-weight-bold">Sil</a></td>
                                             </tr>
                                          </tbody>
                                          <?php } ?>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="white_shd full margin_bottom_30">
                                 <div class="table_section padding_infor_info">
                                    <div class="table-responsive-sm">
                                       <h1 class="mb-3">MAĞAZA EKLE</h1>
                                       <form action="islem.php" method="POST" class="p-1">
                                          <div class="form-group">
                                             <input type="text" class="form-control mt-1" id="magaza_ad" name="magaza_ad" placeholder="Mağaza Adı:">
                                          </div>
                                          <select name="ilce" id="ilce" class="form-control">
                                             <option value="" disabled selected>İlçe</option>
                                             <?php while($row1 = mysqli_fetch_array($result1)):;?>
                                             <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
                                             <?php endwhile;?>
                                          </select>
                                          <br>
                                          <button type="submit" class="btn btn-primary">EKLE</button>
                                       </form>
                                    </div>
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