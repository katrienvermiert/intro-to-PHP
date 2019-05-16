<?php
$array = [
	["tv-show" => '<a style="color:white" href="https://www.google.com/search?q=the+x-files&oq=the+X-files&aqs=chrome.0.35i39j69i61j0l4.2574j0j4&sourceid=chrome&ie=UTF-8">the X-files</a>', "rating" => '<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>'],
	["tv-show" => '<a style="color:white" href="https://www.google.com/search?q=firefly+tv+show&oq=firefly+tv+show&aqs=chrome.0.69i59j0l5.4241j0j9&sourceid=chrome&ie=UTF-8">Firefly</a>', "rating" => '<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>'],
	["tv-show" => '<a style="color:white" href="https://www.google.com/search?q=the+big+bang+theory&oq=the+big+bang+theory&aqs=chrome.0.69i59j0l5.2072j0j9&sourceid=chrome&ie=UTF-8">The big bang theory</a>', "rating" => '<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span>'],
    ["tv-show" => '<a style="color:white" href="https://www.google.com/search?q=dr+who&oq=dr+who&aqs=chrome.0.69i59j0l5.1849j0j4&sourceid=chrome&ie=UTF-8">Dr who</a>', "rating" => '<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span>'],
    ["tv-show" => '<a style="color:white" href="https://www.google.com/search?q=buffy+the+vampire+slayer&oq=buffy+the+vampire+slayer&aqs=chrome..69i57j0l5.3006j0j9&sourceid=chrome&ie=UTF-8">Buffy the vampire slayer</a>', "rating" => '<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span>'],
    ["tv-show" => '<a style="color:white" href="https://www.google.com/search?q=veronica+mars&oq=veronica+mars&aqs=chrome..69i57j0l5.2382j0j9&sourceid=chrome&ie=UTF-8">Veronica mars</a>', "rating" => '<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>'],
    ["tv-show" => '<a style="color:white" href="https://www.google.com/search?q=american+horror+story&oq=american+horror+story&aqs=chrome..69i57j0l5.3264j0j9&sourceid=chrome&ie=UTF-8">American horror story</a>', "rating" => '<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star"></span><span class="fa fa-star"></span>'],
    ["tv-show" => '<a style="color:white" href="https://www.google.com/search?q=killing+eve&oq=killing+eve&aqs=chrome..69i57j0l5.2310j0j9&sourceid=chrome&ie=UTF-8">Killing eve</a>', "rating" => '<span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span><span class="fa fa-star checked"></span>'],
];



?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>tv show ratings</title>
    </head>
    <body>
        <table>
            <tr>
                <td class="title">Tv-show</td>
                <td class="title">rating</td>
            </tr>

            <?php foreach($array as $arr): ?>
                <tr>
                    <td><?php echo $arr["tv-show"]; ?></td>
                    <td><?php echo $arr["rating"]; ?></td>
                </tr>
            <?php endforeach; ?>

        </table>
    </body>
</html>
