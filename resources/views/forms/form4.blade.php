<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form4</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h1> uploads your cv</h1>
<form method="post" action="{{ route('form4_data') }}"  enctype="multipart/form-data">
    @csrf
<div class="mb-3">
    <lable>Name</lable>
    <input type="text" class="form-control"placeholder="Name" name="name">
</div>
<div class="mb-3">
    <lable>cv</lable>
    <input type="file" class="form-control"placeholder="cv" name="cv">
</div>
    <div class="text-center">
    <button class="btn btn-primary w-25 ">Send</button>
    </div>
</div>
</form>
</body>
</html>
