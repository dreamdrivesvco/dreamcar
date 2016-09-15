<html>

<body>
    
<?php
     $server="localhost";
     $user="sulu";
     $password="";
     $dbname="sulthan";
     //CONNECT
         
     $db=new mysqli($server,$user,$password,$dbname);
         
    //ERROR CHECK
     if ($db->connect_error){
		 
             die("Connection Failed : ".$db->connect_error);
     }
     //NO ERROR
         
     else{
				  
					
				  
		
		
				
					
		    		$budget=$_POST['budget']; 
    			
    		  		$usage=$_POST['usage']; 
    			
				
				
				
					
				
		    		$brand=$_POST['brand']; 
    			
					
				
					
			
		    		$mileage=$_POST['mileage']; 
    			
    				
    	
    }	
	
	?> 
		
		
	       
				<div class= "row">
						<table>
                          <thead>
                            <tr>
                             <th data-field="name">Name</th>
                             <th data-field="company">Company</th>
                             <th data-field="mileage">Mileage</th>
							 
							<th data-field="price">Price</th>
							<th data-field="usage">Usage</th>
							 
                           </tr>
                          </thead>
                         <tbody>
                         <?php
						 
                                // output data of each row
                             
	 $result = $db->query("SELECT * 
	FROM  `table` 
	WHERE  `brand` =  '$brand'
	AND  `mileage` =  '$mileage'
	AND `usag` =  '$usage'");
	
	$rowcount=$result->num_rows;
	
							if ($rowcount > 0) {
					while($row = $result->fetch_assoc())
					{
						
						
 
                                echo "<tr>
                                <td>".$row['name']."</td>
                                <td>".$row['brand']."</td>
                                <td>".$row["mileage"]."</td>
                                
                                <td>".$row["price"]."</td>
                                <td>".$row["usag"]."</td>
								</tr>";
	                    }
                        echo  "</tbody>";
						echo "</table>";
                        } else {
                            echo "0 results";
					
                         }
                        ?>
	</div>
						 
	<footer>
        <div class="container">
            <p>&copy; 2016 . All Rights Reserved.</p>
        </div>
    </footer>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/liteaccordion.jquery.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    
    <script>
        (function($, d) {
                $('#two').liteAccordion();
        })(jQuery, document);
    </script>
						</body>
					</html>	