<?php
function getPosts($sortBy = SORT_DESC, $sortKey = 'publishedAt', $limit = 0)
{
    $posts = json_decode(file_get_contents('./posts/posts.json'), true);
    // sort
    $sortByKey = [];
    foreach ($posts as $key => $row) {
        $sortByKey[$key] = $row[$sortKey];
    }
    array_multisort($sortByKey, $sortBy, $posts);

    // limit
    if (is_int($limit) && $limit > 0) {
        return array_slice($posts, 0, $limit);
    }
    return $posts;
}

function searchPosts($keyword = '')
{
    $posts = getPosts();
    if ($keyword) {
        $posts = array_filter($posts, function ($post) use ($keyword) {
            return is_numeric(strpos(strtolower($post['title']), strtolower($keyword)));
        });
    }
    return $posts;
}
