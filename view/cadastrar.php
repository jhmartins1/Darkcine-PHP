<?php
include "cabecario.php";
?>
<body>
<nav class="nav-extended grey darken-4">
    <div class="nav-wrapper">
      <ul id="nav-mobile" class="right">
        <li><a href="/">Galeria</a></li>
        <li><a href="/novo">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
        <h1>Darkcine</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent grey darken-2">
        <li class="tab"><a href="#test1" class="active">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>
  <br>
  <div class="row">
    <form method="POST" enctype="multipart/form-data">
    <div class="col s6 offset-s3">
      <div class="card">
        <div class="card-content">
          <span class="card-title" style="font-size:30px">Cadastrar filme</span>
          <br>
          <!-- Titulo -->
          <div class="input-field">
            <label for="titulo">Titulo:</label>
            <input id="titulo" type="text" name="titulo" class="validate" required>
          </div>
          <!-- Sinopse -->
          <div class="input-field">
            <label for="sinopse">Sinopse</label>
            <textarea id="sinopse" name="sinopse" class="materialize-textarea"></textarea>
          </div>
          <!-- Nota -->
          <div class="input-field">
            <label for="nota">Nota</label>
            <input id="nota" type="number" name="nota" step=".1" min="0" max="10" class="validate" required>
          </div>
          <!-- Capa -->
          <div class="file-field input-field">
            <div class="btn grey darken-3">
              <span>Capa</span>
              <input type="file" name="poster_file">
            </div>
            <div class="file-path-wrapper">
              <input class="file-path validate" name="poster" type="text">
            </div>
          </div>
        </div>
        
        <div class="card-action">
          <a class="btn grey waves-effect waves-light" href="/">Cancelar</a>
          <button type="submit" class="waves-effect waves-light btn black" style="float:right">Cadastrar</button>
        </div>
      </div>
    </div>
  </form>
  </div>
</body>