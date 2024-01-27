<?php

declare(strict_types=1);

namespace Axleus\Db;

final class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencyConfig(),
            SettingsProvider::class => (new SettingsProvider)(),
        ];
    }

    public function getDependencyConfig(): array
    {
        return [
            'factories' => [],
        ];
    }
}