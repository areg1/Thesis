<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/footer.css">
        <link rel="stylesheet" href="../css/reg.css">
        <link rel="stylesheet" href="../font/add_font.css">
    </head>
    <body>

    <?php include('../header.php'); ?>        

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

        <form action="check_reg.php" method="post">
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="last_name" placeholder="Last name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="email" placeholder="Password">
                <input type="text" name="email" placeholder="Password repeat">
                <input type="text" name="country" placeholder="Country">
                <input type="text" name="city" placeholder="City">
            </form>
    </header>


    </body>
</html>