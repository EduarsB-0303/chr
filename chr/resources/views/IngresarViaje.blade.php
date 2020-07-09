<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
     crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark">
        <ul class="nav justify-content-center">
          <li class="nav-item" >
            <a class="nav-link active" style="color: white;" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white;"  href="/camioneros">Camioneros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: white;"  href="/viajes">Viajes</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" style="color: white;"  href="/remuneraciones">Remuneraciones</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" style="color: white;"  href="/users">Usuarios</a>
          </li>
            
          </ul>
        </ul>
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" href="#" style="color: White;">Logged as Admin</a>
          </li>
          <li class="nav-item">
            <img src="images/Logo.PNG" width="100px" height="35px">
        </li>
          
        </ul>
      </nav>

    <form class="form-group" method="POST" action="/viajes">
    @csrf
     <div class="container">
        Origen
        <div class="input-group mb-3">  
              <input type="text" class="form-control" name="ori" placeholder="Origen" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        
        Destino
        <div class="input-group mb-3">  
              <input type="text" class="form-control" name="des" placeholder="Destino" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Guía
        <div class="input-group mb-3">  
              <input type="text" class="form-control" name="gui" placeholder="Guía" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Toneladas
        <div class="input-group mb-3">  
              <input type="text" class="form-control" name="ton" placeholder="Toneladas" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Valor de tonelada
        <div class="input-group mb-3">  
              <input type="text" class="form-control" name="vto" placeholder="Vto" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Pactado
        <div class="input-group mb-3">  
              <input type="text" class="form-control" name="pct" placeholder="pct" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Material
        <div class="input-group mb-3">  
              <input type="text" class="form-control" name="mat" placeholder="mat" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Detalles
        <div class="input-group mb-3">  
              <input type="text" class="form-control" name="det" placeholder="det" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Camionero
        <div class="input-group mb-3">  
              <input type="text" class="form-control" name="camionero_id" placeholder="Camionero" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Camión
        <div class="input-group mb-3">  
              <input type="text" class="form-control" name="camion_id" placeholder="Camión" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        
        
      
      <button class="btn " type="submit">Agregar registro
        <svg class="bi bi-plus-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
          </svg></button>

    </div>        
    </form>      
            
    
   

</body>
</html>