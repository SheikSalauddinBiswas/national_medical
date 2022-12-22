<?php 
    include "include/header.php"; 
    include "connection.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM hotline WHERE id='$id'";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();
    

?>
  <div class="" id="content">
    <div class="">
        <div class="">
        <h1 class="text-secondary pl-5 pt-3"><span class="fa fa-address-card-o text-info" ></span>Home Welcome Add<hr></h1> 
        </div>
    </div><hr>
    <br><br>
    <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <form method="POST" action="hotline_edit_insert.php" role="form" >
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="form-group">
                                <label for="title"><p>Title</p></label><br><br>
                                <input type="text" value="<?php echo $data['title']  ;  ?>" name="title" id="title" placeholder="Enter Title"/>
                            </div>
                            <div class="form-group">
                                <label for="mobile"><p>Description</p></label><br><br>
                                <input type="text" value="<?php echo $data['description']  ;  ?>" name="description" id="description" placeholder="Enter Description"/>
                            </div>
                            <div class="form-group">
                                <label for="mobile"><p>Mobile</p></label><br><br>
                                <input type="mobile" value="<?php echo $data['mobile']  ;  ?>"  name="mobile" id="mobile" placeholder="Enter Mobile"/>
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