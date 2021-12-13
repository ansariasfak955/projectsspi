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
           height:400px;
           width:400px;
           margin:150px auto;
           //background:red;
        }
       .txt{
          height:250px;
          width:350px;
          margin-left:20px;
          box-shadow:-10px -5px 10px rgba(255,255,255,0.2),
	               10px 5px 10px rgba(0,0,0,0.1),
				   inset -5px -5px 5px rgba(255,255,255,0.2),
				   inset 5px 5px 5px rgba(0,0,0,0.1);
          }
          input{
              margin-left:30px;
              width:80%;
              height:30px;
              margin-top:50px;
              border:none;
              
          }
          .btn{
              height:30px;
              width:80%;
              margin-left:30px;
              margin-top:20px;
          }
    </style>
</head>
<body>
    <form action="handle-task1.php" method="GET">
        <div id="outer">
            <div class="txt">
                 <input type="name" id="name" name="name"/><br/>
                 <button id="submit" name="submit" class="btn">Submit</button>
            </div>
        </div>
        
    </form>
</body>
</html>