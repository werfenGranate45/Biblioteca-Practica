<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>login</title>

    <style>
      .container{
        display: flex;
        justify-content: center;
        align-items: center;
      }
    </style>

    <style>
      .box-login {
            width: 500px;
            height: 200px;
            background-color: lightblue;
            border: 2px solid blue;
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>

<body>
  <div class = "container">
    <div class="box-login">
      <form action="{{url('RolRegister')}}" method="post" id="login">
        @csrf
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name">
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Abreviatura</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="abbr">
        </div>

        <div class = "button",  style="margin-left: 10px; margin-top: 10px;">
          <input class="btn btn-primary" type="submit" value="Los voy a matarrrrrrrr">
        </div>

      </form>
    </div> <!--Aqui se termina la caja de login-->
  </div> <!--Aqui se termina la caja donde se centrara la caja de login-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
