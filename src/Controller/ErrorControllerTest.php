<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class ErrorControllerTest extends WebTestCase
{
    public function testThatRuntimeExceptionResponseIsJson(): void
    {
        $client = static::createClient();

        $client->jsonRequest('GET', '/runtimeException');

        $this->assertStringStartsWith('{', $client->getResponse()->getContent());
    }

    public function testThatExceptionResponseIsJson(): void
    {
        $client = static::createClient();

        $client->jsonRequest('GET', '/typeError');

        $this->assertStringStartsWith('{', $client->getResponse()->getContent());
    }
}
