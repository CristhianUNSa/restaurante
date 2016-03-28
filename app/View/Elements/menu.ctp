<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Bootstrap theme</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Meseros <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo $this->HTML->link('Lista de Meseros',
                                              array('controller'=>'meseros',
                                                    'action'=>'index')) 
                                              ?></li>
            <li><?php echo $this->HTML->link('Nuevo Mesero',
                                              array('controller'=>'meseros',
                                                    'action'=>'add')) 
                                              ?></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mesas <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->Html->link('Lista Mesas', array('controller' => 'mesas', 'action' => 'index')) ?></li>
            <li><?php echo $this->Html->link('Nueva Mesa', array('controller' => 'mesas', 'action' => 'add')) ?></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cocineros <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->Html->link('Lista Cocineros', array('controller' => 'cocineros', 'action' => 'index')) ?></li>
            <li><?php echo $this->Html->link('Nuevo Cocinero', array('controller' => 'cocineros', 'action' => 'add')) ?></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Platillos <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><?php echo $this->Html->link('Lista Platillos', array('controller' => 'platillos', 'action' => 'index')) ?></li>
            <li><?php echo $this->Html->link('Nuevo Platillo', array('controller' => 'platillos', 'action' => 'add')) ?></li>
            <li role="separator" class="divider"></li>
            <li><?php echo $this->Html->link('Lista Categorias', array('controller' => 'categoria_platillos', 'action' => 'index')) ?></li>
            <li><?php echo $this->Html->link('Nueva Categoria', array('controller' => 'categoria_platillos', 'action' => 'add')) ?></li>
            
          </ul>
        </li>


        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-header">Nav header</li>
            <li><a href="#">Separated link</a></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>