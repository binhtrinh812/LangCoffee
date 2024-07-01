    <!-- Menu -->
    <section class="menu" id="menu">
        <div class="products">
            <div class="container-product">
                <div class="sidebar">
                    <ul>
                        <?php for ($i = 1; $i <= 11; $i++) : ?>
                            <li><a href="#combo<?= $i ?>"><?= $danhmuc[$i]['danhmuc_name'] ?></a></li>
                        <?php endfor; ?>
                    </ul>
                </div>
                <div class="product-container">
                    <div class="product-item">
                        <?php for ($i = 1; $i <= 11; $i++) : ?>
                            <section id="combo<?= $i ?>" class="combo-section">
                                <h2 class="section_title"><?= htmlspecialchars($danhmuc[$i]['danhmuc_name']) ?></h2>
                                <div class="product-items">
                                    <?php foreach ($danhmuc[$i]['products'] as $product) : ?>
                                        <div class="product">
                                            <div class="product-content">
                                                <div class="product-img">
                                                    <img src="./Images/Coffee/<?= htmlspecialchars($product['sp_anh']) ?>" alt="product image">
                                                </div>
                                                <div class="product-btns">
                                                    <a href="index.php?page=menu&method=menudetail&id=<?= $product['sp_id'] ?>" class="btn-buy"> buy now
                                                        <span><i class='bx bx-cart-add'></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><?= htmlspecialchars($product['sp_name']) ?></a>
                                                <p class="product-price">$ <?= htmlspecialchars($product['sp_gia']) ?></p>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </section>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>