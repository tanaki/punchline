<div id="titles">
	<img src="img/site/titles/title_teeshirts_24.png" alt="Tee Shirts" class="subtitle" id="subtitle" />
	<img src="img/site/titles/title_boutique_24.png" alt="Boutique" class="title" id="title" />
</div>

<div id="shirts" class="main-content">
	<div class="inner">
		<div id="shirts-carousel">
			<div class="carousel-list-container">
				<ul>
				<?php 
					$i = 1;
					foreach($shirts as $shirt):
				?>
					<li><a href="#" data-index="<?php echo $i; ?>" class="shirt"><img src="/img/shirts/medium/<?php echo $shirt->image; ?>" alt="<?php echo $shirt->name; ?>" /></a></li>
				<?php 
					$i++;
					endforeach; 
				?>
				</ul>
			</div>
			<a href="#" class="prev">PREV</a>
			<a href="#" class="next">NEXT</a>
		</div>
	</div>
</div>

<div id="modal">
	<div id="inner-modal">
		<ul id="shirt-carousel">
		<?php foreach($shirts as $shirt): ?>
			<li class="shirt-carousel-item">
				<span class="left-modal">
					<img src="img/shirts/large/<?php echo $shirt->image; ?>" alt="<?php echo $shirt->name; ?>" />
				</span>
				<span class="right-modal">
					<span class="right-inner-modal">
						<!--img src="img/shirts/titles/<?php echo $shirt->image; ?>" alt="<?php echo $shirt->name; ?>" /-->
						<span class="title-shirt">"<span><?php echo $shirt->name; ?></span>"</span>
						<span class="price"><strong><?php echo $shirt->price; ?> &euro;</strong></span>
						<span class="color">
							<strong class="white">Couleurs : </strong>
							<?php foreach( $shirt->Color as $color ): ?>
							<span class="color-preview" style="background:#<?php echo $color->hexa; ?>;"><?php echo $color->name; ?></span>
							<?php endforeach; ?>
						</span>
						<span class="reference">
							<strong class="white">R&eacute;f&eacute;nce : </strong>
							<span class="grey"><?php echo $shirt->reference; ?></span>
						</span>
						<span class="size">
							<strong class="white">Tailles Disponibles</strong>
							<span class="grey">
								<?php 
									foreach( $shirt->Size as $size ) {
										echo $size->name.' ';
									}
								?>
							</span>
						</span>
						<a href="<?php echo $shirt->url; ?>" target="_blank" class="btn-buy">Acheter maintenant</a>
					</span>
				</span>
			</li>
		<?php endforeach; ?>
		</ul>
		<span class="pagin-caption"><span>Les autres Tee-shirts</span></span>
	</div>
</div>