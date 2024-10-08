<?php

namespace App\Http\Controllers;

use App\Interface\Service\FeeServiceInterface;
use Illuminate\Foundation\Http\FormRequest;

class FeeController extends Controller
{
    private $feeService;

    public function __construct(FeeServiceInterface $feeService)
    {
        $this->feeService = $feeService;
    }

    public function index()
    {
        return $this->feeService->findFees();
    }

    public function store(FormRequest $request)
    {
        return $this->feeService->createFee($request);
    }

    public function show(int $id)
    {
        return $this->feeService->findFeeById($id);
    }

    public function update(int $id, FormRequest $request)
    {
        return $this->feeService->updateFee($request, $id);
    }

    public function destroy(int $id)
    {
        return $this->feeService->deleteFee($id);
    }
}
