<?php
session_start();
if(isset($_POST['submit'])){
  $userAns=strtolower(strip_tags($_POST['answer']));
  
  
    if(password_verify($userAns, $_SESSION['currentAns'])){
      $_SESSION['newQuesFlag']=1;
      echo '<script>alert("correct");document.location="../question.php";</script>';
 //new ques will be fetched
    }
    else{
      header('location: ../question.php?msg="wrong ans"');
    }
}
else{
  
    header('location: ../question.php?msg="not submitted"');
}
?>