<div id="titles">
    <img src="img/site/titles/title_teeshirts_24.png" alt="Tee Shirts" class="subtitle" />
    <img src="img/site/titles/title_boutique_24.png" alt="Boutique" class="title" />
</div>

<div id="shop">
    <div class="inner">
        <a href="#" class="shop-prev">Prev</a>
        <ul>
        <?php foreach ($this->shirts as $shirt): ?>
            <li><a class="shirt" href="shirt?id=1"><img src="img/shirts/medium/shirt_1.png" alt="Tee Shirt 1" /></a></li>
        <?php endforeach; ?>
        </ul>
        <a href="#" class="shop-next">Next</a>
    </div>
</div>

<div id="modal">
    <div id="inner-modal">
        <ul id="shirt-carousel">
        <?php foreach ($this->shirts as $shirt): ?>
                <li class="shirt-carousel-item">
                    <span class="left-modal">
                        <img src="img/shirts/large/shirt_2.png" alt="image shirt" />
                    </span>
                    <span class="right-modal">
                        <span class="right-inner-modal">
                            <img src="img/shirts/titles/shirt_1.png" alt="Tavais jamais entendu" />
                            <span class="price"><strong>50 &euro;</strong></span>
                            <span class="color">
                                <strong class="white">Couleurs : </strong>
                                <span class="color-preview" style="background:#fff;"></span>
                                <span class="color-preview" style="background:#f0f;"></span>
                                <span class="color-preview" style="background:#ff0;"></span>
                                <span class="color-preview" style="background:#0ff;"></span>
                            </span>
                            <span class="reference">
                                <strong class="white">R&eacute;f&eacute;nce : </strong>
                                <span class="grey">12345</span>
                            </span>
                            <span class="size">
                                <strong class="white">Tailles Disponibles</strong>
                                <span class="grey">XS S M L XL XXL</span>
                            </span>
                            <a href="#" class="btn-buy">Acheter maintenant</a>
                        </span>
                    </span>
                </li>
        <?php endforeach; ?>
        </ul>
        <span class="pagin-caption">Les autres Tee-shirts</span>
    </div>
</div>