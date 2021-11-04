<?php

namespace Jotform;

/**
 * Class Jotform
 *
 * @package Jotform
 * @author İzni Burak Demirtaş <info@burakdemirtas.org>
 */
class Jotform extends \JotForm
{
    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        parent::__construct($config['api_key'], $config['output'], $config['debug']);
    }
}
