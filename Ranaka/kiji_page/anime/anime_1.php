<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../ranaka.css">
    <link rel="shortcut icon" href="../../icon.jpg">
    <title>Ranaka</title>
    <style>

    img[title]{
      width: 100%;
    }
    h1[kiji]{
      text-align: center;
      margin-bottom: 3em;
    }
    [quiz]{
      text-align: center;
      border:1px solid blue;
      border-radius: 10px;
      background-color: white;
      box-shadow: rgb(128,128,128) 5px 5px;
      cursor: pointer;
      font-size: 200%;
    }
    div.mondai01{
      margin-top: 4em;
    }
    h2.seihu{
      border-radius: 10px;
      text-align: center;
    }
    h2[mondai]{
      margin-top: 4em;
    }
    </style>
    <script type="text/javascript" src="../../ranaka.js"></script>
    <script type="text/javascript">
    mon1 = 0;
    mon2 = 0;
    mon3 = 0;
    function myquiz(e){
      var quiz01 = document.getElementById('quiz01');
      var quiz02 = document.getElementById('quiz02');
      var quiz03 = document.getElementById('quiz03');
      var quiz04 = document.getElementById('quiz04');
      var quiz05 = document.getElementById('quiz05');
      var quiz06 = document.getElementById('quiz06');
      var quiz07 = document.getElementById('quiz07');
      var quiz08 = document.getElementById('quiz08');
      var quiz09 = document.getElementById('quiz09');
      //問題1--------------------------------------------------------------------
      if (e.target == quiz03 && mon1 < 1) {
        var deck = document.getElementById("deck");
        quiz03.style.backgroundColor = "#66ffff";
        mondai01_seihu.textContent = "正解";
        mondai01_seihu.style.backgroundColor = "#66ffff";
        mondai01_kaisetu.textContent = "答：C";
        mondai01_kaisetu02.textContent = "答えはcのサイヤ人です。孫悟空は地球人ではなくサイヤ人という民族です。";
        mon1 += 1;
      }
      if (e.target == quiz01 && mon1 < 1 || e.target == quiz02 && mon1 < 1) {
        var deck = document.getElementById("deck");
        e.target.style.backgroundColor = "#cc0033";
        mondai01_seihu.textContent = "不正解";
        mondai01_seihu.style.backgroundColor = "#cc0033";
        mondai01_kaisetu.textContent = "答：C";
        mondai01_kaisetu02.textContent = "答えはcのサイヤ人です。孫悟空は地球人ではなくサイヤ人という民族です。";
        mon1 += 1;
      }
    //問題2--------------------------------------------------------------------
    if (e.target == quiz04 && mon2 < 1) {
      var deck = document.getElementById("deck");
      quiz04.style.backgroundColor = "#66ffff";
      mondai02_seihu.textContent = "正解";
      mondai02_seihu.style.backgroundColor = "#66ffff";
      mondai02_kaisetu.textContent = "答：A";
      mondai02_kaisetu02.textContent = "答えはAの1986年です。私たちが生まれるずっと前から放送されていて最近も映画のブロリーが公開されていました。このように昔も今も愛されている人気作なのです！";
      mon2 += 1;
    }
    if (e.target == quiz05 && mon2 < 1 || e.target == quiz06 && mon2 < 1) {
      var deck = document.getElementById("deck");
      e.target.style.backgroundColor = "#cc0033";
      mondai02_seihu.textContent = "不正解";
      mondai02_seihu.style.backgroundColor = "#cc0033";
      mondai02_kaisetu.textContent = "答：A";
      mondai02_kaisetu02.textContent = "答えはAの1986年です。私たちが生まれるずっと前から放送されていて最近も映画のブロリーが公開されていました。このように昔も今も愛されている人気作なのです！";
      mon2 += 1;
    }
    //問題3--------------------------------------------------------------------
    if (e.target == quiz09 && mon3 < 1) {
      var deck = document.getElementById("deck");
      quiz09.style.backgroundColor = "#66ffff";
      mondai03_seihu.textContent = "正解";
      mondai03_seihu.style.backgroundColor = "#66ffff";
      mondai03_kaisetu.textContent = "答：C";
      mondai03_kaisetu02.textContent = "答えはcの121センチでした。これは私も調べて意外と身長が高くてみてびっくりしました！";
      mon3 += 1;
    }
    if (e.target == quiz07 && mon3 < 1 || e.target == quiz08 && mon3 < 1) {
      var deck = document.getElementById("deck");
      e.target.style.backgroundColor = "#cc0033";
      mondai03_seihu.textContent = "不正解";
      mondai03_seihu.style.backgroundColor = "#cc0033";
      mondai03_kaisetu.textContent = "答：C";
      mondai03_kaisetu02.textContent = "答えはcの121センチでした。これは私も調べて意外と身長が高くてみてびっくりしました！";
      mon3 += 1;
    }
    }
    </script>
  </head>
  <body>
    <div class="top">
      <div class="top_button">
        <a href="../../index.php"><h1 top>Ranaka</h1></a>

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
        <img src="../../anime/img_1.png" title>
        <div class="mondai01" id="mondai01">
          <h1 kiji>ドラゴンボールクイズ</h1>
          <p kiji>こんにちは　猪俣です。</p>
          <p kiji>私が好きなアニメはドラゴンボールです。</p>
          <p kiji>ドラゴンボールはとても有名なアニメだと思います。みたことはなくても聞いたことがあるという人がほとんどだと思います。</p>
          <p>そんなドラゴンボールについていくつかクイズを出していこうと思います。</p>
          <h2 mondai>①主人公である孫悟空はなに人でしょうか？</h3>
          <div id="deck" class="deck">
            <p id="quiz01" quiz>A.	ナメック星人</p>
            <p id="quiz02" quiz>B.	地球人</p>
            <p id="quiz03" quiz>C.	サイヤ人</p>
            <h2 class="seihu" id="mondai01_seihu"></h2>
            <h1 id="mondai01_kaisetu"></h1>
            <p id="mondai01_kaisetu02"></p>

            <h2 mondai>②ドラゴンボールのアニメの放送が開始された年は何年でしょう？</h2>
            <p id="quiz04" quiz>A.	1986年</p>
            <p id="quiz05" quiz>B.	1990年</p>
            <p id="quiz06" quiz>C.	1999年</p>
            <h2 class="seihu" id=mondai02_seihu></h2>
            <h1 id="mondai02_kaisetu"></h1>
            <p id="mondai02_kaisetu02"></p>

            <h2 mondai>③ドラゴンボールに登場している豚のウーロンというキャラクターがいますがウーロンの身長は何センチでしょう？</h2>
            <p id="quiz07" quiz>A.	101センチ</p>
            <p id="quiz08" quiz>B.	111センチ</p>
            <p id="quiz09" quiz>C.	121センチ</p>
            <h2 class="seihu" id=mondai03_seihu></h2>
            <h1 id="mondai03_kaisetu"></h1>
            <p id="mondai03_kaisetu02"></p>
          </div>
        </div>
        <div class="profile">
          <h2 profile>執筆者</h2>
          <div class="profile_info">
            <img src="../../profile_img/img_4.png" profile>
            <p profile>猪俣一馬</p>
          </div>
        </div>
      </div>
      <div class="right-columns">
        <div class="blocker">
          <a href="../../book_recommend.php"><img src="../../books-1617327_1920.jpg" width="100%" height="100%"></a>
        </div>
        <h1 kiji_rank>人気記事</h1>
        <div class="kiji_rank">
            <div class="kiji_rank_des" id="kiji_rank_01">
              <div class="kiji_rank_des_img">
                <img id="kiji_img01" kiji_rank>
              </div>
              <div class="kiji_rank_des_title">
                <p id="kiji_rank01"></p>
              </div>
            </div>
            <div class="kiji_rank_des" id="kiji_rank_02">
              <div class="kiji_rank_des_img">
                <img id="kiji_img02" kiji_rank>
              </div>
              <div class="kiji_rank_des_title">
                <p id="kiji_rank02"></p>
              </div>
            </div>
            <div class="kiji_rank_des" id="kiji_rank_03">
              <div class="kiji_rank_des_img">
                <img id="kiji_img03" kiji_rank>
              </div>
              <div class="kiji_rank_des_title">
                <p id="kiji_rank03"></p>
              </div>
            </div>
            <div class="kiji_rank_des" id="kiji_rank_04">
            <div class="kiji_rank_des_img">
              <img id="kiji_img04" kiji_rank>
            </div>
            <div class="kiji_rank_des_title">
              <p id="kiji_rank04"></p>
            </div>
          </div>
            <div class="kiji_rank_des" id="kiji_rank_05">
              <div class="kiji_rank_des_img">
                <img id="kiji_img05" kiji_rank>
              </div>
              <div class="kiji_rank_des_title">
                <p id="kiji_rank05"></p>
              </div>
            </div>
        </div>
        <div class="block2">
          <img src="../../icon.jpg" width="100%">
        </div>
       <form class="" action="../../info.php">
          <button type="submit" name="button" info>お問い合わせ</button>
        </form>
        <form class="" action="../../member.php">
          <button type="submit" name="button" info>メンバー紹介</button>
        </form>
        <form class="" action="../../saiyou.php">
          <button type="submit" name="button" info>採用情報</button>
        </form>
      </div>
    </div>
    <div class="bottom-columns">
      <div class="link">
        <a href="https://twitter.com/Ranaka29911508"><img src="../../twitter-icon.png" link></a>
        <a href="https://www.facebook.com/Ranaka-102413724866870"><img src="../../facebook-icon.png" link></a>
        <a href="https://www.instagram.com/ranaka4510/"><img src="../../instagram-icon.jpg" link></a>
      </div>
      <div class="link"link>
        <a href="../../terms_of_service.php" link>利用規約</a>
        <a href="../../privacy.php" link>プライバシーポリシー</a>
        <a href="../../disclaimer.php" link>免責事項</a>
      </div>
      <div class="com_name">
        <h1>Ranaka</h1>
      </div>
    </div>
  </body>
</html>
