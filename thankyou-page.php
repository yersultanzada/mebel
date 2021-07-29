<? if ($_GET['status'] == 'success') { ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Кухонные гарнитуры в Алматы</title>
    <meta name="description" content="Кухонные гарнитуры в Алматы">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="pragma" content="no-cache">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this project -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <!-- Custom styles for this project -->
    <link href="css/project.min.css" rel="stylesheet">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5FJCPH3');</script>
    <!-- End Google Tag Manager -->
</head>
<body id="page-top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FJCPH3"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-none d-lg-block align-self-center">
                <ul>
                    <li><a href="/#works" class="js-scroll-trigger">Наши работы</a></li>
                    <li><a href="/#services" class="js-scroll-trigger">Услуги</a></li>
                </ul>
            </div>
            <div class="col-lg-4 text-lg-center align-self-center">
                <div class="logo">
                    <a href="/">marga
                        <span>мебельная компания</span>
                    </a>
                    <a class="burger_menu d-inline-block d-lg-none" data-toggle="modal" href="#menuModal">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 d-none d-lg-block align-self-center ">
                <ul class="justify-content-start">
                    <li><a href="/#about" class="js-scroll-trigger">О нас</a></li>
                    <li><a href="/#reviews" class="js-scroll-trigger">Отзывы</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
<section  id="thank-you">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-6 m-md-auto">
                <div class="caption">
                    <div class="caption-title">
                        Спасибо за обращение! <br>
						Мы скоро с Вами свяжемся и ответим на любые вопросы.
                    </div>
                    <a class="caption-btn" href="/">Перейти на главную страницу</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- menuModal-->
<div class="menu-modal modal fade" id="menuModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <a href="#">
                    <i class="fas fa-times"></i>
                </a>
            </div>
            <div class="modal-body">
                <div class="col-12 text-left">
                    <a class="menu_logo">
                        marga
                        <span>мебельная компания</span>
                    </a>
                </div>
                <div class="col-12 mt-4">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/#about">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/#services">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/#works">Наши работы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="/#reviews">Отзывы</a>
                        </li>
                    </ul>
                </div>
                <div class="modal_helper"></div>
                <div class="request_btn">
                    <a href="/#callToAction" class="js-scroll-trigger">Оставить заявку</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for this template -->
<script src="js/project.min.js"></script>
</body>
<? } else {
    header ("Location: /");
} ?>
