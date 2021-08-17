<?php
$posts = json_decode(file_get_contents('./posts/posts.json'), true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Home | Blogu</title>
</head>

<body>

    <nav class="navbar flex jc-sb ai-c">
        <div class="container flex jc-sb ai-c">
            <a href="/" class="logo">Blogu</a>

            <ul class="flex">
                <li>
                    <a href="" class="link-item">Home</a>
                </li>
                <li>
                    <a href="" class="link-item">About Me</a>
                </li>
            </ul>
        </div>
    </nav>

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
                            <h2 class="card-title"><a href="post.php"><?= $post['title']; ?></a></h2>
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