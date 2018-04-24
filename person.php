<!DOCTYPE html>
<html>
    <head>
      <title> Introduction to Object-Oriented Programming </title>
    </head>
	<body>
      <p>
      <?php


         // The code below creates the class
        class Person
        {
            // Creating some properties (variables tied to an object)
            public $isAlive = true;
            public $firstname;
            public $lastname;
            public $age;
            public $course;
            public $amount;
            
            // Assigning the values
            public function __construct($firstname, $lastname, $age, $course, $amount)
            {
                $this->firstname = $firstname;
                $this->lastname = $lastname;
                $this->age = $age;
                $this->course = $course;
                $this->paid = ($amount == 10000) ? "Paid" : "Not paid";
            }
            
            // Creating a method (function tied to an object)
            public function name()
            {
                return "Participant name is " . $this->firstname . " " . $this->lastname . ". ";
            }

            public function paid()
            {
                return $this->paid;
            }

            public function table()
            {
                return array(
                    [
                        'firstname' => $this->firstname,
                        'lastname' => $this->lastname,
                        'age' => $this->age,
                        'course' => $this->course,
                        'paid' => $this->paid,
                    ],
                    [
                        'Organization name' => 'Coespark',
                        'Address' => "Ojota",
                    ]
                );
            }

        }
          
         // Creating a new person called "boring 12345", who is 12345 years old ;-)
        $participant = new Person('Stanley', 'John', 45, 'PHP', 10000);

        print_r($participant->table());
        ?>
        </p>
    </body>
</html>