<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-4.0.0/css/bootstrap.min.css">
    <title>Imágenes</title>
</head>
<body>
    <div class="container">
    <p class="statusMsg"></p>
<form enctype="multipart/form-data" id="fupForm" >
    <div class="form-group">
        <label for="name">NAME</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required />
    </div>
    <div class="form-group">
      <label for="email">EMAIL</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required />
    </div>
    <div class="form-group">
        <label for="file">File</label>
        <input type="file" class="form-control" id="file" name="file" required />
    </div>
    <input type="submit" name="submit" class="btn btn-danger submitBtn" value="SAVE"/>
</form>
    </div>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/submit.js"></script>
</body>
</html>