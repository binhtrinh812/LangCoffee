<div class="blog">
    <div class="site-wrapper">
        <section class="main-content">
            <div class="container-xl">
                <div class="row gy-4">
                    <div class="section-header">
                        <h3 class="section-title">"Lặng" Nghe</h3>
                    </div>
                    <div class="padding-30 rounded bordered">
                        <div class="row gy-5">
                            <div class="col-sm-6">
                                <div class="post">
                                    <div class="thumb rounded">
                                        <a href="#" class="category-badge position-absolute">Lifestyle</a>
                                        <span class="post-format">
                                            <i class="icon-picture"></i>
                                        </span>
                                        <a href="/LangCoffee/blog/blogDetail/<?= $blog1['id']; ?>">
                                            <div class="inner">
                                                <img src="/LangCoffee/Images/Blog/<?= $blog1['avatar']; ?>" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <ul class="meta list-inline mt-4 mb-0">
                                        <li class="list-inline-item">
                                            <a href="">
                                                <?= $blog1['tacgia_ten']; ?>
                                            </a>
                                        </li>
                                        <li class="list-inline-item"><?= $blog1['thoi_gian']; ?></li>
                                    </ul>
                                    <h5 class="post-title mb-3 mt-3">
                                        <a href="/LangCoffee/blog/blogDetail/<?= $blog1['id']; ?>"><?= $blog1['tieude']; ?></a>
                                    </h5>
                                    <p class="excerpt mb-0">
                                        <?= $blog1['noidung']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <?php foreach ($blog4s as $blog4) : ?>
                                    <div class="post post-list-sm square">
                                        <div class="thumb rounded">
                                            <a href="/LangCoffee/blog/blogDetail/<?= $blog4['id']; ?>">
                                                <div class="inner">
                                                    <img src="/LangCoffee/Images/Blog/<?= $blog4['avatar']; ?>" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details clearfix">
                                            <h6 class="post-title my-0">
                                                <a href="/LangCoffee/blog/blogDetail/<?= $blog4['id']; ?>">
                                                <?= $blog4['tieude']; ?>
                                                </a>
                                            </h6>
                                            <ul class="meta list-inline mt-1 mb-0">
                                                <li class="list-inline-item"><?= $blog4['thoi_gian']; ?></li>
                                            </ul>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="section-header">
                        <h3 class="section-title">Nghe "Lặng"</h3>
                    </div>

                    <div class="padding-30 rounded bordered">
                        <div class="row">
                            <?php foreach ($blogs as $blog) : ?>
                                <div class="col-md-12 col-sm-6">
                                    <div class="post post-list clearfix">
                                        <div class="thumb rounded">
                                            <span class="post-format-sm">
                                                <i class="icon-picture"></i>
                                            </span>
                                            <a href="/LangCoffee/blog/blogDetail/<?= $blog['id']; ?>">
                                                <div class="inner">
                                                    <img src="/LangCoffee/Images/Blog/<?= $blog['avatar']; ?>" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="details">
                                            <ul class="meta list-inline mb-3">
                                                <li class="list-inline-item">
                                                    <a href="#">
                                                        <?= $blog['tacgia_ten']; ?>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item"><?= $blog['thoi_gian']; ?></li>
                                            </ul>
                                            <h5 class="post-tile">
                                                <a href="/LangCoffee/blog/blogDetail/<?= $blog['id']; ?>">
                                                    <?= $blog['tieude']; ?>
                                                </a>
                                            </h5>
                                            <p class="excerpt mb-0">
                                                <?= $blog['noidung']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</div>