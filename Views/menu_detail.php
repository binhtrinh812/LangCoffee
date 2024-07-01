<!-- Menu Detail -->
<section class="product-detail" id="product-detail">
    <div class="container-detail">
        <h2 class="section_title">Chi tiết sản phẩm</h2>
        <div class="detail">
            <div class="image">
                <img src="./Images/Coffee/<?= htmlspecialchars($productDetail['sp_anh']) ?>">
            </div>
            <div class="content">
                <h1 class="name"><?= $productDetail['sp_name'] ?></h1>
                <div class="price"><?= number_format($productDetail['sp_gia'], 0, ',', '.') ?> VNĐ</div>
                <div class="description">
                    Sản phẩm hiện chưa hỗ trợ đặt hàng trực tiếp tại website.
                    Quý khách vui lòng liên hệ hotline 1900 3013 hoặc Fanpage <span><a href="">Phê La</a></span> để được
                    hỗ trợ đặt hàng. <br>
                    Phê La xin cảm ơn!
                </div>
                <div class="buttons">
                    <button>Check Out</button>
                </div>
            </div>
        </div>
        <h3 class="section_title section_titleh3">Thông tin chi tiết</h3>
        <div class="text_detail">
            <p>
                <?= $productDetail['sp_thongtin'] ?>
            </p>
        </div>

        <h3 class="section_title section_titleh3">Xem combo khác</h3>
        <div class="menu-items">
            <?php foreach ($newestProducts as $newProduct) : ?>
                <div class="menu-item">
                    <a href="index.php?page=menu&method=menudetail&id=<?= $newProduct['sp_id'] ?>">
                        <div class="menu-item-content">
                            <div class="menu-item-img">
                                <img src="./Images/Coffee/<?= htmlspecialchars($newProduct['sp_anh']) ?>" alt="menu item image">
                            </div>
                        </div>
                        <div class="menu-item-info">
                            <a href="index.php?page=menu&method=menudetail&id=<?= $newProduct['sp_id'] ?>" class="menu-item-name"><?= $newProduct['sp_name'] ?></a>
                            <p class="menu-item-price"><?= number_format($newProduct['sp_gia'], 0, ',', '.') ?> VNĐ</p>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>