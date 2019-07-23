<?php
$thisPageName = 'top';
include_once(dirname(__FILE__) . '/app_config.php');
include(APP_PATH.'libs/head.php');
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="<?php echo APP_ASSETS ?>css/page/top.min.css">
</head>
<body id="top" class='top'>

  <?php include(APP_PATH.'libs/header.php'); ?>

  <div id="wrap"> 
    <div class="top_box1">
      <div class="inner_box">
        <div class="content">
          <div class="box">
            <h2 class="ttl">Bắt đầu chuyến đi của bạn</h2>
            <h3 class="ttl_sub">Đã có 9999 hành khách sử dụng trên toàn quốc</h3>
            <p class="txt">
              Lorem ipsum dolor sit amet, consectetur adipisicing ipsum dolor sit amet, consectetur adipisicing. 
              Lorem ipsum dolor sit amet, consectetur adipisicing ipsum dolor sit amet, consectetur adipisicing
            </p>
          </div>
          <div class="box">
            <img src="<?php echo APP_ASSETS;?>img/top/img_1.png" alt="xedike">
          </div>
        </div>        
      </div>
    </div>
    <div class="top_box2">
      <div class="inner_box">
        <div class="content">
          <h2 class="ttl_common">Tìm kiếm chuyến đi của bạn</h2>
          <form action="" method="post" name="frm_search" class="frm_search">
            <div class="box cearfix">
              <p class="input b1">
                <input type="text" class="txt1" name="txt1" placeholder="Nơi đi">
              </p>
              <p class="input b2">
                <input type="text" class="txt1" name="txt2" placeholder="Nơi đến">
              </p>
              <p class="input b3">
                <input type="text" class="txt2" name="txt3" placeholder="Ngày" id="datepicker" autocomplete="off">
              </p>
              <p class="input b4">
                <input type="number" class="txt3" name="txt4" placeholder="9 Chỗ">
              </p>
              <p class="input b5">
                <button type="submit" class="btn_search" name="btn_search">Tìm Kiếm</button>
              </p>
            </div>
          </form>
        </div>        
      </div>
    </div>
    <div class="top_box3">
      <div class="inner_box">
        <div class="content">
          <h2 class="ttl_common">Danh sách chuyến đi gần đây</h2>
          <div class="listbox">
            <?php for( $i = 0; $i < 5; $i++) { ?>
            <ul class="list clearfix">
              <li>
                <div class="box">
                  <p class="txt_location">Tp.HCM => Tiền Giang</p>
                  <p class="txt_date">2019/09/09</p>
                </div>
              </li>
              <li>
                <div class="box">
                  <p class="txt_car">Toyota 2.4</p>
                  <p class="txt_number">Hiện tại: 9 người</p>
                </div>
              </li>
              <li>
                <div class="box driverbox">
                  <p class="txt_name">Nguyễn Văn Tèo</p>
                  <p class="txt_star">5</p>
                </div>
              </li>
              <li>
                <div class="box pricebox">
                  <p class="txt_price">199.000<small>vnđ</small></p>
                  <p class="btn_book"><span>Đặt chỗ</span></p>
                </div>
              </li>
            </ul>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div> <!-- #wrap -->

  <?php include(APP_PATH.'libs/footer.php'); ?>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $( function() {
      $( "#datepicker" ).datepicker();
    } );
  </script>


</body>
</html>