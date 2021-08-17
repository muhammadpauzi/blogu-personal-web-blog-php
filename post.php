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

    <div class="post">
        <div class="container">
            <a href="/" class="btn btn-primary">Back</a>
            <h1 class="title">How to make a website from zero to hero?</h1>
            <div class="post-info">
                <p>Written by <span class="text-primary">Muhammad Pauzi</span> - August 17 2021</p>
            </div>
            <div class="image-thumbnail">
                <img src="./images/posts/img1.jpg" alt="Post's Thumnail">
            </div>
            <div class="post-content">
                <h2>First Subtitle</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti cum ducimus voluptatem quidem, optio modi! Sit, iure maiores sequi voluptate itaque ut reiciendis deserunt provident libero perspiciatis? Dicta inventore mollitia consequatur delectus exercitationem alias nam quis atque quidem beatae? Rem voluptates ipsa asperiores accusamus ad quasi quae ullam numquam itaque, totam fugiat expedita enim, atque tempore iusto distinctio. Error nesciunt expedita odio repellat omnis est voluptate! Voluptatem nobis sequi impedit eligendi nesciunt soluta perferendis fugit officiis optio tempore. Aliquid harum non, ipsam voluptates at, sequi est nam debitis consequuntur error blanditiis voluptas expedita quis molestiae a nobis explicabo optio ipsa.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta amet quia quam officiis voluptas. Nihil animi reprehenderit reiciendis odit repellat.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat, sapiente architecto. Quibusdam tempore vero perspiciatis fuga fugit ipsa iure ratione quae qui deleniti? Illo consequuntur ipsum dolores vitae. Accusamus sapiente aut provident eaque in, suscipit voluptas, a nostrum perferendis ex cum. Sapiente exercitationem ex reprehenderit illo libero fugiat earum fuga, molestiae perspiciatis illum, quisquam cupiditate dignissimos, quo recusandae laborum expedita laudantium incidunt? Distinctio suscipit repudiandae provident quam voluptas natus qui id consectetur facilis fugiat a quod amet, deserunt, recusandae laudantium eius ab ad ratione dolores eum doloribus! Aliquam at eum natus labore excepturi ducimus, omnis esse doloremque corrupti debitis, iusto obcaecati sunt voluptates aperiam nisi dolorum officia nesciunt accusamus, fugit rem dolor! Itaque tempore quisquam quos veritatis nesciunt quaerat repellendus accusamus magnam perferendis quasi dolorum consectetur, saepe, nobis neque maiores incidunt pariatur assumenda, sequi nostrum aut mollitia dolorem? Aliquid nisi dignissimos accusantium veniam, alias necessitatibus a! Suscipit, architecto? Iusto cumque aperiam eaque accusantium dolores laboriosam et veritatis molestias earum obcaecati. Aliquam vel nam deleniti minima distinctio corrupti ipsa veritatis, placeat incidunt consequatur adipisci est, dolorem nisi provident voluptatum commodi numquam. Earum porro nulla excepturi recusandae, tempora voluptate ratione laudantium et molestias, laboriosam fuga ea inventore a, fugiat sit voluptas commodi.</p>
            </div>
            <div class="flex gap-1">
                <div class="category">Programming</div>
                <div class="category">Tech</div>
                <div class="category">PHP</div>
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