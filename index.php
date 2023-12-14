<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <?php
$quote = array(
    array( "The way to get started is to quit talking and begin doing.", "– Walt Disney" ),
    array( "If life were predictable it would cease to be life, and be without flavor. ", "– Eleanor Roosevelt" ),
    array("It is during our darkest moments that we must focus to see the light", "- Aristotle"),
    array("Whoever is happy will make others happy too", "- Frank"),
    array("Do not go where the path may lead, go instead where there is no path and leave a trail", "- Ralph Waldo Emerson"),
    array("You will face many defeats in life, but never let yourself be defeated", "- Maya Angelou"),
    array("I never dreamed about success, I worked for it", "- Estee Lauder"),
    array("It is better to fail in originality than to succeed in imitation", "- Herman Melville"),
);

$section = array_rand( $quote );

foreach ( $quote[$section] as $s ) {
    printf( "<div  style='margin:0 auto; background-color: #ddd; width: 700px; padding: 20px; font-weight: 700;line-height:35px ;'> %s</div>", $s );
}
?>

  </body>

</html>
