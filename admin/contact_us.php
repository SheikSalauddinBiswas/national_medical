<?php include "include/header.php"; ?>
<div class="" id="content">
    <div class="">
        <div class="">
        <h1 class="text-secondary pl-5 pt-3"><span class="fa fa-paper-plane text-info" ></span>Contact Us<hr></h1> 
        </div>
    </div><hr>
    <!-- hotline start -->
    <?php
      $sql    ="SELECT * FROM hotline ORDER BY id DESC";
      $result =$db->query($sql);
    ?>
    <div >
      <h3 class="text-secondary pl-5 pt-3"><u>Hotline</u></h3>
      <a href="hotline_add.php" class="btn btn-secondary ml-5 mb-2">Add New Hotline</a>
    </div>
    <div>
      <table class="table table-bordered container-sm">
        <thead class="thead-dark">
          <th>ID</th>
          <th>Title</th>
          <th>Mobile</th>
          <th>Description</th>
          <th>Edit</th>
        </thead>
        <?php while($row = $result->fetch_assoc()):   ?>
        <tbody>
        <tr>
            <td><?php echo $row['id']  ;  ?></td>
            <td><?php echo $row['title']  ;  ?></td>
            <td><?php echo $row['mobile']  ;  ?></td>
            <td><?php echo $row['description']  ;  ?></td>
            <td>
             <a href="hotline_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
             <a href="home_feature_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>







  </div>
  
<?php include "include/footer.php"; ?>