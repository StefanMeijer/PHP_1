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
                echo changeWord($key);
            }
        }
        
        /*
         * @param   String  $word   The filled in word
         * @return  String  $word   The word that has been checked
         */
        function changeWord($word) {
            $lenght = strlen($word); //Get total lenght of word
            
            $first = substr($word, 0, 1); //Get first letter
            $firstCapitalize = ctype_upper($first);
            
            $firstTwo = substr($word, 0, 2); //Get first two letters
            $doubleCapitalize = ctype_upper($firstTwo);
            
            if ($doubleCapitalize == 1) { //Check if word is double capitalized
                $word = strtolower($word);
            } elseif ($firstCapitalize == 1 && $doubleCapitalize != 1) { //Check if first letter is capitalized and not double capitalized
                $rest = substr($word, 1, $lenght);
                $word = $first . strtolower($rest);
            } else { //If word is not capitalized in the beginning
                $word = strtolower($word);
            }

            return $word . '<br>';
        }
      ?>
  </body>
</html>
