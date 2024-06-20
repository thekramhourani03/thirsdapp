!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login page</title>
    <link rel="stylesheet" href={{ asset('index.css') }}>

</head>
<body>

<div class="card">
    <div class="card-header">
 <img src="{{ asset(img/use_avatar.jpg) }}"alt=""class="avatar">
 <h1 class="text-center">Login</h1>
    </div>
    <div class="card-body">
<form action="" method="post">
    <div class="row"> 
        <label for="" class="label-text">user name</label>
    <input type="text" name="user name " id="" class="form-control">
    </div> 
    <div class="row"> 
        <label for="" class="label-text">password</label>
    <input type="password" name="user name " id="" class="form-control">
    </div>
    <div class="row">
       <a href="" class="btn btn-success">login</a>
       <a href="" class="btn btn-danger">cancel</a>

    </div>
</form>
</div>
    </div>
</div>


</body>
</html>
