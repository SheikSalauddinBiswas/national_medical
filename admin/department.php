<?php include "include/header.php"; ?>
<div class="" id="content">
    <div class="">
        <div class="">
        <h1 class="text-secondary pl-5 pt-3"><span class="fa fa-building-o text-info" ></span>Department<hr></h1> 
        </div>
    </div><hr>
    <!-- Home slider start -->
    <?php
      $sql    ="SELECT * FROM home_slider ORDER BY id DESC";
      $result =$db->query($sql);
    ?>
    <div >
      <h3 class="text-secondary pl-5 pt-3"><u>Department Slider</u></h3>
      <a href="home_slider.php" class="btn btn-secondary ml-5 mb-2">Add New Slider</a>
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
            <td><img src="<?php echo"images/slider/" .$row['image']  ;  ?>" width="50px" alt="image"></td>
            <td><?php echo $row['title']  ;  ?></td>
            <td><?php echo $row['description']  ;  ?></td>
            <td>
             <a href="home_slider_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
             <a href="home_slider_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>














  </div>
  


<?php include "include/footer.php"; ?>