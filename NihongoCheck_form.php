<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="bootstrap.min.css">
    <script type="text/javascript" charset="UTF-8"></script>
    <title>日本語チェックシステム</title>
  </head>
  <body style="padding:4em;">
    <h2>論文送信フォーム</h2>
    <div class="panel panel-default">
      <div class="panel-body">
        <form action="./NihongoCheck_soushin.php" method="post" enctype="multipart/form-data">
          <div class="form-group" style="margin-top:1.5em;">
            <label>メールアドレス</label>
            <input type="email" name="mail" class="form-control" placeholder="メールアドレス" id="mail" required autofocus>
          </div>
          <div class="form-group" style="margin-top:3em;">
            <label>論文アップロード</label>
            <input type="file" name="file_a" id="file" required>
          </div>
          <div class="text-center">
            <input class="btn btn-default" type="submit" name="send" value="送信">
            <input type="reset" value="リセット" class="btn btn-success">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
