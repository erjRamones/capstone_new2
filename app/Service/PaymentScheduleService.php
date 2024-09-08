<?php 
namespace App\Service;

use App\Http\Resources\PaymentScheduleResource;
use App\Interface\Repository\PaymentScheduleRepositoryInterface;
use App\Interface\Service\PaymentScheduleServiceInterface;

class PaymentScheduleService implements PaymentScheduleServiceInterface
{
    private $paymentScheduleRepository;

    public function __construct(PaymentScheduleRepositoryInterface $paymentScheduleRepository)
    {
        $this->paymentScheduleRepository=$paymentScheduleRepository;
    }
    public function findPaymentSchedule()
    {
        $paymentSchedule = $this->paymentScheduleRepository->findMany();

        return PaymentScheduleResource::collection($paymentSchedule);
    }

    public function findPaymentScheduleById(int $id)
    {
        $paymentSchedule = $this->paymentScheduleRepository->findOneById($id);
        
        return new PaymentScheduleResource($paymentSchedule);

    }

    public function createPaymentSchedule(object $payload)
    {
        $paymentSchedule = $this->paymentScheduleRepository->create($payload);
        
        return new PaymentScheduleResource($paymentSchedule); 
    }

    public function updatePaymentSchedule(object $payload, int $id)
    {
        $paymentSchedule = $this->paymentScheduleRepository->update($payload, $id);

        return new PaymentScheduleResource($paymentSchedule); 
    }

    public function deletePaymentSchedule(int $id)
    {
        return $this->paymentScheduleRepository->delete($id); 

    }

}