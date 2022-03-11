<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Mobile Details</h2>
                       
                    </div>
                    <?php
                    // Include config file
                    	require_once("dbcontroller.php");
                    	
           $query = "SELECT * FROM tbl_mobile";
          	
          		$dbcontroller = new DBController();
			$result = $dbcontroller->executeSelectQuery($query);
                    // Attempt select query execution
                    
                    
                   
                  
                    if($result != 0){
                        
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Model</th>";
                                        echo "<th>Colour</th>";
                                       
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                               for($i=0; $i<count($result); $i++)
	{
                                    echo "<tr>";
                                        echo "<td>" . $result[$i]['id'] . "</td>";
                                        echo "<td>" . $result[$i]['name'] . "</td>";
                                        echo "<td>" . $result[$i]['model'] . "</td>";
                                        echo "<td>" . $result[$i]['color'] . "</td>";
                                        
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            
                           
                       }  else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        
                    }
 
                    
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>