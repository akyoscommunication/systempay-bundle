<?php

namespace Akyos\SystempayBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
/**
 * Class TwigExtension
 * @package Akyos\SystempayBundle\Twig
 */
class TwigExtension extends AbstractExtension
{
    /**
     * @return array
     */
    public function getFunctions(): array
    {
        return array(
            new TwigFunction('systempayForm', [$this, 'systempayForm']),
        );
    }

    /**
     * @param $fields
     * @return string
     */
    public function systempayForm($fields): string
    {
        $inputs = '';
        foreach ($fields as $field => $value) {
            $inputs .= sprintf('<input type="hidden" name="%s" value="%s">', $field, $value);
        }
        return $inputs;
    }
}