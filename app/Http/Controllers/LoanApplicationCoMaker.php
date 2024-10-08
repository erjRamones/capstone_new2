<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanApplicationCoMakerStoreRequest;
use App\Http\Requests\LoanApplicationCoMakerUpdateRequest;
use App\Interface\Service\LoanApplicationCoMakerServiceInterface;

class LoanApplicationCoMaker extends Controller
{
    private $loanApplicationCoMakerService;

    public function __construct(LoanApplicationCoMakerServiceInterface $loanApplicationCoMakerService)
    {
        $this->loanApplicationCoMakerService = $loanApplicationCoMakerService;
    }

    public function index()
    {
        return $this->loanApplicationCoMakerService->findCoMakers();
    }

    public function store(LoanApplicationCoMakerStoreRequest $request)
    {
        return $this->loanApplicationCoMakerService->createLoanCoMaker($request);
    }

    public function show(int $id)
    {
        return $this->loanApplicationCoMakerService->findLoanCoMakerById($id);
    }

    public function update(LoanApplicationCoMakerUpdateRequest $request, int $id)
    {
        return $this->loanApplicationCoMakerService->updateLoanCoMaker($request, $id);
    }
}
