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
                <section class="rnd">
                    <!-- page-path -->
                    <div class="page-path">
                        <ul>
                            <li class="home hidden-xs"><a href="/"><span></span></a></li>
                            <li>
                                <a href="#">홍보센터</a>
                            </li>
                            <li class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    R&amp;D 센터
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
                        <h3>R&amp;D 센터</h3>
                    </div>
                    <!-- Section-Content -->
                    <div class="section-content">
                        <p class="rnd-txt">
                            저희 금도건설의 R&amp;D센터는 “차별화된 기술개발을 통한 가치창출”이란<br class="hidden-xs">
                            목표 아래 점차 고도화 되는 산업구조의 변화에 대응하고 新생활환경을 개발함으로써<br class="hidden-xs">
                            미래성정동력을 찾기 위해 연구개발(R&amp;D)에 노력을 기울이고 있습니다.
                        </p>
                        <p class="rnd-img">
                            <img src="/assets/images/promotion/rnd_img_lg.jpg" class="img-responsive hidden-xs" alt="">
                            <img src="/assets/images/promotion/rnd_img_sm.jpg" class="img-responsive visible-xs" alt="">
                        </p>
                        <ul class="sr-only">
                            <li>친환경 소개연구</li>
                            <li>기술지원 및 보급</li>
                            <li>자연친화적 건축 및 토목연구</li>
                            <li>현장시공 및 문제점 피드백</li>
                            <li>차별화된 기술개발을 통한 가치창출</li>
                        </ul>
                    </div><!-- //Section-Content -->
                </section>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
