<?php
    class RepeatCounter
    {
        private $count = 0;

        function countRepeats($input1, $input_check)
        {
            //I cannot add a \ to this remove list without creating a syntax error.
            $chars = [",", ".", "'", ";", ":", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "'", "!", "?", "^", "%", "$", "@", "#", ">", "<", ")", "(", "}", "{", "[", "]", "`", "&", "*", "/", "|", "_", "=", "+", "-"];
            $input1 = strtolower($input1);
            $input_check = strtolower($input_check);
            $char_rem_input1 = str_replace($chars, " ", $input1);
            $char_rem_input_check = str_replace($chars, " ", $input_check);
            $new_input_check = explode(" ", $char_rem_input_check);

            foreach ($new_input_check as $word) {
                if ($word == $char_rem_input1) {
                    $this->count = $this->count + 1;
                }
            }
        return $this->count;
        }
    }
?>
