<?php


if (! function_exists('jotform')) {
    /**
     * Jotform API Service Helper
     *
     * @return \JotForm
     */
    function jotform(): \JotForm
    {
        /** @var \JotForm */
        return app(\Jotform\Jotform::class);
    }
}
