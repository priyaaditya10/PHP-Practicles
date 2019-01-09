<!Doctype html>
<html>
  <head>
  	<meta charset="utf-8" />
    <title>PHP Practicals</title>
    <link href="css/stylesheet1.css" rel="stylesheet" />
  </head>

  <body>

    <?php

    function rev1($x){
      return strrev($x);
    }

    function rev2($x){

      $len = strlen($x);

        $message = "Reversed Version:  ";

        for ($i=0; $i < $len/2; $i++) {
          $temp = $x[$i];
          $x[$i] = $x[$len-($i+1)];
          $x[$len-($i+1)] = $temp;
        }

      return $x;
    }

    function reverse(){
    if(isset($_POST['submit1']) || isset($_POST['submit2'])){
      $str = $_POST['string'];

        if(isset($_POST['submit1']))
          $newstr = rev1($str);
        elseif(isset($_POST['submit2']))
          $newstr = rev2($str);

        $message = "Reversed Version:  ".$newstr;


      echo "<script type='text/javascript'>
        alert('". $message ."');
      </script>";
    }
  }
    ?>
<pre>
    <header class="text-center">    <h1>Reverse the String</h1>    </header>
    <form action="" method="POST" class="form">
      <?= reverse(); ?>
      <h3>Enter your string: </h3>
      <div class="form-group">
        <center> <input type="text" name="string" class="inputBox" placeholder="Your String" /> </center>

<abbr title="Using inbuilt function strrev()"><button type="submit" name="submit1">Reverse 1</button></abbr> <abbr title="Using selfdefined function."><button type="submit" name="submit2">Reverse 2</button></abbr>


      </div>
    </form>
  </pre>
  </body>
</html>