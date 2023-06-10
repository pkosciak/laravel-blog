<!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
</head>
<body>
    <?php foreach($posts as $post): ?>
        <article>
            <h1>
                <a href="posts/<?= $post->slug; ?>">
                    <?= $post->title; ?>
                </a>
            </h1>
            <div><?= $post->excerpt; ?></div>
            <hr>
        </article>
    <?php endforeach; ?>
</body>
</html>
