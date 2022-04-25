<!DOCTYPE html>

<head>
    <title>Blog</title>
    <link rel="stylesheet" href="app.css">
    {{--    <script src="/app.js"></script>--}}
</head>


<body>

<h1>3ARL's BLOG</h1>

    <?php foreach ($posts as $post) : ?>
        <article>
            <?= $post; ?>
        </article>
    <?php endforeach; ?>

</body>
