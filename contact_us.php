<?php include 'includes/session.php'; 

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $name=$_POST["name"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $subject=$_POST["subject"];
  $message=$_POST["message"];
    $conn = $pdo->open();
    $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM category WHERE id=:id");
    $row = $stmt->fetch();
            $stmt = $conn->prepare("INSERT INTO contact_us (name, email, phone, subject, message) VALUES (:name, :email, :phone, :subject, :message)");
            $stmt->execute(['name'=>$name, 'email'=>$email, 'phone'=>$phone, 'subject'=>$subject, 'message'=>$message]);
            $_SESSION['success'] = 'successfully';
    }

?>
<?php include 'includes/header.php'; ?>



<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>

        <div class="content-wrapper" style="background-color:#cddded;">
            <div class="container">

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-sm-5">


                            <div class="container">
                                <section class="contact-page-sec">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="contact-info">
                                                    <div class="contact-info-item">
                                                        <div class="contact-info-icon">
                                                            <i class="fa fa-map-marker"></i>
                                                        </div>
                                                        <div class="contact-info-text">
                                                            <h2>address</h2>
                                                            <span>Deogiri College </span>
                                                            <span>Aurangabad , Maharashtra</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="contact-info">
                                                    <div class="contact-info-item">
                                                        <div class="contact-info-icon">
                                                            <i class="fa fa-envelope"></i>
                                                        </div>
                                                        <div class="contact-info-text">
                                                            <h2>E-mail</h2>
                                                            <span>eservices@gmail.com</span>
                                                            <span>ewaste@gmail.com</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="contact-info">
                                                    <div class="contact-info-item">
                                                        <div class="contact-info-icon">
                                                            <i class="fa fa-clock-o"></i>
                                                        </div>
                                                        <div class="contact-info-text">
                                                            <h2>office time</h2>
                                                            <span>Mon - Thu 9:00 am - 4.00 pm</span>
                                                            <span>Thu - Mon 10.00 pm - 5.00 pm</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="contact-page-form" method="post">
                                                    <h2>FEEDBACK US</h2>
                                                    <form action="#" method="post">
                                                        <div class="row">
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <div class="single-input-field">
                                                                    <input type="text" placeholder="Your Name"
                                                                        name="name" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <div class="single-input-field">
                                                                    <input type="email" placeholder="E-mail"
                                                                        name="email" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <div class="single-input-field">
                                                                    <input type="text" placeholder="Phone Number"
                                                                        name="phone" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                <div class="single-input-field">
                                                                    <input type="text" placeholder="Subject"
                                                                        name="subject" required/>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 message-input">
                                                                <div class="single-input-field">
                                                                    <textarea placeholder="Write Your Message"
                                                                        name="message" required></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="single-input-fieldsbtn">
                                                                <input type="submit" value="Send Now" />
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="contact-page-map">
                                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1876.2093230145651!2d75.31910052484356!3d19.864536671049326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdb99c3c92b612d%3A0x4421c855188247fb!2sDeogiri%20College%2C%20Aurangabad!5e0!3m2!1sen!2sin!4v1673630678908!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>


                        </div>

                    </div>
                </section>

            </div>
        </div>

        <?php include 'includes/footer.php'; ?>
    </div>

    <?php include 'includes/scripts.php'; ?>
</body>

</html>