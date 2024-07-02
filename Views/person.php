<!-- Person -->
<section class="menu" id="menu">
    <div class="persons">
        <div class="container">
            <h1 class="lg-title">Hãy để tôi lắng nghe bạn</h1>
            <p class="text-light">Lắng nghe không chỉ đơn thuần là nghe những lời nói, mà còn là sự tham gia tích cực vào câu chuyện của người nói, dành cho họ sự chú ý hoàn toàn và tìm cách thấu hiểu suy nghĩ, cảm xúc và trải nghiệm của họ.</p>

            <div class="person-items">
                <?php foreach ($persons as $person) : ?>
                    <div class="person">
                        <div class="person-content">
                            <div class="person-img">
                                <img src="/LangCoffee/Images/Person/<?= $person['nguoitamsu_anh']; ?>" alt="person image">
                            </div>
                        </div>
                        <div class="person-info">
                            <div class="person-name"><?= $person['nguoitamsu_name']; ?></div>
                            <a href="/LangCoffee/person/personDetail/<?= $person['nguoitamsu_id']; ?>" class="btn-buy-person">
                                <button type="button" class="btn-buy-person"> Tâm sự
                                    <span><i class='bx bxs-microphone-alt'></i></span>
                                </button>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>