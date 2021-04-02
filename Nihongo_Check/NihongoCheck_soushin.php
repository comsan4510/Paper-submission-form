<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="bootstrap.min.css">
    <script type="text/javascript" charset="UTF-8"></script>
    <title>日本語チェックシステム</title>
  </head>
  <body style="margin:4em;">
    <?php
      date_default_timezone_set('Asia/Tokyo');
      $soushin_datetime = date('Y-m-d H:i:s');
      mb_language("Japanese");
      mb_internal_encoding("UTF-8");
      $header = $_POST['mail'];


      if (!preg_match ( '|^[0-9a-z_./?-]+@([0-9a-z-]+\.)+[0-9a-z-]+$|', $header) ||  $header=="") {
       echo '<h4 class="bg-danger text-center" style="padding:1em; color:white;">正しいメールアドレスを入力してください</h4><br/>';
     }else{

      $title = "日本語チェックシステム";//メールタイトル
      //メールヘッダーの設定------------------------------------------------
      $head  = "From: " . $header;
      $head .= "\n";
      $head .= "Content-Type: multipart/mixed;boundary=\"__BOUNDARY__\"\n";
      $head .= "Content-Transfer-Encoding: 7bit";

      //添付ファイルの前処理------------------------------------------------
      $fileTempName = $_FILES['file_a']['tmp_name'];
      $fileName = $_FILES['file_a']['name'];
      $isUploaded = move_uploaded_file($fileTempName, $fileName);
      $file = htmlspecialchars($fileName, ENT_QUOTES, 'UTF-8');

      //許可するMIMEタイプの設定--------------------------------------------- ※$_FILESから取得しているため、クライアント側から拡張子を変えて送信可能になってしまっている
      $cfg['ALLOW_MIME'] = array('application/vnd.openxmlformats-officedocument.wordprocessingml.document');
      if ($_FILES['file_a']['type']=="application/vnd.openxmlformats-officedocument.wordprocessingml.document" ||
      $_FILES['file_a']['type']=="application/msword") {

      //メール本文---------------------------------------------------------
      $body = "--__BOUNDARY__\n";
      $body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
      $body .= <<< EOD
      {$header}より下記の内容でファイルが送信されました

      ----------------------------------------------------

      【添付ファイル】{$file}　送信日時：{$soushin_datetime}

      ----------------------------------------------------

EOD;
      $body .= "--__BOUNDARY__\n";

      // ファイルを添付
      $body .= "Content-Type: application/octet-stream; name=\"{$file}\"\n";
      $body .= "Content-Disposition: attachment; filename=\"{$file}\"\n";
      $body .= "Content-Transfer-Encoding: base64\n";
      $body .= "\n";
      $body .= chunk_split(base64_encode(file_get_contents($file)));
      $body .= "--__BOUNDARY__";
      //メール送信-----------------------------------------------------------
      if(mb_send_mail("asachancomsan@gmail.com", $title, $body,$head)){
        echo "<h4 class='text-center'>メールを送信しました</h4>";
      } else {
        echo "<h4 class='text-center'>メールの送信に失敗しました</h4>";
      };
    }else{
      echo "<h4 class='text-center' style='margin-bottom:2em;'>メールの送信に失敗しました</h4>";
      echo "<h4 class='text-center'>添付できるのはwordファイルのみです</h4>";
    }
  }
    ?>
    <div class="text-center">
      <a href="NihongoCheck_form.php" class="btn btn-info btn-small" style="margin-top:2em;">入力画面に戻る</a>
    </div>
  </body>
</html>
