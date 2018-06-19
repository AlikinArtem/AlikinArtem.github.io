<?php

    session_start(); 
    header('Content-Type: text/html; charset=utf-8');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="javascript.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Libre+Franklin:300,400,800" rel="stylesheet">
</head>
<body>

    <div class="firstblock">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">

                    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#exampleModal"  style = "margin-left: 50px;">
                        Вход
                    </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" style = "font-size:30px;">Авторизация</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">   

                                        <form action="testreg.php" method="post">


                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <label style = "font-size:20px;">Ваш логин:<br/></label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input name="login" type="text" size="25" maxlength="25">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <label style = "font-size:20px;">Ваш пароль:<br/></label>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <input name="password" type="password" size="25" maxlength="25">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div style="height:20px;"></div>
                                                <div class="container" >
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="submit" value="Войти" class="btn btn-primary">

                                                            <br>

                                                            <div style="height:5px;"></div>
                                                            <a href="reg.php" style = "font-size:20px;">Зарегистрироваться</a> 
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                        <br>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-sm-9" style="font-size:35px;">Analytics</div>
                </div>
            </div>
        </div>
		
<div class="nakartinke">
    <div class="container">
        <div class="row">
        
            <div class="col-sm-3">
                <div class="col-sm-12">
                    IMPRESSIONS
                </div>
                <div class="col-sm-12">
                    1,475,298
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-sm-12">
                    CLICKS
                </div>
                <div class="col-sm-12">
                    13,935
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-sm-12">
                    GOAL ACHIEVEMENT
                </div>
                <div class="col-sm-12">
                    448%
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-sm-12">
                    SPENT BUDGET
                </div>
                <div class="col-sm-12">
                    $ 4,447
                </div>
            </div>
        </div>
    </div>
</div>
		
<div style="height:50px;"></div>
	
<div class="container">
  <div class="row">
    <div class="col-sm">	
	
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Campaign</th>
              <th scope="col">Impressions</th>
              <th scope="col">Clicks</th>
              <th scope="col">Conversions</th>
              <th scope="col">Spend</th>
              <th scope="col">Goal Achievement</th>
              <th scope="col">CPM</th>
              <th scope="col">CPC</th>
              <th scope="col">CTR</th>
              <th scope="col">Efficiency Score</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Roger pen</th>
              <td>1.475.298</td>
              <td>13.935</td>
              <td>448%</td>
              <td>$4.447</td>
              <td>40%</td>
              <td>$2.36</td>
              <td>$2.36</td>
              <td>$2.36</td>
              <td>7/10</td>
            </tr>
            <tr>
              <th scope="row">Roger pen</th>
              <td>1.475.298</td>
              <td>13.935</td>
              <td>448%</td>
              <td>$4.447</td>
              <td>40%</td>
              <td>$2.36</td>
              <td>$2.36</td>
              <td>$2.36</td>
              <td>7/10</td>
            </tr>
            <tr>
              <th scope="row">Roger pen</th>
              <td>1.475.298</td>
              <td>13.935</td>
              <td>448%</td>
              <td>$4.447</td>
              <td>40%</td>
              <td>$2.36</td>
              <td>$2.36</td>
              <td>$2.36</td>
              <td>7/10</td>
            </tr>
            <tr>
              <th scope="row">Roger pen</th>
              <td>1.475.298</td>
              <td>13.935</td>
              <td>448%</td>
              <td>$4.447</td>
              <td>40%</td>
              <td>$2.36</td>
              <td>$2.36</td>
              <td>$2.36</td>
              <td>7/10</td>
            </tr>
            <tr>
              <th scope="row">Roger pen</th>
              <td>1.475.298</td>
              <td>13.935</td>
              <td>448%</td>
              <td>$4.447</td>
              <td>40%</td>
              <td>$2.36</td>
              <td>$2.36</td>
              <td>$2.36</td>
              <td>7/10</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
</div>

<div style="height:50px;"></div>
  
        <div class="container">
        <div class="row">
        <div style="width: 550px; height: 300px; float:left;">
            <canvas id="myChart";></canvas>
        </div>
    
  
        <div style="width: 550px; height: 300px; float:left;">
            <canvas id="myChart2";></canvas>
        </div>
        </div>
        </div>
   
 
<div style="height:100px;"></div>
  
            <div class="container">
            <div class="row">
            <div style="width: 550px; height: 300px; float:left;">
                <canvas id="myChart4";></canvas>
            </div>
       
            <div  style="width: 550px; height: 300px; float:left;">
                <canvas id="myChart3";></canvas>
            </div>
            </div>
            </div>
   
<div style="height:200px;"></div>
    

	
	
	<script src="Chart.min.js"></script>	

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script type="text/javascript" src="javascript.js"></script>
</body>
</html>