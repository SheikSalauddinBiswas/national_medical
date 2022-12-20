<?php 
    include "include/header.php"; 
    include "connection.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id='$id'";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();



?>
  <div class="" id="content">
    <div class="">
        <div class="">
        <h1 class="text-secondary pl-5 pt-3"><span class="fa fa-address-card-o text-info" ></span>Registration<hr></h1> 
        </div>
    </div>
    <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Registration</h2>
                        <form method="POST" class="register-form" role="form" action="update_user.php" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" value="<?php echo $data['name'] ; ?>" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" value="<?php echo $data['email'] ; ?>" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="mobile"><i class="zmdi zmdi-phone"></i></label>
                                <input type="number" value="<?php echo $data['mobile'] ; ?>" name="mobile" id="mobile" placeholder="Your Mobile No"/>
                            </div>
                            <div class="form-group">
                                <label for="department"><i class="zmdi zmdi-group"></i></label>
                                <input type="department"value="<?php echo $data['department'] ; ?>" name="department" id="department" placeholder="Your Department"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" value="<?php echo $data['password'] ; ?>" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" value="<?php echo $data['password'] ; ?>" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <label for="image"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="file" value="<?php echo $data['image'] ; ?>" name="image" id="image" placeholder="Enter your Image"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
  </div>
  <hr>
<?php include "include/footer.php"; ?>