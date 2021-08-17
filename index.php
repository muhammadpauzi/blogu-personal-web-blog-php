<?php
$blogs = json_decode(file_get_contents('./data/blogs.json'), true);
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
            <h1 class="fs-2 mb-2">Improve your knowledge with <span class="text-primary">Blogu.</span></h1>
            <p class="mx-auto fw-medium">Blogu is a personal blog that contains about programming, technology, web and so on.</p>
        </div>
    </div>

    <div class="blogs">
        <div class="container text-center">
            <h1 class="fs-2 mb-4">Latest Posts</h1>

            <div class="blogs-grid">
                <div class="card">
                    <div class="card-image">
                        <img src="./images/posts/img1.jpg" alt="Blog's Thumbnail">
                    </div>
                    <div class="card-content">
                        <h2 class="card-title">How to learn programming with more efficient?</h2>
                        <p class="card-text">
                            This article is gonna show you how to learn programming more efficient?
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-image">
                        <img src="./images/posts/img2.jpg" alt="Blog's Thumbnail">
                    </div>
                    <div class="card-content">
                        <h2 class="card-title">How to make a website from zero to hero?</h2>
                        <p class="card-text">
                            This article is gonna show you how to make a website from zero to hero?
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-image">
                        <img src="./images/posts/img3.jpg" alt="Blog's Thumbnail">
                    </div>
                    <div class="card-content">
                        <h2 class="card-title">Why you should learn programming?</h2>
                        <p class="card-text">
                            This article is gonna show you why you should learn programming?
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-image">
                        <img src="./images/posts/img4.jpg" alt="Blog's Thumbnail">
                    </div>
                    <div class="card-content">
                        <h2 class="card-title">What's a new of PHP 8?</h2>
                        <p class="card-text">
                            This article is gonna show you what's a new of PHP 8?
                        </p>
                    </div>
                </div>
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