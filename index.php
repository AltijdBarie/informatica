<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="stylesheet.css" type="text/css" />
    <?php
        if(isset($_GET["page"])) {
            $nummer = $_GET["page"];
        } else {
            $nummer = 1;
        }
        if ($nummer==1) {
            echo "<title>Home</title>";
        }
        if ($nummer==2) {
            echo "<link rel='stylesheet' href='overmij.css' type='text/css'/>";
            echo "<title>Overmij</title>";
        }
    ?>
    <link rel="icon" type="image/jpg" href="./images/favicon.jpg">
</head>

    <body>
        <div id="container">
            <header>
                <div id="logo"></div>
            </header>

            <section>
                    <nav>
                        <?php
                            if(isset($_GET["page"])) {
                                $nummer = $_GET["page"];
                            } else {
                                $nummer = 1;
                            }

                            echo "<ul id='nav'>";

                            if ($nummer==1) {
                                echo "<li id='nav'><a id='nav' href='index.php?page=1' class='active'>Home</a></li>";     
                            } else {
                                echo "<li id='nav'><a id='nav' href='index.php?page=1'>Home</a></li>";    
                            }
                            if ($nummer==2) {
                                echo "<li id='nav'><a id='nav' href='index.php?page=2' class='active'>Overmij</a></li>";     
                            } else {
                                echo "<li id='nav'><a id='nav' href='index.php?page=2'>Overmij</a></li>";    
                            }
                            if ($nummer==3) {
                                echo "<li id='nav'><a id='nav' href='index.php?page=3' class='active'>Opdrachten</a></li>";     
                            } else {
                                echo "<li id='nav'><a id='nav' href='index.php?page=3'>Opdrachten</a></li>";    
                            }
                            if ($nummer==4) {
                                echo "<li id='nav'><a id='nav' href='index.php?page=4' class='active'>Dagboek</a></li>";     
                            } else {
                                echo "<li id='nav'><a id='nav' href='index.php?page=4'>Dagboek</a></li>";    
                            }

                            echo "</ul>"
                        ?>
                    </nav>
                    <article>
                        <?php
                            if(isset($_GET["page"])) {
                                $nummer = $_GET["page"];
                            } else {
                                $nummer = 1;
                            }

                            switch ($nummer) {
                                case 1:
                                    readfile("home.inc");
                                    break;

                                case 2:
                                    readfile("overmij.inc");
                                    break;

                                case 3:
                                    readfile("opdrachten.inc");
                                    break;

                                case 4:
                                    readfile("dagboek.inc");
                                    break;

                                default:
                                    readfile("home.inc");
                            }
                        ?>
                    </article>
            </section>  

            <footer>
                <div id=footer-links>
                    (c) 2021 Baran Kocaöz
                </div>

                <div id=footer-rechts>
                    <a href="mailto:bkocaoz@ogvo.nl">Contact</a>
                </div>
            </footer>
        </div>
    </body> 
</html>