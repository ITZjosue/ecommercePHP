<nav style="background:black" class="navbar navbar-expand-lg">
        <a style='color:white;' class="navbar-brand" href="catalogo.php"><svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor" class="bi bi-cloudy-fill" viewBox="0 0 16 16">
  <path d="M13.405 7.027a5.001 5.001 0 0 0-9.499-1.004A3.5 3.5 0 1 0 3.5 13H13a3 3 0 0 0 .405-5.973z"/>
</svg> CloudStore</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span style="color:white" class="navbar-toggler-icon"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
</svg></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav d-flex justify-content-end w-100">
            <li class="nav-item">
              <a style="font-size: 1.5em;color:white;" class="nav-link" href="catalogo.php">Home</a>
            </li>
            <?php
              if(!isset($_SESSION['user'])){
                echo "<li class='nav-item'>
                        <a style='font-size: 1.5em;color:white;' class='nav-link' href='login_usuarios.php'>Intranet</a>
                      </li>";
              }
            ?>
            <?php
              if(!isset($_SESSION['tipo']) && isset($_SESSION['user'])){
                echo "<li class='nav-item'>
                        <a style='font-size: 1.5em;color:white;' class='nav-link' href='carrito_lista.php'>Carrito</a>
                      </li>";
              }
            ?>
            <?php
              if(isset($_SESSION['user'])){
                echo "<li class='nav-item'>
                        <a style='font-size: 1.5em;color:white;' class='nav-link' href='logout.php'>Logout</a>
                      </li>";
              }
            ?>
            <?php
              if(!isset($_SESSION['user'])){
                echo "<li class='nav-item'>
                        <a style='font-size: 1.5em;color:white;' class='nav-link' href='clientes.php'>Clientes</a>
                      </li>";
              }
            ?>
            <?php
              if(isset($_SESSION['tipo'])){
                echo "<li class='nav-item'>
                        <a style='font-size: 1.5em;color:white;' class='nav-link' href='catalogo_edit.php'>Editar catalogo</a>
                      </li>";
              }            
            ?>
            <?php
              if(isset($_SESSION['user']) && !isset($_SESSION['tipo']) ){
                echo "<li class='nav-item'>
                        <a style='font-size: 1.5em;color:white;' class='nav-link' href='pedidos.php'>Pedidos</a>
                      </li>";
              }            
            ?>
            <?php
              if(isset($_SESSION['tipo'])){
                echo "<li class='nav-item'>
                        <a style='font-size:1.5em;color:white;' href='producto_add.php' class='nav-link'>Registrar Producto</a>
                      </li>";
              }
            ?>
          </ul>
        </div>
    </nav>