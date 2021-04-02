<?php
Include "Template_top.php";
 ?>
    <div class="site">
    <div class="left-columns">
<h2 class="info">お問い合わせフォーム</h2>
      <form action="info_post.php"class="info" method="post">
    <div class="item">
        <label class="label">会社名・学校名</label><br>
        <input class="inputs" type="text" name="com_name" required autofocus>
    </div>

    <div class="item">
        <label class="label">氏名</label><br>
        <input class="inputs" type="text" name="name" required>
    </div>

    <div class="item">
        <label class="label">メールアドレス</label><br>
        <input class="inputs" type="email" name="email" required>
    </div>
    <div class="item">
        <label class="label">お問い合わせ内容</label><br>
        <textarea class="inputs"name="message" required></textarea>
    </div>
    <div class="btn-area">
        <input type="reset" value="リセット"info><input type="submit" value="送信する"info sub>
    </div>
      </form>

    </div>
<?php
Include "Template_bottom.php";
 ?>
