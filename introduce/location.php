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
                <section class="location">
                    <!-- page-path -->
                    <div class="page-path">
                        <ul>
                            <li class="home hidden-xs"><a href="/"><span></span></a></li>
                            <li>
                                <a href="#">회사소</a>
                            </li>
                            <li class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    찾아오시는길
                                    <span class="glyphicon glyphicon-menu-down"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="/introduce/summary.php">회사개요</a></li>
                                    <li><a href="/introduce/ceo_greetings.php">CEO 인사말</a></li>
                                    <li><a href="/introduce/hostory.php">회사연혁</a></li>
                                    <li><a href="/introduce/group.php">운영조직</a></li>
                                    <li><a href="/introduce/location.php">찾아오시는길</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- //page-path -->
                    <div class="section-header">
                        <h3>찾아오시는길</h3>
                    </div>
                    <!-- Section-Content -->
                    <div class="section-content">
                        <p class="maps">
                            <img src="/assets/images/introduce/map_img.jpg" class="img-responsive" alt="오시는길 약도">
                        </p>
                        <ul class="row inquiry-info">
                            <li class="col-xs-12 col-md-4">
                                <div class="office">
                                    <h4>본사 사무실</h4>
                                    <dl>
                                        <dt>구주소.</dt>
                                        <dd>전라북도 군산시 현충로 35</dd>
                                        <dt>신주소.</dt>
                                        <dd>전라북도 군산시 나운동 1255-1</dd>
                                    </dl>
                                </div>
                            </li>
                            <li class="col-xs-12 col-md-4">
                                <div class="call-center">
                                    <h4>고객센터</h4>
                                    <dl>
                                        <dt>TEL.</dt>
                                        <dd><a href="tel:0634613442">063) 461-3442</a></dd>
                                        <dt>FAX.</dt>
                                        <dd>462-3204</dd>
                                    </dl>
                                </div>
                            </li>
                            <li class="col-xs-12 col-md-4">
                                <div class="email-inquiry">
                                    <h4>전자문의</h4>
                                    <dl>
                                        <dt>EMAIL.</dt>
                                        <dd><a href="mailto:aaa@geumdo.co.kr">aaa@geumdo.co.kr</a></dd>
                                        <dt>WEB.</dt>
                                        <dd><a href="www.geumdo.co.kr">www.geumdo.co.kr</a></dd>
                                    </dl>
                                </div>
                            </li>
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
