<!DOCTYPE html>

<head>
    <title>Demo Page</title>
    <meta charset="UTF-8">
    <meta name="description" content="AJAX Pratice">
    <meta name="author" content="Nel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>

    <style type="text/css">
        body {
            font-family: 'Source Sans Pro', sans-serif;
            font-size: 100%;
            font-size: 1.5em;
        }
        
        #bg.overlay {
            background-color: SlateGray;
            position: relative;
            width: 100%;
            height: 100%;
            opacity: 0.60;
            z-index: 2;
            -webkit-filter: blur(10px);
            -moz-filter: blur(10px);
            -o-filter: blur(10px);
            -ms-filter: blur(10px);
            filter: blur(10px);
        }
        
        img {
            overflow: auto;
            width: auto;
            display: block;
        }
        
        #load {
            animation-duration: 1.3s;
        }
    </style>
</head>

<body>
    <div class="jumbotron" style="text-align:center;z-index:0">
        <h1 id="heading">AJAX Testing.</h1><br>
        <div class="container">
            <div class="col-md-3 col-sm-3 col-xs-6" style="padding-left:0.3em;padding-right:0.3em;margin-bottom:0.3em"><button class="btn btn-default col-xs-12" id="timetable">My Timetable</button></div>
            <div class="col-md-3 col-sm-3 col-xs-6" style="padding-left:0.3em;padding-right:0.3em;margin-bottom:0.3em"><button class="btn btn-default col-xs-12" id="CV">My CV</button></div>
            <div class="col-md-3 col-sm-3 col-xs-6" style="padding-left:0.3em;padding-right:0.3em"><button class="btn btn-default col-xs-12" id="signup">Sign Up</button></div>
            <div class="col-md-3 col-sm-3 col-xs-6" style="padding-left:0.3em;padding-right:0.3em"><button class="btn btn-default col-xs-12" id="display" >Display</button></div>
        </div>
    </div>
    <div class="container well well-lg" id="load">
        <p>Click the buttons to load content.</p>
    </div>
    <div class="container-fluid overlay" id="bg" style="z-index:-1;position:absolute;top:0;left:0;padding:0px">
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="https://www.technocrazed.com/wp-content/uploads/2015/12/Landscape-wallpaper-8.jpg" alt="Los Angeles" style="min-width:100%;max-width:700%">
                </div>

                <div class="item">
                    <img src="https://f.vividscreen.info/soft/4eb36957f6d9c728d75908663faff0a8/Gotham-City-1920x1080.jpg" alt="Chicago" style="min-width:100%;max-width:700%">
                </div>

                <div class="item">
                    <img src="https://cdn.wallpapersafari.com/28/50/rJhX7M.jpg" alt="New york" style="min-width:100%;max-width:700%">
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function() {
            console.log("loaded");
            
    $.fn.extend({
        animateCss: function (animationName) {
            var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            this.addClass('animated ' + animationName).one(animationEnd, function() {
                $(this).removeClass('animated ' + animationName);
            });
        }
    });
    
            $('#heading').animateCss('slideInDown');
            
            $("#CV").click(function(e) {
                $('#CV').animateCss('pulse');
                $('#load').load("CV.html",function() {$('#load').animateCss('slideInUp');});
            });

            $("#timetable").click(function(e) {
                $('#timetable').animateCss('pulse');
                $('#load').load("timetable.html",function() {$('#load').animateCss('slideInUp');});
            });

            $("#signup").click(function(e) {
                $('#signup').animateCss('pulse');
                $('#load').load("signup.html",function() {$('#load').animateCss('slideInUp');});
            });
            
            $("#display").click(function(e) {
                $('#display').animateCss('pulse');
                $('#load').load("/display.php",function() {$('#load').animateCss('slideInUp');});
            });
        });
    </script>

</body>
