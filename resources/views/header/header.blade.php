<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moises Garcia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
<header>
    <div class="menu">
        <div class="container">
            <div class="row">
                <div class="col-div">
                    <div class="logo">
                        <img src="https://www.alfasoft.pt/assets/images/logo.png">    
                    </div>
                    
                </div>
                <div class="col-div">
                   <h3>List Contact CRUD</h3> 
                </div>
            </div>
        </di>
    </div>    
</header>

<div class="alert-message">
    @if(Session::has('message'))
        <span>{{ Session::get('message')}}</span>
    @endif
</div>


