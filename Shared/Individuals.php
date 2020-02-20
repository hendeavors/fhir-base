<?php

declare(strict_types=1);

namespace Endeavors\Fhir\Http\Contracts\Base\Shared;

use Psr\Http\Message\{RequestInterface, ResponseInterface};

/**
 * The categorized R4 Individuals representation
 * @var Individuals
 * @see https://www.hl7.org/fhir/r4/resourcelist.html section Base
 */
interface Individuals
{
    /**
     * The Patient resource
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function patient(RequestInterface $request): ResponseInterface;

    /**
     * The Practicioner resource Maturity Level 3
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function practitioner(RequestInterface $request): ResponseInterface;

    /**
     * [practionerRole description] Maturity Level 2
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function practionerRole(RequestInterface $request): ResponseInterface;

    /**
     * [relatedPerson description] Maturity Level 2
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function relatedPerson(RequestInterface $request): ResponseInterface;

    /**
     * [person description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function person(RequestInterface $request): ResponseInterface;

    /**
     * [group description]
     * @param  RequestInterface  $request [description]
     * @return ResponseInterface          [description]
     */
    public function group(RequestInterface $request): ResponseInterface;
}
