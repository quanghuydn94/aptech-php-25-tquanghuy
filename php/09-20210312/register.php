<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Sign up</title>
        <link rel="stylesheet" href="./bootstrap.css">
        <!-- <link rel="stylesheet" href="./style.css">   -->
    </head>
    <body>
             
        <form class="form-group w-50 mx-auto" id="form" action="viewer.php" method="post">
            <select name="type" onchange="addAction(this)">
                <option   value="admin">Admin</option>
                <option   value="editor">Editor</option>
                <option   value="viewer" selected>Viewer</option>
            </select> 
            <div>
                <label  for="">FirstName</label>
                <input class="form-control" type="text" name="firstName" >
            </div>
            <label  for="">LastName</label>
            <input class="form-control" type="text" name="lastName" >
            <label   for="">Email</label>
            <input class="form-control" type="email" name="email" >
            <label   for="">Password</label> 
            <input class="form-control" type="password" name="password" >
            <div id="identifier" class="collapse" >
                <label   for="identifierInput">Identifier</label>            
                <input class="form-control" type="text" name="Identifier" id="Identifier">
            </div>
            <div id="licenseInput" class="collapse" >
                <label   for="licenseInput">License</label>
                <input class="form-control" type="text" name="License" id="License">
            </div>
            <button class="btn btn-outline-warning my-3" type="submit"  name="submit">Register</button>
             
        </form>

        <script>
            function addAction(option) {
                switch (option.value.toLowerCase()) {
                    case 'admin':
                        document.querySelector("#form").action = 'admin.php';
                        document.querySelector('#identifier').style.display = 'block';
                        document.querySelector('#licenseInput').style.display = 'none';
                        break;
                    case 'editor':
                        document.querySelector("#form").action = 'editor.php';
                        document.querySelector('#identifier').style.display = 'none';
                        document.querySelector('#licenseInput').style.display = 'block';
                        break;
                    default:
                        document.querySelector("#form").action = 'viewer.php';
                        document.querySelector('#identifier').style.display = 'none';
                        document.querySelector('#licenseInput').style.display = 'none';
                }
            }
        </script>
    </body>
</html>
