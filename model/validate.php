<?php
    function validName($name, &$errors) {
        if(!isEmpty($name)){
            if(ctype_alpha($name))
                return true;
            else
                $errors['name'] = '<p>Name can only contain letters.</p>';
        }
        else
            $errors['name'] = '<p>Name is required</p>';
        return false;
    }

    function validAge($age, &$errors) {
        if(!isEmpty($age)){
            if(is_numeric($age)){
                if($age > 18)
                    return true;
                else
                    $errors['age'] = '<p>You must be over 18yrs old.</p>';
            }
            else
                $errors['age'] = '<p>Age must be a number.</p>';
        }
        else {
            $errors['age'] = '<p>Age is required</p>';
        }
        return false;
    }

    function validPhone($phone, &$errors) {
        if(!isEmpty($phone)){
            if(is_numeric($phone)){
                if(strlen($phone) == 10)
                    return true;
                else
                    $errors['phone'] = '<p>Phone number must be 10 digits.</p>';
            }
            else
                $errors['phone'] = '<p>Phone number must contain only number, no special characters.</p>';
        }
        else
            $errors['phone'] = '<p>Phone number is required.</p>';

        return false;
    }

    function validOutdoor($outdoor, &$errors) {
        $input = array('hiking', 'biking', 'swimming', 'collecting', 'walking', 'climbing');
        foreach ($outdoor as $interest) {
            if(!in_array($interest, $input)) {
                $errors['outdoor'] = '<p>Please select valid outdoor interests.</p>';
                return false;
            }
        }
        return true;
    }

    function validIndoor($indoor, &$errors) {
        $input = array('tv', 'movies', 'cooking', 'board', 'puzzle', 'reading', 'cards', 'video');
        foreach ($indoor as $interest) {
            if(!in_array($interest, $input)) {
                $errors['indoor'] = '<p>Please select valid indoor interests.</p>';
                return false;
            }
        }
        return true;
    }