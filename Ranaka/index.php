<?php
  Include "Template_top.php";
 ?>
 <head>
   <meta property="og:title" content="Ranaka">
   <meta charset="utf-8">
   <meta name="description" content="Ranakaは皆様に「知っていて得をする」知識の提供を目指し、
   日々収集した知識や持ち合わせた専門知識を最大限わかりやすく提供します。">
   <meta property="og:site_name" content="Ranaka">
   <meta property="og:type" content="website">
   <meta property="og:description" content="Ranakaは皆様に「知っていて得をする」知識の提供を目指し、日々収集した知識や持ち合わせた専門知識を最大限わかりやすく提供します。">
   <meta name="description" content="Ranakaは皆様に「知っていて得をする」知識の提供を目指し、日々収集した知識や持ち合わせた専門知識を最大限わかりやすく提供します。">
<style>
a[yohaku]{
  color: blue;
  font-family: serif;
  padding-right: 1em;
}
a[yohaku]:hover{
  color: purple;
}
</style>
<script data-ad-client="ca-pub-2895476527525731" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
 </head>
    <div class="site">
      <div class="left-columns">
        <div class="new_kiji_img1">
          <h1>・・・▼　最新記事　▼・・・</h1>
          <a href="kiji_page/shumi/shumi_5.php"><img src="shumi/img_5.png" width="100%" height="400px"></a>
          <h1 saishin>初心者でもおすすめしたいゲーム</h1>
        </div>
        <div class="saishin">
          <p saishin>突然ですが私は、ゲームが好きで良くいろんなジャンルのゲームをします。<br>
休日は平均6時間プレイしたり、、<br>
とにかく暇を見つけてはゲームをします！！！！<br><br>

今回はそんな私が今までプレイしたゲームで特に面白くて、ゲーム初心者でも名前は聞いたことある有名なタイトルのゲームを紹介します</p>
        </div>
          <div class="new_kiji_list">
            <h1 new_kiji_list>新着記事</h1>
        </div>
        <div class="kiji_list">
          <table>
            <thead>
            </thead>
            <tbody>
              <?php
              define('MAX','6');

              $open_kiji = fopen('kiji_data/kiji_list.txt','r');
              $get_kiji = fgets($open_kiji);
              $kiji_list = array($get_kiji);
              //記事のデータを配列に格納
              while ($get_kiji != "") {
                $get_kiji = fgets($open_kiji);
                array_push($kiji_list,$get_kiji);
              }
              fclose($open_kiji);

              $open_url = fopen('kiji_data/url.txt','r');
              $get_url = fgets($open_url);
              $kiji_url = array($get_url);
              while ($get_url != "") {
                $get_url = fgets($open_url);
                array_push($kiji_url,$get_url);
              }
              fclose($open_url);

              $open_img = fopen('kiji_data/img.txt','r');
              $get_img = fgets($open_img);
              $kiji_img = array($get_img);

              while($get_img){
                $get_img = fgets($open_img);
                array_push($kiji_img,$get_img);
              }
              fclose($open_img);
              $total_kiji = count($kiji_list);//記事の総数を取得
              $max_page = ceil($total_kiji / MAX); // トータルページ数※ceilは小数点を切り捨てる関数

              if(!$_GET['page_id']){ // $_GET['page_id'] はURLに渡された現在のページ数
                  $now = 1; // 設定されてない場合は1ページ目にする
              }else{
                  $now = $_GET['page_id'];
              }

              $start_no = ($now - 1) * MAX; // 2ページ以降表示する際,配列の何番目から取得すればよいか
              $kijihyouji = 1;
              for($i = $start_no;$kiji_list[$i]!='';$i++){ // データがなくなるまでループ
                echo '
                <tr>
                  <th>
                    <a href="'.$kiji_url[$i].'" kiji><img src="'.$kiji_img[$i].'"kiji_list></a>
                  </th>
                  <th>
                    <h2>' . $kiji_list[$i] . '</h2>
                  </th>
                </tr> ';
                $kijihyouji++;
                if ($kijihyouji >6){
                  break;
                }
              }
               ?>
            </tbody>
          </table>
          <?php
          echo '<p style="text-align:center;">';
          for($a = 1; $a <= $max_page; $a++){ // 最大ページ数分リンクを作成
              if($a == $now){ // 現在表示中のページ数の場合はリンクを貼らない
                echo $now. ' ';
              }else{
                echo '<a href="/index.php?page_id=' . $a . '" yohaku>'. $a. '</a>';
              }
          }
          echo "</p>";
           ?>
        </div>
      </div>
<?php
Include "Template_bottom.php";
 ?>
