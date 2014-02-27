<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Plugin Slider</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>

        <div class="copyright">
            <p>Illustrations utilisées avec l'aimable autorisation d'<a href="http://adrien.noterdaem.be/">Adrien Noterdaem</a>,
            créateur de <a href="http://drawthesimpsons.tumblr.com/">Simpsonized</a>.</p>
        </div>

    
        <div id="slider" >
            <img src="img/joffrey.jpg" alt="Joffrey Baratheon" title="Joffrey Baratheon" />
            <img src="img/samwell.jpg" alt="Samwell Tarly" title="Samwell Tarly" />
            <img src="img/sansa.jpg" alt="Sansa Stark" title="Sansa Stark" />
            <img src="img/snow.jpg" alt="John Snow" title="John Snow"/>
            <img src="img/tyrion.jpg" alt="Tyrion Lannister" title="Tyrion Lannister"/>
        </div>    
    

    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="js/jquery.joo-slider.js"></script>
    <script>
    $(document).ready(function(){
        $("#slider").jooSlider({
            auto:true,
            speed:4000
        });
    });
    </script>
</body>
</html>


        


       
