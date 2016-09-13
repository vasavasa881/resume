<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <title>Personal site</title>
    <meta name="keywords" content="simple, grid, theme, free templates, web design, one page layout, slategray, steelblue, , CSS, HTML" />
    <meta name="description" content="Simple Grid is a one-page website template provided by .com" />
    <link href="css/style.css" type="text/css" rel="stylesheet"/>

</head>
<body>

<div id="wrapper">

    <div id="header">
    </div>



    <div id="menu">
        <?php
        include 'include/menu.php';
        ?>
    </div>

    <div id="main">
        <div id="home" class="main_box">
            <h1>Радий Вас бачити на моєму навчальному полігоні</h1>
            <div class="col col_23">
                <img src="images/image_01.jpg" class="img_frame" alt="image"  height="200px" width="400px"/>
                <p><em>На данному сайті я плану відпрацьовувати навички Web-розробника. Тому в перспективы вид ы функцыональнысть даного сайту буде змінюватися</em></p>
                <p>Веб-розробка — процес створення веб-сайтів або веб-додатків. Основними етапами процесу є веб-дизайн, верстка сторінок, програмування для веб на стороні клієнта і сервера, а також конфігурування веб-сервера.</p>
                <div class="cleaner h40"></div>
                <h3>Основні етапи веб-розробки</h3>
                <ul class="tmo_list">
                    <?php
                    $etap_array = array("Проектування сайту або веб-додатки (збір і аналіз вимог розробка Технічного завдання, проектування Інтерфейс користувача);",
                        "Розробка креативної концепції сайту;", "Створення дизайн-концепції сайту;","Створення дизайн-концепції сайту;",
                        "Верстка сторінок і дизайнів;", "Програмування (розробка функціональних інструментів) або інтеграція в систему управління вмістом (CMS);",
                        "Оптимізація і розміщення матеріалів сайту;", "Тестування та внесення корегувань;", "Відкриття проекту на хостингу;", "Обслуговування працюючого сайту або його програмної основи.");
                    foreach ($etap_array as $etap){
                        echo "<li>".$etap."</li>";
                    }

                    ?>

                </ul>
            </div>
            <div class="col col_13 no_margin_right">
                <h3>Технології WEB</h3>
                <div id="technolog">
                    <ul>
                        <?php
                        $tech_array=array("HTML", "CSS", "Javascript", "jQuery", "Angular", "PHP", "Lavarel, Yii, Symfony", "MySQL", "GitHub");
                        for ($i=0; $i<count($tech_array); $i++){
                            echo "<li>$tech_array[$i]</li>";
                        }
                        ?>


                    </ul>
                </div>
                <blockquote>
                    <p>З допомогою PHP можна зробити все крім дітей, і то не факт</p>
                    <cite>Habr - <span>Web Designer</span></cite>
                </blockquote>

                <div class="cleaner h40"></div>

                <!--            	<div  clas="twitter_post"><h3>Twitter news</h3>

                                    <a class="twitter-timeline" data-width="300" data-height="300" data-link-color="#2B7BB9" href="https://twitter.com/habrahabr">Tweets by habrahabr</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>-->
            </div>
            <div class="cleaner"></div>

        </div> <!-- END of home -->
    </div> <!-- END of -->

    <div id="footer">
        Copyright 2016
    </div>
</div>

</body>
</html>
