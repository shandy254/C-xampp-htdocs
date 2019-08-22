<?php $biodata = [
        // [
            "name"                  => "Bagus T"                                           ,  //   (String)
            "age"                   => 20                                                  ,  //   (Number)
            "address"               => "Jl. Surtikanti Tengah I"                           ,  //   (String)
            "hobbies"               => ["listening to music","watching movies","coding"]   ,  //   (Array)
            "is_married"            => false                                               ,  //   (Boolean)
            "list_school"           => [
                [ "name" => "SD Islam Gergaji", "year_in" => "2006", "year_out" => "2012", "major" => null ] ,
                [ "name" => "SMPN 5 Semarang", "year_in" => "2012", "year_out" => "2015", "major" => null ],
                [ "name" => "SMAN 3 Semarang", "year_in" => "2015", "year_out" => "2018", "major" => "Science" ],
                                        ]                                                  ,  //   (Array of Object) 
            // with key name, year_in, year_out, and major (if any, if no set “null” )

            "skills"                => [
                [ "skill_name" => "html", "level" => "advanced" ],
                [ "skill_name" => "php", "level" => "advanced" ],
                [ "skill_name" => "css", "level" => "advanced" ],
                [ "skill_name" => "javascript", "level" => "beginner" ],
                [ "skill_name" => "C", "level" => "advanced" ]
                                        ]                                                  ,  //  (Array of Obj) 
            // with key skill_name and level (beginner, advanced, expert)

            "interest_in_coding"    => true                                                ,  //  (Boolean)

            ];

        // $a = $biodata["skills"][3]["level"]; echo $a;
        // echo $biodata["address"];

     ?>



