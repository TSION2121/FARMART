<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARMART- Admin </title>
	 <link rel="shortcut icon" href="../assets/img/titlelogo.jpg" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

   
    
</head>
<body>
    <div id="wrapper" >
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color: #2ecc71" >FARMART - Administrator Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="index.php"style="color: #2ecc71"> &nbsp; &nbsp; &nbsp; Home</a></li>
					<li><a href="additems.php"> &nbsp; &nbsp; &nbsp; Upload Items</a></li>
					<li><a href="items.php" style="color: #2ecc71"> &nbsp; &nbsp; &nbsp; Item Management</a></li>
					<li><a href="customers.php" style="color: #2ecc71"> &nbsp; &nbsp; &nbsp; Customer Management</a></li>
					<li><a href="orderdetails.php" style="color: #2ecc71"> &nbsp; &nbsp; &nbsp; Order Details</a></li>
					<li><a href="logout.php" style="color: #2ecc71"> &nbsp; &nbsp; &nbsp; Logout</a></li>
					
                    
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" style="color: #2ecc71"><i class="fa fa-calendar"></i>  <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?></a>
                        
                    </li>
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #2ecc71"><i class="fa fa-user"></i> <?php   extract($_SESSION); echo $admin_username; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="logout.php" style="color: #2ecc71"><i class="fa fa-power-off" style="color: #2ecc71"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            
			
			
			
			
			
			<div id="my-carousel" class="carousel slide hero-slide hidden-xs" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#my-carousel" data-slide-to="1"></li>
        <li data-target="#my-carousel" data-slide-to="2"></li>
		<li data-target="#my-carousel" data-slide-to="3"></li>
        <li data-target="#my-carousel" data-slide-to="4"></li>
		<li data-target="#my-carousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
		
            <img src="../assets/img/cover-home.jpg" alt="Hero Slide" style="width:100%;height:500px;">

            <div class="carousel-caption">
                <h1 style="font-family:Century Gothic"><b></b></h1>

                <h2></h2>
            </div>
        </div>
        <div class="item">
            <img src="../assets/img/gallery-img-1.jpg" alt="..." style="width:100%;height:500px;">

            <div class="carousel-caption">
               
            </div>
        </div>
        <div class="item">
            <img src="../assets/img/gallery-img-2.jpg" alt="..." style="width:100%;height:500px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
		
		<div class="item">
            <img src="../assets/img/gallery-img-3.jpg" alt="..." style="width:100%;height:500px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
		
		<div class="item">
            <img src="../assets/img/gallery-img-4.jpg" alt="..." style="width:100%;height:500px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
		
		<div class="item">
            <img src="../assets/img/gallery-img-6.jpg" alt="..." style="width:100%;height:500px;">

            <div class="carousel-caption">
		

                <p></p>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
	
      <span class="icon-prev"></span>
       
    </a>
    <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
       
       <span class="icon-next"></span>
    </a>

<!-- #my-carousel-->
			
			</div>
			
			
		<br />	
			 <div class="alert alert-danger" >
                        
                        &nbsp; &nbsp; Welcome to FARMART! Taste of revolution. So, if you're looking for food in the market, why not visit our farmart and fill your kitchen with our product? 
						You don't have to go to the market, you only have to visit one of our best online grocery store.It's that easy. Explore our wide range of varity of foods and If you have a favorite food, 
						this is the easiest and most straightforward way to get it.
                    </div>
					<br />
			
			<div class="alert alert-default" style="background-color:#2ecc71;">
                       <p style="color:white;text-align:center;">
                       &copy 2022 FARTMART | All Rights Reserved |  Design by : FARMART Team

						</p>
                        
                    </div>
            
                </div>
            </div>

           

           
        </div>
		
		
		
    </div>
    <!-- /#wrapper -->

	
	<!-- Mediul Modal -->
        <!-- <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
          <div class="modal-dialog modal-md">
            <div style="color:white;background-color:#008CBA" class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h2 style="color:white" class="modal-title" id="myModalLabel">Upload Items</h2>
              </div>
              <div class="modal-body">
         
				
			
				
				 <form enctype="multipart/form-data" method="post" action="additems.php">
                   <fieldset>
					
						
                            <p>Name of Item:</p>
                            <div class="form-group">
							
                                <input class="form-control" placeholder="Name of Item" name="pname" type="text" required>
                           
							 
							</div> 
						<div>	
                            <label for="category">Catagory</label><br>
     <select id="category" name="category" placeholder="select" required>
    <option value="fruits">Fruits</option>
    <option value="seeds and spices">Seeds And Spices</option>
    <option value="green vegitables">Vegitables</option>
    <option value="fish">Fish</option>
    <option value="meat">Meat</option>
    <option value="cereals and pulses">cereals and pulses</option>
    <option value="beverages">Beverages</option>
    <option value="other agro products">Other agro products</option>

  </select>
  </div>  




                    <p>Details:</p>
                    <div class="form-group" >

					<textarea  name="details" id="details" rows="5"></textarea>
				</div>
							
							
							
							
							
							
							<p>Price:</p>
                            <div class="form-group">
							
                                <input id="priceinput" class="form-control" placeholder="Price" name="price" type="text" required>
                           
							 
							</div>
							
							
							<p>Choose Image:</p>
							<div class="form-group">
						
							 
                                <input class="form-control"  type="file" name="pimage" accept="image/*" required/>
                           
							</div>
				   
				   
					 </fieldset>
                  
            
              </div>
              <div class="modal-footer">
               
                <button class="btn btn-success btn-md" name="item_save">Save</button>
				
				 <button type="button" class="btn btn-danger btn-md" data-dismiss="modal">Cancel</button>
				
				
				   </form>
              </div>
            </div>
          </div>
        </div> -->





        <div class="container">
        <main class="my-form">
            <div class="cotainer">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="text-center font-weight-bold">Insert Your New Product <i class="fas fa-leaf"></i></h4>
                            </div>
                            <div class="card-body">

                                <form name="my-form" action="InsertProduct.php" method="post" enctype="multipart/form-data">

                                    <div class="form-group row">
                                        <label for="full_name" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Title:</label>
                                        <div class="col-md-6">
                                            <input type="text" id="full_name" class="form-control" name="product_title" placeholder="Enter Product title" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Stock:(In kg)</label>
                                        <div class="col-md-6">
                                            <input type="text" id="full_name" class="form-control" name="product_stock" placeholder="Enter Product Stock" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="user_name" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Categories:</label>
                                        <div class="col-md-6">
                                            <select name="product_cat" required>
                                                <option>Select a Category</option>
                                                <?php
                                                $get_cats = "select * from categories";
                                                $run_cats =  mysqli_query($con, $get_cats);
                                                while ($row_cats = mysqli_fetch_array($run_cats)) {
                                                    $cat_id = $row_cats['cat_id'];
                                                    $cat_title = $row_cats['cat_title'];
                                                    echo "<option value='$cat_id'>$cat_title</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone_number" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product type :</label>
                                        <div class="col-md-6">
                                            <input type="text" id="phone_number" class="form-control" name="product_type" placeholder="Example . potato" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="present_address" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Expiry :</label>
                                        <div class="col-md-6">
                                            <input id="present_address" class="form-control" type="date" name="product_expiry" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="permanent_address" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Image :</label>
                                        <div class="col-md-6">
                                            <input id="permanent_address" type="file" name="product_image">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nid_number" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product MRP : (Per kg)</label>
                                        <div class="col-md-6">
                                            <input type="text" id="nid_number" class="form-control" name="product_price" placeholder="Enter Product price" required>
                                        </div>
                                    </div>

                                    <!-- <div class="form-group row">
                                        <label for="nid_number1" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Base Price:(Per kg)</label>
                                        <div class="col-md-6">
                                            <input type="text" id="nid_number1" class="form-control" name="product_baseprice" placeholder="Enter Product base price" required>
                                        </div>
                                    </div> -->

                                    <div class="form-group row">
                                        <label for="nid_number2" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder"> Product Description:</label>
                                        <div class="col-md-6">
                                            <textarea name="product_desc" id="nid_number2" class="form-control" name="product_desc" rows="3" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nid_number3" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Product Keywords:</label>
                                        <div class="col-md-6">
                                            <input type="text" id="nid_number3" class="form-control" name="product_keywords" placeholder="Example best potatos" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="nid_number4" class="col-md-4 col-form-label text-md-right text-center font-weight-bolder">Delivery :</label>
                                        <div class="col-md-6">
                                            <input type="radio" id="nid_number4" name="product_delivery" value="yes" />Yes
                                            <input type="radio" id="nid_number4" name="product_delivery" value="no" />No
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary" name="insert_pro">
                                            INSERT
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
    </div>



















	  	  <script>
   
    $(document).ready(function() {
        $('#priceinput').keypress(function (event) {
            return isNumber(event, this)
        });
    });
  
    function isNumber(evt, element) {

        var charCode = (evt.which) ? evt.which : event.keyCode

        if (
            (charCode != 45 || $(element).val().indexOf('-') != -1) &&      
            (charCode != 46 || $(element).val().indexOf('.') != -1) &&      
            (charCode < 48 || charCode > 57))
            return false;

        return true;
    }    
</script>
</body>
</html>
