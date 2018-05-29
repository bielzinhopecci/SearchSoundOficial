<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Search Sound - Fale Conosco</title>

    <!-- Bootstrap core CSS -->
    <?php include 'includes/link.php'; ?> 
  </head>

<body>

    <header>
    <?php 
        $pagina='contato';
        include 'includes/menu.php'; ?> 
    </header>

    
<section class="container">
    <div class="my-5 text-center">
        <h1 class="display-4">Fale Conosco</h1>
    </div>
        <form class="rounded p-4 box-shadow" action="#" method="POST">
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="clienteNome">Nome</label>
                    <input type="text" class="form-control" id="clienteNome">
                </div>
                    <div class="form-group">
                      <label for="clienteEmail">Email</label>
                      <input type="email" class="form-control" id="clienteEmail">
                    </div>
                    <div class="form-group">
                      <label for="clienteEmail">Telefone</label>
                      <input type="tel" class="form-control" id="clienteTelefone">
                    </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="clienteMensagem">Mensagem</label>
                <textarea id="clienteMensagem" class="form-control" rows="5"></textarea>
              </div>
                <button type="submit" class="btn btn-dark p-3">Enviar Mensagem</button>
              </div>
          </div> 
        </form>
</section>


        <footer>
       <?php include 'includes/footer.php'; ?> 
        </footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<?php include 'includes/script.php'; ?> 

</body>
</html>