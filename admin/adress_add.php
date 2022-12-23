<?php 
    include "include/header.php"; 
?>
  <div class="" id="content">
    <div class="">
        <div class="">
        <h1 class="text-secondary pl-5 pt-3"><span class="fa fa-globe text-info" ></span>Add Adress<hr></h1> 
        </div>
    </div><hr>
    <br><br>
    <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <form method="POST" action="adress_insert.php" role="form">
                            <!-- <input type="hidden" name="id" value=""> -->
                            <div class="form-group">
                                <label for="name"><p>Adress</p></label><br><br>
                                <input type="text" value="" name="adress" id="name" placeholder="Enter Name"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><p>Mobile</p></label><br><br>
                                <input type="text" value="" name="mobile" id="name" placeholder="Enter Name"/>
                            </div>
                            <div class="form-group">
                                <label for="name"><p>E-mail</p></label><br><br>
                                <input type="text" value="" name="email" id="name" placeholder="Enter Name"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="save" id="save" class="form-submit" value="Save"/>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </section>
    
    
    
  </div>
  
<?php include "include/footer.php"; ?>