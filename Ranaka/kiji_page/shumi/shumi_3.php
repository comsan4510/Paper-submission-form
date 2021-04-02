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
        <img src="../../shumi/img_3.png" title>
        <div class="mondai01" id="mondai01">
          <h1 kiji>将棋のプロ養成機関「奨励会」って知っていますか？</h1>
          <p kiji>こんにちは、浅野です。</p>
          <p kiji>将棋に興味がある方の中には、「プロ棋士ってどうすればなれるの？」と疑問に思う方もいるかと思います。将棋でプロ棋士になるにはいくつか方法があるんですが</p>
          <p kiji>今回はその登竜門と言われる新進棋士奨励会についてざっくりとご説明します。</p>
          <h1 setumei>奨励会とは</h1>
          <p>奨励会将棋のプロ養成機関で、プロ棋士になるための登竜門となっています。全国から将棋の才能ある人達が集まって競い合います。将棋を指すだけでなく、対局の際のマナーなんかも教わるみたいです。</p>
          <p>奨励会に所属しなくてもプロ棋士になる方法はあるのですが、より難しくなります。</p>
          <h1 setumei>奨励会の級位・段位</h1>
          <p>奨励会は6級〜三段までで構成されています。関東か関西のどちらかに所属して対局を行っていき、日本将棋連盟による規程の成績をあげると昇級できます。</p>
          <p>この級位・段位なんですが、6級でもアマチュアで言う三・四段相当の棋力があるらしいです。
            ここで切磋琢磨し、一番上の三段になればリーグ戦形式で対局していくことになります。</p>
          <h1 setumei>三段リーグ</h1>
          <p>三段より下の段位であれば、規程の勝数をあげれば昇級・昇段できるのですが、三段はリーグ戦で上位２名しか昇段できないようになっているんです。このリーグ戦は半年に一回決着がつき、年に二度行われます。
            なので、年間４名が昇段することになります。</p>
          <p>三段が昇段して四段になると、そこからはプロ棋士として各棋戦で活躍していくことになります。</p>
          <p yohaku>いかがだったでしょうか。今回は奨励会についてほんの一部取り上げました。</p>
          <p>もっと知りたいという方は是非色々と調べてみてください。</p>
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
