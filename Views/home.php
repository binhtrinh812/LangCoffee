<section class="hero_section">
        <div class="section_container">
            <div class="hero_container">
                <div class="text_section">
                    <h2>Tao cũng cần chữa lành</h2>
                    <h3>Hãy để bạn thân bạn dí deadline vào 00:00</h3>
                    <p>
                        Tao xin chúng mày, hãy dí deadline một cách tinh tế hơn!
                    </p>
                    <div class="hero_section_button">
                        <a href="/LangCoffee/menu"><button class="button">Cà phê</button></a>
                        <a href="/LangCoffee/dich-vu"><button class="button">Kể truyện</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about_us" id="about">
        <div class="section_container">
            <div class="about_container">
                <div class="text_section left">
                    <h2 class="section_title">Câu chuyện về “Lặng”</h2>
                    <p>
                        Giữa nhịp sống hối hả và xô bồ của thành phố, "Lặng" như một ốc đảo bình yên dành cho những ai muốn tìm kiếm sự an yên trong tâm hồn. Nơi đây mang đến một không gian tĩnh lặng, ấm cúng với những góc nhỏ riêng tư, giúp bạn dễ dàng chìm đắm vào thế giới riêng của mình.
                    </p>
                </div>

                <div class="image_section">
                    <img src="/LangCoffee/Images/Banner/banner-home-1.png" alt="coffee" />
                    <div class="slogan">Lặng và Những Điều Khác Biệt</div>
                    <a href="/LangCoffee/story" class="button">Xem thêm</a>
                </div>

                <div class="text_section right">
                    <h2 class="section_title">Hơn cả một quán cà phê</h2>
                    <p>
                        Giữa những ồn ào náo nhiệt của cuộc sống, “Lặng” không chỉ là nơi để bạn thưởng thức cà phê ngon mà còn là nơi để bạn tìm kiếm sự bình yên, kết nối với bản thân và cộng đồng. Nơi đây mang đến dịch vụ lắng nghe độc đáo, giúp bạn giải tỏa tâm lý, chia sẻ những câu chuyện và suy nghĩ thầm kín, đồng thời kết nối với những người đồng điệu.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="service">
        <h2 class="section_title">Combo nổi bật</h2>
        <div class="section_container">
            <div class="service_container">
                <?php foreach ($comboSP as $combo) : ?>
                    <div class="services_items">
                        <img src="/LangCoffee/Images/Coffee/<?= htmlspecialchars($combo['sp_anh']) ?>" alt="Hot Beverages" />
                        <div class="services_text">
                            <p><?= number_format($combo['sp_gia'], 0, '', ',') ?> VNĐ</p>
                            <p><?= htmlspecialchars($combo['sp_name']) ?></p>
                            <a href="/LangCoffee/menu/menudetail/<?= $combo['sp_id'] ?>" class="btn-buy">mua ngay</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery" id="gallery">
        <h2 class="section_title">Tin tức</h2>
        <div class="container-slide">
            <div class="slide">
                <div class="item" style="background-image: url(https://i.ibb.co/qCkd9jS/img1.jpg);">
                    <div class="content">
                        <div class="name">Switzerland</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://i.ibb.co/jrRb11q/img2.jpg);">
                    <div class="content">
                        <div class="name">Finland</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://i.ibb.co/NSwVv8D/img3.jpg);">
                    <div class="content">
                        <div class="name">Iceland</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://i.ibb.co/Bq4Q0M8/img4.jpg);">
                    <div class="content">
                        <div class="name">Australia</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://i.ibb.co/jTQfmTq/img5.jpg);">
                    <div class="content">
                        <div class="name">Netherland</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
                <div class="item" style="background-image: url(https://i.ibb.co/RNkk6L0/img6.jpg);">
                    <div class="content">
                        <div class="name">Ireland</div>
                        <div class="des">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab, eum!</div>
                        <button>See More</button>
                    </div>
                </div>
            </div>
            <div class="button">
                <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
                <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
            </div>
        </div>
    </section>