<?php
    class RepeatCounter
    {
        private $count = 0;

        function countRepeats($input1, $input_check)
        {
            $input1 = strtolower($input1);
            $input_check = strtolower($input_check);
            $new_input_check = explode(" ", $input_check);

            // if (preg_match('/[\'^£$%&*()}{@#~?,|=_+¬-]/', $input1, $input_check) || (ctype_digit($input1))) {
            //       $this->count = "Please enter letters only with no punctuation!";
            // }

            foreach ($new_input_check as $word) {
                if ($word == $input1) {
                    $this->count = $this->count + 1;
                }
            }
        return $this->count;
        }
    }
?>
