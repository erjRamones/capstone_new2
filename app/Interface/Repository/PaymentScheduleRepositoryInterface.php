<?php 

namespace App\Interface\Repository;

interface PaymentScheduleRepositoryInterface
{
    public function findMany();

    public function findOneById($id);

    public function create(object $payload);

    public function update(object $payload, int $id);

    public function delete(int $id);
}