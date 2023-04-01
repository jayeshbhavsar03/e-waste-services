<aside class="main-sidebar col-green-back">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo (!empty($admin['photo'])) ? '../images/'.$admin['photo'] : '../images/profile.jpg'; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $admin['firstname'].' '.$admin['lastname']; ?></p>
        <a><i class="fa fa-circle text-danger"></i> Online</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header" style="color:#fff;">REPORTS</li>
      <li><a href="home.php"><i class="fa fa-dashboard" style="color:#fff;"></i> <span style="color:#fff;">Dashboard</span></a></li>
      <li><a href="sales.php"><i class="fa fa-money" style="color:#fff;"></i> <span style="color:#fff;">Sales</span></a></li>
      <li class="header" style="color:#fff;">MANAGE</li>
      <li><a href="users.php"><i class="fa fa-users" style="color:#fff;"></i> <span style="color:#fff;">Users</span></a></li>
      <li><a href="message.php"><i class="fa fa-msg" style="color:#fff;"></i> <span style="color:#fff;">Feedback</span></a></li>
      <li><a href="donate.php"><i class="fa fa-msg" style="color:#fff;"></i> <span style="color:#fff;">Donating Users</span></a></li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-barcode" style="color:#fff;"></i>
          <span style="color:#fff;">Products</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu c">
          <li><a href="products.php" style="color:#fff;"><i class="fa fa-circle-o"></i> Product List</a></li>
          <li><a href="category.php" style="color:#fff;"><i class="fa fa-circle-o"></i> Category</a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>