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
    
        <a href="/remuneraciones/create" class="btn ">Agregar registro
        <svg class="bi bi-plus-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
          </svg></a>
          <button class="btn ">Generar informe
            </button></br>

            <div class="dropdown">
              <abbr class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                2020
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">2019</a>
                <a class="dropdown-item" href="#">2018</a>
                <a class="dropdown-item" href="#">2017</a>
              </div>
            </div>

            <button class="btn">Enero</button>
            <button class="btn">Febrero</button>
            <button class="btn">Marzo</button>
            <button class="btn">Abril</button>
            <button class="btn">Mayo</button>
            <button class="btn">Junio</button>
            <button class="btn">Julio</button>
            <button class="btn">Agosto</button>
            <button class="btn">Septiembre</button>
            <button class="btn">Octubre</button>
            <button class="btn">Noviembre</button>
            <button class="btn">Diciembre</button>
        <table class="table">
            <thead class="">
              <tr>
                <th scope="col"></th>
                <th scope="col"></th>
                
                <th scope="col">Nombre</th>
                <th scope="col">Fecha</th>
                <th scope="col">Sueldo Base</th>
                <th scope="col">Bono viaje</th>
                <th scope="col">Tiempo de espera</th>
                <th scope="col">Gratificación</th>
                <th scope="col">Viático</th>
                <th scope="col">Viático2</th>
                <th scope="col">Movilización</th>
                <th scope="col">Colación</th>
                <th scope="col">De. Herramientas</th>
                <th scope="col">Fer. Anual</th>
                <th scope="col">Fer. Proporcional</th>
                <th scope="col">AFP porcentaje</th>
                <th scope="col">Salud</th>
                <th scope="col">Adicional</th>
                <th scope="col">Seg. cesantía</th>
                <th scope="col">Imp. único</th>
                <th scope="col">Peaje</th>
                <th scope="col">Gasto ruta</th>
                <th scope="col">Ant. ruta</th>
                <th scope="col">Anticipo</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            @foreach($remuneraciones as $remuneracion)    
                <tr>
                  <th><a href="/remuneraciones/{{$remuneracion->id}}/edit"> Editar </a>   </th>
                  <th>
                    <form method="POST" action="/remuneraciones/{{$remuneracion->id}}">
                      @method('DELETE')
                      @csrf
                      <input type="submit" class="btn" value="Eliminar">
                    </form>
                  </th>


                  <td>{{ $remuneracion->cam_id}}</td>
                  <td>{{ $remuneracion->rum_fch }}</td>
                  <td>{{ $remuneracion->rum_bse }}</td>
                  <td>{{ $remuneracion->rum_sue}}</td>
                  <td>{{ $remuneracion->rum_bvj }}</td>
                  <td>{{ $remuneracion->rum_tsp }}</td>
                  <td>{{ $remuneracion->rum_grt }}</td>
                  <td>{{ $remuneracion->rum_vet}}</td>
                  <td>{{ $remuneracion->rum_vgs }}</td>
                  <td>{{ $remuneracion->rum_pje }}</td>
                  <td>{{ $remuneracion->rum_mov }}</td>
                  <td>{{ $remuneracion->rum_clc }}</td>
                  <td>{{ $remuneracion->rum_hrr }}</td>
                  <td>{{ $remuneracion->rum_fan }}</td>
                  <td>{{ $remuneracion->rum_fpr }}</td>
                  <td>{{ $remuneracion->rum_afp }}</td>
                  <td>{{ $remuneracion->rum_sal }}</td>
                  <td>{{ $remuneracion->rum_adc }}</td>
                  <td>{{ $remuneracion->rum_scs }}</td>
                  <td>{{ $remuneracion->rum_iuc }}</td>
                  <td>{{ $remuneracion->rum_art }}</td>
                  <td>{{ $remuneracion->rum_ant }}</td>
                  <td>{{ $remuneracion->rum_sue }}</td>
                  
                 
                  
                </tr>
                @endforeach
              
              
              
            </tbody>
          </table>
           
        
   

</body>
</html>