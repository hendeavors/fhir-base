<?php

declare(strict_types=1);

namespace Endeavors\Fhir\Http\Contracts\Base\Three;

use Endeavors\Fhir\Http\Contracts\Base\Shared\Individuals as SharedIndividuals;
use Psr\Http\Message\{RequestInterface, ResponseInterface};

/**
 * The categorized STU3 Individuals representation
 * @var Individuals
 * @see https://www.hl7.org/fhir/stu3/resourcelist.html section Base
 */
interface Individuals extends SharedIndividuals
{
}
