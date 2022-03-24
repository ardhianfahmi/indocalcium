<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?= $this->include("layout/head.php") ?>

<body>
    <!-- Head -->
    <?= $this->include("layout/navbar3.php") ?>
    <!-- contact -->
    <section class="wthree-row w3-contact py-md-5 py-4">
        <div class="container py-lg-5">
            <div class="text-center wthree-title pb-sm-5 pb-3">
                <h3 class="tittle-w3ls pb-4">Contact Us</h3>
                <p class="tit mx-auto">If you have questions and are interested in becoming our partners or consumers,
                    write your bio, email, then send it to us. Our members will reply to all your questions and needs as soon as possible.</p>
            </div>
            <!-- contact details -->
            <div class="row contact-form py-lg-5">
                <!-- contact left grid -->
                <div class="col-lg-6  px-lg-5 map contact-right">
                    <div class="address">
                        <h5 class="my-3">Contact info</h5>
                        <div class="row py-3 wthree-cicon">
                            <span class="fa fa-envelope mr-3"></span>
                            <a href="mailto:indocalcium@gmail.com">indocalcium@gmail.com</a>
                        </div>
                        <div class="row py-3  wthree-cicon">
                            <span class="fa fa-phone mr-3"></span>
                            <p>+6281359358360</p>
                        </div>
                        <div class="row py-3 wthree-cicon">
                            <span class="fa fa-map-marker mr-3"></span>
                            <p style="font-size:15px;">Jl. Blora KM 01 Tahunan, Sale, Rembang, Central Java, Indonesia</p>
                        </div>
                    </div>
                </div>
                <!-- //contact left grid -->
                <!-- contact right grid -->
                <div class="col-lg-6 wthree-form-left mt-lg-0 mt-3">
                    <!-- contact form grid -->
                    <div class="contact-top1">
                        <h5 class="my-3">send us a message</h5>
                        <form action="#" method="get" class="f-color pt-3">
                            <div class="form-group">
                                <label for="contactusername">Name</label>
                                <input type="text" class="form-control" id="contactusername" required>
                            </div>
                            <div class="form-group my-4">
                                <label for="contactemail">Email</label>
                                <input type="email" class="form-control" id="contactemail" required>
                            </div>
                            <div class="form-group">
                                <label for="contactcomment">Your Message</label>
                                <textarea class="form-control" rows="5" id="contactcomment" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block">Submit</button>
                        </form>
                    </div>
                </div>
                <!--  //contact right grid -->
            </div>
            <!-- //contact details  -->
        </div>
    </section>
    <!-- //contact -->
    <!-- map -->
    <div class="map px-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31688.161028063107!2d111.5292083569209!3d-6.888192125532648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7714f355674699%3A0x5027a76e355e180!2sTahunan%2C%20Sale%2C%20Kabupaten%20Rembang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1605857197385!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!--// map-->
    <?= $this->include("layout/footer.php") ?>
</body>
</div>

</html>