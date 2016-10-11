<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/business.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main class="content business" tabindex="-1">
        <div class="page-header">
            <h2>사업분야</h2>
            <hr>
            <p>
                THE HOPE TO BUILD<br>
                TRUST AND CONFIDENCE
            </p>
        </div>
        <div class="page-content">
            <div class="container">
                <section class="field-civil">
                    <!-- page-path -->
                    <div class="page-path">
                        <ul>
                            <li class="home hidden-xs"><a href="/"><span></span></a></li>
                            <li>
                                <a href="#">사업분야</a>
                            </li>
                            <li class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    사업영역
                                    <span class="glyphicon glyphicon-menu-down"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">토목사업</a></li>
                                    <li><a href="#">건축사업</a></li>
                                    <li><a href="#">민자사업</a></li>
                                    <li><a href="#">주택사업</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- //page-path -->
                    <div class="section-header">
                        <h3>사업영역</h3>
                    </div>
                    <!-- Section-Content -->
                    <div class="section-content">
                        <div class="business-list">
                            <ul>
                                <li class="active">
                                    <a href="#">토목사업</a>
                                </li>
                                <li>
                                    <a href="#">건축사업</a>
                                </li>
                                <li>
                                    <a href="#">민자사업</a>
                                </li>
                                <li>
                                    <a href="#">주택사업</a>
                                </li>
                            </ul>
                            <div class="border-line"></div>
                        </div>
                        <div class="business-content row">
                            <div class="col-lg-6 col-md-12">
                                <h4>
                                    금도건설 토목사업<br>
                                    <i>자연과 인간이 함께 웃는 안전한 세상 만들기</i>
                                </h4>
                                <p class="business-txt">
                                    금도건설은 앞으로도 친환경적이며 과학적인 건설을 통해 인간과 자연이 함께하는 시설물의 시공에 앞장서겠습니다.
                                </p>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-red" role="button">토목사업 바로가기</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="slider-img">
                                    <ul class="business-slider">
                                        <li>
                                            <img src="/assets/images/business/business_civil_img01.jpg" alt="">
                                        </li>
                                        <li>
                                            <img src="/assets/images/business/business_civil_img01.jpg" alt="">
                                        </li>
                                        <li>
                                            <img src="/assets/images/business/business_civil_img01.jpg" alt="">
                                        </li>
                                    </ul>
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
    <script src="/assets/js/jquery.bxslider.min.js"></script>
    <script>
    (function($) {
        $('.slider-img .business-slider').bxSlider({
            auto: false,
            pager : true,
            controls: false
        });
    })(jQuery);
    </script>
</body>
</html>
