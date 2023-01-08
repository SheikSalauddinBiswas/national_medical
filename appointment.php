<?php include "include/header.php"; 
include "admin/connection.php";
?>
<!-- Banner Area Starts -->
    <section class="banner-area other-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Appointment Now</h1>
                    <a href="index.php">Home</a> <span>|
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->
    <!-- Patient Area Starts -->
    <section class="patient-area section-padding3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-top text-center">
                        <h2>Appointment</h2>
                    </div>
                </div>
            </div>
            <div class="row">
               
                <div class="col-lg-5 offset-lg-3 align-self-center">
                    <div class="appointment-form text-center mt-5 mt-lg-0">
                        <h3 class="mb-5">appointment now</h3>
                        <form action="appointment_insert.php" method="POST">
                            <div class="form-group" >
                                <input type="text" name="name"placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email'" required> 
                            </div>
                            <div class="form-group">
                                <input type="text" name="date" id="datepicker" placeholder="Date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date'" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="massage"  id="massage" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required>
                                <!-- <textarea name="message" cols="20" rows="7"  placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required></textarea> -->
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Appoint"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Patient Area Starts -->





<?php include "include/footer.php"; ?>