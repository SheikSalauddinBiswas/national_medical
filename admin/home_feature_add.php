<?php 
    include "include/header.php"; 
    

?>
  <div class="" id="content">
    <div class="">
        <div class="">
        <h1 class="text-secondary pl-5 pt-3"><span class="fa fa-address-card-o text-info" ></span>Home Feature Add<hr></h1> 
        </div>
    </div><hr>
    <br><br>
    <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <form method="POST" action="home_feature_add_insert.php" role="form" enctype="multipart/form-data">
                            <!-- <input type="hidden" name="id" value=""> -->
                            <div class="form-group">
                                <label for="title"><p>Title</p></label><br><br>
                                <input type="text" value="" name="title" id="title" placeholder="Enter Title"/>
                            </div>
                            <div class="form-group">
                                <label for="mobile"><p>Description</p></label><br><br>
                                <input type="text" value="" name="description" id="description" placeholder="Enter Description"/>
                            </div>
                            <div class="form-group">
                                <label for="image"><p>Image</p></label><br><br>
                                <input type="file" value=""  name="image" id="image" placeholder="Enter Image"/>
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