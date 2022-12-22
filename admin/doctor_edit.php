<?php 
    include "include/header.php"; 
    include "connection.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM doctor WHERE id='$id'";
    $result = $db->query($sql);
    $data = $result->fetch_assoc();
?>
    <div class="" id="content">
    <div class="">
        <div class="">
        <h1 class="text-secondary pl-5 pt-3"><span class="fa fa-address-card-o text-info" ></span>Edit Doctor<hr></h1> 
        </div>
    </div><hr>
    <br><br>
    <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <form method="POST" action="doctor_edit_update.php" role="form" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="form-group">
                                <label for="name"><p>Name</p></label><br><br>
                                <input type="text" value="<?php echo $data['name']  ;  ?>" name="name" id="name" placeholder="Enter Name"/>
                            </div>
                            <div class="form-group">
                                <label for="degree"><p>Degree</p></label><br><br>
                                <input type="text" value="<?php echo $data['degree']  ;  ?>" name="degree" id="degree" placeholder="Enter Degree"/>
                            </div>
                            <div class="form-group">
                                <label for="mobile"><p>Description</p></label><br><br>
                                <input type="text" value="<?php echo $data['description']  ;  ?>" name="description" id="description" placeholder="Enter Description"/>
                            </div>
                            <div class="form-group">
                                <label for="image"><p>Image</p></label><br><br>
                                <input type="file" value="<?php echo $data['image']  ;  ?>"  name="image" id="image" placeholder="Enter Image"/>
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