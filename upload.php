<?php
$target_dir="C:\Users\dell\OneDrive\Pictures\logooooo.png",//importing the directory path
$target_file=$target_dir.basename($_FILES["filetoupload"]["name"])initialising the target file
$look=1;
$imagefiletype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(issue($_POST["submit"])){
    $check=getimagesize($_FILES["filetoupload"]["tmp_name"]);//checks whether the file type is valid or not
    if(check!==false){
        echo "File is an image";//if it valid the ir prints this statement
    }
    else{
        echo "File is not an image";//it its invalid then it prints this statement
    }
}
?>