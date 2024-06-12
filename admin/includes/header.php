<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Area 51'; ?></title>
    
    <?php foreach ($files as $file) {
        echo '<link rel="stylesheet" href="'.BASE_ADMIN.'css/'.$file.'">';
    }
    ?>
</head>
<body>