<?php
class Posts
{
    public static function getPosts(
        $sortBy = SORT_DESC,
        $sortKey = 'publishedAt',
        int $limit = 0
    ): array {
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
}
