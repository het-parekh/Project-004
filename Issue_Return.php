


<?php
/*
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
	
}
*/
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Inventory Management System</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	<script type="text/javascript" src="./js/order.js"></script>
 </head>
<body>
<div class="overlay"><div class="loader"></div></div>
	

	<div class="container">
		<div class="row">
			<div class="col-md-10 mx-auto">
				<div class="card" style="box-shadow:0 0 25px 0 lightgrey;">
				  <div class="card-header">
				   	<h4>Issue/Return Component(s)</h4>
				  </div>
				  <div class="card-body">
				  	<form id="get_order_data" onsubmit="return false">
					  <div  >
				  			<label class="col-sm-3 col-form-label" align="right">Activity</label>
				  		
				  				<input type="radio" name="activity" value="Issue" checked  >Issue
								  <input type="radio" name="activity" value="Return" style="margin-left:5px">Return
				  			
				  		</div>
						  <p></p>
				  		<div class="form-group row">
				  			<label class="col-sm-3 col-form-label" align="right">Date</label>
				  			<div class="col-sm-6">
				  				<input type="text" id="date" name="date" readonly class="form-control form-control-sm" value="<?php echo date("Y-d-m"); ?>">
				  			</div>
				  		</div>	
				  		<div class="form-group row">
				  			<label class="col-sm-3 col-form-label" align="right">Registered Roll Number</label>
				  			<div class="col-sm-6">
				  				<input type="num" pattern=".*[0-9]" id="roll" name="roll"class="form-control form-control-sm" placeholder="Enter Roll No." required/>
				  			</div>
				  		</div>
						  <div class="form-group row">
				  			<label class="col-sm-3 col-form-label" align="right">Group ID</label>
				  			<div class="col-sm-6">
				  				<input type="text" id="group" name="group"class="form-control form-control-sm" placeholder="" readonly required/>
				  			</div>
				  		</div>


				  		<div class="card" style="box-shadow:0 0 15px 0 lightgrey;">
				  			<div class="card-body">
				  				<h3>Component list<span><button style="background-color:transparent;color:blue;cursor:pointer"class="btn"><i class="fa fa-refresh"></i></button></span></h3>
				  				<table align="center" style="width:100%;">
		                            <thead>
		                              <tr>
		                                <th>#</th>
		                                <th style="text-align:center;">Component ID</th>
		                                <th style="text-align:center;">Component Name</th>
		                                <th style="text-align:center;">Quantity</th>
		                                <th style="text-align:center;">Available Quantity</th>
		                              </tr>
		                            </thead>
		                            <tbody id="comp_item">
		
		    
			
			<td><b id="number">1</b></td>
		    <td>
		        <select name="pid[]" class="form-control form-control-sm" required>
		            <option></option>
		        </select>
		    </td>
		    <td><input name="tqty[]" readonly type="text" class="form-control form-control-sm"></td>   
		    <td><input name="qty[]" type="text" class="form-control form-control-sm" required></td>
		    <td><input name="price[]" type="text" class="form-control form-control-sm" readonly></td>
		    
			
	
		                            </tbody>
		                        </table>
		                        <center style="padding:10px;">
		                        	<button id="add" style="width:150px;" class="btn btn-success">Add</button>
		                        	<button id="remove" style="width:150px;" class="btn btn-danger">Remove</button>
		                        </center>
				  			</div>
				  		</div>

				  	

                    <center>
                      <input type="submit" id="issue_form" style="width:150px;margin-top:10%" class="btn btn-info" value="Submit">
                      
                    </center>


				  	</form>

				  </div>
				</div>
			</div>
		</div>
	</div>
	


</body>
</html>