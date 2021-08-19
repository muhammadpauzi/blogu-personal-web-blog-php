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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
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

    <div class="post">
        <div class="container">
            <a href="/" class="btn btn-primary">Back</a>
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

    <script src="./js/main.js"></script>
    <script src="./js/marked.min.js"></script>
    <script>
        const postContent = document.querySelector('.post-content');
        postContent.innerHTML = marked(<?= json_encode(getMarkdown()); ?>);
    </script>
</body>

</html>