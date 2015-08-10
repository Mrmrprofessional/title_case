<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $exception_list = array('of','a','the','and','an','or','nor','but','is','if','then','else','when',
'at','from','by','on','off','for','in','out','over','to','into','with');

            $input_array_of_words = explode(" ", strtolower($input_title));
            foreach ($input_array_of_words as $key => $word)
            {
                if (!in_array($word, $exception_list) or $word == $input_array_of_words[0])
                {
                    $words[$key] = ucfirst($word);
                }
                elseif (in_array($word, $exception_list))
                {
                    $words[$key] = $word;
                }
            }
            return implode(" ", $words);
        }

    }
?>
