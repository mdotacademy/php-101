<?php declare(strict_types=1);

require('classes/Author.php');

function getPosts(): array
{
    $author1 = new Author('Mark Shust');
    $author2 = new Author('Betsy Sue');

    return [
        [
            'title' => 'How to learn PHP',
            'content' => 'This is how you learn PHP.',
            'author' => $author1->getName(),
        ],
        [
            'title' => 'How to learn MySQL',
            'content' => 'This is how you learn MySQL.',
            'author' => $author1->getName(),
        ],
        [
            'title' => 'How to learn Nginx',
            'content' => 'This is how you learn Nginx.',
            'author' => $author2->getName(),
        ],
    ];
}

function getPostText(int $numPosts): string
{
    return $numPosts === 1 ? 'post' : 'posts';
}
