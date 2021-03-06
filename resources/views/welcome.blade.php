<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body class="antialiased">
        <div class="app">
          <?php
            for ($i = 1; $i <= 10; $i++) {
              echo $i;
            }
            echo("<br>");

            interface Talks{
              public function hello();
              public function bye();
            }
            class Animal{
              public string $race;
            }
            class Person extends Animal implements Talks{
              public string $name;
              public int $age;
              public string $sex;
              public function __construct(string $name, int $age, string $sex){
                $this->name = $name;
                $this->age = $age;
                $this->sex = $sex;
                $this->race = "Human";
              }
              public function hello(){
                if($this->sex == "male"){
                  return "Hello";
                }else{
                  return "waves";
                }
              }
              public function bye(){
                return "Bye Bye";
              }
            }

            $p1 = new Person("André Lopes",21, "male");
            $p2 = new Person("Maria Isilda", 22, "female");
            $people = array($p1, $p2);
            echo("->".count($people));
            echo("<br>");
            foreach ($people as $person) {
                echo("P:".$person->name." race: ".$person->race);
                echo("<br>");
                echo("H:".$person->hello()." B: ".$person->bye());
                echo("<br>");
            }
          ?>
        </div>
    </body>
</html>
