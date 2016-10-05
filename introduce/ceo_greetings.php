<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/introduce.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main class="content introduce" tabindex="-1">
        <div class="page-header">
            <h2>회사소개</h2>
            <hr>
            <p>
                THE HOPE TO BUILD<br>
                TRUST AND CONFIDENCE
            </p>
        </div>
        <div class="page-content">
            <div class="container">
                <!-- page-path -->
                <section class="ceo-greetings">
                    <div class="page-path">
                        <ul>
                            <li class="home hidden-xs"><a href="/"><span></span></a></li>
                            <li>
                                <a href="#">회사소개</a>
                            </li>
                            <li class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    CEO 인사말
                                    <span class="glyphicon glyphicon-menu-down"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="/introduce/summary.php">회사개요</a></li>
                                    <li><a href="/introduce/ceo_greetings.php">CEO 인사말</a></li>
                                    <li><a href="#">회사연혁</a></li>
                                    <li><a href="#">운영조직</a></li>
                                    <li><a href="#">찾아오시는길</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- //page-path -->
                    <div class="section-header">
                        <h3>CEO 인사말</h3>
                    </div>
                    <div class="section-content">
                        <div class="greetings">
                            <small>Towards the Future Construction</small>
                            <h4>GEUMDO CONSTRUCTION</h4>
                            <p>
                                금도건설을 찾아주신 고객 여러분을 진심으로 환영합니다<br>
                                고객의 행복한 삶과 꿈을 구현하는 책임 있는 기업, 미래를 여는 기업으로!
                            </p>
                        </div>
                        <img class="greeting-bg hidden-xs img-responsive" src="/assets/images/introduce/greetings_bg.png" alt="">
                        <div class="row geumdo-ceo">
                            <div class="col-xs-12 col-md-12 col-lg-6">
                                저희 금도건설은 ‘열정적인 자세, 지속적인 혁신, 실용적인 사고’ 라는 경영이념 아래 가치경영과 혁신경영을 바탕에 두고 완벽한 품질관리를 통해 고객의 신뢰에 보답하고자 고객 만족을 최우선 목표로 끊임없이 정진해 왔으며 국가 산업 발전의 초석이 되는 토목부분은 물론, 국민생활의 수준을 보다 향상시키는 건축분야에서도 주도적인 역할을 하고 있습니다.
                            </div>
                            <div class="col-xs-12 col-md-12 col-lg-6">
                                건설산업의 급격한 환경변화를 혁신을 통하여 미래를 창조한다는 기업이념 아래 민간투자사업과 플랜트사업을 회사의 주력사업으로 추구 하고자 열정적으로 추진하고 있으며, 향후 통일을 대비하여 제2의 건설성장을 위해 성실히 수행해 나가겠습니다. 금도건설은 앞으로도 소통의 문화를 정착시켜 고객의 행복한 삶과 꿈을 구현하는 책임 있는 기업, 미래를 여는 기업으로 거듭날 것을 약속 드립니다.애정과 관심으로 지켜봐 주시길 바랍니다. <br>
                                감사합니다.
                                <p class="ceo">금도건설 회장
                                    <img src="/assets/images/introduce/ceo.gif" alt="회장 황 수 원">
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
