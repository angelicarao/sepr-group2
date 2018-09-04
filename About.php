<?php

include('php/session.php');
?>
<title>July Morning Event</title>
<link rel="icon" type="image/logotitle.png" href="images/logotitle.png" sizes="32x32">
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="July Morning" />
<meta name="keywords" content="css3" />
<link rel="shortcut icon" href="../favicon.ico"> 
<link rel="stylesheet" type="text/css" href="css/demoG.css" />
<link rel="stylesheet" type="text/css" href="css/style4.css" />
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!--twitter button-->
<script>!function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = p + '://platform.twitter.com/widgets.js';
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, 'script', 'twitter-wjs');</script>
<script>!function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
        if (!d.getElementById(id)) {
            js = d.createElement(s);js.id = id;js.src = p + "://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, "script", "twitter-wjs");</script>
<body>

    <div class="container">
        <header>
            <p class="codrops-demos">
                <a href="index.php"><img height="64" width="64"   src="images/IcoHomeWhite.png"> </a>
                <a href="About.php"><img height="64" width="64" src="images/IcoAboutWhite.png"></a>
                <a href="Gallery.php"><img height="64" width="64" src="images/IcoGalleryWhite.png"></a>
                <a href="Location.php"><img height="64" width="64" src="images/locIconWhite.png"></a>
                <a href="BuyTicket.php"><img height="64" width="64" src="images/IcoTicketWhite.png"></a>

            <h1>About</h1>
            </p>
        </header>
        <div class="box4e">
            <p >&nbsp;July morning is a major event whose origins date back to the era of the hippies. There is an old myth saying that he, who greets the sunrise on July 1st will free his spirit and live a long and healthy life. </br>
                &nbsp;Today, Bulgaria is the only place in the world where the tradition is still kept. This year however, we bring the tradition to the Netherlands. Dream Team presents you with the amazing opportunity to greet the rising Sun and fill your soul with positive vibes to the sound of evergreen tunes. </br>
                &nbsp;A special guest at the event ia going to be non other than John Lawton, vocalist of Uriah Heep and symbol of the event itself. Come greet the rising Sun with us at camping "Park Kuierpad" and experience its cleansing power. </br>
            </p> 
        </div>
        <a href="BuyTicket.php"><img src="images/ticketbutton.png"
                                     width=200px
                                     height=80px></a> 
        <div class="box4e">
            <div class="orbe">
                <h3 class="orbe"><strong>Want to write to us personally?</strong></h3>
            </div>
            <div class="goten">
                <form name="htmlform" method="post" action="MailSent.php">
                    <div class="kon4i"><img src="images/kon4i.png" ></img> </div>
                    <h6>First Name:</h6>
                    <input type="text"
                           name="first_name" required>
                    <h6>Last Name:</h6>
                    <input type="text"
                           name="last_name" required>
                    <h6>Ticket number:</h6>
                    <input type="number"
                           name="ticket" >
                    <h6>Email Address: </h6>
                    <input type="text"
                           name="email" required>
                    <h6>Message:</h6>
                    <textarea
                        name="comments" 
                        cols=23
                        rows=5 required></textarea></br>
                    <input type="submit" 
                           value="Submit"
                           class="goten">
                </form>  

            </div>  
            </br>   
        </div>  
        <div id="chao" class="fb-comments" data-href="https://www.facebook.com/july.morning.dream.team/" style="background: #fff;" data-numposts="5"></div>
        <iframe id="chao" src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fjuly.morning.dream.team&width=600&colorscheme=light&show_faces=true&border_color&border_radius&stream=true&header=true&height=435&margin" 
                scrolling="yes" 
                frameborder="0" 
                style="border:1px solid black; 
                border-radius: 7px; 
                overflow:hidden; 
                width:500px; 
                height:430px; 
                background: #fff; 
                float: center;
                margin: 10px 20% 10px 20%" 
                allowtransparency="true"></iframe>
        <br>
        <a id="chao" class="twitter-timeline"  href="https://twitter.com/Dream_Team_Fon" 
           data-widget-id="734461852734922752"
           width=400
           height=430>Tweets by July Morning</a>
        <br>
        <a id="chao" href="https://twitter.com/intent/tweet?screen_name=Dream_Team_Fon" class="twitter-mention-button">Tweet to @Dream_Team_Fon</a>     

        <?php

        include 'includes/footer.php';
        ?>
