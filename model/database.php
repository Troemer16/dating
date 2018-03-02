<?php
    /*
       CREATE TABLE Members (
            member_id INT(11) AUTO_INCREMENT PRIMARY KEY,
            fname VARCHAR(30) NOT NULL,
            lname VARCHAR(30) NOT NULL,
            age INT(3) NOT NULL,
            gender ENUM('male', 'female'),
            phone INT(10) NOT NULL,
            email VARCHAR(150) NOT NULL,
            state ENUM('washington', 'oregon', 'idaho', 'california'),
            seeking ENUM('male', 'female'),
            bio TEXT,
            premium TINYINT(1) NOT NULL,
            image VARCHAR(150),
            interests VARCHAR(120)
        );
     */

    //include configuration file
    require_once ('/home/troemerg/public_html/config.php');

    class Database
    {
        private $dbh;

        function __construct()
        {
            try {
                //instantiate pdo
                $this->dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            } catch (PDOException $e){
                echo $e->getMessage();
            }
        }

        public function addMember($member)
        {
            //Define the query
            $sql = "INSERT INTO `Members`(`fname`, `lname`, `age`, `gender`, `phone`, `email`, `state`, `seeking`, 
                    `bio`, `premium`, `interests`) VALUES (:fname, :lname, :age, :gender, :phone, :email, :state, 
                    :seeking, :bio, :premium, :interests)";

            //Prepare the statement
            $statement = $this->dbh->prepare($sql);

            //Bind the parameters
            $statement->bindParam(':fname', $member->getFname(), PDO::PARAM_STR);
            $statement->bindParam(':lname', $member->getLname(), PDO::PARAM_STR);
            $statement->bindParam(':age', $member->getAge(), PDO::PARAM_STR);
            $statement->bindParam(':gender', $member->getGender(), PDO::PARAM_STR);
            $statement->bindParam(':phone', $member->getPhone(), PDO::PARAM_STR);
            $statement->bindParam(':email', $member->getEmail(), PDO::PARAM_STR);
            $statement->bindParam(':state', $member->getState(), PDO::PARAM_STR);
            $statement->bindParam(':seeking', $member->getSeeking(), PDO::PARAM_STR);
            $statement->bindParam(':bio', $member->getBio(), PDO::PARAM_STR);

            if(get_class($member) == 'Premium')
            {
                $premium = true;
                $interests = implode(", ", $member->getInDoor());

                if(!empty($member->getOutDoor()))
                    $interests .= ", ".implode(", ", $member->getOutDoor());
            }
            else
            {
                $premium = false;
                $interests = null;
            }

            $statement->bindParam(':premium', $premium, PDO::PARAM_STR);
            $statement->bindParam(':interests', $interests, PDO::PARAM_STR);


            //Execute
            $statement->execute();

//            //check
//            $id = $this->dbh->lastInsertId();
//            echo "<p>Member $id inserted successfully.</p>";
        }
    }