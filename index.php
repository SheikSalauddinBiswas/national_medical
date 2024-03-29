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
            <?php
                include "admin/connection.php";
                $hssql = "SELECT * FROM home_slider" ;
                $HSResult = $db->query($hssql);
                  

            ?>
    <section class="department-area section-padding4">
        <div class="container bordered">
            <div class="row ">
                <div class="col-lg-6 offset-lg-3 ">
                    <div class="section-top text-center">
                        <h2>Popular department</h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="department-slider owl-carousel">
                        <?php while($hsrow = $HSResult->fetch_assoc()):  ?>
                        <div class="single-slide">
                            <div class="slide-img">
                                <img src="<?php echo"admin/images/slider/" .$hsrow['image']  ;  ?>" alt="image">
                                <div class="hover-state">
                                    <a href="#"><i class="fa fa-stethoscope"></i></a>
                                </div>
                            </div>
                            <div class="single-department item-padding text-center">
                                <h3><?php echo $hsrow['title']  ;  ?></h3>
                                <p><?php echo $hsrow['description']  ;  ?></p>
                            </div>
                        </div>
                        <?php endwhile; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Department Area end -->


    <!-- Specialist Area Starts -->
    <?php
        include "admin/connection.php";
        $sql    ="SELECT * FROM doctor ";
        $result =$db->query($sql);
    ?>
    <section class="specialist-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Our specialish</h2>
                        </div>
                </div>
            </div>
            <div class="row">
                <?php while($row = $result->fetch_assoc()):   ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-doctor mb-4 mb-lg-0">
                        <div class="doctor-img">
                            <img src="<?php echo"admin/images/doctor/" .$row['image']  ;  ?>" alt="image">
                        </div>
                        <div class="content-area">
                            <div class="doctor-name text-center">
                                <h3><?php echo $row['name']  ;  ?></h3>
                                <h6><?php echo $row['degree']  ;  ?></h6>
                            </div>
                            <div class="doctor-text text-center">
                                <p><?php echo $row['description']  ;  ?></p>
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
                <?php endwhile; ?>
                
            </div>
        </div>
    </section>
    <!-- Specialist Area Starts -->

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