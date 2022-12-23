<?php include "include/header.php"; ?>
<div class="" id="content">
    <div class="">
        <div class="">
        <h1 class="text-secondary pl-5 pt-3"><span class="fa fa-sticky-note text-info" ></span>Blog<hr></h1> 
        </div>
    </div><hr>
    <div >
      <h3 class="text-secondary pl-5 pt-3"><u>Blog Page</u></h3>
      
    </div>
    <div>
      <table class="table table-bordered container-sm">
        <thead class="thead-dark">
          <th>ID</th>
          <th>Photo</th>
          <th>Tag</th>
          <th>User Name</th>
          <th>Date</th>
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
             
             <a href="home_welcome_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
      </table>
    </div>







  </div>

  
  
    
    

<?php include "include/footer.php"; ?>