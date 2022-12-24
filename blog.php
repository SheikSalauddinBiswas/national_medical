<?php include "include/header.php"; 

session_start();
if($_SESSION['id']):

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
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="blog_left_sidebar">
                        <article class="row blog_item">
                           <div class="col-md-3">
                               <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="fa fa-user-o"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="fa fa-calendar-o"></i></a></li>
                                        <li><a href="#"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-comment-o"></i></a></li>
                                    </ul>
                                </div>
                           </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="assets/images/blog/main-blog/m-blog-1.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="blog-details.php"><h4>Astronomy Binoculars A Great Alternative</h4></a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>
                                        <a href="blog-details.php" class="template-btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                           <div class="col-md-3">
                               <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="fa fa-user-o"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="fa fa-calendar-o"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="fa fa-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="fa fa-comment-o"></i></a></li>
                                    </ul>
                                </div>
                           </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="assets/images/blog/main-blog/m-blog-2.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="blog-details.php"><h4>The Basics Of Buying A Telescope</h4></a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>
                                        <a href="blog-details.php" class="template-btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                           <div class="col-md-3">
                               <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="fa fa-user-o"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="fa fa-calendar-o"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="fa fa-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="fa fa-comment-o"></i></a></li>
                                    </ul>
                                </div>
                           </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="assets/images/blog/main-blog/m-blog-3.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="blog-details.php"><h4>The Glossary Of Telescopes</h4></a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>
                                        <a href="blog-details.php" class="template-btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                           <div class="col-md-3">
                               <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="fa fa-user-o"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="fa fa-calendar-o"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="fa fa-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="fa fa-comment-o"></i></a></li>
                                    </ul>
                                </div>
                           </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="assets/images/blog/main-blog/m-blog-4.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="blog-details.php"><h4>The Night Sky</h4></a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>
                                        <a href="blog-details.php" class="template-btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                           <div class="col-md-3">
                               <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <a href="#">Food,</a>
                                        <a class="active" href="#">Technology,</a>
                                        <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a>
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#">Mark wiens<i class="fa fa-user-o"></i></a></li>
                                        <li><a href="#">12 Dec, 2017<i class="fa fa-calendar-o"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="fa fa-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="fa fa-comment-o"></i></a></li>
                                    </ul>
                                </div>
                           </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="assets/images/blog/main-blog/m-blog-5.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="blog-details.php"><h4>Telescopes 101</h4></a>
                                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction.</p>
                                        <a href="blog-details.php" class="template-btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
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