<section class="p-t-150 p-b-200" style="background-image:url(images/background-4.png); background-position:71% 22%;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="m-b-10">Get in Touch with Us</h2>
                        <p class="lead">Our Headquarter is in India and United State</p>
                    </div>
                    <div class="col-md-6 m-b-30">
                        <address>
                            <strong>India Address</strong><br>
                            H.No. 121 Mahaveer Nagar 2</br>
                            Kota - 324005
                        </address>
                        <abbr><strong>Phone:</strong></abbr> +91-7737-634-978
                        <br>
                        <abbr><strong>Email:</strong></abbr> info@twstechnology.com
                    </div>
                    <div class="col-md-6 m-b-30">
                        <address>
                            <strong>USA Address</strong><br>
                            429 Parsonage Rd Edison,<br>
                            NJ 08837, USA
                        </address>
                        <abbr><strong>Phone:</strong></abbr> +1 (412) 482-2783
                        <br>
                        <abbr><strong>Email:</strong></abbr> info.us@twstechnology.com
                    </div>
                    <div class="col-md-12">
                        <h4>We are social</h4>
                        <div class="social-icons social-icons-light social-icons-colored-hover">
                             <?php include "sections/social_links.php" ;?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <form  action="sendmail.php" method="post">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="name">Name</label>
                            <input type="text" aria-required="true" name="fname" class="form-control required name" placeholder="Enter your Name">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="email">Email</label>
                            <input type="email" aria-required="true" name="email" class="form-control required email" placeholder="Enter your Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message">Mobile</label>
                        <input type="mobile" aria-required="true" name="mobile" class="form-control required mobile" placeholder="Enter your Mobile">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea type="text" name="msg" rows="9" class="form-control required" placeholder="Enter your Message"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-light" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>