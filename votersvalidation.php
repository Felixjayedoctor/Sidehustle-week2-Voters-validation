<?php 
$voterage = $_POST['voterage'];
$pvc = $_POST['pvc'];
$ward = $_POST['ward'];
$error = "";
$success = "";

if (isset($_POST['submit'])) {
    if($voterage == '>18') {
        if ($pvc == 'yes') {
            if($ward == '020') {
                $error = "";
                $success = "Voter eligible to vote!!!";
            }
            else{
                $error = "age must be above 18";
                $success = " ";
            }
            else{
                $error = "pvc is required to vote";
                $success = " ";
            }
            else{
                $error = "only ward 020 eligible";
                $success = " ";
            }
        }
    }
}
//echo "Hello world <b>great day to you all</b>";
//$name = "Doctor Jayeola Felix"
//echo $name;//
?>


<php />


