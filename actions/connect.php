<?php
/* Online Hosting
$con=mysqli_connect("sql100.epizy.com","epiz_32168067","XI5jf0KPVWSrfIL","epiz_32168067_votingsystem");
if(!$con){
    die(mysqli_error($con));
}
*/
$con=mysqli_connect("localhost","root","","votingsystem");
if(!$con){
    die(mysqli_error($con));
}

?>