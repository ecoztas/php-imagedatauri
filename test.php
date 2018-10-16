<!DOCTYPE html>
<html>
<head>
    <title>Image DataURI Converter</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <style type="text/css">
        body {text-align: center; }
        textarea {width: 320px;height: 250px;}
    </style>
</head>
<body>

    <h1>Image Data URI</h1>
    <h3>Upload Image File:</h3>

    <!-- upload-form -->
    <form action="./test.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file" accept="image/*">
        <button type="submit">Upload</button>
    </form>

    <h4>
        <a href="./test.php">Refresh</a>
    </h4>

    <!-- PHP-codes -->
    <?php
    require('Converter.service.php');
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_FILES['file'])) {
            $result = convertData($_FILES['file']['tmp_name']);

            if (!empty($result)) {          
    ?>
                <h3>Result:</h3>
                <textarea><?=$result?></textarea>

                <style type="text/css">
                    body {
                        background: url("<?=$result?>");
                    }
                </style>
    <?php
            }
        }
    }
    ?>

</body>
</html>
