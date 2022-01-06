<?php
echo '<!DOCTYPE HTML>
            <html lang="hr">
                    <head>
                        <title>Tropical plants</title>
                        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
                        <meta charset="UTF-8">
                        <meta name="description" content="Tropical plants">
                        <meta name="keywords" content="PLANT, FERN, MONSTERA, DRAGON TREE, DRACAENA, YUCCA, ORCHID, TROPICAL, JUNGLE">
                        <meta name="author" content="Anamarija Jakovljević">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <link rel="stylesheet" href="style.css">
                    </head>

                    <body>
                        <h1>Contact form</h1>
                        <p>Firstname: ' . $_POST['firstname'] . '</p>
                        <p>Lastname: ' . $_POST['lastname'] . '</p>
                        <p>Email: ' . $_POST['email'] . '</p>
                        <p>Country: ' . $_POST['country'] . '</p>
                        <p>Subject: ' . $_POST['subject'] . '</p>
                        <p><a href="contact.html">Back to form!</a></p>';

$body = '<h1>Contact form</h1>
                        <p>Firstname: ' . $_POST['firstname'] . '</p>
                        <p>Lastname: ' . $_POST['lastname'] . '</p>
                        <p>E-mail: ' . $_POST['email'] . '</p>
                        <p>Country: ' . $_POST['country'] . '</p>
                        <p>Subject: ' . $_POST['subject'] . '</p>';


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: ajakovl@vvg.hr' . "\r\n";
mail($_POST['email'], 'My online form', $body, $headers);
echo            '</body>
        </html>';
