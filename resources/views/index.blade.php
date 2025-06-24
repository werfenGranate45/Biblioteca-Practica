@php use App\Helpers\MessageUtils; @endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <title>login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Siempre se busca meter el boostrap y el style.css-->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles_login.css') }}">
   
</head>
<body>
  <div class = "container">
    <div class ="box-login">
      <form action="{{url('login')}}" method="post" id="login">
        @csrf
        <div class="form-floating mb-3">
          <input 
              type="email" 
              class="form-control @error('mail') is-invalid @enderror" 
              id="email" 
              placeholder="name@example.com" 
              name="email"
              value="{{old('email')}}"
           >
          @error('mail')
          <p class="text-danger">{{ $message }}</p>
          @enderror
          <label for="mail">Email address</label>
        </div>

        <div class="form-floating">
          <input type="password" class="form-control 
          @error('pwd') is-invalid @enderror"
          id="password" placeholder="Password" name="password">

          @error('pwd')
          <p class="text-danger">{{ $message }}</p>
          @enderror
          <label for="pwd">Password</label>
        </div>

        <div class="advice">
          @if(MessageUtils::whatMessage($message))

          @if ($errors->has('aviso'))
              <div class="alert alert-warning" role="alert">
                  {{ $errors->first('aviso') }}
              </div>  
          @endif
          @if($message = Session::get('message'))
              <div class="alert alert-info" role="alert">
                <p>
                  Usted no esta registrado puede hacerlo <a href="{{url('register')}}" class="alert-link">aqui</a> 
                </p>
              </div>
          @endif
        </div>

        <button type="submit" class="btn btn-primary" style="margin-left: 10px; margin-top: 10px;">
            Iniciar sesión
        </button>

        <button class= "btn btn-register" style="margin-right: 10px; margin-top: 10px; padding-left: 100px "> 
          <a href="{{url('register')}}"> Registrarse </a>
        </button>

      </form>
    </div> <!--Aqui se termina la caja de login-->
  </div> <!--Aqui se termina la caja donde se centrara la caja de login-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>
