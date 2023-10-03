<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP - Lieven</title>
</head>
<body>
    <?php
        declare(strict_types=1);

        $some_string = 'hello world';

        $some_bool = False;


        if($some_bool)
        {
            echo 'Wow, some_bool was true!';
        }
        else
        {
            echo $some_var;
        }

        class Person
        {
            public string $name;
            public int $age;

            function __construct($name , $age) 
            {
                $this->name = $name;
                $this->age = $age;
            }

            public function GetName()
            {
                return $this->name;
            }

            public function DoesSomething(){
                echo $this->name . " is doing something.";
            }

        }
        $bob = new Person("bob", 43);
        echo $bob->name;
        echo $bob->age;
        echo $bob->DoesSomething();
        $dsn = "hello world"; //connection string
        $test = new PDO($dsn);

    ?>
</body>
</html>
