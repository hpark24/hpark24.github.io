<!DOCTYPE html>
<html>
    <head>
        <title>Introducing WW</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/main.js"></script>
        
        <?php
            $origin=isset($_SERVER['HTTP_ORIGIN'])?$_SERVER['HTTP_ORIGIN']:$_SERVER['HTTP_HOST'];
            header('Access-Control-Allow-Origin: '.$origin);		
            header('Access-Control-Allow-Methods: POST, OPTIONS, GET, PUT');
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Allow-Headers: Authorization, X-Requested-With');
            header('P3P: CP="NON DSP LAW CUR ADM DEV TAI PSA PSD HIS OUR DEL IND UNI PUR COM NAV INT DEM CNT STA POL HEA PRE LOC IVD SAM IVA OTC"');
            header('Access-Control-Max-Age: 1');
        ?>
    </head>
    <body>
        <header>
            <img src="image/WW.png" alt="Logo" id="app-logo" />
            
            <div id="hero-content">
                <img src="image/iphone-hero-3.png" alt="Hero Image" />
            
                <div id="copy">
                    <h1>Always Know Where Your Packages Are</h1>
                    <h3>Put your online transaction information and be notified of when your package arrives</h3>
                    <h2>Launching This Summer</h2>
                    <h4>We will send an email to you when it's ready</h4>
                    <form class="email-form" id="headerMailFrom">
                        <input type="text" name="email" placeholder="Give Us Your Email Address">
                        <!--<button>Done</button>-->
                        <input type="submit" value="Send it">
                    </form>
                    <div class="success-response">
                        <p></p>
                    </div>
                </div>
            </div>
        </header>
        
        <main>
            <div class="arc-border"></div>
            <section id="synopsis">
                <h2>Never be clueless about your package </h2>
                <p>WW will collect the transactions you made from any online retail store, track your packages, and then tell you when it will arrive to yoour home.</p>
            </section>
            <div class="arc-border flip"></div>
            
            <section id="how-it-works">
                <h2>How it works</h2>
                    
                <div>
                    <img src="image/put-in.png" alt="Put your shipping infos" />
                    <h3>Put in your shipping information</h3>
                    <p>
                        Sync your Amazon or E-Bay account to track all your orders.</br>
                        For third party retailers, just add a tracking code of your item.
                    </p>
                </div>
                
                <div>
                    <img src="image/sit-and-wait.png" alt="Just sit and watch your phones" />
                    <h3>Watch the progress bar and wait</h3>
                    <p>
                        Check the progress and arrival date of your package at any time.</br>
                        <!--<strike>For third party retailers, just add a tracking code of your item.</strike>-->
                    </p>
                </div>
                
                <div>
                    <img src="image/managing.png" alt="Clean up your infos and history" />
                    <h3>Manage your progress bars easily</h3>
                    <p>
                        Drag the progress bar away to remove the item you already received.</br>
                        Change the order of each bar for your own convenience.
                    </p>
                </div>
            </section>
            
            <div class="arc-border"></div>
            <section id="try-it-out">
                <div id="usps-form">
                    <h2>Try It Out</h2>
                    <h3>Put your USPS tracking code to test your progress bar</h3>
                    <!--<form method=”POST” name="uspsForm" ACTION=tracking.php>-->
                    <form>
                        <input type="text" placeholder="USPS Code" name="uspsCode">
                        <!--<button>Done</button>-->
                        <input type="submit" value="Try this">
                    </form>
                </div>
                <div id="app-screen">
                    <img src="image/iphone-actual-app.png" alt="It tracks your shipment." />
                    <div id="box-in-app">
                        <p id="package-id">ID</p>
                        <div id="date">
                            <p id="package-start">Start Date</p>
                            <p id="package-end">End Date</p>
                        </div>
                        <div id="progress-bar"></div>
                    </div>
                </div>
                <div id="iphone-cover"></div>
                <!--<img class="arc-border" src="image/arc-border-concave.svg" />-->
            </section>
        </main>
        
        
        <footer>
            <h2>Are you getting interested in WW?</h2>
            <h3>We will notify you by email when our app launches</h3>
            <form class="email-form" id="footerMailFrom">
                <input type="text" name="email" placeholder="Write Your Email Address">
                <!--<button>Done</button>-->
                <input type="submit" value="Done!">
            </form>
            <div class="success-response">
                <p></p>
            </div>
        </footer>
        
        <!--<img class="arc-border flip" src="image/arc-border-concave.svg" />-->
        <!--<div id="last-div"></div>-->
    </body>
</html>