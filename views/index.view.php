<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        header {
            background: #e3e3e3;
            text-align: center;
        }
    </style>
    
</head>
<body>
    <header>
    </header>

    <ul>
        <?php foreach($tasks as $task) : ?>
            <li><?=$task->description; ?></li>
        <?php endforeach ?>
    </ul>
    
</body>
</html>