<?php

require_once('connect.php');
$query = 'SELECT userID, username, email, sex, date_created FROM users';
$response = @mysqli_query($dbc, $query);
?>

<div class="container-fluid">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>User ID</th>
                <th>Username</th>
                <th>email</th>
                <th>Gender</th>
                <th>Date Created</th>
            </tr>
        </thead>
        
        <tbody>
          <?php 
          if($response) {
              echo '<script>console.log("Response Got");</script>';
                while ($row = mysqli_fetch_array($response)) { 
                    echo '<tr>
                        <td>'.$row[0].'</td>
                        <td>'.$row[1].'</td>
                        <td>'.$row[2].'</td>
                        <td>'.$row[3].'</td>
                        <td>'.$row[4].'</td>
                        </tr>'; 
                }
                mysqli_close($dbc);
            }
            else {
                echo "Error";
                echo mysqli_error($dbc);
                mysqli_close($dbc);
            }
          ?>
        </tbody>
    </table>
</div>

