<div class="container">
	<div class="row">
		<div class="col-md-6">
		<?php echo $this->Form->create('Cocinero', array('role' => 'form')); ?>
			<fieldset>
				<legend><?php echo __('Agregar Cocinero'); ?></legend>
			<?php
				echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
				echo $this->Form->input('apellido', array('class' => 'form-control', 'label' => 'Apellido'));
				echo $this->Form->input('Platillo', array('class' => 'form-control', 'label' => 'Platillo'));
			?>
			</fieldset>
		<?php echo $this->Form->end(array('label' => 'Crear Cocinero', 'class' =>'btn btn-success')); ?>
		<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    <?php echo __('Acciones'); ?> <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li><?php echo $this->Html->link(__('Listar Cocineros'), array('action' => 'index')); ?></li>
			    <li class="divider"></li>
				<li><?php echo $this->Html->link(__('Listar Platillos'), array('controller' => 'platillos', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Nuevo Platillo'), array('controller' => 'platillos', 'action' => 'add')); ?></li>
			  </ul>
			</div>
		</div>
	</div>
</div>
