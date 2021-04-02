<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../ranaka.css">
    <link rel="shortcut icon" href="../../icon.jpg">
    <title>Ranaka</title>
    <style>
    div.left-columns{
      padding-right: 2em;
    }
    img[title]{
      width: 100%;
    }
    h1[kiji]{
      text-align: center;
      margin-bottom: 3em;
    }
    h1[setumei]{
      background-color: rgb(120,65,79);
      color: white;
    }
    p[yohaku]{
      margin-top: 4em;
    }
    div.profile{
      text-align: center;
    }
    img[profile]{
      width: 30%;
    }
    div.profile_info{
      border: 1px solid black;
      padding: 1em;
    }
    h2[profile]{
      background-color: rgb(120,65,79);
      border-radius: 10px;
      margin-top: 4em;
      color: white;
      text-align: center;
    }
    p[profile]{
      font-size: 150%;
      margin-bottom: 0;
      text-align: center;
    }
    </style>
    <script type="text/javascript" src="../../ranaka.js"></script>
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
        <img src="../../life/img_1.png" title>
        <div class="mondai01" id="mondai01">
          <h1 kiji>【高校生必見！】経済学と経営学の違い</h1>
          <p kiji>こんにちは　浅野です。</p>
          <p kiji>自分が進学する学部を決める時、こんなことを思ったりしませんでしたか？</p>
          <h2>「経済学部や経営学部ってどんなことを勉強する学部なんだろう？」</h2>
          <p>今回はそれぞれの学部の特徴や勉強する内容を軽くご紹介したいと思います。</p>
          <h1 setumei>経済学と経営学の違い</h1>
          <p>まず最初に、経済学からご紹介します。経済学を一言で言うと、「経済の仕組みや、様々な経済活動の仕組みを研究する学問」です。世界の経済や日本の経済と言ったマクロなものから、家計などのミクロなもの
          まで研究します。よくテレビなんかで見かけるGDPや〇〇産業がどうなっているかなども扱っています。</p>
          <p>一方経営学は、企業やその他組織の経営戦略やマーケティング、金融などと言った「いかに上手く組織を運営(経営)していくか」を扱う学問です。経営をするのは実は企業だけではなく、部活やサークルなんかの
          運営も含まれているんです。</p>
          <p>ちなみに経済学と経営学は似た分野ではあるので、学部で勉強することがかなりかぶっていたりします。先程経営学のところで書いていた金融やマーケティングなどは、経済学部でも学んだりします。</p>
          <p yohaku>いかがだったでしょうか。今回は経済学と経営学の違いをざっくりとご紹介しました。これから経済学や経営学を学んでいきたい方に向けて、次回以降の記事で解説をしていきます。ぜひそちらも
            ご覧ください。</p>
        </div>
        <div class="profile">
          <h2 profile>執筆者</h2>
          <div class="profile_info">
            <img src="../../profile_img/img_1.png" profile>
            <p profile>浅野　龍太郎</p>
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
        <a href="../../disclaimre.php" link>免責事項</a>
      </div>
      <div class="com_name">
        <h1>Ranaka</h1>
      </div>
    </div>
  </body>
</html>
