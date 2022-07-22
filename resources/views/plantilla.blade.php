
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    
  </head>
  <body>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Finlandica:wght@500&family=Manrope&family=Orbitron:wght@500&display=swap');


                  body{
                   min-height: 100%;
                   width: 100%;
                   margin: 0;
                   font-family: 'Manrope', sans-serif;
                   line-height: 1.6;
                    }

      footer{
        width: 100%;
        height: auto;
        margin-bottom: 0 !important;
        position: absolute;
        bottom: 0  !important;
      }

      footer i{
        color: white;
        font-size: 35px
      }
      
      .font{
        font-family: 'Finlandica', sans-serif;
      }
    </style>

      <div>
        <nav class="navbar navbar-dark font bg-dark" aria-label="First navbar example">
          <div class="container-fluid">
          <a class="navbar-brand" href="#">LARAVEL 1.0 v</a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

       <div class="navbar-collapse collapse" id="navbarsExample01" style="">
         <ul class="navbar-nav me-auto mb-2">
           <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a>
           </li>
           
          <li class="nav-item">
            <a class="nav-link" href="{{url('Empleados')}}">Empleados (CRUD)</a>
           </li>
           <li class="nav-item">
            <a class="nav-link" href="{{ route('nosotros')}}">Nosotros</a>
           </li>
        </ul>
      </div>
    </div>
  </nav>
      </div>
  		
      <div class="container p-5">
  			@yield('seccion')
  		</div>

       <!-- <footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
         <div class="container text-center">
            <small>Copyright &copy; José Desing</small>
        </div>
       </footer>-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

        <script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>

  </body>
</html>