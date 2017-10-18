<?php
foreach ($post as $row){
    ?>
    <br>
    <strong>
        <a href=" <?php echo $rootDir ?>?id=<?php $row->id; ?>">
            <?= $row->title ?>
        </a>
    </strong>
    <br>
    <?= $row->teaser; ?>
    <br>
    <em>
        <?= $row->created_by; ?>
    </em>
    <br>
    <br>
    <br>
    <?php
}