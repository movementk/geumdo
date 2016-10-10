<?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/dochead.php'); ?>
<link href="/assets/css/sub.css" rel="stylesheet">
<link href="/assets/css/employment.css" rel="stylesheet">
<link href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css" rel="stylesheet">
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
                <section class="recruit">
                    <!-- page-path -->
                    <div class="page-path">
                        <ul>
                            <li class="home hidden-xs"><a href="/"><span></span></a></li>
                            <li>
                                <a href="#">채용정보</a>
                            </li>
                            <li class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    입사지원
                                    <span class="glyphicon glyphicon-menu-down"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="/employment/talented.php">인재상</a></li>
                                    <li><a href="/employment/welfare.php">복리후생</a></li>
                                    <li><a href="/employment/resume.php">이력서 등록</a></li>
                                    <li><a href="/employment/recruit.php">입사지원</a></li>
                                    <li><a href="#">채용정보</a></li>
                                    <li><a href="#">채용결과확인</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- //page-path -->
                    <div class="section-header">
                        <h3>입사지원</h3>
                    </div>
                    <!-- Section-Content -->
                    <div class="section-content">
                        <form>
                            <div class="basics-info">
                                <h4>기본정보등록</h4>
                                <div class="table-wrap">
                                    <table class="table table-bordered">
                                        <colgroup>
                                            <col style="width: 150px;">
                                            <col style="width: 435px;">
                                            <col style="width: 150px;">
                                            <col style="width: 435px;">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <th class="rc-border">
                                                    <label for="datepicker">생년월일</label>
                                                </th>
                                                <td class="birthday rr-border">
                                                    <input type="text" id="datepicker" class="form-control ">
                                                </td>
                                                <th class="rc-border thb">
                                                    <label for="user-name">성명</label>
                                                </th>
                                                <td class="user-name rr-border">
                                                    <input type="text" id="user-name" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>성별</th>
                                                <td class="sex">
                                                    <p>
                                                        <input type="radio" id="man" class="radio">
                                                        <label for="man">남자</label>
                                                    </p>
                                                    <p>
                                                        <input type="radio" id="girl" class="radio">
                                                        <label for="girl">여자</label>
                                                    </p>
                                                </td>
                                                <th class="thb">
                                                    <label for="email">E-MAIL</label>
                                                </th>
                                                <td>
                                                    <input type="email" id="email" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label for="call">전화번호</label>
                                                </th>
                                                <td class="call">
                                                    <select id="call">
                                                        <option value="">02</option>
                                                        <option value="">031</option>
                                                    </select>
                                                    -
                                                    <input type="text" class="form-control" id="call-2">
                                                    <label for="call-2" class="sr-only">전화번호</label>
                                                    -
                                                    <input type="text" class="form-control" id="call-3">
                                                    <label for="call-3" class="sr-only">전화번호</label>
                                                </td>
                                                <th class="thb">
                                                    <label for="phone">휴대폰번호</label>
                                                </th>
                                                <td class="call">
                                                    <select id="phone">
                                                        <option value="">010</option>
                                                        <option value="">011</option>
                                                    </select>
                                                    -
                                                    <input type="text" class="form-control" id="phone-2">
                                                    <label for="phone-2" class="sr-only">전화번호</label>
                                                    -
                                                    <input type="text" class="form-control" id="phone-3">
                                                    <label for="phone-3" class="sr-only">전화번호</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label for="file">사진</label>
                                                </th>
                                                <td colspan="3" class="file">
                                                    <input type="file" class="form-control" id="file">
                                                    <p class="file-btn">
                                                        <a href="#" class="btn" role="button">파일찾기</a>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label for="addr">거주지 주소</label>
                                                </th>
                                                <td colspan="3" class="addr">
                                                    <input type="text" class="form-control addr-input" id="addr">
                                                    -
                                                    <input type="text" class="form-control addr-input" id="addr-1">
                                                    <label for="addr-1" class="sr-only">우편번호검색</label>
                                                    <p class="btn-address">
                                                        <a href="#" class="btn btn-addr" role="button">우편번호검색</a>
                                                    </p>
                                                    <input type="text" class="form-control" id="addr-2" >
                                                    <label for="addr-2" class="sr-only">기본주소</label>
                                                    <input type="text" class="form-control" id="addr-3">
                                                    <label for="addr-3" class="sr-only">상세주소</label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="thb">
                                                    <label for="income">희망연봉</label>
                                                </th>
                                                <td colspan="3" class="income">
                                                    <input type="text" id="income" class="form-control">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="military">
                                <h4>병역사항</h4>
                                <div class="table-wrap">
                                    <table class="table table-bordered">
                                        <colgroup>
                                            <col style="width: 195px">
                                            <col style="width: 195px">
                                            <col style="width: 195px">
                                            <col style="width: 585px">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th class="rr-border">
                                                    <label for="classification">역종</label>
                                                </th>
                                                <th class="rr-border">
                                                    <label for="groups">군별</label>
                                                </th>
                                                <th class="rr-border">
                                                    <label for="rank">계급</label>
                                                </th>
                                                <th class="rc-border">복무기간</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="classification">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="groups">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="rank">
                                                </td>
                                                <td class="period">
                                                    <input type="text" class="form-control" id="datepicker2">
                                                    <label for="datepicker2" class="sr-only">입대일</label>
                                                    ~
                                                    <input type="text" class="form-control"  id="datepicker3">
                                                    <label for="datepicker3" class="sr-only">전역일</label>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="family">
                                <h4>가족사항</h4>
                                <div class="table-wrap">
                                    <table class="table table-bordered">
                                        <colgroup>
                                            <col style="width: 192px">
                                            <col style="width: 234px">
                                            <col style="width: 276px">
                                            <col style="width: 234px">
                                            <col style="width: 234px">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th class="rr-border">
                                                    <label for="relation">관계</label>
                                                </th>
                                                <th class="rr-border">
                                                    <label for="family-name">성명</label>
                                                </th>
                                                <th class="rr-border">
                                                    <label for="datepicker4">생년월일</label>
                                                </th>
                                                <th class="rr-border">
                                                    <label for="job">직업</label>
                                                </th>
                                                <th class="rr-border">동거여부</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="relation">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="family-name">
                                                </td>
                                                <td class="family-birth">
                                                    <input type="text" class="form-control" id="datepicker4">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="job">
                                                </td>
                                                <td class="cohabit">
                                                    <p>
                                                        <input type="radio" class="radio" id="cohabit">
                                                        <label for="cohabit">동거</label>
                                                    </p>
                                                    <p>
                                                        <input type="radio" class="radio" id="non-cohabit">
                                                        <label for="non-cohabit">비동거</label>
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-addition" role="button">항목추가</a>
                                            <a href="#" class="btn btn-del" role="button">항목삭제</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="academic">
                                <h4>학력사항</h4>
                                <div class="table-wrap">
                                    <table class="table table-bordered">
                                        <colgroup>
                                            <col style="width: 185px">
                                            <col style="width: 367px">
                                            <col style="width: 177px">
                                            <col style="width: 177px">
                                            <col style="width: 137px">
                                            <col style="width: 127px">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th class="rc-border">
                                                    <label for="school">학교</label>
                                                </th>
                                                <th class="rr-border">기간</th>
                                                <th class="rr-border">
                                                    <label for="major">전공</label>
                                                </th>
                                                <th class="rr-border">
                                                    <label for="location">소재지</label>
                                                </th>
                                                <th class="rr-border">
                                                    <label for="graduate">졸업구분</label>
                                                </th>
                                                <th class="rr-border">
                                                    <label for="gpa">학점</label>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="school">
                                                </td>
                                                <td class="academic-period">
                                                    <input type="text" class="form-control" id="datepicker5">
                                                    <label for="datepicker5" class="sr-only">입학</label>
                                                    ~
                                                    <input type="text" class="form-control" id="datepicker6">
                                                    <label for="datepicker6" class="sr-only">졸업</label>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="major">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="location">
                                                </td>
                                                <td>
                                                    <select id="graduate">
                                                        <option value="">졸업</option>
                                                        <option value="">재학중</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="gpa">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-addition" role="button">항목추가</a>
                                            <a href="#" class="btn btn-del" role="button">항목삭제</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="qualifiction">
                                <h4>자격사항</h4>
                                <div class="table-wrap">
                                    <table class="table table-bordered">
                                        <colgroup>
                                            <col style="width: 365px">
                                            <col style="width: 287px">
                                            <col style="width: 287px">
                                            <col style="width: 231px">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th class="rc-border">
                                                    <label for="license">자격사항</label>
                                                </th>
                                                <th class="rr-border">
                                                    <label for="datepicker7">취득일</label>
                                                </th>
                                                <th class="rr-border">
                                                    <label for="license-num">자격/면허번호</label>
                                                </th>
                                                <th class="rr-border">
                                                    <label for="pyot">발행처</label>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="license">
                                                </td>
                                                <td class="acquisition">
                                                    <input type="text" class="form-control" id="datepicker7">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="license-num">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="pyot">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-addition" role="button">항목추가</a>
                                            <a href="#" class="btn btn-del" role="button">항목삭제</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="language">
                                <h4>외국어</h4>
                                <div class="table-wrap">
                                    <table class="table table-bordered">
                                        <colgroup>
                                            <col style="width: 195px">
                                            <col style="width: 137px">
                                            <col style="width: 247px">
                                            <col style="width: 151px">
                                            <col style="width: 231px">
                                            <col style="width: 209px">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th class="rc-border">
                                                    <label for="foreign-language">외국어명</label>
                                                </th>
                                                <th class="rr-border">
                                                    <label for="grade">회화능력</label>
                                                </th>
                                                <th class="rr-border">
                                                    <label for="certificate">어학자격증명</label>
                                                </th>
                                                <th class="rr-border">
                                                    <label for="score">취득점수</label>
                                                </th>
                                                <th class="rr-border">
                                                    <label for="agency">시행기관</label>
                                                </th>
                                                <th class="rr-border">
                                                    <label for="datepicker8">시행일</label>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control" id="foreign-language">
                                                </td>
                                                <td>
                                                    <select id="grade">
                                                        <option value="">상</option>
                                                        <option value="">중</option>
                                                        <option value="">하</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="certificate">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="score">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" id="agency">
                                                </td>
                                                <td class="enforcement-date">
                                                    <input type="text" class="form-control" id="datepicker8">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="btn-area">
                                        <p>
                                            <a href="#" class="btn btn-addition" role="button">항목추가</a>
                                            <a href="#" class="btn btn-del" role="button">항목삭제</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="self-introduction">
                                <h4>
                                    자기소개
                                    <small>
                                        자신의 성장과정부터 취미, 입사지원 동기, 희멍업무 및 포부, 본인의 장점 및 기타 특기사항을 간단하게 서술하십시오.
                                    </small>
                                </h4>
                                <textarea id="self-introduction" class="form-control"></textarea>
                                <label for="self-introduction" class="sr-only">자기소개</label>
                            </div>
                            <div class="self-introduction">
                                <h4>
                                    경력사항
                                    <small>
                                        관련업무를 기준으로 경력사항을 자세히 기술하십시오.
                                    </small>
                                </h4>
                                <textarea id="career" class="form-control"></textarea>
                                <label for="career" class="sr-only">경력사항</label>
                            </div>
                            <div class="document-attached">
                                <h4>제출서류</h4>
                                <input type="file" class="form-control" id="document">
                                <label for="document" class="sr-only">제출서류</label>
                                <p class="file-btn">
                                    <a href="#" class="btn" role="button">파일찾기</a>
                                </p>
                            </div>
                            <div class="btn-area">
                                <p>
                                    <a href="#" class="btn btn-submission" role="button">입사지원서 제출하기</a>
                                </p>
                            </div>
                        </form>
                    </div><!-- //Section-Content -->
                </section>
            </div>
        </div>
    </main>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/footer.php'); ?>
    <?php require_once($_SERVER["DOCUMENT_ROOT"].'/inc/docfoot.php'); ?>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script>
        (function($) {
            $("#datepicker, #datepicker2, #datepicker3 , #datepicker4, #datepicker5, #datepicker6, #datepicker7, #datepicker8").datepicker({
                dateFormat: 'yy-mm-dd',
                prevText: '이전 달',
                nextText: '다음 달',
                monthNames: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                monthNamesShort: ['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
                dayNames: ['일','월','화','수','목','금','토'],
                dayNamesShort: ['일','월','화','수','목','금','토'],
                dayNamesMin: ['일','월','화','수','목','금','토'],
                showMonthAfterYear: true,
                changeMonth: true,
                changeYear: true,
                yearSuffix: '년'
            });
        })(jQuery);
    </script>
</body>
</html>
