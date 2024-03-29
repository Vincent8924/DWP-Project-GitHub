<?php include('dataconnection.php'); ?>


<head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="manage room.css">

        <title>Admin Manage Order</title>
  
        

    </head>
    <body>
        
    <?php include('jkai_admin_menu.php'); ?>



    

        <br/><br/>
       

        <form name="addnewfrm" method="post" action="">
        
        <table cellspacing="5" cellpadding="5">
                
                  <tr>
                    
                    
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Booking Date</th>
                    <th>Check in</th>
                    <th>Check Out</th>
                    <th>Room Type</th>
                    <th>Payment Method</th>
                   
                    
                  </tr>
                
                  
                  <tr>
                    <th><input type="text" class="field" placeholder="First Name" name="first_name"></th>
                    <th><input type="text" class="field" placeholder="Last Name" name="last_name"></th>
                    <th><input type="date" class="field" placeholder="Booking Date" name="booking_date"></th>
                    <th><input type="date" class="field" placeholder="Check In" name="check_in"></th>
                    <th><input type="date" class="field" placeholder="Check Out" name="check_out"></th>
                    <th>
                        <select class="field" name="room_type">
                            <option value="Presidential Suite">Presidential Suite</option>
                            <option value="Executive Suite">Specialty Suite</option>
                            <option value="Executive Suite">Executive Suite</option>
                            <option value="Club Premier Room">Club Premier Room</option>
                            <option value="Deluxe Rooms">Deluxe Rooms</option>                                  
                        </select>
                    </th>
                    <th>
                        <select class="field" name="method">
                            <option value="MASTER CARD">MASTER CARD</option>
                            <option value="CIMB">CIMB</option>
                            <option value="PAYPA">PAYPAL</option>
                            <option value="VISA">VISA</option>                                 
                        </select>
                    </th>
                    
                    
                </tr>
                
                </table>
                <br/>
                <button type="submit" id="add" name="add_record" value="Add Order">Add Order</button>
           
            <br/><br/>

      </form>


      <?php
     
        if (isset($_POST['add_record']))
        {
            $rt = $_POST['room_type'];
            $result = mysqli_query($connect, "SELECT price FROM room_category WHERE room_type = '$rt'");
            $row = mysqli_fetch_assoc($result);
            $baseprice = $row['price'];
            
            $first = $_POST['first_name'];
            $last = $_POST['last_name'];
            $cin = $_POST['check_in'];
            $cout = $_POST['check_out'];
            $days = ['days'];
            $total = ['total'];
            
            $bdate = $_POST['booking_date'];
            $method = $_POST['method'];

           
            if(empty($bdate) || empty($cin) || empty($cout)) {
                ?>
                <script>
                    alert("Please fill in all fields.");
                </script>
                <?php
            } 
        
           
            else
            {

                $checkInDate = new DateTime($cin);
                $checkOutDate = new DateTime($cout);

                $dateDifference = $checkOutDate->diff($checkInDate);

                $days = $dateDifference->days;

                $total = $baseprice * $days;
            
            //else insert into database
            mysqli_query($connect, "INSERT INTO `user_order` (first_name,last_name,booking_date,check_in,check_out,`days`,room_type,price,method) 
            VALUES('$first','$last','$bdate','$cin', '$cout', '$days','$rt','$total','$method')");
            //need to put '' cause can't calculate

                ?>
                <script type="text/javascript">
                    alert("Record saved!");
                    window.location.href = "manage order.php";
                </script>

                <?php

            }
        }
    
        ?>



      <br/><hr/><br/>


      <table cellspacing="5" cellpadding="5">
            <thead>
              <tr>
                <th>ID</th>
                <th>First name</th>
                <th>Last Name</th>
                <th>Booking Date</th>
                <th>Check in</th>
                <th>Check Out</th>
                <th>Days</th>
                <th>Room Type</th>
                <th>Total Price</th>
                <th>Payment Method</th>
                <th>Actions</th>
              </tr>
            </thead>

            <?php
    
      $result = mysqli_query($connect, "SELECT * FROM user_order");	
     while($row = mysqli_fetch_assoc($result))
        {
        
        ?>	

            
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['first_name']?></td>
                <td><?php echo $row['last_name']?></td>
                <td><?php echo $row['booking_date']?></td>
                <td><?php echo $row['check_in']?></td>
                <td><?php echo $row['check_out']?></td>
                <td><?php echo $row['days']?></td>
                <td><?php echo $row['room_type']?></td>
                <td><?php echo $row['method']?></td>
                <td><?php echo $row['price']?></td>
                <td>
                    <form method="post" action="">
                    
                    <button><a href="edit order.php?id&id=<?php echo $row['id'];?>" class="white">Edit</a></button>
                       
                       <button type="submit" name="delete_id">Delete</button>
                        
                        <input type="hidden" name="delete" value="<?php echo $row['id']; ?>">
                        
                    </form>
                </td>
            </tr>
          <?php
          }
          ?>
          </table>

          <?php
                if (isset($_POST['delete_id'])) 
                {
                    $delete = $_POST['delete'];
                    mysqli_query($connect, "DELETE FROM user_order WHERE id = '$delete'");
                
                ?>
                
                <script type="text/javascript">
                    alert("Record has been deleted!");
                    window.location.href = "manage order.php";
                </script>

            <?php
                }
            ?>



    </body>



