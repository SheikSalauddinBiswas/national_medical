<?php 
    include "include/header.php"; 
    include "connection.php"; 
    $sql    ="SELECT * FROM blog_user ORDER BY blog_id DESC";
    $result =$db->query($sql);


?>
    <div class="" id="content">
        <div class="">
            <div class="">
            <h1 class="text-secondary pl-5 pt-3"><span class="fa fa-users text-info" ></span>Blog Users<hr></h1> 
            </div>
        </div>
    
        <hr>
        <table class="table table-bordered container-sm">
            <thead class="thead-dark">
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Mobile</th>
                <th>Edit | Delete</th>
            </thead>
            <?php while($row = $result->fetch_assoc()):   ?>
            <tbody>
                <tr>
                    <td><?php echo $row['blog_id']  ;  ?></td>
                    <td><img src="<?php echo"images/blog-user/" .$row['image']  ;  ?>" width="50px" alt="image"></td>
                    <td><?php echo $row['name']  ;  ?></td>
                    <td><?php echo $row['email']  ;  ?></td>
                    <td><?php echo $row['mobile']  ;  ?></td>
                    <td>
                        <a href="delete_blog_user.php?blog_id=<?php echo $row['blog_id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>
                    
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
<?php include "include/footer.php"; ?>