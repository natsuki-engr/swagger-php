<?php

use OpenApi\Attributes as OA;

#[OA\Schema()]
class Airport
{
    #[OA\Property(property: 'kind')]
    public const KIND = 'Airport';
}
