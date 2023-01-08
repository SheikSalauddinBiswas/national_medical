<?php include "include/header.php"; 
 include "include/connection.php";
 $id = $_GET['id'];
 $sql = "SELECT * FROM doctor WHERE id='$id'";
 $result = $db->query($sql);

?>
    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Doctors </h1>
                    <a href="index.php">Home</a> <span>|</span> <a href="doctors.php">Doctors</a>
                </div>
            </div>
        </div>
    </section><br><br><br>
    <!-- Banner Area End -->
    <!-- Docor area start  -->
    <section class="welcome-area section-padding3">
        <div class="container">
            <div class="row">
                <?php while($hwrow = $result->fetch_assoc()):  ?>
                <div class="col-lg-5 align-self-center">
                    <div class="welcome-img">
                        <img src="<?php echo"admin/images/doctor/" .$hwrow['image']  ;  ?>" alt="image">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="welcome-text mt-5 mt-lg-0">
                        <h1><?php echo $hwrow['name']  ;  ?></h1>
                        <u><h3><?php echo $hwrow['degree']  ;  ?></h3></u>
                        <p class="pt-3"><?php echo $hwrow['description']  ;  ?></p>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>



   
   
   
   
   
   
   
   
   
   
   
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