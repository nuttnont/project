
  
  
  
  <nav class="main-header  navbar navbar-expand navbar-light">
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          </li>
          
          <li class="nav-item">
              <a class="nav-link <?php if ($menu == "index"){echo "active";} ?>" href="index.php"><i
                      class="fas fa-home"></i> หน้าแรก</a>
          </li>

      </ul>


      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          <!-- <li class="nav-item ">
              <a href="" class="nav-link ">
                  <i class="fa fa-power-off"></i> Logout
              </a>

          </li> -->
          <li class="info mr-3">
               <?php
                //    include ("../connection.php");
            //    $queryr =  "SELECT * FROM user WHERE Users_id = $sem ";
            //    $result = mysqli_query($conn,$queryr);
            //    $row = mysqli_fetch_row($result);
               ?>
              <a href="profile.php" class="d-block"><?php echo $_SESSION['User_email'] ?></a>
          </li>
      </ul>
  </nav>
  <!-- /.navbar -->
  