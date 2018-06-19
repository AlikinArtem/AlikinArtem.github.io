<?php
    header('Content-Type: text/html; charset=utf-8');
?>
<html> 
    <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Регистрация</title>
    </head>
    <body style="background-image: url(light-grey-glow-cells-2.png);">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Регистрация</h2>
                </div>
            </div>
        </div>
        <form action="save_user.php" method="post">
        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3">
                        <input name="surname" type="text" size="25" maxlength="25" class="form-control" placeholder="Фамилия">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <input name="name" type="text" size="25" maxlength="25" class="form-control" placeholder="Имя">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <input name="secondn" type="text" size="25" maxlength="25" class="form-control" placeholder="Отчество">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <input name="email" type="text" size="25" maxlength="25" class="form-control" placeholder="E-mail">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <input name="login" type="text" size="25" maxlength="25" class="form-control" placeholder="Логин">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-3">
                        <input name="password" type="password" size="25" maxlength="25" class="form-control" placeholder="Пароль">
                    </div>
                </div>
            </div>
           

            <div style="height:20px;"></div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <input type="submit" name="submit" value="Зарегистрироваться" class="btn btn-primary">
            
                    </div>
                </div>
            </div>
        </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>