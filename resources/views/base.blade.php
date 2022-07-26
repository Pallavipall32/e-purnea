<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <title>@yield('title') - E-Purnea </title>
    <style>
        .main{
            flex:1;
            height: auto;
            background-image: url('{{asset('asset/home-banner.jpg')}}');
            background-size:cover;
            
        }
        .circle{
            height: 80px;
            width:80px;
            border:2px solid #ffc107;
            text-align: center
        }
        .circle:hover{
            background-color: #ffc107
        }
        .circle>img{
            margin-top: 8px;
        }
        .text-center>p{
            color:white;
        }
        a{
            text-decoration: none!important;
        }
        a:hover{
            text-decoration: underline!important;
        }
      
   
    </style>
</head>
<body>
    
    

    @section('content')
        @show



</body>
</html>


