<?php

declare(strict_types=1);

namespace Endeavors\Fhir\Http\Contracts\Base\Four;

use Psr\Http\Message\{RequestInterface, ResponseInterface};
use Endeavors\Fhir\Http\Contracts\Base\Shared\Individuals as SharedIndividuals;

/**
 * The categorized R4 Individuals representation
 * @var Individuals
 * @see https://www.hl7.org/fhir/r4/resourcelist.html section Base
 */
interface Individuals extends SharedIndividuals
{
}
