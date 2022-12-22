<?php include "include/header.php"; ?>
<div class="" id="content">
    <div class="">
        <div class="">
        <h1 class="text-secondary pl-5 pt-3"><span class="fa fa-list-alt text-info" ></span>Appointment<hr></h1> 
        </div>
    </div><hr>
    <!-- about area start -->
    <?php
      $sql    ="SELECT * FROM appointment ORDER BY id DESC";
      $result =$db->query($sql);
    ?>
    <div >
      <h3 class="text-secondary pl-5 pt-3"><u>Appointment List</u></h3>
      
    </div>
    <div>
      <table class="table table-bordered container-sm">
        <thead class="thead-dark">
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Date</th>
          <th>Massage</th>
          <th>Edit</th>
        </thead>
        <?php while($row = $result->fetch_assoc()):   ?>
        <tbody>
        <tr>
            <td><?php echo $row['id']  ;  ?></td>
            <td><?php echo $row['name']  ;  ?></td>
            <td><?php echo $row['email']  ;  ?></td>
            <td><?php echo $row['date']  ;  ?></td>
            <td><?php echo $row['massage']  ;  ?></td>
            <td>
             
             <a href="appointment_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <!-- about area end -->







  </div>
  

<?php include "include/footer.php"; ?>