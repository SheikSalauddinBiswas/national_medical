    <!-- Footer Area Starts -->
    <?php
        include "connection.php";
      $sql    ="SELECT * FROM adress ORDER BY id DESC";
      $result =$db->query($sql);
    ?>
    <footer class="footer-area section-padding">
        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 offset-xl-2">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">National Medical</h3>
                            <?php while($row = $result->fetch_assoc()):   ?>
                            <ul>
                                <li class="mb-2"><a href="#"><?php echo $row['adress']  ;  ?></a></li>
                                <li class="mb-2"><a href="#"><?php echo $row['mobile']  ;  ?></a></li>
                                <li class="mb-2"><a href="#"><?php echo $row['email']  ;  ?></a></li>
                                <li><a href="#">Send us your query anytime!</a></li>
                            </ul>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <!-- <div class="col-xl-5 offset-xl-1 col-lg-6">
                        <div class="single-widget-home mb-5 mb-lg-0">
                            <h3 class="mb-4">newsletter</h3>
                            <p class="mb-4">You can trust us. we only send promo offers, not a single.</p>  
                            <form action="#">
                                <input type="email" placeholder="Your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email here'" required>
                                <button type="submit" class="template-btn">subscribe now</button>
                            </form>
                        </div>
                    </div> -->
                    <!-- <div class="col-xl-3 offset-xl-1 col-lg-3">
                        <div class="single-widge-home">
                            <h3 class="mb-4">instagram feed</h3>
                            <div class="feed">
                                <img src="assets/images/feed1.jpg" alt="feed">
                                <img src="assets/images/feed2.jpg" alt="feed">
                                <img src="assets/images/feed3.jpg" alt="feed">
                                <img src="assets/images/feed4.jpg" alt="feed">
                                <img src="assets/images/feed5.jpg" alt="feed">
                                <img src="assets/images/feed6.jpg" alt="feed">
                                <img src="assets/images/feed7.jpg" alt="feed">
                                <img src="assets/images/feed8.jpg" alt="feed">
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <span>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/vendor/superfish.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</php>
