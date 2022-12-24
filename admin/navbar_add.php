<?php 
    include "include/header.php"; 
    

?>
  <div class="" id="content">
    <div class="">
        <div class="">
        <h1 class="text-secondary pl-5 pt-3"><span class="fa fa-address-card-o text-info" ></span>Navbar Add<hr></h1> 
        </div>
    </div><hr>
    <br><br>
    <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <form method="POST" action="navbar_insert.php" role="form" >
                            <!-- <input type="hidden" name="id" value=""> -->
                            <div class="form-group">
                                <label for="title"><p>Nav Name</p></label><br><br>
                                <input type="text" value="" name="name" id="title" placeholder="Enter Title"/>
                            </div>
                            <div class="form-group">
                                <label for="mobile"><p>Nav Link</p></label><br><br>
                                <input type="text" value="" name="link" id="description" placeholder="Enter Description"/>
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