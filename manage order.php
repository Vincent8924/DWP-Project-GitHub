
<html>
    <head>
        <meta charset="UTF-8"/>
        <link rel="icon" type="image/x-icon" href="title logo.ico">
        <link rel="stylesheet" type="text/css" href="manage room.css">

        <title>Admin Manage Order</title>
  
        

    </head>
    <body >
        
    <?php include('jkai_admin_menu.php'); ?>
        
        
        
        
        </div>
 
        <br/><br/>

        <div class="search-bar">
            <form action="#">
              <input type="text" class="search-input" placeholder="Search">
              &nbsp;&nbsp;
              <button>Enter</button>
              
                

            </div>
            
            <button id="add" >Add</button>
            <br/><br/>
            <table cellspacing="5" cellpadding="5">
                <thead>
                  <tr>
                    
                    
                    <th>Name</th>
                    <th>Booking Date</th>
                    <th>Check in</th>
                    <th>Check Out</th>
                    <th>Days</th>
                    <th>Room No</th>
                    <th>Room Type</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th><input type="text" class="field" placeholder="Name"></th>
                    <th><input type="date" class="field" placeholder="Booking Date"></th>
                    <th><input type="date" class="field" placeholder="Check In"></th>
                    <th><input type="date" class="field" placeholder="Check Out"></th>
                    <th><input type="text" class="field" placeholder="Days"></th>
                    <th><input type="text" class="field" placeholder="Room No"></th>
                    <th>
                        <select class="field">
                            <option value="Presidential Suite">Presidential Suite</option>
                            <option value="Executive Suite">Specialty Suite</option>
                            <option value="Executive Suite">Executive Suite</option>
                            <option value="Club Premier Room">Club Premier Room</option>
                            <option value="Deluxe Rooms">Deluxe Rooms</option>                                  
                        </select>
                    </th>
                </tr>
                </tbody>
                </table>
                <br/><hr/><br/>

        <table cellspacing="5" cellpadding="5">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Booking Date</th>
                <th>Check in</th>
                <th>Check Out</th>
                <th>Days</th>
                <th>Room No</th>
                <th>Room Type</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Jack</td>
                <td>2017-08-17</td>
                <td>2017-08-21</td>
                <td>2017-08-23</td>
                <td>2 Days</td>
                <td>A1</td>
                <td>Presidential Suite</td>
                <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jason</td>
                <td>2017-09-10</td>
                <td>2017-09-11</td>
                <td>2017-09-15</td>
                <td>4 Days</td>
                <td>D20</td>
                <td>Club Premier Room</td>
                <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Elysa</td>
                <td>2017-09-10</td>
                <td>2017-09-11</td>
                <td>2017-09-15</td>
                <td>4 Days</td>
                <td>E3</td>
                <td>Deluxe Rooms</td>
                <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
              </tr>
              <tr>
                <td>4</td>
                <td>David</td>
                <td>2017-09-10</td>
                <td>2017-09-11</td>
                <td>2017-09-15</td>
                <td>4 Days</td>
                <td>C13</td>
                <td>Executive Suite</td>
                <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
              </tr>
              <tr>
                <td>5</td>
                <td>Jakex</td>
                <td>2017-09-10</td>
                <td>2017-09-11</td>
                <td>2017-09-15</td>
                <td>4 Days</td>
                <td>A3</td>
                <td>Presidential Suite</td>
                <td><button>View</button> <button>Edit</button> <button>Delete</button></td>
              </tr>
              
            </tbody>
          </table>
        
    </body>


</html>