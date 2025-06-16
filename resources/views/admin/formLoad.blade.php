<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
        .container{
          height: 100%;
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
    <title>Register</title>
</head>
<body>
    <div class = "container">
        <div class = "box-register">
            <form action = {{url("register")}} method="post" id="register" 
            onsubmit="return confirm('Are you gay?')">
               @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="name">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Apellido</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="lastName">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">email</span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name = "email">
                  </div>
                
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">password</span>
                    <input type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="password">
                  </div>

                  <div>
                    <select name = "fkRole">
                    <option selected>Selecciona una opcion</option>
                    @foreach ($roles as $rol)
                    <!--
                      La etiqueta value es donde tiene el valor logico almacenado que es el input
                      Y adentro el mensaje en el que se va desplegar a la vista del usuario
                      para mostrar una variable normal la escribimos entre corchetes
                    -->
                        <option value="{{$rol->pkRole}}">
                          {{$rol->name}}
                        </option>
                    @endforeach
                    </select>
                  </div>

                  <div class = "button",  style="margin-left: 10px; margin-top: 10px;">
                    <input class="btn btn-primary" type="submit" value="Submit">
                  </div>
            </form> 
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>