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
                <section class="write">
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
                                    <li><a href="#">공지사항</a></li>
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
                        <div class="table-wrap">
                            <form>
                                <table class="table table-bordered">
                                    <colgroup>
                                        <col style="width: 150px">
                                        <col style="width: 1020px">
                                    </colgroup>
                                    <tbody>
                                        <tr>
                                            <th><label for="title">제목</label></th>
                                            <td>
                                                <input type="text" class="form-control" id="title">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-name">작성자</label></th>
                                            <td class="user">
                                                <input type="text" class="form-control" id="u-name">
                                                <p class="attention">작성자는 필수입력 사항입니다.</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-pw">비밀번호</label></th>
                                            <td class="user">
                                                <input type="text" class="form-control" id="u-pw">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="u-content">내용입력</label></th>
                                            <td class="u-content">
                                                <textarea id="u-content" class="form-control"></textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><label for="file">첨부파일</label></th>
                                            <td class="file">
                                                <input type="file" class="form-control" id="file">
                                                <p class="btn-file">
                                                    <a href="#" class="btn" role="button">찾아보기</a>
                                                </p>
                                                <p class="att-txt">최대 파일사이즈 : 30MB</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="btn-area">
                                    <p>
                                        <a href="#" class="btn btn-red" role="button">글등록</a>
                                        <a href="#" class="btn btn-gray" role="button">취소</a>
                                    </p>
                                </div>
                            </form>
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
