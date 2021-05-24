<?php
    include_once "db.php";

    if(isset($_POST["formSubmit"])){
        $username=$_POST["user__name"];
        $useremail=$_POST["user__email"];
        $userpassword=$_POST["user__password"];
        $userphone=$_POST["user__phone"];

         $res = mysqli_query($db,"SELECT * FROM proje WHERE user__name='$username'");  
         $res1=mysqli_num_rows($res);
         if($res1==1){
             
             echo "Başarısız";
         }else{
            ?>
             <script>
                 window.onload=function(){
                     alert("Succesfull");
                 }
             </script>
             <?php
            $insert = mysqli_query($db,"INSERT INTO proje (user__name,user__email,user__password,user__phone) VALUES('$username','$useremail','$userpassword','$userphone')");
         }
         
  
    }


?>