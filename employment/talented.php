<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/employment.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main class="content employment" tabindex="-1">
        <div class="page-header">
            <h2>채용정보</h2>
            <hr>
            <p>
                THE HOPE TO BUILD<br>
                TRUST AND CONFIDENCE
            </p>
        </div>
        <div class="page-content">
            <div class="container">
                <section class="talented">
                    <!-- page-path -->
                    <div class="page-path">
                        <ul>
                            <li class="home hidden-xs"><a href="/"><span></span></a></li>
                            <li>
                                <a href="#">채용정보</a>
                            </li>
                            <li class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    인재상
                                    <span class="glyphicon glyphicon-menu-down"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="/employment/talented.php">인재상</a></li>
                                    <li><a href="/employment/welfare.php">복리후생</a></li>
                                    <li><a href="/employment/resume.php">이력서 등록</a></li>
                                    <li><a href="/employment/recruit.php">입사지원</a></li>
                                    <li><a href="/employment/information.php">채용정보</a></li>
                                    <li><a href="#">채용결과확인</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- //page-path -->
                    <div class="section-header">
                        <h3>인재상</h3>
                    </div>
                    <!-- Section-Content -->
                    <div class="section-content">
                        <p class="talented-txt">
                            뜨거운 열정으로 금도건설과 함께 꿈과 희망을 향하여 도전하는 인재들을 찾습니다.
                        </p>
                        <p class="talented-img">
                            <img src="/assets/images/employment/talented_img_lg.jpg" class="img-responsive hidden-xs" alt="열정적인 자세 지속적인 혁신 실용적인 사고">
                            <img src="/assets/images/employment/talented_img_sm.jpg" class="img-responsive visible-xs" alt="열정적인 자세 지속적인 혁신 실용적인 사고">
                        </p>
                    </div><!-- //Section-Content -->
                </section>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
