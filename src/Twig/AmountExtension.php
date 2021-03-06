<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AmountExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter("amount", [$this, "amount"])
        ];
    }

    public function amount($value)
    {
        $result = number_format($value, 2, ",", ' ');
        
        $result = $value . " €";

        return $result;
    }
}