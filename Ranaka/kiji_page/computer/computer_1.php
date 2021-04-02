<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/ranaka.css">
    <link rel="shortcut icon" href="/icon.jpg">
    <title>Ranaka</title>
    <style>
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

    </style>
    <script type="text/javascript" src="/ranaka.js"></script>
  </head>
  <body>
    <div class="top">
      <div class="top_button">
        <a href="/index.php"><h1 top>Ranaka</h1></a>
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
        <img src="/computer/img_1.png" title>
        <div class="mondai01" id="mondai01">
          <h1 kiji>Webサイトってどうやって作るの？</h1>
          <p kiji>こんにちは　浅野です。</p>
          <p kiji>皆さんは自分でオリジナルのWebサイトを作りたいと思ったことはありませんか？</p>
          <p kiji>今回はそんなWebサイトを作る時に使う、HTMLのご紹介です。</p>
          <h1 setumei>HTMLとは？</h1>
          <p>HTML（Hyper Text Markup Language）とは、Webページを作成するために作られたプログラミング言語です。現在では、大体のWebサイトがこのHTMLを使って作られています。</p>
          <p>あなたが見ているこのページにもHTMLが使われているので、これを覚えるとWebサイトを自作するレベルにかなり近付くと思います。</p>
          <h1 setumei>HTMLの簡単な使い方</h1>
          <p>HTMLを使ってコードを作成していくのは、本来ならプログラミング用のエディタを使うのが理想的なんですが、今回は何もダウンロードしなくてもHTMLを使うことができる方法をご紹介します。</p>
          <p>余裕があれば、Atom (※ハイパーリンクをつけておく)などのエディタを使ってみるのもいいかもしれません。</p>
          <p yohaku>まず下準備として、ファイル拡張子を表示できるようにしましょう。下の画像のようにエクスプローラーを開いてください。</p>
          <img src="/hosoku/hosoku1.png" width="100%">
          <p yohaku>次に、表示と書いてあるところをクリックして右側のファイル拡張子にチェックを入れてください。</p>
          <img src="/hosoku/hosoku2.png" width="100%">
          <p>下準備はこれで終わりです。では実際にHTMLを使ってみましょう</p>
          <p>デスクトップ画面でマウスを右クリックして「新規作成」→「新しいテキストドキュメント」を開いてください。</p>
          <p>その後、以下のコードを入力してみてください。</p>
          <img src="/hosoku/hosoku3.png" width="100%">
          <p>この時、日本語部分以外全て半角で入力することに注意してください。</p>
          <p>入力できたら、「ファイル」→「名前をつけて保存」名前はなんでもいいですが、末尾に.htmlとつけてください。</p>
          <p>あとはそれをダブルクリックして開いてみてください。</p>
          <p>するとブラウザが開いてhello worldと表示されましたね。これでコードを作って表示させることができました</p>
          <p yohaku>それでは上のコードについて説明します。</p>
          <p>まず、一番最初の行に書かれている	&lt!DOCTYPE html>ですが、最初のうちは「今からHTMLを使ってコードを作成します」というおまじないだと思ってください。</p>
          <p>続いて2行目の&lthtml>です。</p>
          <p yohaku>コード全体をよく見たら、似たような&lt/html>があると思います。</p>
          <p>このような<〇〇></〇〇>でかこまれたものをタグと言います。なのでこの場合「htmlタグ」ということになります。</p>
          <p>HTMLでは、このタグを使って命令を書いていきます。初心者のうちにいじるのはほとんどbodyタグの中だけなので、今回は上のheadタグの説明は省きたいと思います。</p>
          <p yohaku>さて、このbodyタグの中には現在pタグがあると思います。このタグでかこまれた部分を画面に表示させることができます。hello worldを例えば「こんにちは」などとすると、画面にこんにちはが表示されます。</p>
          <p>皆さんもこのpタグの文字を変えて表示させてみてください。</p>
          <p yohaku>今回は以上になります。この記事はあくまで紹介なので、もっと詳しく勉強したい方は、HTMLについて調べてみるといいかと思います。</p>
          <p>今後、HTMLについて今回の記事よりわかりやすく解説した無料の講座も行う予定ですので、そちらも是非チェックしてみてください。</p>
        </div>
        <div class="profile">
          <h2 profile>執筆者</h2>
          <div class="profile_info">
            <img src="/profile_img/img_1.png" profile>
            <p profile>浅野　龍太郎</p>
          </div>
        </div>
      </div>
      <?php
     Include "../../Template_bottom.php";
       ?>
