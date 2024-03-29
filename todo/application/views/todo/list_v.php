<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
    <title>CodeIgniter</title>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link type="text/css" rel='stylesheet' href="/todo/include/css/bootstrap.css" />
</head>
<body>
    <div id="main">
        <header id="header" data-role="header" data-position="fixed"><!-- Header Start -->
            <blockquote>
                <p>만들면서 배우는 CodeIgniter</p>
                <small>실행 예제</small>
            </blockquote>
        </header> <!-- Header End -->
        <nav id="gnb"> <!-- gnb start -->
            <ul>
                <li><a rel="external" href="/todo/index.php/main/lists/">todo 애플리케이션 프로그램</a></li>
            </ul>
        </nav><!-- gnb end -->
        <article id="board_area">
            <header>
                <h1>Todo 목록</h1>
            </header>
            <table cellspacing="0" cellpadding="0" class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">번호</th>
                        <th scope="col">내용</th>
                        <th scope="col">시작일</th>
                        <th scope="col">종료일</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($list as $lt) {
                   ?>
                    <tr>
                        <th scope="row">
                            <?php echo $lt -> id;?>
                        </th>
                        <td>
                            <a rel="external" href="/todo/index.php/main/view/<?php echo $lt -> id; ?>">
                                <?php echo $lt -> content;?>
                            </a>
                        </td>
                        <td>
                            <time datetime="<?php echo mdate("%Y-%M-%j", human_to_unix($lt -> created_on)); ?>"><?php echo $lt -> created_on;?></time>
                        </td>
                        <td>
                            <time datetime="<?php echo mdate("%Y-%M-%j", human_to_unix($lt -> due_date)); ?>"><?php echo $lt -> due_date;?></time>
                        </td>
                    </tr>
                    <?php
                    }
                   ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4"><a href="/todo/index.php/main/write/" class="btn btn-success">
                            쓰기
                        </a></th>
                    </tr>
                </tfoot>
            </table>
            <div><p></p></div>
        </article>
        
        <footer>
            <blockquote>
                <p><a class="azubu" href="http://www.cikorea.net/" target="blank">CodeIgniter 한국 사용자 포럼</a></p>
                <small>Copyright by <em class="black"><a href="mailto:zhfldi4@gmail.com">Palpit</a></em></small>
            </blockquote>
        </footer>
    </div>
</body>
</html>
