<div>Sous-catégorie : &nbsp;</div>
<select name="scat" required="required">
    <?php
    foreach ($sub_categories as $scat) {
        echo "<option value='".$scat['scat_ID']."'>".$scat['scat_name']."</option>";
    }
    ?>
</select>