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
    <section class="map-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="mapBox" class="mapBox">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d686.0537262908335!2d91.80761465931957!3d22.36754892383868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd98aa4e3cd97%3A0x26aaa6c0a0fe550d!2z4Kao4KeN4Kav4Ka-4Ka24Kao4Ka-4KayIOCmquCmsuCmv-Cmn-Cnh-CmleCmqOCmv-CmlSDgppXgprLgp4fgppw!5e0!3m2!1sen!2sbd!4v1671702794356!5m2!1sen!2sbd" width="1080" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Area End -->


    <!-- Contact Form Starts -->
    <section class="contact-form section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 mb-5 mb-lg-0">
                    <div class="d-flex">
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
                <div class="col-lg-9">
                    <form action="#">
                        <div class="left">
                            <input type="text" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required>
                            <input type="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required>
                            <input type="text" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'" required>
                        </div>
                        <div class="right">
                            <textarea name="message" cols="20" rows="7"  placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required></textarea>
                        </div>
                        <button type="submit" class="template-btn">subscribe now</button>
                    </form>
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