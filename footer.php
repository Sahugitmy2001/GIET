<script>
  $(document).ready(function() {
    $('#p_use').click(function() {
      uni_modal("Privacy Policy", "policy.php", "mid-large")
    })
    window.viewer_modal = function($src = '') {
      start_loader()
      var t = $src.split('.')
      t = t[1]
      if (t == 'mp4') {
        var view = $("<video src='" + $src + "' controls autoplay></video>")
      } else {
        var view = $("<img src='" + $src + "' />")
      }
      $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
      $('#viewer_modal .modal-content').append(view)
      $('#viewer_modal').modal({
        show: true,
        backdrop: 'static',
        keyboard: false,
        focus: true
      })
      end_loader()

    }
    window.uni_modal = function($title = '', $url = '', $size = "") {
      start_loader()
      $.ajax({
        url: $url,
        error: err => {
          console.log()
          alert("An error occured")
        },
        success: function(resp) {
          if (resp) {
            $('#uni_modal .modal-title').html($title)
            $('#uni_modal .modal-body').html(resp)
            if ($size != '') {
              $('#uni_modal .modal-dialog').addClass($size + '  modal-dialog-centered')
            } else {
              $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
            }
            $('#uni_modal').modal({
              show: true,
              backdrop: 'static',
              keyboard: false,
              focus: true
            })
            end_loader()
          }
        }
      })
    }
    window._conf = function($msg = '', $func = '', $params = []) {
      $('#confirm_modal #confirm').attr('onclick', $func + "(" + $params.join(',') + ")")
      $('#confirm_modal .modal-body').html($msg)
      $('#confirm_modal').modal('show')
    }
  })
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Footer-->
<!-- <footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; <?php echo $_settings->info('short_name') ?> 2024</p>
    <p class="m-0 text-center text-white">Developed By: TEAM BOOKISH WORLD </p>



    <a href="" style="text-decoration: none;"><i class="fa-brands fa-facebook"></i></a>
    <a href="" style="text-decoration: none;">Google</a>
    <a href="" style="text-decoration: none;">Facebook</a>
  </div>
</footer> -->

<!-- Site footer -->
<!-- <footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h6>About</h6>
        <p class="text-justify"><i>At Bookish World, we are passionate about literature and dedicated to fostering a vibrant community of book lovers. We believe that books have the power to transport us to new worlds, inspire our minds, and touch our hearts. That's why we offer a wide selection of genres, authors, and collections, catering to every reader's taste and preference.

            Our mission is to provide a seamless and enjoyable online shopping experience, making it easy for you to discover your next favorite read. We are committed to offering competitive prices, speedy delivery, and exceptional customer service. Our knowledgeable team is always ready to assist you with any questions or recommendations you may need.

            As a book lover, you'll feel right at home in our Specialty Collections and Author Collections, carefully curated to showcase the best works in various genres and by beloved authors. We also offer a Book Lovers Shop, stocked with bookish merchandise that celebrates the joy of reading.</p>
      </div>

      <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60246.44421159454!2d84.76705689744804!3d19.30832153313044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3d500ef1cb60ad%3A0x5b75778874294ff!2sBrahmapur%2C%20Odisha!5e0!3m2!1sen!2sin!4v1711415726042!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>Categories</h6>
        <ul class="footer-links">
          <li><a href="">Management</a></li>
          <li><a href="">Academic</a></li>
          <li><a href="">Computer Science</a></li>
          <li><a href="">Competative</a></li>

        </ul>
      </div>

      <div class="col-xs-6 col-md-3">
        <h6>Quick Links</h6>
        <ul class="footer-links">
          <li><a href="#">Home</a></li>
          <li><a href="">About Us</a></li>
          <li><a href="">Privacy Policy</a></li>
          <li><a href="">Contact Us</a></li>
          <li><a href="#">Login</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by
          <a href="#">Team Bookish World</a>.
        </p>
      </div>



      <div class="col-md-4 col-sm-6 col-xs-12">
        <ul class="social-icons">
          <h3>Follow Us</h3>
          <a href="https://www.facebook.com/Bookishworld12/" target="_blank"> <i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/bookish_world_" target="_blank"> <i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/bookishworld___/" target="_blank"> <i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/company/the-bookish-world/" target="_blank"> <i class="fab fa-linkedin"></i></a>
        </ul>
      </div>
    </div>
  </div>
</footer>


<style>
  .site-footer {
    background-color: #26272b;
    padding: 45px 0 20px;
    font-size: 15px;
    line-height: 24px;
    color: #737373;
  }

  .site-footer hr {
    border-top-color: #bbb;
    opacity: 0.5
  }

  .site-footer hr.small {
    margin: 20px 0
  }

  .site-footer h6 {
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    margin-top: 5px;
    letter-spacing: 2px
  }

  .site-footer a {
    color: #737373;

  }

  .site-footer a:hover {
    color: #3366cc;
    text-decoration: none;
  }

  .footer-links {
    padding-left: 0;
    list-style: none
  }

  .footer-links li {
    display: block
  }

  .footer-links a {
    color: #737373
  }

  .footer-links a:active,
  .footer-links a:focus,
  .footer-links a:hover {
    color: #3366cc;
    text-decoration: none;
  }

  .footer-links.inline li {
    display: inline-block
  }

  .site-footer .social-icons {
    text-align: right
  }

  .site-footer .social-icons a {
    width: 40px;
    height: 40px;
    line-height: 40px;
    margin-left: 6px;
    margin-right: 0;
    border-radius: 100%;
    background-color: #33353d
  }

  .copyright-text {
    margin: 0
  }



  @media (max-width:991px) {
    .site-footer [class^=col-] {
      margin-bottom: 30px
    }
  }

  @media (max-width:767px) {
    .site-footer {
      padding-bottom: 0
    }

    .site-footer .copyright-text,
    .site-footer .social-icons {
      text-align: center
    }
  }

  .social-icons {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
  }

  .social-icons li {
    display: inline-block;
    margin-bottom: 4px
  }

  .social-icons li.title {
    margin-right: 15px;
    text-transform: uppercase;
    color: #96a2b2;
    font-weight: 700;
    font-size: 13px
  }

  .social-icons a {
    background-color: #eceeef;
    color: #818a91;
    font-size: 16px;
    display: inline-block;
    line-height: 44px;
    width: 44px;
    height: 44px;
    text-align: center;
    margin-right: 8px;
    border-radius: 100%;
    -webkit-transition: all .2s linear;
    -o-transition: all .2s linear;
    transition: all .2s linear
  }

  .social-icons a:active,
  .social-icons a:focus,
  .social-icons a:hover {
    color: #fff;
    background-color: #29aafe
  }

  .social-icons.size-sm a {
    line-height: 34px;
    height: 34px;
    width: 34px;
    font-size: 14px
  }

  .social-icons a.facebook:hover {
    background-color: #3b5998
  }

  .social-icons a.twitter:hover {
    background-color: #00aced
  }

  .social-icons a.linkedin:hover {
    background-color: #007bb6
  }

  .social-icons a.dribbble:hover {
    background-color: #ea4c89
  }

  @media (max-width:767px) {
    .social-icons li.title {
      display: block;
      margin-right: 0;
      font-weight: 600
    }
  }
</style> -->

<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h6>About</h6>
        <p class="text-justify"> <!-- Removed <i> tag -->
          At Bookish World, we are passionate about literature and dedicated to fostering a vibrant community of book lovers. We believe that books have the power to transport us to new worlds, inspire our minds, and touch our hearts. That's why we offer a wide selection of genres, authors, and collections, catering to every reader's taste and preference.
          Our mission is to provide a seamless and enjoyable online shopping experience, making it easy for you to discover your next favorite read. We are committed to offering competitive prices, speedy delivery, and exceptional customer service. Our knowledgeable team is always ready to assist you with any questions or recommendations you may need.
          As a book lover, you'll feel right at home in our Specialty Collections and Author Collections, carefully curated to showcase the best works in various genres and by beloved authors. We also offer a Book Lovers Shop, stocked with bookish merchandise that celebrates the joy of reading.
        </p>
      </div>

      <div class="col-sm-12 col-md-6">
        <!-- Google Map iframe here -->
        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60246.44421159454!2d84.76705689744804!3d19.30832153313044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3d500ef1cb60ad%3A0x5b75778874294ff!2sBrahmapur%2C%20Odisha!5e0!3m2!1sen!2sin!4v1711415726042!5m2!1sen!2sin" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <div class="col-xs-12 col-md-6">
        <h6>Categories</h6>
        <ul class="footer-links">
          <li><a href="admin/maintenance/manage_category.php">Management</a></li>
          <li><a href="">Academic</a></li>
          <li><a href="">Computer Science</a></li>
          <li><a href="">Competitive</a></li>

        </ul>
      </div>


      <div class="col-xs-12 col-md-6">
        <h6>Quick Links</h6>
        <ul class="footer-links">
          <li><a href="#">Home</a></li>
          <li><a href="about.php" target="_blank">About Us</a></li>
          <li><a href="privacy_policy.html" target="_blank">Privacy Policy</a></li>
          <li><a href="">Contact Us</a></li>
          <li><a href="login.php" target="_blank">Login</a></li>
        </ul>
      </div>
    </div>
    <hr>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-6 col-xs-12">
        <p class="copyright-text">Copyright &copy; 2024 All Rights Reserved by
          <a href="#">Team Bookish World</a>.
        </p>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-12">
        <ul class="social-icons">
          <h3>Follow Us</h3>
          <a href="https://www.facebook.com/Bookishworld12/" target="_blank"> <i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/bookish_world_" target="_blank"> <i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/bookishworld___/" target="_blank"> <i class="fab fa-instagram"></i></a>
          <a href="https://www.linkedin.com/company/the-bookish-world/" target="_blank"> <i class="fab fa-linkedin"></i></a>
        </ul>
      </div>
    </div>
  </div>
</footer>


<style>
  /* Adjustments for the map container */
  .map-container {
    height: 300px;
    /* Set the desired height for the map */
    overflow: hidden;
    /* Hide any overflowing content */
  }

  .map-container iframe {
    width: 100%;
    /* Make the map iframe responsive */
    height: 100%;
    /* Ensure the map fills its container */
    border: none;
    /* Remove default iframe border */
  }

  /* Additional styling for the footer */
  .site-footer {
    background-color: #26272b;
    padding: 45px 0 20px;
    font-size: 15px;
    line-height: 24px;
    color: #737373;
  }

  .site-footer hr {
    border-top-color: #bbb;
    opacity: 0.5;
  }

  .site-footer hr.small {
    margin: 20px 0;
  }

  .site-footer h6 {
    color: #fff;
    font-size: 16px;
    text-transform: uppercase;
    margin-top: 5px;
    letter-spacing: 2px;
  }

  .site-footer a {
    color: #737373;
  }

  .site-footer a:hover {
    color: #3366cc;
    text-decoration: none;
  }

  .footer-links {
    padding-left: 0;
    list-style: none;
  }

  .footer-links li {
    display: block;
  }

  .footer-links a {
    color: #737373;
  }

  .footer-links a:active,
  .footer-links a:focus,
  .footer-links a:hover {
    color: #3366cc;
    text-decoration: none;
  }

  .footer-links.inline li {
    display: inline-block;
  }

  .site-footer .social-icons {
    text-align: right;
  }

  .site-footer .social-icons a {
    width: 40px;
    height: 40px;
    line-height: 40px;
    margin-left: 6px;
    margin-right: 0;
    border-radius: 100%;
    background-color: #33353d;
  }

  .copyright-text {
    margin: 0;
  }

  @media (max-width: 991px) {
    .site-footer [class^=col-] {
      margin-bottom: 30px;
    }
  }

  @media (max-width: 767px) {
    .site-footer {
      padding-bottom: 0;
    }

    .site-footer .copyright-text,
    .site-footer .social-icons {
      text-align: center;
    }
  }

  .social-icons {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
  }

  .social-icons li {
    display: inline-block;
    margin-bottom: 4px;
  }

  .social-icons li.title {
    margin-right: 15px;
    text-transform: uppercase;
    color: #96a2b2;
    font-weight: 700;
    font-size: 13px;
  }

  .social-icons a {
    background-color: #eceeef;
    color: #818a91;
    font-size: 16px;
    display: inline-block;
    line-height: 44px;
    width: 44px;
    height: 44px;
    text-align: center;
    margin-right: 8px;
    border-radius: 100%;
    -webkit-transition: all .2s linear;
    -o-transition: all .2s linear;
    transition: all .2s linear;
  }

  .social-icons a:active,
  .social-icons a:focus,
  .social-icons a:hover {
    color: #fff;
    background-color: #29aafe;
  }

  .social-icons.size-sm a {
    line-height: 34px;
    height: 34px;
    width: 34px;
    font-size: 14px;
  }

  .social-icons a.facebook:hover {
    background-color: #3b5998;
  }

  .social-icons a.twitter:hover {
    background-color: #00aced;
  }

  .social-icons a.linkedin:hover {
    background-color: #007bb6;
  }

  .social-icons a.dribbble:hover {
    background-color: #ea4c89;
  }

  @media (max-width: 767px) {
    .social-icons li.title {
      display: block;
      margin-right: 0;
      font-weight: 600;
    }
  }
</style>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url ?>plugins/sparklines/sparkline.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url ?>plugins/select2/js/select2.full.min.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url ?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url ?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url ?>plugins/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- overlayScrollbars -->
<!-- <script src="<?php echo base_url ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
<!-- AdminLTE App -->
<script src="<?php echo base_url ?>dist/js/adminlte.js"></script>
<div class="daterangepicker ltr show-ranges opensright">
  <div class="ranges">
    <ul>
      <li data-range-key="Today">Today</li>
      <li data-range-key="Yesterday">Yesterday</li>
      <li data-range-key="Last 7 Days">Last 7 Days</li>
      <li data-range-key="Last 30 Days">Last 30 Days</li>
      <li data-range-key="This Month">This Month</li>
      <li data-range-key="Last Month">Last Month</li>
      <li data-range-key="Custom Range">Custom Range</li>
    </ul>
  </div>
  <div class="drp-calendar left">
    <div class="calendar-table"></div>
    <div class="calendar-time" style="display: none;"></div>
  </div>
  <div class="drp-calendar right">
    <div class="calendar-table"></div>
    <div class="calendar-time" style="display: none;"></div>
  </div>
  <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
</div>
<div class="jqvmap-label" style="display: none; left: 1093.83px; top: 394.361px;">Idaho</div>