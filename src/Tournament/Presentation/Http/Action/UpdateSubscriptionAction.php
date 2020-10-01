<?php


namespace App\Tournament\Presentation\Http\Action;


use App\Tournament\Application\Command\UpdateSubscriptionCommand;
use App\Tournament\Application\Service\SubscriptionService;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

/**
 * Class UpdateSubscriptionAction
 * @package App\Tournament\Presentation\Http\Action
 */
class UpdateSubscriptionAction
{
    /**
     * @var SubscriptionService
     */
    private $subscriptionService;

    /**
     * UpdateSubscriptionAction constructor.
     * @param SubscriptionService $subscriptionService
     */
    public function __construct(SubscriptionService $subscriptionService)
    {
        $this->subscriptionService = $subscriptionService;
    }

    /**
     * @param Request $request
     * @param int $id
     * @return JsonResponse
     */
    public function __invoke(Request $request, int $id)
    {
        try {
            $data = json_decode($request->getContent(), true);
            $command = UpdateSubscriptionCommand::fromArray($data);
            $subscription = $this->subscriptionService->updateSubscription($command);
        } catch (Exception $exception) {
            return new JsonResponse(['error' => $exception->getMessage()], $exception->getCode() ? $exception->getCode() : Response::HTTP_BAD_REQUEST);
        } catch (Throwable $exception) {
            return new JsonResponse(['error' => $exception->getMessage()], $exception->getCode() ? $exception->getCode() : Response::HTTP_BAD_REQUEST);
        }

        return new JsonResponse($subscription, Response::HTTP_OK);
    }
}