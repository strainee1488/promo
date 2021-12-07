<!DOCTYPE html>
<html>
<head>
     
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Статьи</title>

    <link href="templatemo_style.css" rel="stylesheet" type="text/css"/>

    <link href="s3slider.css" rel="stylesheet" type="text/css"/>
    <!-- JavaScripts-->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/s3Slider.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#slider').s3Slider({
                timeOut: 1600
            });
        });
    </script>
    <script>
        window.onload = function () {
            $('.close-cookie').click(function () {
                $('.cookie-banner').fadeOut();
            })
        }
    </script>
    <script>
        let elems = document.querySelectorAll('.server-name');
        elems.forEach((elem) => {
            elem.innerHTML = window.location.hostname
        })
    </script>

</head>
<body>

<div id="templatemo_wrapper">

    <div id="templatemo_menu">

        <ul>
            <li><a href="index.php" >Главная</a></li>
            <li><a href="blog.php" class="current">Статьи</a></li>
            <li><a href="contact.php">Контакты</a></li>
            <li><a href="terms.php">Условия и положения</a></li>
            <li><a href="policy.php">Политика конфиденциальности</a></li>
        </ul>

    </div> <!-- end of templatemo_menu -->

    <div id="templatemo_left_column">

        <div id="templatemo_header">

            <div id="site_title">
                <h1><a href="index.php">Подарок ребенку</a></h1>
            </div><!-- end of site_title -->

        </div> <!-- end of header -->

        <div id="templatemo_sidebar">


            <h4>Популярное</h4>
            <ul class="templatemo_list">
                
                <li><a href="a1b8ae3866706a4de104ebba897a5fcc.php" target="_parent">Заснеженный город</a></li>
                

                <li><a href="7iho8gQHFW968Ue9FPvO.php" target="_parent">Муми-дом от Деагостини. Новая миниатюра по мотивам известной сказочной</a></li>
                

                <li><a href="13d244842b1a7f95a5636dc2cbaeb185.php" target="_parent">Декоративное дерево с розами из вискозных салфеток!</a></li>
                

            </ul>

            <div class="cleaner_h40"></div>


        </div> <!-- end of templatemo_sidebar -->

    </div> <!-- end of templatemo_left_column -->

    <div id="templatemo_right_column">

        <div id="featured_project">
            <div id="slider">
                <ul id="sliderContent">
                    
                    <li class="sliderImage">
                        <a href=""><img src="./assets/images/stephanie-harvey-oa2kjy2vqjy-unsplash.jpg" alt="1"/></a>
                        <span class="top"><strong>Заснеженный город</strong><br/><strong></strong> Уже провел несколько вечеров в коллекции Кукольного домика Сува. Обычны...</span>
                    </li>
                    

                    <li class="sliderImage">
                        <a href=""><img src="./assets/images/the-creative-exchange-2lipuvj2_wo-unsplash.jpg" alt="1"/></a>
                        <span class="top"><strong>Муми-дом от Деагостини. Новая миниатюра по мотивам известной сказочной</strong><br/><strong></strong> художницы и писательницы Туве Янссон известна многим с детства. В детст...</span>
                    </li>
                    

                    <li class="sliderImage">
                        <a href=""><img src="./assets/images/freestocks-pxm8aejbzvk-unsplash.jpg" alt="1"/></a>
                        <span class="top"><strong>Декоративное дерево с розами из вискозных салфеток!</strong><br/><strong></strong> Декоративные элементы для интерьера гостиной или ванной комнаты могут ...</span>
                    </li>
                    

                    <li class="clear sliderImage"></li>
                </ul>
            </div>
        </div>

        <div id="templatemo_main">
            
            <div class="post_section">

                <span class="comment"><a href="a1b8ae3866706a4de104ebba897a5fcc.php">61</a></span>

                <h2><a href="a1b8ae3866706a4de104ebba897a5fcc.php">Заснеженный город</a></h2>


                <img src="./assets/images/stephanie-harvey-oa2kjy2vqjy-unsplash.jpg" alt="image 1"/>

                <p><strong></strong> Уже провел несколько вечеров в коллекции Кукольного домика Сува. Обычные комнаты выглядят красиво, но зд...</p>
                <a href="a1b8ae3866706a4de104ebba897a5fcc.php">Читать далее</a>

            </div>
            

            <div class="post_section">

                <span class="comment"><a href="7iho8gQHFW968Ue9FPvO.php">61</a></span>

                <h2><a href="7iho8gQHFW968Ue9FPvO.php">Муми-дом от Деагостини. Новая миниатюра по мотивам известной сказочной</a></h2>


                <img src="./assets/images/the-creative-exchange-2lipuvj2_wo-unsplash.jpg" alt="image 1"/>

                <p><strong></strong> художницы и писательницы Туве Янссон известна многим с детства. В детстве мне нравилось смотреть мультф...</p>
                <a href="7iho8gQHFW968Ue9FPvO.php">Читать далее</a>

            </div>
            


        </div>

        <div class="cleaner"></div>
        <div id="comment_form">


            <form action="thanks.php" method="post">
                <div class="form_row">

                    <input type="text" name="name" placeholder="Новые телефона" />
                </div>
                <div class="form_row">

                    <input type="text" name="phone" placeholder="Номер телефона"  />
                </div>
                <div class="form_row">

                    <input type="email" name="email" placeholder="Email"  />
                </div>
                <div class="form_row">

                    <textarea  name="comment" rows="" cols=""></textarea>


                </div>

                <div class="form_row">

                    <label class="terms-field">
                        <input type="checkbox" name="terms" value="check" required=""/>
                        <a href="policy.php" target="_blank">
                            Я прочитал и согласен с условиями пользовательского соглашения
                        </a>
                    </label>
                </div>
                <input type="submit" name="Submit" value="Отправить" class="submit_btn" />

            </form>

        </div>
    </div>
    <!-- end of templatemo_main -->
    <div class="cleaner_h20"></div>

    <div id="templatemo_footer">

        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
        All rights reserved

    </div>

    <div class="cleaner"></div>
    <div class='cookie-banner'>
        <p>
            Сайт использует файлы cookie. Они позволяют узнавать вас и получать информацию о вашем пользовательском опыте.Продолжая просмотр сайта, я соглашаюсь с использованием файлов cookie владельцем сайта в соответствии с <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie">Политикой cookie</a>
        </p>
        <button class='close-cookie'>&times;</button>
    </div>
</div> <!-- end of warpper -->

</body>
</html>