<?php include "accrole.php";
?>
 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Accounts</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/bootstrap/css/style.css">
    <link rel="stylesheet" href="assets/bootstrap/css/nav.css">
    <link rel="stylesheet" href="assets/bootstrap/css/tab.css">
    <link rel="stylesheet" href="assets/bootstrap/css/stockroom.css">
    <link rel="stylesheet" href="assets/bootstrap/css/table.css">
    <link rel="stylesheet" href="assets/bootstrap/css/forms.css">
    <link rel="stylesheet" href="assets/bootstrap/css/accounts.css">
    <link rel="stylesheet" href="assets/bootstrap/css/modal_accounts.css">

    
     <!-- Boxiocns CDN Link -->
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <link rel="stylesheet/less" type="text/css" href="styles.less" />
     
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>


<body onload="stockBttm()">

<?php 
require_once "modal_adduser.php";

?>

<!--Side bar-->

<!--Side bar-->
<div class="sidebar close">
  <div class="logo-details">
    <i class='bx bx-menu' id="btn"></i>
  </div>
    <ul class="nav-links">
      <li>
        <!--close and view side bar-->
        <a href="dashboard.html">
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="dashboard.html">Dashboard</a></li>
        </ul>
      </li>
      <li>
        <!--end close and view side bar icon-->

      <!--Stock room-->
      <li>
        <a href="stockroom.html">
          <i class='bx bx-store' ></i>
          <span class="link_name">Stockroom</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="stockroom.html">Stockroom</a></li>
        </ul>
      </li>
      <!--end stock room-->

      <li>
        <a href="Barcoding.html">
          <i class='bx bx-barcode-reader' ></i>
          <span class="link_name">Barcoding</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="Barcoding.html">Barcoding</a></li>
        </ul>
      </li>
      

      <li>
        <a href="account.html">
          <i class='bx bx-user' ></i>
          <span class="link_name">Accounts</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="account.html">Accounts</a></li>
        </ul> 
      </li>
      
      <li>
        <a href="report.html">
          <i class='bx bxs-report' ></i>
          <span class="link_name">Reports</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="report.html">Reports</a></li>
        </ul>
      </li>

      <li>
        <a href="history.html">
          <i class='bx bx-history'></i>
          <span class="link_name">History</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="history.html">History</a></li>
        </ul>
      </li>
      
      <li>
        <a href="setting.html">
          <i class='bx bx-cog'></i>
          <span class="link_name">Settings</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="setting.html">Settings</a></li>
        </ul>
      </li>
      

      <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="image/avoex.jpg" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">avoex</div>
        <div class="job">Web Designer</div>
      </div>
      <i class='bx bx-log-out'></i>
    </div>
  </li>

</ul>
</div>

<!--end of sidebar-->
  <section class="home-section">
   
    <!-- nav tool bar top-->
    <div class="navbar">
      <a href="#myModal" data-toggle="modal" data-target="#myModal" title="Add Items"><i class='bx bx-list-plus' style="font-size:20px;"></i></a>
      <a href="#additems" title="Category"><i class='bx bx-category-alt'></i></a>
      <a href="#darkmode" title="Darkmode"><i class='bx bx-moon'></i></a>
      <a href="#adduser" ><i class='bx bx-columns'></i></a>
      <a href="#adduserModal" data-toggle="modal" data-target="#adduserModal" title="Add User"><i class='bx bx-user-plus' style="font-size:20px;"></i></a>   
    </div>

    <!--end of nav tool bar top-->

 <!-- Container fluid Dashboard-->
 <div class="container-fluid">
  <div class="card-shadow" style="margin-top: 12px;">
     <!--Card header-->
      <div class="card-header py-3">
          <span style="font-size: 20px; color: rgb(40, 40, 40);"><i class='bx bx-store'></i>  Accounts</span>   
      </div>

      <div class="card-body">
          <!-- Nav tabs -->
          <ul class="nav nav-tabs nav-justified" id="tabby" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" href="#user_account" id="ua_link" role="tab" data-toggle="tab" onclick="useraccBttm()"><i class='bx bx-group' id= "ua-i"></i><br><p id="ua-p">User Account</p></a>
            </li>
            
            <li class="nav-item" role="presentation">
              <a class="nav-link" href="#admins"  id="ad_link" role="tab" data-toggle="tab" onclick="adminsBttm()"><i class='bx bx-user' id="ad-i"></i><br><p id="ad-p">Admins</p></a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" href="#store_keeper" id="sk_link" role="tab" data-toggle="tab" onclick="storekeeper_Bttm()"><i class="bx bx-user-check" id="sk-i"></i><br><p id="sk-p">StoreKeeper</p></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" href="#clients" id="cli_link" role="tab" data-toggle="tab" onclick="clientsBttm()"><i class='bx bx-id-card' id="cli-i"></i><br><p id="cli-p">Clients</p></a>
              </li>
          </ul>
        
          <!-- Tab panes -->
          <div class="tab-content">
            <!-- Barcoding Tab pane-->
            

            <!-- User Account Tab pane-->
            <div id="user_account" class="tab-pane active" role="tabpanel">
               
                <!--search bar in manage accounts tab pane-->
                <input type="text" class="searchbar" id="search_stock"  placeholder="Search..">
             
             <!-- User accounts Table-->
             <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th>Profile</th>
                  <th>Username</th>
                  <th>User Role</th>
                  <th>Created By</th>
                  <th>Date Created</th>
               
                  

                </tr>
              </thead>
              <tbody>
              <!--View Data from mysql to users table -->
              <?php
               $conn=mysqli_connect("localhost","root","Godknowsme@1810039-2","wsis");
               // Check connection
               if (mysqli_connect_errno())
               {
               echo "Failed to connect to MySQL: " . mysqli_connect_error();
               }
               
                   
                   $query=mysqli_query($conn,"SELECT * FROM user ORDER BY id ASC");
                                      while($row=mysqli_fetch_array($query))
                                        {
                                           
                                          ?>
                                              <tr>
                                              <td><input type = "checkbox" name="checkbox[]" value="<?php echo $row['id'];?>"></td>
                                              <td>no profile</td>
                                               <td><?php echo $row ['username'];?></td>
                                              <td><?php echo $row ['userole'];?></td>
                                              <td><?php echo $row ['created_by'];?></td>
                                              <td><?php echo $row ['date_created'];?>
                                              <div class="ico">
                                              <button type="button" data-toggle="modal" data-target="#useraccountedit<?php echo $row['id'];?>"><i class='bx bx-edit-alt' title="edit"></i></button>&nbsp;
                                              <button type="button" data-toggle="modal" data-target="#deleteModal"><i class='bx bx-trash-alt' title="delete"></i></button>&nbsp;
                                              <button type="button" data-toggle="modal" data-target="#infoModal"><i class='bx bx-info-circle' title="information"></i></button>&nbsp;
                                              <button type="button"><i class='bx bx-history' title="history"></i></button>
                                              </div>
                                            </td>

                                        </tr>
                                        <?php
                                            include 'modal_updateuser.php'; 
                                          }

                                        ?>
              </tbody>
            </table>
            </div>

            <!-- Admins Tab pane-->
            <div id="admins" class="tab-pane" role="tabpanel">
              <input type="text" class="searchbar" id="search_stock"  placeholder="Search..">
              <table class="table">
                <thead>
                  <tr>
                    <th></th>
                    <th>Profile</th>
                    <th>Fullname</th>
                    <th>Designation</th>
                    <th>Office</th>
                    <th>Contact</th>
                    <th>Updated At</th>
                  </tr>
                </thead>
                <tbody>
                  <!--Show Users that are ADMIN -->
                
                <?php
                include('connection.php');
                $variable="admin";
               
                $query=mysqli_query($conn,"select * from `user` left join admin on admin.user_id=user.id where user.userole = '$variable'");
                while($row=mysqli_fetch_array($query))
                {
                    
                    ?>

                      <tr>
                          <td><input type = "checkbox"></td>
                          <td><?php echo $row ['profile'];?></td>
                          
                          <td><?php echo $row ['fullname'];?></td>
                          <td><?php echo $row ['designation'];?></td>
                          <td><?php echo $row ['office'];?></td>
                          <td><?php echo $row ['contact_n'];?></td>
                          <td><?php echo $row ['updated_at'];?></td>
                          
                          
                        
                </tr>

                <?php

                }
                ?>
                  
                </tbody>
              </table>
            </div>

            <!-- Storekeeper Tab pane-->
            <div id="store_keeper" class="tab-pane" role="tabpanel">
                <!--search bar in manage items tab pane-->
                <input type="text" class="searchbar" id="search_stock"  placeholder="Search.."> 
              <table class="table">
                <thead>
                  <tr>
                    <th></th>
                    <th>Profile</th>
                    <th>Fullname</th>
                    <th>Designation</th>
                    <th>Office</th>
                    <th>Contact</th>
                    <th>Updated At</th>
              
                  </tr>
                </thead>
                <tbody>
                   <!--Show Users that are STOREKEEPER -->
  
                   <?php
                include('connection.php');
                $variable="storekeeper";
               
                $query=mysqli_query($conn,"select * from `user` left join skeeper on skeeper.user_id=user.id where user.userole = '$variable'");
                while($row=mysqli_fetch_array($query))
                {
                    
                    ?>

                      <tr>
                          <td><input type = "checkbox"></td>
                          <td><?php echo $row ['profile'];?></td>
                          
                          <td><?php echo $row ['fullname'];?></td>
                          <td><?php echo $row ['designation'];?></td>
                          <td><?php echo $row ['office'];?></td>
                          <td><?php echo $row ['contact_n'];?></td>
                          <td><?php echo $row ['updated_at'];?></td>
                          
                          
                        
                </tr>

                <?php

                }
                ?>
                  
                </tbody>
              </table>
            </div>

             <!-- Clients Tab pane-->
             <div id="clients" class="tab-pane" role="tabpanel">
                <!--search bar in manage items tab pane-->
                <input type="text" class="searchbar" id="search_stock"  placeholder="Search.."> 
              <table class="table">
                <thead>
                  <tr>
                    <th></th>
                    <th>Profile</th>
                    <th>Fullname</th>
                    <th>Office</th>
                    <th>Designation</th>
               
                    <th>Updated At</th>
                  </tr>
                </thead>
                <tbody>
                   <!--Show Users that are  CLIENT-->
                   <?php
                include('connection.php');
                $variable="client";
               
                $query=mysqli_query($conn,"select * from `user` left join clients on clients.user_id=user.id where user.userole = '$variable'");
                while($row=mysqli_fetch_array($query))
                {
                    
                    ?>

                      <tr>
                          <td><input type = "checkbox"></td>
                          <td><?php echo $row ['profile'];?></td>
                          
                          <td><?php echo $row ['fullname'];?></td>
                          <td><?php echo $row ['designation'];?></td>
                          <td><?php echo $row ['office'];?></td>
                          <td><?php echo $row ['contact_n'];?></td>
                          <td><?php echo $row ['updated_at'];?></td>
                          
                          
                        
                </tr>

                <?php

                }
                ?>
                  
                </tbody>
              </table>
            </div>




          </div>
        
    <!--End user account card-->

   </div>
   </div>
    
  </div>
 
  <!--End container fluid dashboard-->
            
  </section>

 <!-- script for tabs-->
 
 <script src="assets/js/script.js"></script>
 <script src="assets/bootstrap/js/stocktab.js"></script>
 <script src = "assets/bootstrap/js/acc_tab.js"></script>


</body>
</html>
