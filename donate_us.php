<?php include 'includes/session.php'; 

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $service=$_POST["service"];
    $address=$_POST["address"];
    $description=$_POST["description"];
      $conn = $pdo->open();
      $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM category WHERE id=:id");
      $row = $stmt->fetch();
              $stmt = $conn->prepare("INSERT INTO donateus (name, email, phone, service, address, description) VALUES (:name, :email, :phone, :service,  :address, :description)");
              $stmt->execute(['name'=>$name, 'email'=>$email, 'phone'=>$phone, 'service'=>$service, 'address'=>$address, 'description'=>$description]);
              $_SESSION['success'] = 'successfully';
      }
  
  ?>
<?php include 'includes/header.php'; ?>



<body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>

        <div class="content-wrapper" style="background-color:#cddded;">
            <div class="container">
                <div class="row">
                    <div class="">
                        <div class="contact-page-form" method="post">
                            <h2>Donate Waste</h2>
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="text" placeholder="Your Name" name="name" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="email" placeholder="E-mail" name="email" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <input type="text" placeholder="Phone Number" name="phone" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="single-input-field">
                                            <select name="service" class="box">
                                                <option value="">Select Option</option>
                                                <option value="Get Your E-Waste Quotation">Get Your E-Waste Quotation</option>
                                                <option value="Donate Your E-Waste">Donate Your E-Waste</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 message-input">
                                        <div class="single-input-field">
                                        <input type="text" placeholder="Enter Your Address" name="address" required />
                                        </div>
                                    </div>
                                    <div class="col-md-12 message-input">
                                        <div class="single-input-field">
                                            <textarea placeholder="Material Description" name="description"
                                                required></textarea>
                                        </div>
                                    </div>
                                    <div class="single-input-fieldsbtn">
                                        <input type="submit" value="Send Now" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'includes/footer.php'; ?>
    </div>

    <?php include 'includes/scripts.php'; ?>
</body>

</html>