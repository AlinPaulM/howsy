<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Howsy - simple PHP MVC OOP project from scratch</title>
    </head>
    <body>
    
    <?php if(App\helper\Session::get('user')) { ?>
        <div class="container">
            <div class="row">
                <div class="col col-sm-3">
                    <a href="<?php echo App\helper\Url::get('home');?>">Home</a>
                </div>
                <div class="col col-sm-3 offset-sm-6">
                    <a href="<?php echo App\helper\Url::get('user/logout');?>">Logout</a>
                </div>
            </div>
        </div>
    <?php } ?>