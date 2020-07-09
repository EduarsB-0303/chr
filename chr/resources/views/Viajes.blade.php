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
    
        <a href='/viajes/create' class="btn ">Agregar registro
        <svg class="bi bi-plus-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
          </svg></a>
          <button class="btn ">Ver estadísticas
            </button>
            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Johannes El Ejemplo
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">2019</a>
                <a class="dropdown-item" href="#">2018</a>
                <a class="dropdown-item" href="#">2017</a>
              </div>
            </div>

            <div class="dropdown">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <th scope="col">Origen</th>
                <th scope="col">Destino.</th>
                <th scope="col">N° Guía</th>
                <th scope="col">Toneladas</th>
                <th scope="col">Valor toneladas</th>
                <th scope="col">Pactado</th>
                <th scope="col">Material</th>
                
                <th scope="col">Detalles</th>
                <th scope="col">Camionero</th>
                <th scope="col">Camión</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
            @foreach($viajes as $viaje)    
                <tr>
                  <th > <a href="/viajes/{{$viaje->id}}/edit">Editar</a></th>
                  <th>
                  <form method = "POST" action="/viajes/{{$viaje->id}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Eliminar" class="btn">
                    </form> 
                  </th>
                  <td>{{$viaje->vij_ori}}</td>
                  <td>{{$viaje->vij_des}}</td>
                  <td>{{$viaje->vij_gui}}</td>
                  <td>{{$viaje->vij_ton}}</td>
                  <td>{{$viaje->vij_vto}}</td>
                  <td>{{$viaje->vij_pct}}</td>
                  <td>{{$viaje->vij_mat}}</td>
                  <td>{{$viaje->vij_det}}</td>
                  <td>{{$viaje->cam_id}}</td>
                  <td>{{$viaje->cmn_id}}</td>
                  
                  
                </tr>
            @endforeach
             
              
              
            </tbody>
          </table>
           
        
   

</body>
</html>