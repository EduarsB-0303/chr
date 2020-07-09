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

    <form class="form-group" method="POST" action="/viajes/{{$viaje->id}}">
    @method('PUT')
    @csrf

     <div class="container">
        VIJ
        <div class="input-group mb-3">  
        <input type="text" class="form-control" value="{{$viaje->vij_ori}}" name="vij_ori" placeholder="Fecha" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        BSE
        <div class="input-group mb-3">  
              <input type="text" class="form-control" value="{{$viaje->vij_des}}" name="vij_des" placeholder="BSE" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        SUE
        <div class="input-group mb-3">  
              <input type="text" class="form-control" value="{{$viaje->vij_gui}}" name="vij_gui" placeholder="SUE" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        BVJ
        <div class="input-group mb-3">  
              <input type="text" class="form-control" value="{{$viaje->vij_ton}}" name="vij_ton" placeholder="BJV" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        TSP
        <div class="input-group mb-3">  
              <input type="text" class="form-control" value="{{$viaje->vij_vtp}}" name="vij_vtp" placeholder="TSP" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        GRT
        <div class="input-group mb-3">  
              <input type="text" class="form-control" value="{{$viaje->vij_pct}}" name="vij_pct" placeholder="GRT" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Material
        <div class="input-group mb-3">  
            <input type="text" class="form-control" value="{{$viaje->vij_mat}}" name="vij_mat" placeholder="GRT" aria-label="Username" aria-describedby="basic-addon1">
         </div>
        Camión
        <div class="input-group mb-3">  
        <input type="text" class="form-control" value="{{$viaje->vij_cam}}" name="vij_cam" placeholder="GRT" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        Camionero
        <div class="input-group mb-3">  
        <input type="text" class="form-control" value="{{$viaje->vij_cmn}}" name="vij_cmn" placeholder="GRT" aria-label="Username" aria-describedby="basic-addon1">
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