<?php

foreach ($categories as $cat) {

  $existing = 0;
  foreach ($sub_categories as $sub_cat) {
    if ($sub_cat["scat_cat_ID"]==$cat["cat_ID"])
      $existing = 1;
  }

  if($existing==1){ ?>
    <div class="content" id="content<?=$cat['cat_ID']?>">
      <div class="card-container">

      <div>
        <h2><?=$cat["cat_name"]; ?><span class="dot">.</span></h2>
      </div>

      <?php
      // echo("<h1>".$cat["cat_name"]."</h1>");
        $increment =  0;
        // $nb_articles = 0;

        foreach ($articles as $art) {

          if($cat["cat_name"]==$art["cat_name"]){

            if ($increment == 0)
              echo "<div class='row'>";

            include("../../../../app/view/article/index_card.php");

            if ($increment == 2){
              echo "</div>";
              $increment = 0;
            } else {
              $increment++;
            }
              // $nb_articles++;
          }
        }
          // echo "<h1>".$nb_articles."</h1>";

        if($increment==1 || $increment==2)
          echo "</div>";
        ?>

      </div>
    </div>
<?php
  }
}
?>
