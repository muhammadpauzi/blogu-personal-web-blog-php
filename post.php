<?php

if ($_GET['id'] && $_GET['id'] != '') {
    $posts = json_decode(file_get_contents('./posts/posts.json'), true);
    // get post by id
    $post = array_filter($posts, function ($p) {
        return $p['id'] === (int) $_GET['id'];
    });
    // reset index to zero
    $post = array_values($post)[0];
} else {
    header("location: index.php");
    exit;
}

function getMarkdown()
{
    global $post;
    return file_get_contents('./posts/' . $post['markdown']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require './partials/head.php'; ?>
    <title>Home | Blogu</title>
</head>

<body>

    <?php require './partials/navbar.php' ?>

    <div class="post">
        <div class="container">
            <h1 class="title"><?= $post['title']; ?></h1>
            <div class="post-info">
                <p>Written by <span class="text-primary">Muhammad Pauzi</span> - <?= date('F d Y', $post['publishedAt']); ?></p>
            </div>
            <div class="flex gap-1 mb-4">
                <div class="category">Programming</div>
                <div class="category">Tech</div>
                <div class="category">PHP</div>
            </div>
            <div class="image-thumbnail">
                <img src="./images/posts/<?= $post['thumbnail']; ?>" alt="<?= $post['title']; ?>">
            </div>
            <div class="post-content"></div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>Created and managed by <a href="/" class="footer-highlight">Muhammad Pauzi.</a></p>
        </div>
    </footer>

    <script src="./js/marked.min.js"></script>
    <script src="./js/main.js"></script>
    <script type="text/javascript">
        const postContent = document.querySelector('.post-content');
        postContent.innerHTML = marked(<?= json_encode(getMarkdown()); ?>);
    </script>
</body>

</html>