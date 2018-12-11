<?php
/**
 * Created by PhpStorm.
 * User: Jonathan Pennell
 * Date: 12/9/2018
 * Time: 4:08 PM
 */



?>

<html>

<head>

    <link rel="stylesheet" href="css/main.css">

</head>

<body>
<div id="outerWrapper">
    <div id="contentWrapper">
        <ul id="navMain">
            <li><a href="#home" title="home"><img src="images/icons/home.gif"></a></li>
            <li><a href="#about" title="about"><img src="images/icons/about.gif"></a></li>
            <li><a href="#networks" title="networks"><img src="images/icons/network.gif"></a></li>
            <li><a href="#contact" title="contact"><img src="images/icons/contact.gif"></a></li>
        </ul>
        <div id="content">
            <div id="scrollWrapper">
                <ul>
                    <li id="home" class="section">
                        <h1>Jonathan Pennell</h1>
                        <h3>Web/Software Developer</h3>
                    </li>
                    <li id="about" class="section" >
                        <h2>About Me</h2>
                        <p>I am an aspiring Developer with a passion for coding. In my free time, I like to work on personal projects.
                            I tend to work on programs that deal with my hobbies. I'm currently working on a web based program that will
                            aggregate data for Magic the Gathering games in order to have a long lasting picture of my progress in that game.
                            I also plan to work on creating some computer based games in the near future.
                        </p>
                    </li>
                    <li id="networks" class="section">
                        <h2>Find Me</h2>
                        <ul>
                            <li><a href="https://www.linkedin.com/in/jonathan-pennell-348594161/" class="external"><img src="images/profiles/linkedin.png" alt="LinkedIn">
                                <strong>LinkedIn</strong>www.linkedin.com/in/jonathan-pennell-348594161/ </a> </li>
                            <li><a href="http://open.spotify.com/user/jimmybass300" class="external"><img src="images/profiles/spotify3.png" alt="Spotify">
                                    <strong>Spotify</strong>open.spotify.com/user/jimmybass300 </a></li>
                        </ul>
                    </li>
                    <li id="contact" class="section">
                        <h2>Contact</h2>
                        <div id="addressDetails">
                            <h3>Jonathan Pennell - Developer</h3>
                            <p><strong>Email:</strong> <a href="mailto:jp@designedby.jp">jp@designedby.jp</a> </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>

<script src="js/jquery-1.3.2.min.js"></script>
<script src="js/jquery-scrollTo-localScroll.js"></script>
<script src="js/qtip.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/main.js"></script>
</html>