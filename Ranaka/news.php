<?php
$images = array();
$num = 10;
$num_list = 6;

if ($handle = opendir('./news')) {
  while ($entry = readdir($handle)) {
    if ($entry != "." && $entry != ".." && $entry !=".DS_Store") {
      $images[] = $entry;
    }
  }
}
 ?>
<?php
  Include "Template_top.php";
 ?>
    <div class="site">
      <div class="left-columns">
        <h1>時事ニュース</h1>
        <div class="new_kiji_list">
          <h1 new_kiji_list>新着記事</h1>
        </div>
        <div class="kiji_list">
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
          $i = 0;
          $getkijinews = fopen("./news_kiji/news_kiji" . $page . ".txt","r");
          foreach ($images[$page] as $img) {
            $newskiji = fgets($getkijinews);
            $i++;
            echo '
            <table>
            <tbody>
              <tr>
                <th>
                <a href="./kiji_page/news/news_'. $i . '.php" kiji><img src="./news/img_' . $i . '.png"kiji_list></a>
                </th>
                <th>
                  <h2>' . $newskiji . '</h2>
                </th>
              </tr>
            </tbody>
          </table>';
          }
        }
        ?>
      </div>
      </div>
<?php
Include "Template_bottom.php";
 ?>
