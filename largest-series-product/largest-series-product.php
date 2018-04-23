<?php

class Series
{
    private $number;
    private $length;

    public function __construct(string $number)
    {
        $this->number = $number;
    }

    public function largestProduct(int $length)
    {
        if ($length === 0) {
            return 1;
        }

        $this->length = $length;

        $this->validateLenghtArguments();
        $this->validateTypeArguments();

        return array_reduce(
            range(0, strlen($this->number) - $this->length),
            function ($max, $start) {
                return max(
                    $max,
                    $this->product(
                        substr($this->number, $start, $this->length)
                    )
                );
            },
            0
        );
    }

    private function validateLenghtArguments()
    {
        if ($this->length > strlen($this->number)) {
            throw new \InvalidArgumentException();
        }
    }

    private function validateTypeArguments()
    {
        if (!is_numeric($this->number) || $this->length < 0) {
            throw new \InvalidArgumentException();
        }
    }

    private function product(string $serie)
    {
        return array_product(str_split($serie));
    }
}
