<?php 

session_start();

if(isset($_SESSION['blog_id'])):

include "include/header.php"; 
include "include/connection.php";


?>
    <!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Blog Home</h1>
                    <a href="index.php">Home</a> <span>|</span> <a href="blog-home.php">Blog Home</a>
                </div>
            </div>
        </div>
    </section> <br>
    <!-- Banner Area End -->
    <a href="add_blog.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Add a new Blog</button></a>

    <br>

    
    
    <!--================Blog Area =================-->
    <?php
        include "admin/connection.php";
        $sql    ="SELECT * FROM blog ";
        $result =$db->query($sql);
    ?>
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="blog_left_sidebar">
                        <?php while($row = $result->fetch_assoc()):   ?>
                        <article class="row blog_item">
                           <div class="col-md-3">
                               <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#"><?php echo $row['tag']  ;  ?>,</a>
                                        
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#"><?php echo $row['name']  ;  ?><i class="fa fa-user-o"></i></a></li>
                                        <li><a href="#"><?php echo $row['date']  ;  ?><i class="fa fa-calendar-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-comment-o"></i></a></li>
                                    </ul>
                                </div>
                           </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="<?php echo"admin/images/blog/" .$row['image']  ;  ?>" alt="" width="600">
                                    <div class="blog_details">
                                        <a href="blog-details.php"><h4><?php echo $row['title']  ;  ?></h4></a>
                                        <p><?php echo $row['description']  ;  ?></p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <?php endwhile; ?>
                        
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <span class="fa fa-angle-left"></span>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <span class="fa fa-angle-right"></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->




<?php include "include/footer.php"; 

else:
    header("Location:login.php");
  
  endif;
  
?>