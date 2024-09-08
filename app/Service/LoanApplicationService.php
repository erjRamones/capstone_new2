<?php

namespace App\Service;

use App\Http\Resources\LoanApplicationResource;
use App\Interface\Service\LoanApplicationServiceInterface;
use App\Repository\LoanApplicationRepository;

class LoanApplicationService implements LoanApplicationServiceInterface
{
    private $loanApplicationRepository;
    public function __construct(LoanApplicationRepository $loanApplicationRepository)
    {
        $this->loanApplicationRepository = $loanApplicationRepository;
    }

    public function findLoanApplication()
    {
        $loanApplication =$this->loanApplicationRepository->findMany();
        return LoanApplicationResource::collection($loanApplication);
    }

    public function findLoanApplicationById(int $id)
    {
        $loanApplication =$this->loanApplicationRepository->findOneById($id);
        return new LoanApplicationResource($loanApplication);
    }

    public function createLoanApplication(object $payload)
    {
        $loanApplication =$this->loanApplicationRepository->create($payload);
        return new LoanApplicationResource($loanApplication);
    }

    public function updateLoanApplication(object $payload, int $id)
    {
        $loanApplication =$this->loanApplicationRepository->update($payload, $id);
        return new LoanApplicationResource($loanApplication);
    }

    public function deleteLoanApplication(int $id)
    {
        return $this->loanApplicationRepository->delete($id);
    }
}

