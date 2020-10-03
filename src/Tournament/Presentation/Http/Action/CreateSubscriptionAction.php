<?php


namespace App\Tournament\Presentation\Http\Action;


use App\Tournament\Application\Command\CreateSubscriptionCommand;
use App\Tournament\Application\Command\UpdateSubscriptionCommand;
use App\Tournament\Application\Service\SubscriptionService;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

/**
 * Class CreateSubscriptionAction
 * @package App\Tournament\Presentation\Http\Action
 */
class CreateSubscriptionAction
{
    /**
     * @var SubscriptionService
     */
    private $subscriptionService;

    /**
     * CreateSubscriptionAction constructor.
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
            $data = json_decode($request->getContent(), true);
            $command = CreateSubscriptionCommand::fromArray($data);
            $subscription = $this->subscriptionService->createSubscription($command);
        } catch (Exception $exception) {
            return new JsonResponse(['error' => $exception->getMessage()], $exception->getCode() ? $exception->getCode() : Response::HTTP_BAD_REQUEST);
        } catch (Throwable $exception) {
            return new JsonResponse(['error' => $exception->getMessage()], $exception->getCode() ? $exception->getCode() : Response::HTTP_BAD_REQUEST);
        }

        return new JsonResponse($subscription, Response::HTTP_CREATED);
    }
}