<?php include "include/header.php"; ?>
    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Our Doctors </h1>
                    <a href="index.php">Home</a> <span>|</span> <a href="doctors.php">Doctors</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

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