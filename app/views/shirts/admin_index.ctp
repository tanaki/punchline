<div class="shirts index">
	<h2><?php __('Shirts');?></h2>
	
	<div class="admin-shirt-grid">
	<?php
	$i = 0;
	foreach ($shirts as $shirt):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
		<div class="admin-shirt">
			<img class="admin-shirt-image" src="/img/shirts/medium/<?php echo $shirt['Shirt']['image']; ?>" alt="<?php echo $shirt['Shirt']['name']; ?>"/>
			<div class="admin-shirt-details">
				<strong><?php echo $shirt['Shirt']['name']; ?></strong>
				Lien : <?php echo $shirt['Shirt']['url']; ?><br/>
				Prix : <?php echo $shirt['Shirt']['price']; ?> &euro;<br/>
				Reference : <?php echo $shirt['Shirt']['reference']; ?><br/>
				<span>Description : <?php echo $shirt['Shirt']['description']; ?></span>
				<div class="admin-shirt-actions">
					<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $shirt['Shirt']['id'])); ?>
					<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $shirt['Shirt']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $shirt['Shirt']['id'])); ?>
				</div>
			</div>
		</div>
		
	<?php endforeach; ?>
	</div>
	
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Shirt', true), array('action' => 'add')); ?></li>
		<!--li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li-->
		<li><?php echo $this->Html->link(__('List Colors', true), array('controller' => 'colors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Color', true), array('controller' => 'colors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sizes', true), array('controller' => 'sizes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Size', true), array('controller' => 'sizes', 'action' => 'add')); ?> </li>
	</ul>
</div>