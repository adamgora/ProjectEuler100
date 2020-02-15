<?php
declare(strict_types=1);

namespace App\P009_SpecialPythagoreanTriplet\Exceptions;

class TripletNotFoundException extends \Exception
{
    protected $message = 'Triplet not found';
}