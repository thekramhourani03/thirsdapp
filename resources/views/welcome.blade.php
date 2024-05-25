<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ Config::get('app.name', 'default'); }}</title>


 <style>
    body{
      /* position: relative;*/
      height: 150rem;
    }
    .container{

        background: grey;
        position: relative;
        width: 100%;
        height: 850px;

    }
    .child{
        width: 150px;
        height: 150px;

    }
    .ch1{
        top: 50px;
        left: 50px;
        background-color: red;
        position: sticky;


    }
    .ch2{
        background-color: green;
        top: 100px;
        left: 100px;

    }
    .ch3{
        background-color: blue;
        top: 150px;
        left: 150px;

    }

 </style>


</head>
<body>
   <div class="container">
   <div class="child ch1"></div>
   <div class="child ch2"></div>
   <div class="child ch3"></div>


   </div>
</body>
</html>
