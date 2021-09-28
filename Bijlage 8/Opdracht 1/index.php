<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Textarea</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
      <form method="POST" action="">
          <textarea name="textinput"></textarea>
          <input type="submit" value="verstuur"/>
      </form>
      <?php
        $pieces = array();
        if (isset($_POST['textinput'])) {
            $text = htmlspecialchars($_POST['textinput']);
            $pieces = explode(" ", $text);
            
            foreach ($pieces as $key) {
                if (strlen($key) < 4) {
                    echo $key . '<br>';
                } else {
                    echo changeWord($key);
                }
            }
        }
        
        /*
         * @param   String  $word The word that has 4 or more characters
         * @return  String  switch first and last letter
         */
        function changeWord($word) {
            $lenght = strlen($word); //Get total lenght of word
            $firstKey = substr($word, 0, 1); //Get first letter
            $secondKey = substr($word, -1); //Get second letter
            $thirthKey = substr($word, 1, $lenght - 2); //Get text between first and last letter
            return $secondKey . $thirthKey . $firstKey . '<br>';
        }
      ?>
  </body>
</html>
