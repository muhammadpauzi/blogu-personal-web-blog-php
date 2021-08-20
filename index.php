<?php
require './app/Posts.php';
$posts = Posts::getPosts(limit: 4);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require './partials/head.php'; ?>
    <title>Home | Blogu</title>
</head>

<body>

    <?php require './partials/navbar.php' ?>

    <div class="hero flex ai-c">
        <div class="container text-center">
            <h1 class="title mb-2">Improve your knowledge with <span class="text-primary">Blogu.</span></h1>
            <p class="mx-auto fw-medium">Blogu is a personal blog that contains about programming, technology, web and so on.</p>
        </div>
    </div>

    <div class="posts">
        <div class="container text-center">
            <h1 class="title title-md mb-4">Latest Posts</h1>

            <div class="posts-grid">
                <?php foreach ($posts as $post) : ?>
                    <div class="card">
                        <div class="card-image">
                            <img src="./images/posts/<?= $post['thumbnail']; ?>" alt="<?= $post['title']; ?>">
                        </div>
                        <div class="card-content">
                            <small class="card-info"><?= date('F d Y', $post['publishedAt']); ?></small>
                            <h2 class="card-title"><a href="post.php?id=<?= $post['id']; ?>"><?= $post['title']; ?></a></h2>
                            <p class="card-text">
                                <?= $post['description']; ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p>Created and managed by <a href="/" class="footer-highlight">Muhammad Pauzi.</a></p>
        </div>
    </footer>

    <script src="./js/main.js"></script>
</body>

</html>