<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examples | FalconStudio</title>
</head>
<body>

<!--tarefa da aula do prof-->
        <?php
        //echo é o comando de impressão
        echo "Hello World!";
        //vale ressaltar que que o comando echo num é case sensitive
        ECHO "Hello World!<br>";
        echo "Hello World!<br>";
        EcHo "Hello World!<br>";
        //nomes de variaveis são case sensitive
        $color = "red";
        echo "My car is " . $color . "<br>";
        echo "My house is " . $COLOR . "<br>";
        echo "My boat is " . $coLOR . "<br>";
        
        //temos três tipos de comentários:

        // This is a single-line comment
        # This is also a single-line comment

        /*
        This is a multiple-lines comment block
        that spans over multiple
        lines
        */

        // You can also use comments to leave out parts of a code line

        //é assim que se declara variaveis "$"
        $txt = "Hello world!";
        $x = 5;
        $y = 10.5;

        echo $txt;
        echo "<br>";
        echo $x;
        echo "<br>";
        echo $y;

        //variaveis globais nao sao impressas como locais
        $x = 5; // global scope
        
        function myTest() {
        // using x inside this function will generate an error
        echo "<p>Variable x inside function is: $x</p>";
        } 
        myTest();

        echo "<p>Variable x outside function is: $x</p>";


        //variavel local vai
        function myTest() {
            $x = 5; // local scope
            echo "<p>Variable x inside function is: $x</p>";
          } 
          myTest();
          
          // using x outside the function will generate an error
          echo "<p>Variable x outside function is: $x</p>";


        /*duas formas de imprimir uma variavel local: 
        keyword e $GLOBALS*/

        //keyword
        $x = 5;
        $y = 10;

        function myTest() {
        global $x, $y;
        $y = $x + $y;
        } 

        myTest();  // run function
        echo $y; // output the new value for variable $y

        //usando o $GLOBALS['']

        $z = 10;
        $x = 5;
        function myTest() {
          $GLOBALS['y'] = $GLOBALS['z'] + $GLOBALS['x']


        }
        myTest();
        echo $y


        //usado de maneira incremental e manualmente sem perda de dados
        function myTest() {
          static $x = 0;
          echo $x;
          $x++;
        }
        
        myTest();
        echo "<br>";
        myTest();
        echo "<br>";
        myTest();


        //algumas formas de se utilizar o echo 
        echo "<h2>PHP is Fun!</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";

        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        echo "<h2>$txt1</h2>";
        echo "<p>Study PHP at $txt2</p>";
        
        
        //strigs com o comando print
        print "<h2>PHP is Fun!</h2>";
        print "Hello world!<br>";
        print "I'm about to learn PHP!";
          
       //variables e strings com o comando print
        $txt1 = "Learn PHP";
        $txt2 = "W3Schools.com";

        print "<h2>$txt1</h2>";
        print "<p>Study PHP at $txt2</p>";

        //da pra descobrir o tipo de variavel ao usar o var_dump($)
        #exemplo
        $x = "ai wo torimodose";
        echo $x;
        var_dump($x);

        //strlen() pega o lenght de uma string 
        echo strlen("ai wo toridomose");
        //str_word_count()-conta o numero de palavras presente na string
        echo str_word_count("ai wo torimodose");
        //strrev() faz inverter a string
        echo strrev("ai wo torimodose");
        //strpos() procura uma string diferente 
        //str_replace()substitui uma string


        //como observar o tipo de uma varivel
        #de maneira simples, pegue o var_dump(is_tipo($))
        $x = "toma";
        var_dump(is_string($x));

        //como achar o valor de pi?
        echo (pi());
        //como achar o valor de min e max?
        echo(min(numeros));
        echo(max(numeros));
        //achar o valor abs de um numero (valor positivo)
        echo (abs(-7));
        //como achar a raiz de um numero??
        echo (sqrt(64));
        //como arrendondar??
        echo(round(0.90));
        //como gerar um numeor aleatorio
        echo (rand());
        //como obter um numero aleatorio entre 10 e 100
        echo(rand(10, 100));
        

        //php constants

        //como usar uma constante php 
        //nesse caso aq é case sensitie
        define("greetings", "hello world");
        echo greetings;
        //aqui num é case sensitive
        define("greetings", "haah", true);
        echo Greetings;

        //arrays
        define("toma", array[toma1,toma2,toma3]);
        echo toma[0];
        

        //dentro de uma function
              define("GREETING", "Welcome to W3Schools.com!");

      function myTest() {
        echo GREETING;
      }
      
      myTest();
        
        ?> 
</body>
</html>