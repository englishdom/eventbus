<?php

declare(strict_types=1);

namespace EventBus\Event;

trait EventNameConverterTrait
{
    protected function toUnderscore($camelCaseName): string
    {
        $filtered = strpos($camelCaseName, 'Event')
            ? substr($camelCaseName, 0, -5)
            : $camelCaseName;
        $filtered = lcfirst($filtered);
        $filtered = preg_replace('~[A-Z]~', '_$0', $filtered);
        return strtolower($filtered);
    }

    protected function toCamelCase($underscoreName): string
    {
        $result = preg_replace_callback(
            '~_[a-z]~',
            function ($value) {
                return ucfirst(substr($value[0], 1));
            },
            $underscoreName
        );
        return ucfirst($result) . 'Event';
    }
}
