    <!-- Person Detail -->
    <section class="person-detail" id="person-detail">
        <div class="container-detail-person">
            <h2 class="section_title"><?= $personDetail['nguoitamsu_name'] ?></h2>
            <main class="row">
                <section class="col">
                    <div class="image">
                        <img src="/LangCoffee/Images/Person/<?= $personDetail['nguoitamsu_anh'] ?>">
                    </div>
                </section>
                <section class="col">
                    <div class="contents">
                        <div class="box">
                            <h3>Số điện thoại</h3>
                            <h4><?= $personDetail['nguoitamsu_sdt'] ?></h4>
                        </div>
                        <div class="box">
                            <h3>Email</h3>
                            <h4><?= $personDetail['nguoitamsu_email'] ?></h4>
                        </div>
                        <div class="box">
                            <h3>Thông tin</h3>
                            <h4><?= $personDetail['nguoitamsu_thongtin'] ?></h4>
                        </div>
                    </div>
                </section>
            </main>
            <div class="book-appointment">
                <a href="#" id="openModal" class="button">Đặt lịch</a>
            </div>
        </div>
    </section>

    <section class="product-detail" id="product-detail">
        <div class="container-detail">
            <h3 class="section_title section_titleh3">Người khác</h3>
            <div class="menu-items">
                <?php foreach ($otherPersons as $person) : ?>
                    <a href="/LangCoffee/person/personDetail/<?= $person['nguoitamsu_id']; ?>">
                        <div class="menu-item">
                            <div class="menu-item-content">
                                <div class="menu-item-img">
                                    <img src="/LangCoffee/Images/Person/<?= $person['nguoitamsu_anh']; ?>" alt="menu item image">
                                </div>
                            </div>
                            <div class="menu-item-info">
                                <div class="menu-item-name"><?= $person['nguoitamsu_name']; ?> </div>
                            </div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>


    <div id="bookingModal" class="modal">
        <div class="modal-content">
            <span id="closeModal" class="close">&times;</span>
            <h2>Đặt lịch</h2>
            <form id="bookingForm">
                <label for="name">Họ và tên:</label>
                <input type="text" id="name" name="name" placeholder="Nguyễn Văn A" required>

                <label for="phone">Số điện thoại:</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="0123456789" title="Số điện thoại 10 chữ số" required>

                <label for="request">Yêu cầu:</label>
                <select id="request" name="request" required>
                    <option value="">Chọn yêu cầu</option>
                    <?php foreach ($requests as $request) : ?>
                        <option value="<?= $request['booking_id']; ?>"><?= $request['booking_name']; ?></option>
                    <?php endforeach; ?>
                </select>
                <label for="message">Lời nhắn:</label>
                <textarea id="message" name="message"></textarea>
                <button type="submit" class="modal-button">Gửi đặt lịch</button>
            </form>
        </div>
    </div>

    <!-- Modal Thông báo -->
    <section class="person-detail" id="successMessage" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Thông báo</h2>
            <p>Hiện chưa hỗ trợ, xin vui lòng liên hệ qua page.</p>
            <a href="lien-he-page.html" class="modal-button">Liên hệ</a>
        </div>
    </section>