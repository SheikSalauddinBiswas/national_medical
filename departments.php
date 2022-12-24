<?php include "include/header.php"; ?>
    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Departments</h1>
                    <a href="index.php">Home</a> <span>|</span> <a href="departments.php">Departments</a>
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