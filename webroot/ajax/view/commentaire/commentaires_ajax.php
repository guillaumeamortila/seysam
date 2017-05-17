<?php
// var_dump($comments);
foreach ($comments as $com) {
?>
	<div class="content">
        <div class="commentaire row">
          <div class="column">
            <div>
              <div class="stars">
                <img src="webroot/img/icons/star-full.svg"><img src="webroot/img/icons/star-full.svg"><img src="webroot/img/icons/star-full.svg"><img src="webroot/img/icons/star-full.svg"><img src="webroot/img/icons/star-full.svg">
              </div>
              <div class="bold-17"><?=$com['com_content'];?></div>
              <div class="grey-13"><?=$com['com_date'];?> par <?=$com['user_fname'];?> <?=$com['user_lname'];?></div>
            </div>
          </div>
          <!-- <div class="grades">
            <div class="row">
              <div>Qualité<div class="qp-grade grey-13"><span class="red">•••</span>••</div></div>
            </div>
            <div class="row">
              <div>Prix<div class="qp-grade grey-13"><span class="red">••••</span>•</div></div>
            </div>
          </div> -->
        </div>
    </div>
<?php } ?>