<?php include "include/header.php"; ?>
<!-- Banner Area Starts -->
<section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>About Us</h1>
                    <a href="index.php">Home</a> <span>|</span> <a href="about.php">About Us</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

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
    <!-- Developer area start  -->
    <?php
      $sql    ="SELECT * FROM developer ORDER BY id DESC";
      $result =$db->query($sql);
    ?>

    <section class="developers-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Developers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php while($row = $result->fetch_assoc()):   ?>
                <div class="col-lg-3 col-md-6">
                    <div class="single-feature text-center item-padding">
                        <img src="<?php echo"admin/images/developer/" .$row['image']  ;  ?>" width="210" alt="image">
                        <h3><?php echo $row['title']  ;  ?></h3>
                        <p class="pt-3"><?php echo $row['description']  ;  ?></p>
                    </div>
                </div>
                <?php endwhile; ?>

            </div>
        </div>

    </section>



<?php include "include/footer.php"; ?>