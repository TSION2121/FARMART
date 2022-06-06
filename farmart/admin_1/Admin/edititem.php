<?php
session_start();

if(!$_SESSION['admin_username'])
{

    header("Location: ../index.php");
}

?>

<?php

error_reporting( ~E_NOTICE );

require_once 'config.php';

if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
{
    $id = $_GET['edit_id'];
    $stmt_edit = $DB_con->prepare('SELECT * FROM products WHERE product_id =:product_id');
    $stmt_edit->execute(array(':product_id'=>$id));
    $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
    extract($edit_row);
}
else
{
    header("Location: items.php");
}



if(isset($_POST['btn_save_updates']))
{
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_cat = $_POST['product_cat'];
    // $id = $_POST['product_id'];
    
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp = $_FILES['product_image']['tmp_name'];  // for server

    if (isset($_SESSION['admin_username'])) {
        move_uploaded_file($product_image_tmp, "../../Admin/product_images/$product_image");
    }  
   
    $product_image = $edit_row['product_image'];                
    

    if(!isset($errMSG))
    {
        $stmt = $DB_con->prepare('UPDATE products
                                     SET product_title=:product_title, 
                                         product_cat=:product_cat
                                         product_price=:product_price, 
                                         product_image=:product_image 
                                   WHERE product_id=:product_id');
        $stmt->bindParam(':product_title',$product_title);
        $stmt->bindParam(':product_cat',$product_cat);
        $stmt->bindParam(':product_price',$product_price);
        $stmt->bindParam(':product_image',$product_image);
        $stmt->bindParam(':product_id',$id);
            
        if($stmt->execute()){
            ?>
            <script>
            alert('Successfully Updated ...');
            window.location.href='items.php';
            </script>
            <?php
        }
        else{
            $errMSG = "Sorry Data Could Not Updated !";
             echo "<script>alert('Sorry Data Could Not Updated !')</script>";				
        }
    
    }
    
                    
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARMAT - Edit Item</title>
	 <link rel="shortcut icon" href="../assets/img/titlelogo.jpg" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="css/local.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

   
    
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#2ecc71;">FARMART - Administrator Panel</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li><a href="index.php" style="color:#2ecc71;"> &nbsp; &nbsp; &nbsp; Home</a></li>
					<li><a href="additems.php"> &nbsp; &nbsp; &nbsp; Upload Items</a></li>
					<li class="active"><a href="items.php" style="color:#2ecc71;"> &nbsp; &nbsp; &nbsp; Item Management</a></li>
					<li><a href="customers.php" style="color:#2ecc71;"> &nbsp; &nbsp; &nbsp; Customer Management</a></li>
					<li><a href="orderdetails.php" style="color:#2ecc71;"> &nbsp; &nbsp; &nbsp; Order Details</a></li>
					<li><a href="logout.php" style="color:#2ecc71;"> &nbsp; &nbsp; &nbsp; Logout</a></li>
					
                    
                </ul>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    <li class="dropdown messages-dropdown">
                        <a href="#" style="color:#2ecc71;"><i class="fa fa-calendar"></i>  <?php
                            $Today=date('y:m:d');
                            $new=date('l, F d, Y',strtotime($Today));
                            echo $new; ?></a>
                        
                    </li>
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color:#2ecc71;"><i class="fa fa-user"></i> <?php   extract($_SESSION); echo $admin_username; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            
                            <li><a href="logout.php" style="color:#2ecc71;"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="page-wrapper">
            
			
			
			
			
			
			
			
			
		<div class="clearfix"></div>

<form method="post" enctype="multipart/form-data" class="form-horizontal">
	
    
    <?php
	if(isset($errMSG)){
		?>
       
        <?php
	}
	?>
			 <div class="alert alert-info">
                        
                          <center> <h3 style="color:#2ecc71;"><strong>Update Item</strong> </h3></center>
						  
						  </div>
						  
						 <table class="table table-bordered table-responsive">
	 
    <tr>
    	<td><label class="control-label">Name of Item.</label></td>
        <td><input class="form-control" type="text" name="product_title" value="<?php echo $product_title; ?>" required /></td>
    </tr>

    <div>	
                            <label for="category">Catagory</label><br>
     <select id="category" name="product_cat" value="<?php echo $product_cat ?>" required>
    <option value="fruits">Fruits</option>
    <option value="vegitables">Vegitables</option>
    <option value="crop">Crop</option>

  </select>
  </div>  
	
	 <tr>
    	<td><label class="control-label">Price.</label></td>
        <td><input id="inputprice" class="form-control" type="text" name="product_price" value="<?php echo $product_price; ?>" required /></td>
    </tr>
	
	
    <tr>
    	<td><label class="control-label">Image.</label></td>
        <td>
        	<p><img class="img img-thumbnail" src="../../Admin/product_images/<?php echo $product_image; ?>" height="150" width="150" /></p>
        	<input class="input-group" type="file" name="product_image" accept="image/*" />
        </td>
    </tr>
    
    <tr>
        <td colspan="2"><button type="submit" name="btn_save_updates" class="btn btn-primary">
        <span class="glyphicon glyphicon-save"></span> Update
        </button>
        
        <a class="btn btn-danger" href="items.php"> <span class="glyphicon glyphicon-backward"></span> Cancel </a>
        
        </td>
    </tr>
    
    </table>
    
</form>










   









    <!-- /#wrapper -->

<!-- 	
	Mediul Modal
        <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myMediulModalLabel">
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
        </div>
		
		 -->
		
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
