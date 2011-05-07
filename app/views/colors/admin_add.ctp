<div class="colors form">
<?php echo $this->Form->create('Color');?>
	<fieldset>
		<legend><?php __('Admin Add Color'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('hexa');
		echo $this->Form->input('Shirt');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Colors', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Shirts', true), array('controller' => 'shirts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Shirt', true), array('controller' => 'shirts', 'action' => 'add')); ?> </li>
	</ul>
</div>