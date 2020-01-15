<?php
  session_start();

  $mysqli = new mysqli('localhost','u779679936_jtu0','yGW442MtTygp','u779679936_jtut');
  
  

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $avatar_path = $mysqli->real_escape_string('../user_avatar/'.$_FILES['avatar']['name']);
    $edufiles_path = $mysqli->real_escape_string('../edu_files/'.$_FILES['edufiles']['name']);
    $username = $mysqli->real_escape_string($_POST['username']);
    $fname = $mysqli->real_escape_string($_POST['fname']);
    $lname = $mysqli->real_escape_string($_POST['lname']);
    $email = $mysqli->real_escape_string($_POST['email']);
    $date = $mysqli->real_escape_string($_POST['date']);
    $gender = $mysqli->real_escape_string($_POST['gender']);
    $no = $mysqli->real_escape_string($_POST['pno']);
    $edu = $mysqli->real_escape_string($_POST['edu']);
    $sub1 = $mysqli->real_escape_string($_POST['sub1']);
    $sub2 = $mysqli->real_escape_string($_POST['sub2']);
    $address =  $mysqli->real_escape_string($_POST['address'].', '.$_POST['city'].', '.$_POST['zipcode']);
    $hash = md5( rand(0,1000) );

    //make sure Education Files type is image
    if (preg_match("!image!", $_FILES['edufiles']['type'])){

      //if avatar is not set
      if (preg_match("!image!", $_FILES['avatar']['type'])){
        //set avatar to default
        if((copy($_FILES['avatar']['tmp_name'], $avatar_path)) and copy($_FILES['edufiles']['tmp_name'], $edufiles_path)){
            
            $avatar = $mysqli->real_escape_string($_FILES['avatar']['name']);
            $edufiles = $mysqli->real_escape_string($_FILES['edufiles']['name']);
            $sql = "INSERT INTO confim_tutor (dp, username, role, fname, lname, email, birthday, gender, no, address, subject1, subject2, edu, eduimg, hash)" . "VALUES ('$avatar', '$username', 'teacher', '$fname', '$lname', '$email', 'date', '$gender', '$no', '$address', '$sub1', '$sub2', '$edu', '$edufiles', '$hash')";
            if ($mysqli->query($sql) == true){
              echo '<script type="text/javascript">alert("Success");';
                echo 'window.location.href="../login";</script>';
            }else{
              echo mysqli_error($con);
              echo "<script type='text/javascript'>alert('Database Error!');</script>";
            }

        }
        else{
          echo "<script type='text/javascript'>alert('Image For Avatar Is Not Image!, Please Upload an Image Type');</script>";  
        }
        
      }else{
        if(copy($_FILES['edufiles']['tmp_name'], $edufiles_path)){

          $avatar = $mysqli->real_escape_string('user.png');
          $edufiles = $mysqli->real_escape_string($_FILES['edufiles']['name']);
          $sql = "INSERT INTO confim_tutor (dp, username, role, fname, lname, email, birthday, gender, no, address, subject1, subject2, edu, eduimg, hash)" . "VALUES ('$avatar', '$username', 'teacher', '$fname', '$lname', '$email', 'date', '$gender', '$no', '$address', '$sub1', '$sub2', '$edu', '$edufiles', '$hash')";

          if ($mysqli->query($sql) == true){
              echo '<script type="text/javascript">alert("Success");';
                echo 'window.location.href="../login";</script>';
          }else{
              echo "<script type='text/javascript'>alert('Database Error!');</script>";
          }

        }else{
            echo "<script type='text/javascript'>alert('File You Upload in Education Field is not Image Type, Please Upload It In Image Type');</script>";
        } 
      }
    }else{
      echo "<script type='text/javascript'>alert('File You Upload in Education Field is not Image Type, Please Upload It In Image Type');</script>";
    }
  }
?>