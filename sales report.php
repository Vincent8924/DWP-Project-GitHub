
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="sales report.css">

        <title>Admin Sales Report</title>
  
        

    </head>
    <body >
        
    <?php include('jkai_admin_menu.php'); ?>
 
        

        

            
            
            <table cellspacing="5" cellpadding="5">
                <thead>
                  <tr>
                    
                    
                    <th colspan="2">Sales Report</th>
                    
                    
                  </tr>
                </thead>
                
                <tbody>
                  <tr>
                    <td><spam>Room No :</spam>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" class="field" placeholder="Room No"></td>
                  </tr>
                    
                  <tr>
                    <td>
                      <spam style="margin-right: 20px ;">Room Type :</spam>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <select class="field">
                            <option value="Presidential Suite">Presidential Suite</option>
                            <option value="Executive Suite">Specialty Suite</option>
                            <option value="Executive Suite">Executive Suite</option>
                            <option value="Club Premier Room">Club Premier Room</option>
                            <option value="Deluxe Rooms">Deluxe Rooms</option>                                  
                        </select>
                    </td>
                  </tr>  

                  <tr><td>Customer Name :
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" class="field" placeholder="Name"></td></tr>

                  <tr><td>Booking Date :
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="date" class="field" placeholder="Booking Date"></td></tr>

                  <tr><td>Check In :
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="date" class="field" placeholder="Check In"></td></tr>
                  
                  
                    <tr><td>Check Out :
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="date" class="field" placeholder="Check Out"></td></tr>

                  
                    
                  <tr>
                    <td>Room Status :
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <select class="field" >
                        <option value="Vacant">Vacant</option>
                        <option value="Booked">Booked</option>
                        <option value="Occupied">Occupied</option>
                        <option value="Cleaning">Cleaning</option>
                        <option value="Under Maintenance">Under Maintenance</option>
                        <option value="Cancelled">Cancelled</option>                                  
                    </select>
                    </td>
                  </tr>
                  
                </tbody>
                </table>
                <br/>
                <button>Generate</button>
                
                <button>Reset</button>
                
        
    </body>


</html>