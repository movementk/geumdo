<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/promotion.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main class="content promotion" tabindex="-1">
        <div class="page-header">
            <h2>홍보센터</h2>
            <hr>
            <p>
                THE HOPE TO BUILD<br>
                TRUST AND CONFIDENCE
            </p>
        </div>
        <div class="page-content">
            <div class="container">
                <section class="geumdo-ci">
                    <!-- page-path -->
                    <div class="page-path">
                        <ul>
                            <li class="home hidden-xs"><a href="/"><span></span></a></li>
                            <li>
                                <a href="#">홍보센터</a>
                            </li>
                            <li class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    CI 소개
                                    <span class="glyphicon glyphicon-menu-down"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="/promotion/geumdo_ci.php">CI소개</a></li>
                                    <li><a href="/promotion/rnd.php">R&amp;D센터</a></li>
                                    <li><a href="/promotion/certificate.php">인증 및 상훈</a></li>
                                    <li><a href="/promotion/partner.php">관계사 현황</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- //page-path -->
                    <div class="section-header">
                        <h3>CI 소개</h3>
                    </div>
                    <!-- Section-Content -->
                    <div class="section-content">
                        <p>
                            삶의 질과 주거문화 개선에 앞장서며 보다 살기좋은 세상의 구현하는데 최선의 노력을 다하는 (주)금도건설 C.I는 대형빌딩을 형상화한 세계의 기둥을 휘감아 기업이 발전하는 모습을 역동적으로 시각화했으며, C.I의 붉은 컬러는 "열정적인 자세" "지속적인 혁신" "실용적인 사고" 경영모토로하는 회사의 상징성을 나타내고 있습니다.
                        </p>
                        <div class="ci-rogo row">
                            <div class="col-lg-6 col-md-6 col-sm-12 ci-logo">
                                <div class="korean-ci">
                                    <h4>국문 로고타입</h4>
                                    <p class="logo-img">
                                        <img src="/assets/images/promotion/k_logo.png" alt="금도건설 국문 로고">
                                    </p>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-down" role="button">DOWNLOAD<span></span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 ci-logo">
                                <div class="english-ci">
                                    <h4>영문 로고타입</h4>
                                    <p class="logo-img">
                                        <img src="/assets/images/promotion/e_logo.png" alt="금도건설 국문 로고">
                                    </p>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-down" role="button">DOWNLOAD<span></span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- //Section-Content -->
                </section>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
    <script>
        $('.bxslider').bxSlider({
            pagerCustom: '.bx-pager-img',
            controls: false
        });
        $('.bxslider-2').bxSlider({
            pagerCustom: '.bx-pager-img-2',
            controls: false
        });
    </script>
</body>
</html>
