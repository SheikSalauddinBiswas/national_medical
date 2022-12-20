<?php 
include "include/header.php"; 
include "connection.php"; 
$sql    ="SELECT * FROM home_banner_text ORDER BY id DESC";
$result =$db->query($sql);
session_start();
if($_SESSION['id']):
?>
  <div class="" id="content">
    <div class="">
        <div class="">
        <h1 class="text-secondary pl-5 pt-3"><span class="fa fa-home text-info" ></span>Home Page<hr></h1> 
        </div>
    </div>
    <hr>
     <!-- Banner text start -->
    <div >
      <h3 class="text-secondary pl-5 pt-3"><u>Banner text</u></h3>
    </div>
    <div>
      <table class="table table-bordered container-sm">
        <thead class="thead-dark">
          <th>ID</th>
          <th>Heading 4</th>
          <th>Heading 1</th>
          <th>Paragraph</th>
          <th>Edit</th>
        </thead>
        <?php while($row = $result->fetch_assoc()):   ?>
        <tbody>
        <tr>
            <td><?php echo $row['id']  ;  ?></td>
            <td><?php echo $row['h4']  ;  ?></td>
            <td><?php echo $row['h1']  ;  ?></td>
            <td><?php echo $row['paragraph']  ;  ?></td>
            <td>
             <a href="home_banner_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <!-- Banner text End -->
    <!-- Home Feature Start -->
    <?php
      $sql    ="SELECT * FROM home_feature ORDER BY id DESC";
      $result =$db->query($sql);
    ?>
    <div >
      <h3 class="text-secondary pl-5 pt-3"><u>Home Feature</u></h3>
      <a href="home_feature_add.php" class="btn btn-secondary ml-5 mb-2">Add New Feature</a>
    </div>
    <div>
      <table class="table table-bordered container-sm">
        <thead class="thead-dark">
          <th>ID</th>
          <th>Photo</th>
          <th>Title</th>
          <th>Description</th>
          <th>Edit</th>
        </thead>
        <?php while($row = $result->fetch_assoc()):   ?>
        <tbody>
        <tr>
            <td><?php echo $row['id']  ;  ?></td>
            <td><img src="<?php echo"images/feature/" .$row['image']  ;  ?>" width="50px" alt="image"></td>
            <td><?php echo $row['title']  ;  ?></td>
            <td><?php echo $row['description']  ;  ?></td>
            <td>
             <a href="home_feature_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
             <a href="home_feature_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <!-- home welcome area start -->
    <?php
      $sql    ="SELECT * FROM home_welcome ORDER BY id DESC";
      $result =$db->query($sql);
    ?>
    <div >
      <h3 class="text-secondary pl-5 pt-3"><u>Home Welcome</u></h3>
      <a href="home_welcome_add.php" class="btn btn-secondary ml-5 mb-2">Add New Welcome</a>
    </div>
    <div>
      <table class="table table-bordered container-sm">
        <thead class="thead-dark">
          <th>ID</th>
          <th>Photo</th>
          <th>Title</th>
          <th>Description</th>
          <th>Edit</th>
        </thead>
        <?php while($row = $result->fetch_assoc()):   ?>
        <tbody>
        <tr>
            <td><?php echo $row['id']  ;  ?></td>
            <td><img src="<?php echo"images/welcome/" .$row['image']  ;  ?>" width="50px" alt="image"></td>
            <td><?php echo $row['title']  ;  ?></td>
            <td><?php echo $row['description']  ;  ?></td>
            <td>
             <a href="home_welcome_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
             <a href="home_welcome_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <!-- Home Welcome area end -->
    
    




















  </div>
  
<?php include "include/footer.php"; 

else:
  header("Location:login.php");

endif;


?>