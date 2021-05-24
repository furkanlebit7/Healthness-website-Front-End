<?php
    include_once "db.php";



    //LOGIN
    if(isset($_POST["login"])){
        $username=$_POST["username"];
        $userpassword=$_POST["userpassword"];

       $query = mysqli_query($db,"SELECT * FROM proje WHERE user__name='$username'");
       $veri = mysqli_fetch_assoc($query);

       if($veri==null){
           Header("Location:userLogin.php?durum=no");
       }else{
           if($veri["user__password"]==$userpassword){
               session_start();
               $_SESSION["user"]=$username;
               Header("Location:index.php");
           }else{
               Header("Location:userLogin.php?durum=no");
           }
       }
    }


    //SATIN ALMA
      if(isset($_POST["payment"])){
        $customer=$_POST["paymentName"];
        $cardNumber=$_POST["cardNumber"];
        $dietician=$_POST["dieticianId"];
        $cvv=$_POST["cvv"];
        if($customer==""){
            Header("Location:payment.php?dieticianId=$dietician&islem=noName");
        }
        elseif(strlen($cvv)<=2||strlen($cvv)>=4){
            Header("Location:payment.php?dieticianId=$dietician&islem=noCVV");
        }
        elseif(!strlen($cardNumber)==16){
            Header("Location:payment.php?dieticianId=$dietician&islem=noCard");
        }else{
             Header("Location:payment.php?dieticianId=$dietician&islem=ok");
        }

    }

?>