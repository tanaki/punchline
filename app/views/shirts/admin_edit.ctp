<div class="shirts form">
<?php echo $this->Form->create('Shirt');?>
	<fieldset>
		<legend><?php __('Admin Edit Shirt'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('image');
		echo $this->Form->input('url');
		echo $this->Form->input('price');
		echo $this->Form->input('reference');
		echo $this->Form->input('description');
		echo $this->Form->input('Category');
		echo $this->Form->input('Color');
		echo $this->Form->input('Size');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Shirt.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Shirt.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Shirts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Colors', true), array('controller' => 'colors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Color', true), array('controller' => 'colors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sizes', true), array('controller' => 'sizes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Size', true), array('controller' => 'sizes', 'action' => 'add')); ?> </li>
	</ul>
</div>