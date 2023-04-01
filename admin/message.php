<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/menubar.php'; ?>

        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Feedback
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li class="active">Feedback</li>
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
                                        <th>Subject</th>
                                        <th>Message</th>
                                    </thead>
                                    <tbody>
                                        

                                        <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM contact_us");
                      $stmt->execute();
                      foreach($stmt as $row){
                        echo "
                        <tr>
                        <td>".$row['name']."</td>
                        <td>".$row['email']."</td>
                        <td>".$row['phone']."</td>
                        <td>".$row['subject']."</td>
                        <td>".$row['message']."</td>
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
    <script>
    $(function() {

        $(document).on('click', '.edit', function(e) {
            e.preventDefault();
            $('#edit').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });

        $(document).on('click', '.delete', function(e) {
            e.preventDefault();
            $('#delete').modal('show');
            var id = $(this).data('id');
            getRow(id);
        });

        $(document).on('click', '.photo', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            getRow(id);
        });

        $(document).on('click', '.status', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            getRow(id);
        });

    });

    function getRow(id) {
        $.ajax({
            type: 'POST',
            url: 'users_row.php',
            data: {
                id: id
            },
            dataType: 'json',
            success: function(response) {
                $('.userid').val(response.id);
                $('#edit_email').val(response.email);
                $('#edit_password').val(response.password);
                $('#edit_firstname').val(response.firstname);
                $('#edit_lastname').val(response.lastname);
                $('#edit_address').val(response.address);
                $('#edit_contact').val(response.contact_info);
                $('.fullname').html(response.firstname + ' ' + response.lastname);
            }
        });
    }
    </script>
</body>

</html>