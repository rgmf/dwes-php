<!DOCTYPE html>
<html>
  <head>
    <title>.: DWES :.</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <header>
      <h1>DW(iaj)ES</h1>
    </header>

    <?php
    include_once("../parts/menu.php")
    ?>

    <main>
      <section>
	<article>
	  <h2>Añade un nuevo viaje</h2>
	  <form action="/travels/create.php" method="post">
	    <p>
	      Nombre del viaje:<br>
	      <input type="text" name="name" value="">
	      <span style="color: red;"></span>
	    </p>
	    <p>
	      Lugares visitados (separados por comas):<br>
	      <input type="text" name="locations" value="">
	      <span style="color: red;"></span>
	    </p>
	    <p>
	      Valoración:<br>
	      <input type="text" name="stars" value="">
	      <span style="color: red;"></span>
	    </p>
	    <p>
	      <input type="submit" value="Aceptar">
	    </p>
	  </form>
	</article>
      </section>
    </main>

    <footer>
      <p><strong>&copy; Román Martínez</strong></p>
    </footer>
  </body>
</html>
