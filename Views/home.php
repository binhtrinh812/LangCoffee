    <!-- Banner -->
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
                        <button class="button">Cà phê</button>
                        <button class="button">Kể truyện</button>
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
                    <h2 class="section_title">Câu chuyện thương hiệu</h2>
                    <p>
                        Nốt Hương Đặc Sản - Phê La luôn trân quý, nâng niu những giá trị Nguyên Bản ở mỗi vùng đất mà
                        chúng tôi đi qua, nơi tâm hồn được đồng điệu với thiên nhiên, với nỗi vất vả nhọc nhằn của người
                        nông dân; cảm nhận được hết thảy những tầng hương ẩn sâu trong từng nguyên liệu. Một chặng đường
                        dài đang chờ phía trước, Phê La đã sẵn sàng viết tiếp câu chuyện Nốt Hương Đặc Sản - Nguyên Bản
                        - Thủ Công đầy cảm hứng và càng tự hào hơn khi được mang sứ mệnh: ``Đánh thức những nốt hương
                        đặc
                    </p>
                </div>

                <div class="image_section">
                    <img src="./Images/Banner/banner-home-1.png" alt="coffee" />
                    <div class="slogan">Lặng và Những Điều Khác Biệt</div>
                    <a href="#" class="button">Xem thêm</a>
                </div>

                <div class="text_section right">
                    <h2 class="section_title">Nguyên liệu đặc sản</h2>
                    <p>
                        Trà Ô Long đặc sản tại Phê La còn được ươm trồng với phương pháp chăm bón hữu cơ, hoàn toàn với
                        trứng gà, đậu nành và thu hái thủ công để có được những búp trà tươi và non nhất, tạo nên điểm
                        khác biệt mạnh mẽ so với các thương hiệu khác. Có thể nói, dòng trà đặc sản của Phê La luôn giữ
                        được hương vị thơm ngon nguyên bản nhất và được nhiều người biết đến như một nguồn nguyên liệu
                        tinh hoa của Đà Lạt.
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
                    <img src="./Images/Coffee/<?= $combo['sp_anh'] ?>" alt="Hot Beverages" />
                    <div class="services_text">
                        <p><?= number_format($combo['sp_gia'], 0, '', ',') ?> VNĐ</p>
                        <p><?= $combo['sp_thongtin'] ?></p>
                        <a href="#" class="btn-buy">Mua ngay</a>
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