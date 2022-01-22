<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Images</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        *>a {
            text-decoration: none;
            font-size: 16px;
            color: white;
            font-weight: 700;
        }

        .navBtn {
            border: none;
            width: fit-content;
            background-color: #555555;
            padding: 16px 32px;
            text-align: center;
            display: inline-block;
            border-radius: 5px;
            margin: 4px 2px;
            cursor: pointer;
            display: block;
        }

        .imageHolder {
            display: inline-grid;
            justify-items: center;
            padding: 20px;
        }

        .imageTitle {
            margin-top: 10px;
            font-size: large;
            display: flex;
        }
    </style>
</head>

<body>
    <center>

        <p class="navBtn"><?= anchor('upload', '<< Upload File') ?></p>

        <?php foreach ($result->getResult() as $image) : ?>
            <div class="imageHolder">
                <a target="_blank" href="<?php echo base_url($image->fileName); ?>">
                    <img height="300px" width="300px" src="<?php echo base_url($image->fileName); ?>" title="<?php echo $image->title ?>">
                </a>
                <div class="imageTitle"><?php echo $image->title ?></div>
            </div>
        <?php endforeach; ?>
    </center>
</body>

</html>