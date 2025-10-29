<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>
</head>
<body>
    <div>
            <form action ="{{route('users.file')}}" method ="POST"> <!--enctype="multipart/form-data"-->
                <label for ="fileUpload">Escolha um arquivo para enviar>:</label>
                <input type="file" id = "fileUpload" name = "fileUpload">
                <button type="submit">Enviar</button> 
            </form>
</div>

</body>
</html>