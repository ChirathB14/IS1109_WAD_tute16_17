<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload Sucess</title>
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
            border-radius: 5px;
            margin: 4px 2px;
            cursor: pointer;
            display: inline;
        }

        ul {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        li {
            font-size: large;
            display: flex;
            align-self: center;
        }
    </style>
</head>

<body>
    <center>
        <br><br><br>

        <h2>Your file was successfully uploaded!</h2>

        <ul>
            <li>Name: <?= esc($uploaded_flleinfo->getBasename()) ?></li>
            <li>Size: <?= esc($uploaded_flleinfo->getSizeByUnit('kb')) ?> KB</li>
        </ul>
        <br><br><br>

        <p class="navBtn"><?= anchor('upload', '<< Upload Another File') ?></p>
        <p class="navBtn"><?= anchor('viewimages', 'View Uploaded Images >>') ?></p>
    </center>

</body>

</html>