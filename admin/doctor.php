<?php include "include/header.php"; ?>
<div class="" id="content">
    <div class="">
        <div class="">
        <h1 class="text-secondary pl-5 pt-3"><span class="fa fa-user-md text-info" ></span>Doctor<hr></h1> 
        </div>
    </div><hr>
    <!-- doctor list start -->
    <?php
      $sql    ="SELECT * FROM doctor ORDER BY id DESC";
      $result =$db->query($sql);
    ?>
    <div >
      <h3 class="text-secondary pl-5 pt-3"><u>Doctor List</u></h3>
      <a href="doctor_add.php" class="btn btn-secondary ml-5 mb-2">Add New Doctor</a>
    </div>
    <div>
      <table class="table table-bordered container-sm">
        <thead class="thead-dark">
          <th>ID</th>
          <th>Photo</th>
          <th>name</th>
          <th>Degree</th>
          <th>Description</th>
          <th>Edit</th>
        </thead>
        <?php while($row = $result->fetch_assoc()):   ?>
        <tbody>
        <tr>
            <td><?php echo $row['id']  ;  ?></td>
            <td><img src="<?php echo"images/doctor/" .$row['image']  ;  ?>" width="90px" alt="image"></td>
            <td><?php echo $row['name']  ;  ?></td>
            <td><?php echo $row['degree']  ;  ?></td>
            <td><?php echo $row['description']  ;  ?></td>
            <td>
             <a href="doctor_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
             <a href="doctor_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>








  </div>
  

<?php include "include/footer.php"; ?>