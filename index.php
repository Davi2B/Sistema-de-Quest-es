<?php include 'header.php';?>
<div class="container col-md-6 offset-md-3">
  <br> 
  <h2 align="center"> "Sistema" de Questões</h2>
  <form method="POST" action="salvar.php">

<h5>Coloque suas informações aqui:</h5>
  <div class="row">
    <div class="col">
      <input  name="nome" type="text" class="form-control" placeholder=" Nome">
    </div>
    <div class="col">
      <select class="form-control" id="cursos" name="curso">
      <option></option>   
      <option>Informática</option>
      <option>Comércio</option>
      <option>Administração</option>
      <option>Enfermagem</option>
      
    </select>
    </div>
    <div class="col">
      <input  name="data" type="date" class="form-control" >
    </div>
  </div>

<div id="accordion">
  <h3>Questão 1</h3>
  <div>
    <p>
   <h2>Questão 1</h2>
  
    <legend>Marque uma alternativa: </legend>
    <label >A</label>
    <input type="radio" name="alternativa[0]" value="letra-a"><br>
    <label >B</label>
    <input type="radio" name="alternativa[1]" value="letra-b"><br>
    <label >C</label>
    <input type="radio" name="alternativa[2]" value="letra-c"><br>
  
    </p>
  </div>
  <h3>Questão 2</h3>
  <div>
    <p>
    <h2>Questão 2</h2>
 
    <legend>Marque uma alternativa: </legend>
    <label >A</label>
    <input type="radio" name="alternativa[3]" value="letra-a"><br>
    <label >B</label>
    <input type="radio" name="alternativa[4]" value="letra-b"><br>
    <label >C</label>
    <input type="radio" name="alternativa[5]" value="letra-c"><br>
  
    </p>
  </div>
  <h3>Questão 3</h3>
  <div>
    <p>
   <h2>Questão 3</h2>
 
    <legend>Marque uma alternativa: </legend>
    <label >A</label>
    <input type="radio" name="alternativa[6]" value="letra-a"><br>
    <label >B</label>
    <input type="radio" name="alternativa[7]" value="letra-b"><br>
    <label >C</label>
    <input type="radio" name="alternativa[8]" value="letra-c"><br>
 
    </p>
    
  </div>
  <h3>Questão 4</h3>
  <div>
    <p>
    <h2>Questão 4</h2>
 
    <legend>Marque uma alternativa: </legend>
    <label >A</label>
    <input type="radio" name="alternativa[9]"value="letra-a" ><br>
    <label >B</label>
    <input type="radio" name="alternativa[10]"value="letra-b"><br>
    <label >C</label>
    <input type="radio" name="alternativa[11]"value="letra-c" ><br>
 
    </p>
  </div>
</div> <br> <br>
<button type="submit" class="btn btn-primary col-md-6 offset-md-3">Cadastrar</button>
</form>
</div>
</body>
</html>