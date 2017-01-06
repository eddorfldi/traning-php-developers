<?php
$Username = $_GET['username'];
$Place = $_GET['place'];
$Birth = $_GET['birth'];
$Gender = $_GET['gender'];
$Address = $_GET['address'];
$Picture = $_GET['picture'];
$Religion = $_GET['religion'];
$Status = $_GET['status'];
$Job = $_GET['job'];
$Citizen = $_GET['citizen'];
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form Action</title>
    </head>
    <body>
        <table>
            <tr>
                <thead>
                    <th>Form Action Personal Identity</th>
                </thead>
            </tr>
            <tr>
                <tbody>
                    <th>Name</th>
                    <th>:</th>
                    <th><?php echo $Username; ?></th>
                </tbody>
                <tbody>
                    <th>Place</th>
                    <th>:</th>
                    <th><?php echo $Place; ?></th>
                </tbody>
                <tbody>
                    <th>Birth</th>
                    <th>:</th>
                    <th><?php echo $Birth; ?></th>
                </tbody>
                <tbody>
                    <th>Gender</th>
                    <th>:</th>
                    <th><?php echo $Gender; ?></th>
                </tbody>
                <tbody>
                    <th>Address</th>
                    <th>:</th>
                    <th><?php echo $Address; ?></th>
                </tbody>
                <tbody>
                    <th>Picture</th>
                    <th>:</th>
                    <th><?php echo $Picture; ?></th>
                </tbody>
                <tbody>
                    <th>Religion</th>
                    <th>:</th>
                    <th><?php echo $Religion; ?></th>
                </tbody>
                <tbody>
                    <th>Status</th>
                    <th>:</th>
                    <th><?php echo $Status; ?></th>
                </tbody>
                <tbody>
                    <th>Job</th>
                    <th>:</th>
                    <th><?php echo $Job; ?></th>
                </tbody>
                <tbody>
                    <th>Citizenship</th>
                    <th>:</th>
                    <th><?php echo $Citizen; ?></th>
                </tbody>
                <tbody>
                    <th>Hobbies</th>
                    <th>:</th>
                    <th><?php if(isset($_GET['save'])){
                        if(!empty($_GET['hobbies'])){
                            foreach ($_GET['hobbies'] as $selected){
                                echo $selected." ,";
                            }
                        }
                    }
                    ?></th>
                </tbody>
            </tr>
        </table>
        <a href="formsignup.html"> Back to Update.</a>
    </body>
</html>