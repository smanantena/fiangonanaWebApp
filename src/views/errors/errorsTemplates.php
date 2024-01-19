<!DOCTYPE html>
<html lang="xyz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/dist/css/bootstrap.min.css">
    <title>
        <?php
        if (isset($title) && !empty($title)) {
            echo $title;
        } else {
            echo 'Misy olana mitranga.';
        }
        ?>
    </title>
</head>
<body>
    <?php
    if (isset($pageContent)) {
        echo $pageContent;
    }
    ?>
</body>
</html>