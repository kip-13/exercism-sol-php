<?php

class Bob
{
    const REGEXP_UPPER = '#([^\p{Lu}\W\d]|^[\d\W]+$)#u';

    private $answers = [
        'nothing' => 'Fine. Be that way!',
        'yell' => 'Whoa, chill out!',
        'question' => [
            'yell' => 'Calm down, I know what I\'m doing!',
            'normal' => 'Sure.'
        ],
        'anything' => 'Whatever.'
    ];

    public function respondTo($s)
    {
        $s = $this->trimAll($s);

        if ( ! $s) {
            return $this->getAnswerFromNothing();
        }

        if (preg_match('#\?$#', $s)) {
            return $this->getAnswerFromQuestion($s);
        }

        return $this->getAnswerFrom($s);
    }

    private function trimAll($s)
    {
        return preg_replace('/[\pZ\pC]+/u', '', $s);
    }

    private function getAnswerFrom($s)
    {
        if (preg_match(self::REGEXP_UPPER, $s)) {
            return $this->answers['anything'];
        }

        return $this->answers['yell'];
    }

    private function getAnswerFromNothing()
    {
        return $this->answers['nothing'];
    }

    private function getAnswerFromQuestion($s)
    {
        $answers = $this->answers['question'];

        if (preg_match(self::REGEXP_UPPER, $s)) {
            return $answers['normal'];
        }

        return $answers['yell'];
    }
}
