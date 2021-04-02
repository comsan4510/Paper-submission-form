<?php
session_start();
if (isset($_POST["login"])) {
 // 認証成功
 if (($_POST["id"] == "div" && $_POST["password"] == "4510") || ($_POST["id"] == "div" && $_POST["password"] == "4510") ||
  ($_POST["id"] == "comsan" && $_POST["password"] == "4510471")) {
   // セッションIDを新規に発行する
   session_regenerate_id(TRUE);
   $_SESSION["USERID"] = $_POST["id"];
   header("Location: kanri_top.php");
   exit;
 }
 else {
   $errorMessage = "ユーザIDあるいはパスワードに誤りがあります。";
 }
}
Include "Template_top.php";

 ?>
 <div class="site">
   <div class="left-columns">
     <?php
     echo $errorMessage;
      ?>
     <form action="<?php print($_SERVER['PHP_SELF']) ?>" method="post">
       <h2>ID<br><input type="id" name="id"></h2>
       <h2 style="margin-top:3em;">Pass<br><input type="password" name="password"></h2>
       <input type="submit" name="login" value="ログイン">
     </form>
   </div>

 <?php
 Include "Template_bottom.php";
  ?>
