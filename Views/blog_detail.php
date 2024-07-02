<div class="trangblog">
    <div class="container-blog-detail">
        <article>
            <h2 class="article-title"><?= $blogDetail['tieude'] ?></h2>
            <div class="article-blog">
                <p class="article-meta">Tác giả: <?= $blogDetail['tacgia_ten'] ?></p>
                <p class="article-meta-time"><?= $blogDetail['thoi_gian'] ?></p>
            </div>
            <h2 class="article-descript"><?= $blogDetail['noidung'] ?></h2>
            <img src="/LangCoffee/Images/Blog/<?= $blogDetail['avatar'] ?>" alt="Ảnh minh họa">
            <p class="article-content">
                <?= $blogDetail['content'] ?>
            </p>
        </article>
    </div>
</div>