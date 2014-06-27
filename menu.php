<div class="row" style="margin-top: 20px;">
<div class="col-md-12">
  <div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Navegação</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <li <?php if(!isset($_GET['page'])){ echo "class='active'";} ?>><a href="index.php">Início</a></li>
        <li><a href="#">Empresa</a></li>
        <li><a href="#">Produtos</a></li>
        <li><a href="#">Serviços</a></li>
        <li <?php if($_GET['page'] == 'contato'){echo "class='active'";} ?>><a href="index.php?page=contato">Contato</a></li>
      </ul>
    </div><!--final navbar-collapse -->
  </div><!--final da navbar-->
</div><!--final da coluna-->
</div>