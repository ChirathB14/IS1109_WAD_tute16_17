<!DOCTYPE html>
<html lang="en">

<head>
    <title>Upload Form</title>
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

        .heading {
            background-color: blanchedalmond;
            width: 100%;
            color: black;
            font-weight: 700;
            padding: 20px;
        }

        table,
        td {
            background-color: lightblue;
            padding: 20px;
        }

        .uploadBtn {
            color: white;
            border: none;
            width: fit-content;
            background-color: green;
            padding: 16px 32px;
            text-align: center;
            display: inline-block;
            border-radius: 5px;
            font-size: 24px;
            margin: 4px 2px;
            cursor: pointer;
            display: block;
        }

        .customTextInput {
            padding: 10px;
            width: max-content;
            color: black;
            display: inline-block;
            border: 1px solid #999;
            border-radius: 3px;
            padding: 10px;
            white-space: nowrap;
            font-weight: 700;
            font-size: 10pt;
            background-color: lightblue;
        }

        .customFileInput {
            padding: 10px;
            width: max-content;
            color: black;
            display: inline-block;
            border: 1px solid #999;
            border-radius: 3px;
            padding: 10px;
            white-space: nowrap;
            font-weight: 700;
            font-size: 10pt;
            background-color: lightblue;
        }


        .errorList {
            color: red;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <center>
        <h1 class="heading"> Upload Image</h1><br>

        <?php foreach ($errors as $error) : ?>
            <li class="errorList"><?= esc($error) ?></li>
        <?php endforeach ?>
        <br>
        
        <?= form_open_multipart('Upload/upload') ?>
        <table>
            <tr>
                <th>
                    <label>Title : </label>
                </th>
                <td>
                    <input class="customTextInput" type="text" name="title" placeholder="Enter title here..." required /><br>
                </td>
            </tr>
            <tr>
                <th>
                    <label>Image: </label>
                </th>
                <td>
                    <input type="file" class="customFileInput" name="userfile" size="20" />
                </td>
            </tr>
        </table>
        <br><br>
        <input class="uploadBtn" type="submit" value="Upload" />
        <br><br>
        <p class="navBtn"><?= anchor('viewimages', 'View uploaded images >>') ?></p><br>
    </center>

</body>

</html>