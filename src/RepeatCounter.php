<?php
    class RepeatCounter
    {
        private $count;

        function countRepeats($input1, $input_check)
        {
            $input1 = strtolower($input1);
            $input_check = strtolower($input_check);

            if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $input1, $input_check) || (ctype_digit($input1, $input_check))) {
                  $this->count = "Please enter letters only with no punctuation!";
            }
        return $this->count;
        }
    }
?>
