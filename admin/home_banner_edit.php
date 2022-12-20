<?php 
    include "include/header.php"; 
    include "connection.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM home_banner_text WHERE id='$id'";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();



?>
  <div class="" id="content">
    <div class="">
        <div class="">
        <h1 class="text-secondary pl-5 pt-3"><span class="fa fa-address-card-o text-info" ></span>Home Banner Edit<hr></h1> 
        </div>
    </div><hr>
    <br><br>
    <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <form method="POST" action="home_banner_edit_update.php" role="form">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="form-group">
                                <label for="h4"><p>Heading -4</p></label><br><br>
                                <input type="text" value="<?php echo $data['h4']  ;  ?>" name="head1" id="head1" placeholder="Enter Heading -4"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><p>Heading -1</p></label><br><br>
                                <input type="text" value="<?php echo $data['h1']  ;  ?>" name="head2" id="head2" placeholder="Enter Heading -1"/>
                            </div>
                            <div class="form-group">
                                <label for="mobile"><p>Paragraph</p></label><br><br>
                                <input type="text" value="<?php echo $data['paragraph']  ;  ?>"  name="paragraph" id="paragraph" placeholder="Enter Heading Paragraph"/>
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