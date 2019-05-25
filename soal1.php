<?php

    // statis
        $user= new \stdClass();
        $school= new \stdClass();
        $skills= new \stdClass();
        $hobbies= new \stdClass();

        //school
        $school->HighSchool = "Smk Telkom";
        $school->University = "STMIK Mikroskil";

        //skills
        $skill = array(
            array("name"=>"Leadership", "score"=>90),
            array("name"=>"Coding", "score"=>80),
            array("name"=>"SQL Query", "score"=>70)
        );
        $skills->skill = $skill ;

        //user
        $user->name = "fadlan";
        $user->address = "medan";
        $user->hobbies = "coding";
        $user->is_marries = FALSE;
        $user->school = $school;
        $user->skills = $skills;


        

        echo json_encode($user);
 

?>