<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>

        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    E-waste Donating Users Information
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Donate</li>
                </ol>
            </section>

            <section class="content">
                <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <table id="example1" class="table table-bordered">
                                    <thead>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone No.</th>
                                        <th>Service</th>
                                        <th>Address</th>
                                        <th>Matreial Description</th>
                                    </thead>
                                    <tbody>
                                        

                                        <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM donateus");
                      $stmt->execute();
                      foreach($stmt as $row){
                        echo "
                        <tr>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['phone']."</td>
                        <td>".$row['service']."</td>
                        <td>".$row['address']."</td>
                        <td>".$row['description']."</td>
                      </tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <?php include 'includes/footer.php'; ?>
        <?php include 'includes/users_modal.php'; ?>

    </div>

    <?php include 'includes/scripts.php'; ?>
</body>

</html>