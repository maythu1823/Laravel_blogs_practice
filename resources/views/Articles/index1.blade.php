<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>welcome to my page</h1>
        <P>My name is xiao</p>
         <?php foreach($articles as $article): ?>
		 <li><?php echo $article['title'] ?></li>
		 <?php endforeach ?>
    </div>
</body>
</html>