<?php include 'data.php'; ?>
<!DOCTYPE html>
<html lang="it" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="public/app.css">
        <title>FAQ - Privacy & Terms - Google</title>
    </head>
    <body>
        <header>
            <div class="top-header">
                <div class="logo">
                    <img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_74x24dp.png" alt="Google">
                </div>
                <div class="privacy-terms-title">
                    <h2>Privacy & Terms</h2>
                </div>
            </div>
            <div class="bottom-header">
                <div class="bottom-header-left">
                    <ul>
                        <li>Overview</li>
                        <li>Privacy Policy</li>
                        <li>Terms of Service</li>
                        <li>Technogies</li>
                        <li>FAQ</li>
                    </ul>
                </div>
                <div class="bottom-header-right">
                    <span>Google Account</span>
                </div>
            </div>
        </header>
        <main>
            <div class="container-faq">
                <?php foreach ($faq as $key => $value) {?>
                    <?php echo $key; ?>
                    <?php echo $value; ?>
                <?php } ?>
            </div>
        </main>
        <footer>
            <div class="container-footer">
                <div class="footer-left">
                    <ul>
                        <li>Google</li>
                        <li>About Google</li>
                        <li>Privacy</li>
                        <li>Terms</li>
                    </ul>
                </div>
                <div class="footer-right">
                    <i class="fas fa-comment-alt"></i>
                    <select>
                        <option>English</option>
                        <option>Italiano</option>
                        <option>Genovese</option>
                    </select>
                </div>
            </div>
        </footer>
    </body>
</html>
