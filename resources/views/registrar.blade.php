
<html>
<head>
    <title>registrar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
          <p class="lead">Techstars Startup Weekend Calceta Agrotech</p>
        </div>

        <form role="form" method="post" action="{{url('/registrar/ingresar')}}">
          @csrf
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Dirección de correo electrónico</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="email" placeholder="Dirección de correo electrónico">
              </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre">
              </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Apellido:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="apellido" placeholder="Apellido">
              </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Número de teléfono celular:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="telefono" placeholder="Número de teléfono celular">
              </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Perfil:</label>
                <div class="col-sm-10">
                  <select  class="combobox form-control" name="tipo">
                      <option value="" selected="selected">Seleccionar Perfil</option>
                      
                      <option value="1">Desarrollador</option>
                      <option value="2">Diseñador</option>
                      <option value="3">Negocios</option>
                      <option value="4">Expert@ en su Industria</option>
                      
                  </select>
              </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nivel de Educación:</label>
                <div class="col-sm-10">
                  <select  class="combobox form-control" name="niveleducacion">
                      <option value="" selected="selected">Seleccionar Nivel de Educación</option>
                      
                      <option value="1">Aun no término la escuela</option>
                      <option value="2">Básica</option>
                      <option value="3">Media</option>
                      <option value="4">Licenciatura</option>
                      <option value="5">Maestría</option>
                      <option value="6">Doctorado</option>
                      
                  </select>
              </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">¿Tiene alguna necesidad única?:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="necesidad" placeholder="¿Tiene alguna necesidad única?">
              </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Edad:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="edad" placeholder="Edad">
              </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Sexo:</label>
                <div class="col-sm-10">
                  <select  class="combobox form-control" name="sexo">
                      <option value="" selected="selected">Seleccionar Sexo</option>
                      
                      <option value="1">Mujer</option>
                      <option value="2">Hombre</option>
                      
                  </select>
              </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Talla Camiseta:</label>
                <div class="col-sm-10">
                  <select  class="combobox form-control" name="tallacamisa">
                      <option value="" selected="selected">Seleccionar talla</option>
                      
                      <option value="1">XS</option>
                      <option value="2">S</option>
                      <option value="3">M</option>
                      <option value="4">L</option>
                      <option value="5">XL</option>
                      <option value="6">XXL</option>
                      
                  </select>
              </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">¿Por qué decidiste participar?:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="decidisteparticipar" placeholder="¿Por qué decidiste participar?">
              </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">¿Te gustaría estar informado acerca de tu comunidad local a través de Startup Digest de tu comunidad?:</label>
                <div class="col-sm-10">
                  <select  class="combobox form-control" name="estarinformadocomunidad">
                      <option value="" selected="selected">Seleccionar</option>
                      
                      <option value="1">SI</option>
                      <option value="2">NO</option>
                      
                  </select>
              </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">¿Te gustaría estar informado acerca de la comunidad de Techstars Startup Weekend a través de nuestro boletín electrónico?:</label>
                <div class="col-sm-10">
                  <select  class="combobox form-control" name="estarinformadoboletin">
                      <option value="" selected="selected">Seleccionar</option>
                      
                      <option value="1">SI</option>
                      <option value="2">NO</option>
                      
                  </select>
              </div>
            </div>
            <div class="row">
                
                   <button type="submit" class="btn btn-primary btn-lg btn-block">Registrar</button>
               
            </div>
        
        </form>
        
    </div>  
</body>
</html>