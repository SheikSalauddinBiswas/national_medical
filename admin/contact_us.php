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
             <a href="hotline_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>
    <!-- google map area start -->
    <?php
      $sql    ="SELECT * FROM map ORDER BY id DESC";
      $result =$db->query($sql);
    ?>
    <div >
      <h3 class="text-secondary pl-5 pt-3"><u>Google Map</u></h3>
      <a href="gmap_add.php" class="btn btn-secondary ml-5 mb-2">Add New G-Map</a>
    </div>
    <div>
      <table class="table table-bordered container-md">
        <thead class="thead-dark">
          <th>ID</th>
          <th>G-map URL</th>
          <th>Edit</th>
        </thead>
        <?php while($row = $result->fetch_assoc()):   ?>
        <tbody>
        <tr>
            <td><?php echo $row['id']  ;  ?></td>
            <td><?php echo $row['gurl']  ;  ?></td>
            <td>
             <a href="gmap_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>







  </div>
  
<?php include "include/footer.php"; ?>