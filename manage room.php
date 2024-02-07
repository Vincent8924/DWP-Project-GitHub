<?php include('dataconnection.php'); ?>
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="manage room.css">

        <title>Admin Manage Room</title>
  
        

    </head>
    <body >
        
    <?php include('jkai_admin_menu.php'); ?>
          
        
        
        
        
        
 
        <br/><br/>

  
            <form action="#" method="POST">
              
          
            <table cellspacing="5" cellpadding="5">
                <thead>
                  <tr>
                    
                    
                    <th>Room No</th>
                    <th>Room Type</th>
                    <th>Status</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                    <th><input type="text" class="field" placeholder="Room No" name="room_no"></th>
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
                      <select class="field" name="room_status">
                        <option value="Vacant">Vacant</option>
                        <option value="Booked">Booked</option>
                        <option value="Occupied">Occupied</option>
                        <option value="Cleaning">Cleaning</option>
                        <option value="Under Maintenance">Under Maintenance</option>
                        <option value="Cancelled">Cancelled</option>                                  
                    </select>
                    </th>

                </tr>
                </tbody>
                </table>
                <br/>
                <button id="add" name="add_room">Add Room</button>
                <br/><br/>
            </form>

            <?php
     
     if (isset($_POST['add_room']))
     {
         $rn = $_POST['room_no'];
         $rt = $_POST['room_type'];
         $rs = $_POST['room_status'];

        
         if(empty($rn) || empty($rs) || empty($rt)) {
             ?>
             <script>
                 alert("Please fill in all fields.");
             </script>
             <?php
         } 
     
        
         else
         {

         
         mysqli_query($connect, "INSERT INTO `room_status` (room_no,room_type,room_status) 
         VALUES('$rn','$rt','$rs')");
         

             ?>
             <script type="text/javascript">
                 alert("Room status saved!");
                 window.location.href = "manage room.php";
             </script>

             <?php

         }
     }
 
     ?>



                <br/><hr/><br/>

        <table cellspacing="5" cellpadding="5">
           
              <tr>
                <th>Room No</th>
                
                <th>Room Type</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            
              <?php
    
    $result = mysqli_query($connect, "SELECT * FROM room_status");	
   while($row = mysqli_fetch_assoc($result))
      {
      
      ?>	

          
          <tr>
              <td><?php echo $row['room_no']?></td>
              <td><?php echo $row['room_type']?></td>
              <td><?php echo $row['room_status']?></td>
              <td>
                  <form method="post" >
                  
                  <button><a href="edit room.php?rn&rn=<?php echo $row['room_no'];?>" class="white">Edit</a></button>
                     
                     <button type="submit" name="delete_room">Delete</button>
                      
                      <input type="hidden" name="delete" value="<?php echo $row['room_no']; ?>">
                      
                  </form>
              </td>
          </tr>
        <?php
        }
        ?>
          </table>


          <?php
                if (isset($_POST['delete_room'])) 
                {
                    $delete = $_POST['delete'];
                    mysqli_query($connect, "DELETE FROM room_status WHERE room_no = '$delete'");
                
                ?>
                
                <script type="text/javascript">
                    alert("Record has been deleted!");
                    window.location.href = "manage room.php";
                </script>

            <?php
                }
            ?>
        
    </body>


</html>