<?php

declare(strict_types=1);

namespace AppTest;

use App\ConfigProvider;
use PHPUnit\Framework\TestCase;

class ConfigProviderTest extends TestCase
{
    public function testInvoke(): void
    {
        $config = (new ConfigProvider())();

        $this->assertIsArray($config);
        $this->assertArrayHasKey('dependencies', $config);

        $this->assertIsArray($config['dependencies']);
        $this->assertArrayHasKey('invokables', $config['dependencies']);
        $this->assertArrayHasKey('factories', $config['dependencies']);
    }
}
