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
            header('Access-Control-Allow-Origin: *');
            header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
        ?>
    </head>
    <body>
        <header>
            <img src="image/WW.png" alt="Logo" id="app-logo" />
            
            <div id="hero-content">
                <img src="image/iphone-hero-3.png" alt="Hero Image" />
            
                <div id="copy">
                    <h1>Always Know Where Your Packages Are</h1>
                    <h3>Our iOS app makes tracking your packages easier than ever.</h3>
                    <h2>We're launching this summer</h2>
                    <h4>Get notified when we do.</h4>
                    <form class="email-form" id="headerMailFrom">
                        <input type="text" name="email" placeholder="Enter Your Email">
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
                <h2>Stop wondering where your packages are</h2>
                <p>WW collects the transactions you made from online stores, tracks your packages and let's you know when they'll arrive.</p>
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
                    <h3>Add a USPS tracking code to see how it works.</h3>
                    <form>
                        <input type="text" placeholder="USPS Code" name="uspsCode">
                        <input type="submit" value="Try this">
                    </form>
                    <div class="success-response">
                        <p></p>
                    </div>
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
            </section>
        </main>
        
        
        <footer>
            <h2>Interested in WW?</h2>
            <h3>We're launching this summer.<br />Provide your email and we'll let you know when we're in the App Store.</h3>
            <form class="email-form" id="footerMailFrom">
                <input type="text" name="email" placeholder="Enter Your Email">
                <input type="submit" value="Done!">
            </form>
            <div class="success-response">
                <p></p>
            </div>
        </footer>
    </body>
</html>