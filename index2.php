<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mainTheme.css">
    <link rel="stylesheet" href="../css/utils.css">
    <link rel="stylesheet" href="../css/mainTheme.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=East+Sea+Dokdo&family=Josefin+Sans&family=Lobster&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Dogz</title>
</head>

<body class="col-12 center secondary_color">
    <form class="primary_color center">
        <label class="d-center">Dogz</label>
        <div class="p-1">
            <label class="d-center">Selecione a raça:</label>
            <select class="d-center m-auto" name="" id="races" size="5">

            </select>
        </div>

        <div class="p-1 m-between">
            <label class="d-center">Escreva o nome:</label>
            <input class="d-center" type="text" value="dog name" id="dogName" oninput="changeFont()" autocomplete="off">
        </div>
        <div class="p-1 m-between">
            <label class="d-center">Escolha uma cor</label>
            <input class="d-center" type="color" name="colorPicker" id="colorPicker">
        </div>
        <div class="p-1">
            <label class="d-center ">Selecione a fonte</label>
            <select class="d-center m-auto" name="" id="fonts" size="3">
                <option class="roboto" value="dog name">dog name</option>
                <option class="lobster" value="dog name">dog name</option>
                <option class="josefin" value="dog name">dog name</option>
                <option class="dancing-script" value="dog name">dog name</option>
                <option class="east-sea" value="dog name">dog name</option>
            </select>

        </div>

        <div class="d-center">
            <button class="m-auto ph-2" type="submit">Save</button>
        </div>
    </form>
</body>
<script src="../js/main.js"></script>

</html>