<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Sign in</title>
        <link rel="stylesheet" href="./bootstrap.css">
        <!-- <link rel="stylesheet" href="./style.css">   -->
    </head>
    <body>
        <form class="form-group w-50 mx-auto" action="viewer.php" method="GET" id="form">
            <select onchange="addAction(this)" name="type" >
                <option value="admin">Admin</option>
                <option value="editor">Editor</option>
                <option value="viewer" selected>Viewer</option>
            </select>
            <br>
            <label   for="">Email</label>
            <input class="form-control" type="email" name="Email" >
            <label   for="">Password</label>
            <input class="form-control" type="password" name="Password" >
            <div id="IdentifierInput" class="collapse">
                <label for="">Identifier</label>
                <input class="form-control" type="text" name="Identifier">
            </div>
            <div id="LicenseInput" class="collapse">
                <label for="">License</label>
                <input class="form-control" type="text" name="License">
            </div>
            <button class="btn btn-primary mt-2" type="submit" name="button">Sign in</button>
            
        </form>

        <script>
        function addAction(option) {
            switch(option.value.toLowerCase()) {
                case 'admin':
                    document.querySelector("form").action = 'admin.php';
                    document.querySelector('#IdentifierInput').style.display = 'block';
                    document.querySelector('#LicenseInput').style.display = 'none';
                    break;
                case 'editor':
                    document.querySelector("#form").action = 'editor.php';
                    document.querySelector('#IdentifierInput').style.display = 'none';
                    document.querySelector('#LicenseInput').style.display = 'block';
                    break;
                default:
                    document.querySelector("#form").action = 'viewer.php';
                    document.querySelector('#IdentifierInput').style.display = 'none';
                    document.querySelector('#LicenseInput').style.display = 'none';
            }
        }
    </script>
    </body>
     
</html>
<?php
?>