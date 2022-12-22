<?php 
    include "include/header.php"; 
?>
  <div class="" id="content">
    <div class="">
        <div class="">
        <h1 class="text-secondary pl-5 pt-3"><span class="fa fa-globe text-info" ></span>Add Google Map<hr></h1> 
        </div>
    </div><hr>
    <br><br>
    <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <form method="POST" action="gmap_insert.php" role="form">
                            <!-- <input type="hidden" name="id" value=""> -->
                            <div class="form-group">
                                <label for="name"><p>G-map URL</p></label><br><br>
                                <input type="text" value="" name="gurl" id="name" placeholder="Enter Name"/>
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