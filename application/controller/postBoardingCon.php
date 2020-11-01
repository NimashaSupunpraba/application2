<?php
    require_once ('../config/database.php');
    require_once ('../models/post_boarding.php');
    session_start();
    print_r($_POST['Aamount']);

?>

<?php

if(isset($_POST['submit']))
{
    $Hnumber=$_POST['Hnumber'];
    $lane=$_POST['lane'];
    $city=$_POST['city'];
    $district=$_POST['district'];
    //$location=$_POST['location'];
    $description=$_POST['description'];

    $image_name=$_FILES['BCimage']['name'];
    $image_type=$_FILES['BCimage']['type'];
    $image_size=$_FILES['BCimage']['size'];
    $temp_name=$_FILES['BCimage']['tmp_name'];

    $upload_to='../img/';

    move_uploaded_file($temp_name, $upload_to . $image_name);

    $individual=$_POST['individual'];
    $gender=$_POST['gender'];
    $Pcount=$_POST['Pcount'];
    $CPperson=$_POST['CPperson'];
    $Keymoney=$_POST['Keymoney'];
    $Lifespan=$_POST['Lifespan'];
    //$Aamount=$_SESSION['result'];
    $Aamount=$_POST['Aamount'];

    //echo $Hnumber;

    boarding::postBoarding($Hnumber,$lane,$city,$district,$description,$image_name,$individual,$gender,$Pcount,$CPperson,$Keymoney,$Lifespan,$Aamount,$connection);

print_r($_POST);

print_r($_FILES);

}
?>