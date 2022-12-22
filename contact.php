<?php include "include/header.php"; ?>
<!-- Banner Area Starts -->
<section class="banner-area other-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Contact Us</h1>
                <a href="index.php">Home</a> <span>|</span> <a href="contact.php">Contact Us</a>
            </div>
        </div>
    </div>
</section>
<!-- Banner Area End -->

    <!-- Map Area Starts -->
    <?php
        include "admin/connection.php";
        $sql    ="SELECT * FROM map ";
        $result =$db->query($sql);
    ?>
    <section class="map-area section-padding">
        <div class="container">
            <div class="row">
                <?php while($row = $result->fetch_assoc()):   ?>
                <div class="col-lg-12">
                    <div id="mapBox" class="mapBox">
                        <iframe src="<?php echo $row['gurl']  ;  ?>" width="1080" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- Map Area End -->


    <!-- Contact Form Starts -->
    <section class="contact-form section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0 ">
                    <div class="d-flex justify-content-center">
                        <div class="into-icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="info-text">
                            <h3>California, United States</h3>
                            <p>Santa monica bullevard</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-text">
                            <h3>00 (440) 9865 562</h3>
                            <p>Mon to Fri 9am to 6 pm</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="into-icon">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="info-text">
                            <h3>support@colorlib.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Contact Form End -->
    <!-- Hotline Area Starts -->
    <?php
        include "admin/connection.php";
        $sql    ="SELECT * FROM hotline ";
        $result =$db->query($sql);
    ?>
    <section class="hotline-area text-center section-padding">
        <div class="container">
            <div class="row">
                <?php while($row = $result->fetch_assoc()):   ?>
                <div class="col-lg-12">
                    <h2><?php echo $row['title']  ;  ?></h2>
                    <span><?php echo"(+88)" .$row['mobile']  ;  ?></span>
                    <p class="pt-3"><?php echo $row['description']  ;  ?></p>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- Hotline Area End -->





<?php include "include/footer.php"; ?>