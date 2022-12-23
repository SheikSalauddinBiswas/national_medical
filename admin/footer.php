<?php include "include/header.php"; ?>
    <div class="" id="content">
        <div class="">
            <div class="">
            <h1 class="text-secondary pl-5 pt-3"><span class="fa fa-bars text-info" ></span>Footer<hr></h1> 
            </div>
        </div><hr>
        <?php
            $sql    ="SELECT * FROM adress ORDER BY id DESC";
            $result =$db->query($sql);
        ?>
        <div >
            <h3 class="text-secondary pl-5 pt-3"><u>Footer Area</u></h3>
            <a href="adress_add.php" class="btn btn-secondary ml-5 mb-2">Add footer</a>
        </div>
        <div>
            <table class="table table-bordered container-md">
                <thead class="thead-dark">
                <th>ID</th>
                <th>Adress</th>
                <th>Mobile</th>
                <th>E-Mail</th>
                <th>Edit</th>
                </thead>
                <?php while($row = $result->fetch_assoc()):   ?>
                <tbody>
                <tr>
                    <td><?php echo $row['id']  ;  ?></td>
                    <td><?php echo $row['adress']  ;  ?></td>
                    <td><?php echo $row['mobile']  ;  ?></td>
                    <td><?php echo $row['email']  ;  ?></td>
                    <td>
                    <a href="adress_delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    

    





    </div>
  

<?php include "include/footer.php"; ?>