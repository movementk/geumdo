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
                <section class="resume">
                    <!-- page-path -->
                    <div class="page-path">
                        <ul>
                            <li class="home hidden-xs"><a href="/"><span></span></a></li>
                            <li>
                                <a href="#">채용정보</a>
                            </li>
                            <li class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    이력서 등록
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
                        <h3>이력서 등록</h3>
                    </div>
                    <!-- Section-Content -->
                    <div class="section-content">
                        <form>
                            <div class="privacy">
                                <h4>개인정보 수집동의</h4>
                                <div class="agree">
                                    <h5>개인정보 수집 항목</h5>
                                    <ul>
                                        <li>인적사항 : 성명, 주소, 연락처 등 이력서 등록신청에 명기된 항목</li>
                                        <li>이력사항 : 성명, 연락처 등 이력에 관련된 항목</li>
                                    </ul>
                                    <h5>개인정보 수집 및 이용목적</h5>
                                    <ul>
                                        <li>채용관련 지원자 이력에 관련한 정보확인</li>
                                        <li>작성된 이력사항 검토 및 검증</li>
                                    </ul>
                                    <h5>개인정보 보유 및 이용기간</h5>
                                    <ul>
                                        <li>상기 내용은 개인정보 보호법을 기준으로 합니다.</li>
                                        <li>상기 개인정보의 이용목적이 소멸된 경우에도 지원 등 이용목적이 분명한 경우는 개인정보를 보유할 수 있음을 안내하여 드립니다.</li>
                                    </ul>
                                    <p>
                                        상기 내용은 본 회사에서 채용관련 업무를 실시하는데 필요한 최소한의 정보에 해당합니다.<br>
                                        아울러 본 동의서는 채용관련 업무 및 지원 목적 외에는 사용하지 않을 것을 약속드리며 철저히 비밀로 관리하여 타인에게 공개하거나 유출하지 않을 것임을 알려드립니다.
                                    </p>
                                </div>
                                <p class="check">
                                    <label for="agree">
                                        <input type="checkbox" id="agree">개인정보 수집 및 활용 동의합니다.
                                    </label>
                                </p>
                            </div>
                            <div class="write">
                                <h4>이력정보 입력</h4>
                                <div class="table-wrap">
                                    <table class="table table-bordered">
                                        <colgroup>
                                            <col style="width: 150px;">
                                            <col style="width: 424px;">
                                            <col style="width: 150px;">
                                            <col style="width: 446px;">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <th><label for="user-name">성명</label></th>
                                                <td colspan="3" class="user-name">
                                                    <input type="text" class="form-control" id="user-name">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="addr">주소</label></th>
                                                <td colspan="3">
                                                    <input type="text" class="form-control" id="addr">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="call">일반<br class="visible-xs">전화</label></th>
                                                <td class="call">
                                                    <input type="text" class="form-control" id="call">
                                                </td>
                                                <th class="phone"><label for="phone">휴대<br class="visible-xs">전화</label></th>
                                                <td class="call">
                                                    <input type="text" class="form-control" id="phone">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th><label for="resume">이력서</label></th>
                                                <td colspan="3" class="resume-file">
                                                    <input type="file" class="form-control" id="resume">
                                                    <p class="attention">
                                                        최대 파일사이즈 : 30MB
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-red" role="button">등록</a>
                                        <a href="#" class="btn btn-gray" role="button">취소</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div><!-- //Section-Content -->
                </section>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
</body>
</html>
