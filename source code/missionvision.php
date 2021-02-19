<!-- About Us Section -->
<?php
require_once "header.php";

require_once 'common.php';

$missionvisionDAO = new MissionVisionDAO();
$statements = $missionvisionDAO->getAll();

?>
<style>
    /* About Us Section */
    .title-orange {
        color: #fd6c38;
    }

</style>
<br>

<section class="mt-5 container">
    <?php foreach ($statements as $statement) { ?>
        <h3 class="title-orange"><?= $statement->title ?></h3>
        <h5 class="title-orange"><?= $statement->subtitle ?></h5>
        <div class="lead">
            <?= $statement->description ?>
        </div>
    <?php } ?>
</section>

<?php
require_once "footer.php";