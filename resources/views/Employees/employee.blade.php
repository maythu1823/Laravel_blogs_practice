<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>welcome to employee page</h1>
   <ul>
         <?php foreach($datas as $data): ?>
		 <li><?php echo $data['name'] ?></li>
		 <?php endforeach ?>
         </ul>
    </div>
</body>
</html>