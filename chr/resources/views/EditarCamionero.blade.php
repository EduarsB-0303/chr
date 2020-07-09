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

    <form class="form-group" method="POST" action="/camioneros/{{$camionero->id}}">
    @method('PUT')
    @csrf
    
     <div class="container">
        Rut
        <div class="input-group mb-3">  
        <input type="text" class="form-control" value="{{$camionero->rut}}" name="chr_rut" placeholder="Rut" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Nombre
        <div class="input-group mb-3">  
              <input type="text" class="form-control" value="{{$camionero->chr_nom}}" name="chr_nom" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Apellido
        <div class="input-group mb-3">  
              <input type="text" class="form-control" value="{{$camionero->chr_ape}}" name="chr_ape" placeholder="Apellido" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Fecha de Contrato
        <div class="input-group mb-3">  
              <input type="text" class="form-control" value="{{$camionero->chr_con}}"  name="chr_con" placeholder="Fecha de Contrato" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Fecha de Nacimiento
        <div class="input-group mb-3">  
              <input type="text" class="form-control" value="{{$camionero->chr_nac}}"  name="chr_nac" placeholder="Fecha de Nacimiento" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Dirección
        <div class="input-group mb-3">  
              <input type="text" class="form-control" value="{{$camionero->chr_dir}}" name="chr_dir" placeholder="Dirección" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Sistema de salud
        <div class="input-group mb-3">  
          <input type="text" class="form-control" value="{{$camionero->chr_sal}}" name="chr_sal" placeholder="Sistema de salud" aria-label="Username" aria-describedby="basic-addon1">
      </div>
        Talla ropa
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$camionero->chr_tal}}" name="chr_tal" placeholder=" Talla ropa " aria-label="Username" aria-describedby="basic-addon1">
        </div>
        N° calzado
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$camionero->chr_cal}}" name="chr_cal" placeholder="N° calzado" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        N° banco
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$camionero->chr_ban}}" name="chr_ban" placeholder="N° banco" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        N° contacto
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$camionero->chr_cto}}" name="chr_cto" placeholder="N° contacto" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Sexo
        <div class="input-group mb-3">  
      <input type="text"  class="form-control" value="{{$camionero->chr_gnr}}" name="chr_gen" placeholder="Sexo" aria-label="Username" aria-describedby="basic-addon1" disabled>
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