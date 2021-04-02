<!DOCTYPE html>
<?php
  $images = array();
  $num = 1;
  $num_list = 6;

  if ($handle = opendir('./book_img')) {
    while ($entry = readdir($handle)) {
      if ($entry != "." && $entry != ".." && $entry !=".DS_Store") {
        $images[] = $entry;
      }
    }
  }
 ?>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="ranaka.css">
    <link rel="shortcut icon" href="icon.jpg">
    <title>Ranaka</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="jquery.quicksearch.js" type="text/javascript"></script>
    <script type="text/javascript" src="ranaka.js"></script>
    <style>
      h1[title]{
        text-align: center;
      }
      img[title]{
        width: 100%;
      }
      div.block{
        margin-top: 4em;
        text-align: center;
        display: inline-block
      }
      div.center{
        text-align: center;
        width: 30%;
        display: inline-block;
      }
      div.maehe{
        display: inline-block;
        width: 20%;
        float: left;
      }
      div.tugihe{
        display: block;
        width: 20%;
        float: right;
      }
      div.book_explanation{
        margin-top: 4em;
        display: inline-block;
        border-style: solid;
        border-width: thin;
        width: 60%;
      }
      div.hon{
        margin-top: 10em;
      }
      img.hon{
        width: 20%;
        padding: 1.5em;
      }
      img.hon:hover{
        box-shadow: 0px 0px 10px black;
      }
      a[yohaku]{
        color: black;
        font-family: serif;
        padding-left: 1.5em;
        padding-right: 1.5em;
      }
      a[yohaku]:hover{
        color: blue;
      }
    </style>
  </head>
  <body>
    <div class="top">
      <div class="top_button">
        <a href="index.php"><h1 top>Ranaka</h1></a>

      </div>
    </div>
    <div class="top_tab">
      <div class="top_tab02">
        <button type="submit" name="button" top_tab id="anime">マンガ・アニメ</button>
        <button type="submit" name="button" top_tab id="life">ライフ</button>
        <button type="submit" name="button" top_tab id="computer">コンピュータ・ゲーム</button>
        <button type="submit" name="button" top_tab id="jiji">時事ニュース</button>
        <button type="submit" name="button" top_tab id="shumi">趣味</button>
      </div>
    </div>
    <div class="site">
      <div class="left-columns">
        <h1 title>今日の<br>おすすめ本はこちら！</h1>
        <div class="block">
          <div class="maehe">
            <h2>前へ</h2>
            <a href="book_recommend.php?page=
            <?php
            if ($_GET['page']> 0) {
              echo $_GET['page']-1;
            }else {
              echo "1";
            }
              ?>
             "><img src="sozai_cman_jp_20200622144340.png" width="100%"></a>
          </div>
          <div class="center">
              <?php
                if (count($images)>0) {
                  $images = array_chunk($images,$num);
                  $page = 0;
                  if (isset($_GET['page']) && is_numeric($_GET['page'])) {
                    $page = intval($_GET['page']) - 1;
                    if (!isset($images[$page])) {
                      $page = 0;
                    }
                  }
                  foreach ($images[$page] as $img) {
                    echo '<img src="./book_img/' . $img .'" title>';
                  }?>
          </div>
          <div class="tugihe">
            <h2>次へ</h2>
            <a href="book_recommend.php?page=
            <?php
            if ($_GET['page']< count($images)) {
              echo $_GET['page']+1;
            }else {
              echo "1";
            }
              ?>
              "><img src="sozai_cman_jp_20200622144432.png" width="100%"></a>
          </div>
          <div class="book_explanation">
            <?php
              $book_rec = fopen('./book_rec/book_rec' . $page . ".txt","r");
              while ($book_recommend = fgets($book_rec)) {
                echo "<p>" . $book_recommend . "<br>";
              }echo "</p>";
             ?>
          </div>
          <div class="hon">
            <?php
            for ($i=1; $i < count($images)+1; $i++) {
              foreach ($images[$i-1] as $book_img) {
                echo '<a href="book_recommend.php?page=' . $i . '"><img src="./book_img/IMG_' . $i .'.jpg" title class="hon"></a>&nbsp;';
              }
            }
             ?>
          </div>
          <?php
              echo "<p>";
              for ($i=1; $i < count($images)+1; $i++) {
                echo '<a href="book_recommend.php?page=' . $i . '" yohaku>' . $i . '</a>&nbsp;';
              }
              echo "</p>";
            }else {
              echo "<p>画像はまだありません</p>";
            }
           ?>
        </div>
      </div>
<?php
Include "Template_bottom.php";
 ?>
