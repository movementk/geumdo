<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/cs_center.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/header.php'); ?>
    <main class="content cs_center" tabindex="-1">
        <div class="page-header">
            <h2>고객센터</h2>
            <hr>
            <p>
                THE HOPE TO BUILD<br>
                TRUST AND CONFIDENCE
            </p>
        </div>
        <div class="page-content">
            <div class="container">
                <section class="notice_view">
                    <!-- page-path -->
                    <div class="page-path">
                        <ul>
                            <li class="home hidden-xs"><a href="/"><span></span></a></li>
                            <li>
                                <a href="#">고객센터</a>
                            </li>
                            <li class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    공지사항
                                    <span class="glyphicon glyphicon-menu-down"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="/cs_center/notice.php">공지사항</a></li>
                                    <li><a href="#">사내소식</a></li>
                                    <li><a href="#">건설뉴스</a></li>
                                    <li><a href="#">고객문의</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- //page-path -->
                    <div class="section-header">
                        <h3>공지사항</h3>
                    </div>
                    <!-- Section-Content -->
                    <div class="section-content">
                        <article class="view">
                            <div class="article-header">
                                <div class="row">
                                    <div class="col-lg-8 col-sm-12">
                                        <div class="subject">
                                            <span class="notify">알림</span>
                                            <h4>근무기강확립 실천사항</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <div class="speechwriter">
                                            <dl>
                                                <dt>작성자</dt>
                                                <dd>금도건설</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 col-sm-6 col-xs-6">
                                        <div class="date">
                                            <dl>
                                                <dt>등록일</dt>
                                                <dd>2016-08-01</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="article-content">
                                <dl>
                                    <dt>첨부파일</dt>
                                    <dd>
                                        <a href="#">주간행사계획(2016.08.22~08.28.).hwp [28 KB]</a>
                                    </dd>
                                </dl>
                                <div class="notice-content">
                                    내용출력<br><br>
                                    ------------------------------------------------<br>
                                    ◆  일 시 : 2016년 8월 8일(월) 오후 1시<br>
                                    ◆  장 소 : KB물류센터<br>
                                    ◆  내 용 : 굿피플-슈마커와 함께하는 아프리카 탄자니아의 희망운동화 발송식<br>
                                    ------------------------------------------------<br>
                                    지난 2016년 8월 8일(월), 국제구호개발 NGO 굿피플과 (주)슈마커는 남양주에 위치한 KB물류센터에서 <br>
                                    '아프리카 탄자니아의 희망운동화 발송식'을 가졌습니다. <br>
                                    슈마커에서 지원한 15,793족, 약 19억 원의 가치가 있는 운동화는 <br>
                                    아프리카 탄자니아에 거주하고 있는 소외주민들에게 전달될 예정입니다. <br><br>

                                    1999년에 설립된 슈마커는 최신 트렌드의 슈즈 스타일을 창조하는 국내 최다의 슈즈멀티샵으로,<br>
                                    버스킹 공연 등 스토리를 입힌 톡톡 튀는 아이디어가 있는 기부를 통해 소비자에게 다가가고 있습니다.
                                </div>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-gray" role="button">답변</a>
                                    <a href="#" class="btn btn-gray" role="button">삭제</a>
                                    <a href="#" class="btn btn-gray" role="button">수정</a>
                                    <a href="#" class="btn btn-red" role="button">글목록</a>
                                </p>
                            </div>
                        </article>
                    </div><!-- //Section-Content -->
                </section>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
