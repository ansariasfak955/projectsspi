<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         body{
            background:#2ec194;
        }
        #outer{
           height:600px;
           width:400px;
           margin:150px auto;
           //background:red;
        }
       .txt{
          height:400px;
          width:350px;
          margin-left:20px;
          box-shadow:-10px -5px 10px rgba(255,255,255,0.2),
	               10px 5px 10px rgba(0,0,0,0.1),
				   inset -5px -5px 5px rgba(255,255,255,0.2),
				   inset 5px 5px 5px rgba(0,0,0,0.1);
          }
          .txt1{
              margin-left:30px;
              font-size:19px;  
              padding-top:10px;
          }
          input{
              width:88%;
              height:30px;
          }
          .btn{
              height:30px;
              width:82%;
              margin-left:30px;
          }
    </style>
</head>
<body>
    <form action="handle-task9.php" method="GET">
        <div id="outer">
            <div class="txt"><br>
            <h1 style="text-align:center">Area of Radius</h1>
           <div class="txt1">Area <input type="text" id="name2" name="name2"/><br/></div><br><br>
          <button id="submit" name="submit" class="btn">submit</button>
       </div>
       </div>
    </form>
</body>
</html>