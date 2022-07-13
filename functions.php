<?php declare(strict_types=1);

function getPosts(): array
{
    return [
        [
            'title' => 'How to learn PHP',
            'content' => 'This is how you learn PHP.',
        ],
        [
            'title' => 'How to learn MySQL',
            'content' => 'This is how you learn MySQL.',
        ],
        [
            'title' => 'How to learn Nginx',
            'content' => 'This is how you learn Nginx.',
        ],
    ];
}

function getPostText(int $numPosts): string
{
    return $numPosts === 1 ? 'post' : 'posts';
}
