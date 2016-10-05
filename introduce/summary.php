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
                <section class="summary">
                    <!-- page-path -->
                    <div class="page-path">
                        <ul>
                            <li class="home hidden-xs"><a href="/"><span></span></a></li>
                            <li>
                                <a href="#">회사소개</a>
                            </li>
                            <li class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    회사개요
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
                    </div><!-- //page-path -->
                    <div class="section-header">
                        <h3>회사개요</h3>
                    </div>
                    <!-- Section-Content -->
                    <div class="section-content">
                        <div class="row company">
                            <div class="col-sm-12 col-md-7">
                                <div class="info">
                                    <p>
                                        금도건설은 앞으로도 소통의 문화를 정착시키며 고객의 행복한 삶과 꿈을 구현하는 책임있는 기업, 미래를 여는 기업으로 거듭날 것을 약속드립니다.
                                    </p>
                                    <div class="table-wrap">
                                        <table class="table table-bordered">
                                            <colgroup>
                                                <col style="width: 116px;">
                                                <col style="width: 95px;">
                                                <col style="width: 95px;">
                                                <col style="width: 95px;">
                                                <col style="width: 95px;">
                                                <col style="width: 95px;">
                                                <col style="width: 95px;">
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <th>상호</th>
                                                    <td colspan="6">(주) 금 도 건 설</td>
                                                </tr>
                                                <tr>
                                                    <th>주소</th>
                                                    <td colspan="6">전북 군산시 현충로35 (나운동)</td>
                                                </tr>
                                                <tr>
                                                    <th>대표<br class="visible-xs">이사</th>
                                                    <td colspan="6">황 수 원</td>
                                                </tr>
                                                <tr>
                                                    <th>설립일</th>
                                                    <td colspan="6">1996년 7월 27일</td>
                                                </tr>
                                                <tr>
                                                    <th>영업<br class="visible-xs">종목</th>
                                                    <td colspan="6">
                                                        토목건축공사업, 산업,<br class="visible-xs"> 환경설비공사업, 전기공사업
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Tel / Fax</th>
                                                    <td colspan="6">
                                                        (063) 461 - 3442 / (063) 432 - 3204
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th rowspan="2">
                                                        시공<br class="visible-xs"> 능력<br>
                                                        <small>(단위<br class="visible-xs"> 백만원)</small>
                                                    </th>
                                                    <td class="tx-align">토목<br class="visible-xs">건축</td>
                                                    <td class="tx-align">토목</td>
                                                    <td class="tx-align">건축</td>
                                                    <td class="tx-align">조경</td>
                                                    <td class="tx-align">산업<br class="visible-xs">설비</td>
                                                    <td class="tx-align">전기</td>
                                                </tr>
                                                <tr>
                                                    <td class="tx-align">68,733</td>
                                                    <td class="tx-align">51,886</td>
                                                    <td class="tx-align">56,617</td>
                                                    <td class="tx-align">24,982</td>
                                                    <td class="tx-align">40,480</td>
                                                    <td class="tx-align">1,600</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-5">
                                <div class="motto">
                                    <hr>
                                    <ul>
                                        <li>열정적인 자세</li>
                                        <li>지속적인 혁신</li>
                                        <li>실용적인 사고</li>
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
</body>
</html>
