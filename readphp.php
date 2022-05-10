<?php

session_start();
?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/readphpstylee.css">
    <link rel="shortcut icon" href="galaxy.svg" type="image/x-icon">
  <title>Read</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Components Requirement</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-4">
          <div class="card">
          <div class="col">
            <div class="card-header">
            <h4 style color="color:white;">
              <h4 class="card-title" >Requirements Of Components</h4>
           </div>
            </div>
            
            <div class="card-body">
                <div class="row">
                
                <div class="col-md-6">
                <form action="" method="POST">


               
      <div class="form-group">
      
                  <?php
include 'connection.php';
$sql="SELECT DISTINCT productname FROM productdetails";
$res=mysqli_query($conn,$sql);
?>
         Select Product:
        <select id="product" name="getname" onchange="selectproduct()">
            <?php
            while($row = mysqli_fetch_array($res)){
                ?>
                <option value="<?php  echo $row['productname']; ?>"><?php echo $row['productname']; ?></option>
                <?php
             }
            ?>
</select>
<br/> 


<?php
include 'connection.php';
$sql="SELECT DISTINCT watt FROM productdetails";
$res=mysqli_query($conn,$sql);
?>
         Select Watt:
        <select id="product" name="getwatt" class="mt-2" onchange="selectproduct()">
            <?php
            while($row = mysqli_fetch_array($res)){
                ?>
                <option value="<?php  echo $row['watt']; ?>"><?php echo $row['watt']; ?></option>
                <?php
             }
            ?>
</select>
             
 <br/>

    </div>
    <input type="number" id="quantity" name="quantity"  class="mt-2" placeholder="Enter Quantity" min="1" >
    <br/>
    <button type="submit" name="search"  class="btn btn-primary mt-4">Search</button>  
           

  </form>
  </div>
  
    <?php
   
         
  
    ?>
    </div>
</div>


               
                <div class="table-responsive">
                <table class="table table-bordered">
                 <thead></thread>
                 <tr>
                    <th scope="col">Watt</th>
                    <th scope="col">Driver</th>
                    <th scope="col">PCB</th>
                    <th scope="col">Housing</th>
                    </tr>
                    </thead>
            </div>
            
                  <tbody>
                    <?php
                    error_reporting(0);
                    include 'connection.php';
                     if(isset($_POST['search'])){
                         $name=$_POST['getname'];
                         $watt=$_POST['getwatt'];
                         $cal=$_POST['quantity'];
                         $query="SELECT * FROM productdetails WHERE productname='$name' AND watt='$watt'";
                         $query_run=mysqli_query($conn,$query);
                 
                     if(mysqli_num_rows($query_run)>0){

                      while($row=mysqli_fetch_array($query_run)){
                  
                    ?>

                    <tr>
                  <th ><?php echo $row['watt']; ?></th>
                  <td><?php echo $row['driver'].' = '.$cal.' Quantity'; ?></td>
                  <td><?php echo $row['pcb'].' = '.$cal.' Quantity'; ?></td>
                  <td><?php echo $row['housing'].' = '.$cal.' Quantity'; ?></td>

                     </tr>
                     </tbody>
                      <?php
                       }

                      }else{

                        ?>
                        <tr>
                          <td colspan=>
                            Not Available
                          </td>
                      </tr>
                        <?php
                        }
                      }
                      ?>
                     </table>
                </div>



                
                  <tbody>

              
                        <?php
                        
                      
                      if(isset($_POST['click']))
	{
		?>
<script> 
window.location.href="compdetail.php";
</Script>
<?php
	}
?>
</table>
<form method="POST">
<Button type="submit" name="click" class="btn btn-primary">Components Quantiy</button>
</form>
                      
                     </table>
                     
                </div>

              </div>
              
            </div>
          </div>
        </div>
      </div>
                    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>