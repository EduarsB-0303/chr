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

    <form class="form-group" method="POST" action="/remuneraciones/{{$remuneracion->id}}">
    @method('PUT')
    @csrf

     <div class="container">
        Fecha
        <div class="input-group mb-3">  
        <input type="text" class="form-control" value="{{$remuneracion->rum_fch}}" name="rum_fecha" placeholder="Fecha" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        BSE
        <div class="input-group mb-3">  
              <input type="text" class="form-control" value="{{$remuneracion->rum_bse}}" name="rum_bse" placeholder="BSE" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        SUE
        <div class="input-group mb-3">  
              <input type="text" class="form-control" value="{{$remuneracion->rum_sue}}" name="rum_sue" placeholder="SUE" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        BVJ
        <div class="input-group mb-3">  
              <input type="text" class="form-control" value="{{$remuneracion->rum_bvj}}" name="rum_bvj" placeholder="BJV" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        TSP
        <div class="input-group mb-3">  
              <input type="text" class="form-control" value="{{$remuneracion->rum_tsp}}" name="rum_tsp" placeholder="TSP" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        GRT
        <div class="input-group mb-3">  
              <input type="text" class="form-control" value="{{$remuneracion->rum_grt}}" name="rum_grt" placeholder="GRT" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        VET
        <div class="input-group mb-3">  
          <input type="text" class="form-control" value="{{$remuneracion->rum_vet}}" name="rum_vet" placeholder="VET" aria-label="Username" aria-describedby="basic-addon1">
      </div>
        VGS
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$remuneracion->rum_vgs}}" name="rum_vgs" placeholder="VGS" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        PJE
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$remuneracion->rum_pje}}" name="rum_pje" placeholder="PJE" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        MOV
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$remuneracion->rum_mov}}" name="rum_mov" placeholder="MOV" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        CLC
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$remuneracion->rum_clc}}" name="rum_clc" placeholder="CLC" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        HRR
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$remuneracion->rum_hrr}}" name="rum_hrr" placeholder="HRR" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        FAN
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$remuneracion->rum_fan}}" name="rum_fan" placeholder="FAN" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        FPR
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$remuneracion->rum_fpr}}" name="rum_fpr" placeholder="FPR" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        AFP
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$remuneracion->rum_afp}}" name="rum_afp" placeholder="AFP" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        SAL
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$remuneracion->rum_sal}}" name="rum_sal" placeholder="SAL" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        ADC
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$remuneracion->rum_adc}}" name="rum_adc" placeholder="ADC" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        SCS
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$remuneracion->rum_scs}}" name="rum_scs" placeholder="SCS" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        IUC
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$remuneracion->rum_iuc}}" name="rum_iuc" placeholder="IUC" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        ART
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$remuneracion->rum_art}}" name="rum_art" placeholder="ART" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        ANT
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$remuneracion->rum_ant}}" name="rum_ant" placeholder="ANT" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        Camionero
        <div class="input-group mb-3">  
      <input type="text" class="form-control" value="{{$remuneracion->cam_id}}" name="cam_id" placeholder="Camionero" aria-label="Username" aria-describedby="basic-addon1" disabled>
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