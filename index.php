<?php

// $_SESSION['sign'] = 1;
$user_name = 'Areg';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="font/add_font.css">
    </head>
    <body>

        <header>
            <div id="in_header">
                <div id="header_logo">Portfolio</div>
                <div id="header_menu">
                    <a href="">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="">Contacts</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <?php if(!isset($_SESSION['sign'])) { ?>
                        <a href="">Registration</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="">Sign</a>
                    <?php } else { ?>
                        <a href=""><img src=""><?=$user_name?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="">Log Out</a>
                    <?php } ?>

                </div>
            </div>
            <div id="header_about">
                <div id="in_header_about">
                    Hello !<br>
                    Using possibility of this website you'll have a space where you can save your
                    projects. For this you must register.
                    <div id="header_sign_btn">Details</div>
                </div>
            </div>
        </header>

        <main>
            <div id="main_about_site">

                <div class="main_about_site_card">
                    <div class="main_about_site_card_desc">
                        <img src="img/card-0.png">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>
                            <h3>So, what is a portfolio Site?</h3>
The websites with the main purpose of displaying the portfolio is called “Portfolio Site.” Although there is no solid definition of “portfolio site,” here are the typical characteristics seen in a portfolio site:
<ul>
<li>It’s not a technique; it’s just a way to display your content pictorially.</li>
<li>Visuals are the main focus. You don’t typically see a whole lot of text that accompanies it.</li>
</ul>
                        </span>
                    </div>
                </div>

                <div class="main_about_site_card">
                    <div class="main_about_site_card_desc">
                        <span>
                            <h3>For freelancers</h3>
                            Portfolio sites are vital for freelancers working in the digital age. While all freelancers can hand out business cards and certain freelancers,
                             such as photographers, can distribute physical portfolios to potential clients, a portfolio website provides
                              a way for any freelancer in any industry to reach more clients on a global scale. It also provides a way for you to get creative with the information and intricate details you share about yourself and your work.
                        </span>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <img src="img/card-1.png">
                    </div>
                </div>

                <div class="main_about_site_card">
                    <div class="main_about_site_card_desc">
                        <img src="img/card-2.png">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span>
                            <h3>Use</h3>
                            It is a good and relevant way to showcase your skills to employers. <br>
                            More efficiently this will affect the successful outcome of the interview for the job.<br>
                            People will see this as your usernote you want to reach to your goal.
                        </span>
                    </div>
                </div>

            </div>
        </main>

        <?php include_once('footer.php') ?>

        <script src="js/get_body_height.js" type="text/javascript"></script>
    </body>

</html>
