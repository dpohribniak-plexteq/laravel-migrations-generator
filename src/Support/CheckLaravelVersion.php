<?php

namespace KitLoong\MigrationsGenerator\Support;

use Illuminate\Support\Facades\App;

trait CheckLaravelVersion
{
    public function atLeastLaravel11(): bool
    {
        if (App::version() === '11.x-dev') {
            return true;
        }

        return $this->atLeastLaravelVersion('11.0');
    }

    private function atLeastLaravelVersion(string $version): bool
    {
        return version_compare(App::version(), $version, '>=');
    }
}
