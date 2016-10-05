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
                <section class="group">
                    <!-- page-path -->
                    <div class="page-path">
                        <ul>
                            <li class="home hidden-xs"><a href="/"><span></span></a></li>
                            <li>
                                <a href="#">회사소개</a>
                            </li>
                            <li class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    운영조직
                                    <span class="glyphicon glyphicon-menu-down"></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="/introduce/summary.php">회사개요</a></li>
                                    <li><a href="/introduce/ceo_greetings.php">CEO 인사말</a></li>
                                    <li><a href="#">회사연혁</a></li>
                                    <li><a href="/introduce/group.php">운영조직</a></li>
                                    <li><a href="#">찾아오시는길</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- //page-path -->
                    <div class="section-header">
                        <h3>운영조직</h3>
                    </div>
                    <!-- Section-Content -->
                    <div class="section-content">
                        <p class=" group-table-img visible-lg visible-md">
                            <img src="/assets/images/introduce/group_table_lg.jpg" alt="금도건설 운영조직표">
                        </p>
                        <p class="img-responsive group-table-img visible-sm visible-xs">
                            <img src="/assets/images/introduce/group_table_md.jpg" alt="금도건설 운영조직표">
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
