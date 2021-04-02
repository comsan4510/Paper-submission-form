//ページロード時に行われる処理
window.onload = function (){
  document.getElementById("kiji_img01").src = "/life/img_1.png";
  document.getElementById("kiji_img02").src = "/computer/img_1.png";
  document.getElementById("kiji_img03").src = "/shumi/img_1.png";
  document.getElementById("kiji_img04").src = "/shumi/img_2.png";
  document.getElementById("kiji_img05").src = "/shumi/img_3.png";
  kiji_rank01.textContent = "【高校生必見！】経済学と経営学の違い";
  kiji_rank02.textContent = "ウェブサイトってどうやって作るの？";
  kiji_rank03.textContent = "意外と知らないバレーボールのルール";
  kiji_rank04.textContent = "ゲームセンターで景品をとる方法";
  kiji_rank05.textContent = "将棋のプロ養成機関「奨励会」って知っていますか？";
  anime.onclick = anime01;
  life.onclick = life01;
  computer.onclick = computer01;
  jiji.onclick = jiji01;
  shumi.onclick = shumi01;
  kiji_rank_01.onclick = rank01;
  kiji_rank_02.onclick = rank02;
  kiji_rank_03.onclick = rank03;
  kiji_rank_04.onclick = rank04;
  kiji_rank_05.onclick = rank05;
  function anime01(){
    location.href='/anime.php';
  }
  function life01(){
    location.href='/life.php';
  }
  function computer01(){
    location.href='/computer.php';
  }
  function jiji01(){
    location.href='/news.php';
  }
  function shumi01(){
    location.href='/shumi.php';
  }
  function rank01(){
    location.href='/kiji_page/life/life_1.php';
  }
  function rank02(){
    location.href='/kiji_page/computer/computer_1.php';
  }
  function rank03(){
    location.href='/kiji_page/shumi/shumi_1.php';
  }
  function rank04(){
    location.href='/kiji_page/shumi/shumi_2.php';
  }
  function rank05(){
    location.href='/kiji_page/shumi/shumi_3.php';
  }
  document.getElementById("deck").onclick = myquiz;
}


$(function(){
$('input#search').quicksearch('table tbody tr');
});
