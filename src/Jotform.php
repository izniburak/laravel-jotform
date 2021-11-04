<?php

namespace Jotform;

/**
 * Class Jotform
 *
 * @package Jotform
 * @author İzni Burak Demirtaş <info@burakdemirtas.org>
 */
class Jotform
{
    private static $instance;

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->sdk = new \JotForm(
            $config['api_key'], $config['output'], $config['debug']
        );
    }

    public static function getInstance(array $config): \JotForm
    {
        if (is_null(self::$instance)) {
            self::$instance = new \JotForm(
                $config['api_key'], $config['output'], $config['debug']
            );
        }

        return self::$instance;
    }
}
