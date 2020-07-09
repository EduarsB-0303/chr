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
    
        <button class="btn "> <a href="camioneros/create">Agregar registro</a> 
        <svg class="bi bi-plus-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
          </svg></button>

        
        <table class="table">
            <thead class="">
              <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col">Rut</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">FechaNacim.</th>
                <th scope="col">Dirección</th>
                <th scope="col">Sistema de salud</th>
                <th scope="col">Venc. carnet</th>
                <th scope="col">Talla ropa</th>
                <th scope="col">N° calzado</th>
                <th scope="col">N° banco</th>
                <th scope="col">N° contacto</th>
                <th scope="col">Sexo</th>
                <th scope="col">Estado</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach($camioneros as $camionero)    
              <tr>
                <th ><a href="/camioneros/{{$camionero->id}}/edit"> Editar </a>   </th>
             
                <th>
              <form  method="POST" action="/camioneros/{{$camionero->id}}">
                @method('DELETE')
                @csrf
                <input type="submit" class="btn" value="Eliminar">
              </form>
            </th>
                <td>{{$camionero->rut}}</td>
                <td>{{$camionero->chr_nom}}</td>
                <td>{{$camionero->chr_ape}}</td>
                <td>{{$camionero->chr_con}}</td>
                <td>{{$camionero->chr_nac}}</td>
                <td>{{$camionero->chr_dir}}</td>
                <td>{{$camionero->chr_sal}}</td>
                <td>{{$camionero->chr_tal}}</td>
                <td>{{$camionero->chr_cal}}</td>
                <td>{{$camionero->chr_ban}}</td>
                <td>{{$camionero->chr_cto}}</td>
                <td>{{$camionero->chr_gnr}}</td>
                <td>{{$camionero->estado}}</td>
              </tr>
              @endforeach
              
              
            </tbody>
          </table>
       
        
   

</body>
</html>