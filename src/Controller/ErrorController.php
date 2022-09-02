<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class ErrorController
{
    #[Route(path: '/runtimeException')]
    public function jsonError(): JsonResponse
    {
        throw new \RuntimeException();

        return new JsonResponse();
    }

    #[Route(path: '/typeError')]
    public function someError(): JsonResponse
    {
        $foo = [];
        $bar = $foo[new \stdClass];

        return new JsonResponse();
    }
}
