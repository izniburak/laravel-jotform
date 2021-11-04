<?php

namespace Jotform\Facade;

use Illuminate\Support\Facades\Facade;
use Jotform\Jotform as Service;

/**
 * Class Jotform
 *
 * @package Jotform\Facade
 * @author İzni Burak Demirtaş <info@burakdemirtas.org>
 *
 * @uses \JotForm
 */
class Jotform extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return Service::class;
    }
}
