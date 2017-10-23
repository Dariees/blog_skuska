<?php
foreach ($posts as $post){
    ?>
    <br>
    <strong>
        <a href="article.php?id=<?php echo $row->id; ?>">
            <?= $post->title ?>
        </a>
    </strong>
    <br>
    <?= $post->teaser; ?>
    <br>
    <em>
        <?= $post->created_by; ?>
    </em>
    <br>
    <br>
    <br>
    <?php
}