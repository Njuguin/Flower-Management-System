<?php
require_once 'php/connection.php';
session_start();

if (!isset($_SESSION['adminname'])) {
    header("Location: index.html");
}else{
  $filter = $_SESSION['adminname'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row1=mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Flower Shop - Administrator Homepage</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>

   </head>

 <style type="text/css">
        
          table{
    align-items: center;
  }

   th, tr, td{
    padding: 10px 10px;
  }
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData1();
})  
</script>

            <script type="text/javascript">
function printData2()
{
   var divToPrint=document.getElementById("printTable2");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData2();
})  
</script>

            <script type="text/javascript">
function printData3()
{
   var divToPrint=document.getElementById("printChart");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData3();
})  
</script>

   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="#" style="width: 170px;"></a> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="menu-area">
                        <div class="limit-box">
                           <nav class="main-menu">
                              <ul class="menu-area-main">
                                 <li class="active"> <a href="#">Home</a> </li>
                                 <li> <a href="#data">Database</a> </li>
                                 <li><a href="#mod">My Module</a></li>
                                 <li><a href="php/logout.php">Logout</a></li>
                                 <li><a href="#contact">Contact Us</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <section >
         <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Welcome <?php echo $row1['User_Type']; ?>, <strong class="color"><?php echo $row1['Fullname']; ?>!</strong></h1>
                              <p>Let our meticulously crafted floral arrangements elevate every special occasion in your life. Whether it's a wedding celebration, anniversary dinner, or a simple gathering with loved ones, our exquisite blooms add a touch of elegance and charm that transforms moments into cherished memories. Discover the beauty of our floral creations and make every occasion an unforgettable experience.</p>
                              <a class="btn btn-lg btn-primary" href="#data" role="button">Database</a>
                              <a class="btn btn-lg btn-primary" href="#mod" role="button">My Module</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/gyufyufyu.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Welcome <?php echo $row1['User_Type']; ?>, <strong class="color"><?php echo $row1['Fullname']; ?>!</strong></h1>
                              <p>Indulge in the luxury of fresh flowers delivered right to your doorstep. Experience the joy of receiving a vibrant bouquet, carefully curated and handpicked for its freshness and beauty. Whether you're celebrating a milestone, expressing love and gratitude, or simply brightening someone's day, our reliable delivery service ensures that your flowers arrive in perfect condition, ready to spread smiles and warmth wherever they go.</p>
                              <a class="btn btn-lg btn-primary" href="#data" role="button">Database</a>
                              <a class="btn btn-lg btn-primary" href="#mod" role="button">My Module</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box ">
                              <figure><img src="images/gyufyufyu.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Welcome <?php echo $row1['User_Type']; ?>, <strong class="color"><?php echo $row1['Fullname']; ?>!</strong></h1>
                              <p>Immerse yourself in the artistry and craftsmanship of floral design. From classic arrangements to avant-garde compositions, our talented florists showcase their expertise and creativity in every creation, turning flowers into masterpieces that captivate the senses and inspire awe. Discover the beauty of botanical artistry and experience the magic of floral design with BlossomEase as your guide.</p>
                              <a class="btn btn-lg btn-primary" href="#data" role="button">Database</a>
                              <a class="btn btn-lg btn-primary" href="#mod" role="button">My Module</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="images/gyufyufyu.png" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i></a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
         </div>
      </section>
      <!-- database -->
      <div id="data" class="plants">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2>Database</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                  <div class="plants-box">
                     <h3>List of Users</h3>
                     <br>
            <table id="printTable">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">User ID</th>
<th style="text-align: left;
  padding: 8px;">Fullname</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
 <th style="text-align: left;
  padding: 8px;">Phone Number</th>
  <th style="text-align: left;
  padding: 8px;">User Type</th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php

$sql = "SELECT `User_ID`, `Fullname`, `Phone_Number`, `Email_Address`, `User_Type` FROM `users`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["User_ID"]); ?></td>
<td><?php echo($row["Fullname"]); ?></td>
<td><?php echo($row["Email_Address"]); ?></td>
<td><?php echo($row["Phone_Number"]); ?></td>
<td><?php echo($row["User_Type"]); ?></td>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to delete this user?')?window.location.href='php/features.php?action=deleteU&id=<?php echo($row["User_ID"]); ?>':true;" title='Delete User'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }
?>

</table>
<br>
                        <div class="read-more">
                           <a class="abtn" style="color: white;" onclick="printData();">Print</a>
                           <br>
                        </div>
                  </div>
               </div>
               <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                  <div class="plants-box">
                     <h3>List of Products</h3>
                     <br>
            <table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Product ID</th>
<th style="text-align: left;
  padding: 8px;">Name</th>
  <th style="text-align: left;
  padding: 8px;">Description</th>
 <th style="text-align: left;
  padding: 8px;">Quantity</th>
  <th style="text-align: left;
  padding: 8px;">Price</th>
  <th style="text-align: left;
  padding: 8px;">Picture</th>  
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php

$sql = "SELECT `Product_ID`, `Name`, `Description`, `Quantity`, `Price`, `Image` FROM `product`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Product_ID"]); ?></td>
<td><?php echo($row["Name"]); ?></td>
<td><?php echo($row["Description"]); ?></td>
<td><?php echo($row["Quantity"]); ?></td>
<td><?php echo($row["Price"]); ?> kshs.</td>
<td><img src="images/<?php echo($row["Image"]); ?>" style="width: 150px;" alt></td>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to delete this product?')?window.location.href='php/features.php?action=deleteP&id=<?php echo($row["Product_ID"]); ?>':true;" title='Delete Product'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }
?>

</table>
<br>
                        <div class="read-more">
                           <a class="abtn" style="color: white;" onclick="printData1();">Print</a>
                           <br>
                        </div>
                  </div>
               </div>
                              <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                  <div class="plants-box">
                     <h3>List of Orders</h3>
                     <br>
<table id="printTable2">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Order ID</th>
<th style="text-align: left;
  padding: 8px;">User Details</th>
  <th style="text-align: left;
  padding: 8px;">Product</th>
 <th style="text-align: left;
  padding: 8px;">Price</th>
  <th style="text-align: left;
  padding: 8px;">Quantity</th>
  <th style="text-align: left;
  padding: 8px;">Status</th>  
   <th style="text-align: left; padding: 8px;"></th>
   <th style="text-align: left; padding: 8px;"></th>
</tr>

<?php

$sql = "SELECT `orders`.`Order_ID`, `orders`.`User_ID`, `orders`.`Product_ID`, `orders`.`Total_Price`, `orders`.`Quantity`, `orders`.`Created_At`, `orders`.`Status`, `users`.`Fullname`, `users`.`Phone_Number`, `users`.`Email_Address` FROM `orders` JOIN `users` ON `orders`.`User_ID` = `users`.`User_ID`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
?>
<tr>
<td><?php echo($row["Order_ID"]); ?></td>
<td><?php echo($row["Fullname"]); ?> reach out on <?php echo($row["Phone_Number"]); ?> & <?php echo($row["Email_Address"]); ?></td>
<td><?php echo($row["Product_ID"]); ?></td>
<td><?php echo($row["Total_Price"]); ?> kshs.</td>
<td><?php echo($row["Quantity"]); ?></td>
<td><?php echo($row["Status"]); ?></td>
<?php
if ($row['Status'] != 'Completed') {
?>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to complete this order?')?window.location.href='php/features.php?action=completeO&id=<?php echo($row["Order_ID"]); ?>&id1=<?php echo($row["Quantity"]); ?>&id2=<?php echo($row["Product_ID"]); ?>':true;" title='Complete Order'>Complete</button></td>
<?php
}else{
?>
<td></td>
<?php
}
?>
<td><button class="btn btn-primary py-3 px-5" onclick="return confirm('Are you sure that you want to delete this order?')?window.location.href='php/features.php?action=deleteO&id=<?php echo($row["Order_ID"]); ?>':true;" title='Delete Order'>Delete</button></td>
</tr>
<?php
}
} else { echo "No results"; }
?>

</table>
<br>
                        <div class="read-more">
                           <a class="abtn" style="color: white;" onclick="printData2();">Print</a>
                           <br>
                        </div>
                  </div>
               </div>
                              <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                  <div class="plants-box">
          <div class="detail-box">
            <div class="heading_container">
              <h3><br>
                <br>Chart of Popular Products</h3>
            </div>
            <div id="printChart">
                          <div class="card mt-4">
            <div class="card-body">
              <div class="chart-container pie-chart">
                <canvas id="pie_chart"></canvas>
              </div>
            </div>
          </div>
            </div>
          </div>
<br>
                        <div class="read-more">
                           <a class="abtn" style="color: white;" onclick="printData3();">Print</a>
                        </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end database -->
      <!--my module -->
      <div id="mod" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>My Module</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 paddimg-right">
                  <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <form action="php/features.php" method="POST" enctype="multipart/form-data">
                           <div class="row">
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <input class="form-control" placeholder="Product Name" type="text" name="pname" required>
                              </div>
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <input class="form-control" placeholder="Product Price (in kshs.)" min="0" type="number" name="amo" required>
                              </div>
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <input class="form-control" placeholder="Product Quantity" type="number" min="0" name="quan" required>
                              </div>
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <textarea class="textarea>" placeholder="Product Description" type="text" name="desc" required></textarea>
                              </div>
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <label style="color: white;">Product Picture:</label>
                                <br>
                                 <input class="form-control" type="file" name="image" required>
                              </div>                              
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <button type="submit" name="addP" class="abtn">Add Product</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 paddimg-right">
                  <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <form action="php/features.php" method="POST">
                           <div class="row">
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <select class="form-control" required name="pid">
                <option selected disabled value="0">Select A Product</option>
                <?php
                $sql = "SELECT * FROM `product`";
                $all_categories = mysqli_query($conn,$sql);
                while ($category = mysqli_fetch_array(
                $all_categories,MYSQLI_ASSOC)):;
                ?>
                <option value="<?php echo $category["Product_ID"];?>"><?php echo $category["Name"];?></option>
                <?php
                endwhile;
                ?>
                  </select>
                  <br>
                  <br>
                              </div>
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <input class="form-control" placeholder="Product Quantity" type="number" min="0" name="quan" required>
                              </div>                         
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                               <button type="submit" name="upp" class="abtn">Update A Product</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br>
      <br>
      <!-- end my module -->
      <!-- footer -->
      <footer>
         <div id="contact" class="footer">
            <div class="container">
               <div class="row pdn-top-30">
                  <div class="col-md-12 ">
                     <div class="footer-box">
                        <div class="headinga">
                           <h3>Contact Us</h3>
                           <span>Nairobi, Kenya.</span>
                           <p>(+254 712345678)</p>
                        </div>
                        <div class="menu-bottom">
                           <ul class="link">
                              <li> <a href="index.php">Home</a></li>
                              <li> <a href="#data">Database</a></li>
                              <li> <a href="#mod"> My Module</a></li>
                              <li> <a href="php/logout.php">Logout</a></li>                             
                              <li> <a href="#contact"> Contact us</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <p>Copyright 2024 All Rights Reserved Design.</p>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script>
         <script type="text/javascript">
      $(document).ready(function(){

        makechart();

      function makechart()
  {
    $.ajax({
      url:"php/chart.php",
      method:"POST",
      data:{action:'fetch'},
      dataType:"JSON",
      success:function(data)
      {
        var language = [];
        var total = [];
        var color = [];

        for(var count = 0; count < data.length; count++)
        {
          language.push(data[count].language);
          total.push(data[count].total);
          color.push(data[count].color);
        }

        var chart_data = {
          labels:language,
          datasets:[
            {
              label:'Vote',
              backgroundColor:color,
              color:'#fff',
              data:total
            }
          ]
        };

        var options = {
          responsive:true,
          scales:{
            yAxes:[{
              ticks:{
                min:0
              }
            }]
          }
        };

     var group_chart1 = $('#pie_chart');

        var graph1 = new Chart(group_chart1, {
          type:"pie",
          data:chart_data
        });
      }
    })
  }

});

    </script> 
   </body>
</html>