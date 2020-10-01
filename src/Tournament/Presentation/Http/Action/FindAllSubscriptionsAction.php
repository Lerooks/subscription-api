<?php


namespace App\Tournament\Presentation\Http\Action;


use App\Tournament\Application\Service\SubscriptionService;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

/**
 * Class FindAllSubscriptionsAction
 * @package App\Tournament\Presentation\Http\Action
 */
class FindAllSubscriptionsAction
{

    /**
     * @var SubscriptionService
     */
    private $subscriptionService;

    /**
     * FindAllSubscriptionsAction constructor.
     * @param SubscriptionService $subscriptionService
     */
    public function __construct(SubscriptionService $subscriptionService)
    {
        $this->subscriptionService = $subscriptionService;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function __invoke(Request $request)
    {
        try {
            $subscriptions = $this->subscriptionService->findAllSubscriptions();
        } catch (Exception $exception) {
            return new JsonResponse(['error' => $exception->getMessage()], $exception->getCode() ? $exception->getCode() : Response::HTTP_BAD_REQUEST);
        } catch (Throwable $exception) {
            return new JsonResponse(['error' => $exception->getMessage()], $exception->getCode() ? $exception->getCode() : Response::HTTP_BAD_REQUEST);
        }

        return new JsonResponse($subscriptions, Response::HTTP_OK);
    }
}