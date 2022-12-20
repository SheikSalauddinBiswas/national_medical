<?php 
include "include/header.php"; 
include "admin/connection.php";
$sql    ="SELECT * FROM home_banner_text ";
$result =$db->query($sql);




?>
    <!-- Banner Area Starts -->
    <section class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <?php while($row = $result->fetch_assoc()):   ?>
                    <h4><?php echo $row['h4']  ;  ?></h4>
                    <h1><?php echo $row['h1']  ;  ?></h1>
                    <p><?php echo $row['paragraph']  ;  ?></p>
                    <a href="" class="template-btn mt-3">take appointment</a>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Feature Area Starts -->
                <?php
                include "admin/connection.php";
                $hfsql = "SELECT * FROM home_feature" ;
                $HFResult = $db->query($hfsql);
                  

                ?>
    <section class="feature-area section-padding">
        <div class="container">
            <div class="row">
                <?php while($hfrow = $HFResult->fetch_assoc()):  ?>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding">
                        <img src="<?php echo"admin/images/feature/" .$hfrow['image']  ;  ?>" alt="image">
                        <h3><?php echo $hfrow['title']  ;  ?></h3>
                        <p class="pt-3"><?php echo $hfrow['description']  ;  ?></p>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>
        </div>
    </section>
    
    <!-- Feature Area End -->

    <!-- Welcome Area Starts -->
            <?php
                include "admin/connection.php";
                $hwsql = "SELECT * FROM home_welcome" ;
                $HWResult = $db->query($hwsql);
                  

            ?>
    <section class="welcome-area section-padding3">
        <div class="container">
            <div class="row">
                <?php while($hwrow = $HWResult->fetch_assoc()):  ?>
                <div class="col-lg-5 align-self-center">
                    <div class="welcome-img">
                        <img src="<?php echo"admin/images/welcome/" .$hwrow['image']  ;  ?>" alt="image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="welcome-text mt-5 mt-lg-0">
                        <h2><?php echo $hwrow['title']  ;  ?></h2>
                        <p class="pt-3"><?php echo $hwrow['description']  ;  ?></p>
                        <a href="#" class="template-btn mt-3">learn more</a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
    <!-- Welcome Area End -->

    <!-- Department Area Starts -->
    <section class="department-area section-padding4">
        <div class="container bordered">
            <div class="row ">
                <div class="col-lg-6 offset-lg-3 ">
                    <div class="section-top text-center">
                        <h2>Popular department</h2>
                        <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="department-slider owl-carousel">
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="assets/images/department1.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="#"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>cardiac clinic</h3>
                                <p>Hath creeping subdue he fish gred face whose spirit that seasons today multiply female midst upon</p>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="assets/images/department2.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="departments.php"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>plastic surgery</h3>
                                <p>Hath creeping subdue he fish gred face whose spirit that seasons today multiply female midst upon</p>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="assets/images/department3.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="departments.php"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>dental clinic</h3>
                                <p>Hath creeping subdue he fish gred face whose spirit that seasons today multiply female midst upon</p>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="assets/images/department1.jpg" alt="" class="img-fluid">
                                <div class="hover-state">
                                    <a href="departments.php"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3>cardiac clinic</h3>
                                <p>Hath creeping subdue he fish gred face whose spirit that seasons today multiply female midst upon</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Department Area Starts -->

    <!-- Patient Area Starts -->
    <section class="patient-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Patient are saying</h2>
                        <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5">
                    <div class="single-patient mb-4">
                        <img src="assets/images/patient1.png" alt="">
                        <h3>daren jhonson</h3>
                        <h5>hp specialist</h5>
                        <p class="pt-3">Elementum libero hac leo integer. Risus hac road parturient feugiat. Litora cursus hendrerit bib elit Tempus inceptos posuere metus.</p>
                    </div>
                    <div class="single-patient">
                        <img src="assets/images/patient2.png" alt="">
                        <h3>black heiden</h3>
                        <h5>hp specialist</h5>
                        <p class="pt-3">Elementum libero hac leo integer. Risus hac road parturient feugiat. Litora cursus hendrerit bib elit Tempus inceptos posuere metus.</p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 align-self-center">
                    <div class="appointment-form text-center mt-5 mt-lg-0">
                        <h3 class="mb-5">appointment now</h3>
                        <form action="#">
                            <div class="form-group">
                                <input type="text" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" required>
                            </div>
                            <div class="form-group">
                                <input type="email" placeholder="Your Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email'" required> 
                            </div>
                            <div class="form-group">
                                <input type="text" id="datepicker" placeholder="Date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date'" required>
                            </div>
                            <div class="form-group">
                                <textarea name="message" cols="20" rows="7"  placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea>
                            </div>
                            <a href="#" class="template-btn">appointment now</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Patient Area Starts -->

    <!-- Specialist Area Starts -->
    <section class="specialist-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Our specialish</h2>
                        <p>Green above he cattle god saw day multiply under fill in the cattle fowl a all, living, tree word link available in the service for subdue fruit.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="assets/images/doctor1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>ethel davis</h3>
                                <h6>sr. faculty data science</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p>If you are looking at blank cassettes on the web, you may be very confused at the.</p>
                                <ul class="doctor-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i><a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i><a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i><a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i><a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="assets/images/doctor2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>dand mories</h3>
                                <h6>sr. faculty plastic surgery</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p>If you are looking at blank cassettes on the web, you may be very confused at the.</p>
                                <ul class="doctor-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i><a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i><a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i><a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i><a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-sm-0">
                        <div class="doctor-img">
                            <img src="assets/images/doctor3.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>align board</h3>
                                <h6>sr. faculty data science</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p>If you are looking at blank cassettes on the web, you may be very confused at the.</p>
                                <ul class="doctor-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i><a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i><a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i><a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i><a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor">
                        <div class="doctor-img">
                            <img src="assets/images/doctor4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3>jeson limit</h3>
                                <h6>sr. faculty plastic surgery</h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p>If you are looking at blank cassettes on the web, you may be very confused at the.</p>
                                <ul class="doctor-icon">
                                    <li><a href="#"><i class="fa fa-facebook"></i><a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i><a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i><a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i><a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Specialist Area Starts -->

    <!-- Hotline Area Starts -->
    <section class="hotline-area text-center section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Emergency hotline</h2>
                    <span>(+01) – 256 567 550</span>
                    <p class="pt-3">We provide 24/7 customer support. Please feel free to contact us <br>for emergency case.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Hotline Area End -->

    





<?php include "include/footer.php"; ?>