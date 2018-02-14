<?php
    function validName($name) {
        if(!empty($name)){
            if(ctype_alpha($name))
                return '';
            else
                return 'name can only contain letters.';
        }
        else
            return 'name is required';
    }

    function validAge($age) {
        if(!empty($age)){
            if(is_numeric($age)){
                if($age >= 18)
                    return '';
                else
                    return 'You must be over 18yrs old.';
            }
            else
                return 'Age must be a number.';
        }
        else
            return 'Age is required';
    }

    function validPhone($phone) {
        if(!empty($phone)){
            if(is_numeric($phone)){
                if(strlen($phone) == 10)
                    return '';
                else
                    return'Phone number must be 10 digits.';
            }
            else
                return 'Phone number must contain only number, no special characters.';
        }
        else
            return 'Phone number is required.';
    }

    function validPersonal($first, $last, $age, $phone, &$errors){
        $errors['first'] = validName($first);
        $errors['last'] = validName($last);
        $errors['age'] = validAge($age);
        $errors['phone'] = validPhone($phone);

        if(empty(implode("", $errors)))
            return true;
        else
            return false;
    }

    function validOutdoor($outdoor) {
        $input = array('hiking', 'biking', 'swimming', 'collecting', 'walking', 'climbing', '');
        foreach ($outdoor as $interest) {
            if(!in_array($interest, $input))
                return 'Please select valid outdoor interests.';
        }
        return '';
    }

    function validIndoor($indoor) {
        $input = array('tv', 'movies', 'cooking', 'board', 'puzzles', 'reading', 'cards', 'video', '');
        foreach ($indoor as $interest) {
            if(!in_array($interest, $input))
                return 'Please select valid indoor interests.';
        }
        return '';
    }