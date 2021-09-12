<?php get_header() ?>
<div class="page main-content">
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <h3 class="page__title block-title"> <span><?php the_title() ?> </span></h3>
                <div class="contact-us">
                    <div class="contact-us__banner" style="background-image: url('<?php echo get_theme_file_uri("/assets/images/Qolzum-banner.jpg") ?>');"></div>
                    <h4>يُرحب موقع <strong>القلزم</strong> بالتواصل معكم عَبر البريد الإلكتروني المُخصَّص للأغراض التالية:</h4>
                    <p>للتواصل بشأن عروض التعاون أو الشراكة، أو الاستفسار بشأن حقوق استخدام المواد التي يُنتجها <strong>القلزم</strong> واستغلالها تجاريًا، عبر هذا الإيميل: <span>info@qulzom.com</span></p>
                    <p>للتواصل مع إدارة التحرير، بعد الاطلاع على الشروط المذكورة هنا عبر هذا الإيميل: <span>editorial@qulzom.com</span></p>
                    <p>ويُمكنكم دائمًا متابعتنا عبر حسابات التواصل الاجتماعي:</p>
                    <ul class="footer-social-icons">
                        <li><a href="https://www.facebook.com/QolzumNews" target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/QolzumNews" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <?php get_sidebar("page"); ?>
            </div>
        </div>
        <?php echo paginate_links() ?>
    </div>
</div>

<?php get_footer() ?>