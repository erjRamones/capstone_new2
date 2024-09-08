<?php 

namespace App\Service;

use App\Http\Resources\LoanReleaseResource;
use App\Interface\Repository\LoanReleaseRepositorityInterface;
use App\Interface\Service\LoanReleaseServiceInterface;

class LoanReleaseService implements LoanReleaseServiceInterface
{
    private $loanReleaseRepository;
    public function __construct(LoanReleaseRepositorityInterface $loanReleaseRepository)
    {
        $this-> loanReleaseRepository = $loanReleaseRepository;
    }

    public function findLoanRelease()
    {
        $loanRelease = $this->loanReleaseRepository->findMany();

        return LoanReleaseResource::collection($loanRelease);
    }

    public function findLoanReleaseById(int $id)
    {
        $loanRelease = $this->loanReleaseRepository->findOneById($id);
        return new LoanReleaseResource($loanRelease);
    }

    public function createLoanRelease(object $payload)
    {
        $loanRelease = $this->loanReleaseRepository->create($payload);
        return new LoanReleaseResource($loanRelease);

    }

    public function updateLoanRelease(object $payload, int $id)
    {
        $loanRelease = $this->loanReleaseRepository->update($payload, $id);
        return new LoanReleaseResource($loanRelease);

    }
    
    public function deleteLoanRelease(int $id)
    {
        return $this->loanReleaseRepository->delete($id);
    }
}