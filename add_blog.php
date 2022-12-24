<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="admin/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <!-- CSS only -->
    <link rel="stylesheet" href="admin/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
</head>
<body>

    <div class="main">



        <section class="signup">
                    <div class="container">
                        <div class="signup-content">
                            <div class="signup-form">
                                <h2 class="form-title">Add A Blog !</h2>
                                <form method="POST" action="blog_insert.php" role="form" enctype="multipart/form-data">
                                    
                                    <div class="form-group">
                                        <label for="name"><i class="zmdi zmdi-tag material-icons-name"></i></label>
                                        <input type="text" name="tag" id="name" placeholder="Enter Blog Tag"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                        <input type="text" name="name" id="name" placeholder="Your Name"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="date"><i class="zmdi zmdi-calendar"></i></label>
                                        <input type="date" name="date" id="date" placeholder="Enter Date"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="title"><i class="zmdi zmdi-format-size"></i></label>
                                        <input type="text" name="title" id="title" placeholder="Enter title"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="description"><i class="zmdi zmdi-format-align-left"></i></label>
                                        <input type="text" name="description" id="description" placeholder="description"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="image"><i class="zmdi zmdi-folder-outline"></i></label>
                                        <input type="file" name="image" id="image" />
                                    </div>
                                    
                                    
                                    <div class="form-group form-button">
                                        <input type="submit" name="signup" id="signup" class="form-submit" value="Add Blog"/>
                                    </div>
                                </form>
                            </div>
                            <div class="signup-image">
                                <figure><img src="admin/images/signup-image.jpg" alt="sing up image"></figure>
                            </div>
                        </div>
                    </div>
                </section>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/mains.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>