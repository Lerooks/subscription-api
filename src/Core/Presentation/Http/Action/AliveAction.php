<?php


namespace App\Core\Presentation\Http\Action;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class AliveAction
 * @package App\Core\Presentation\Http\Action
 */
class AliveAction
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request)
    {
        return new JsonResponse(['status' => 'ok'], Response::HTTP_OK);
    }
}