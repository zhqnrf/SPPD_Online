<?php

namespace App\Services;

use App\Exceptions\WebException;
use App\Models\TypeDestination;

class TypeDestinationService implements Service
{

    private TypeDestination $typeDestination;


    public function __construct()
    {
        $this->typeDestination = new TypeDestination();
    }


    public function findAll()
    {
        return $this->typeDestination->all();
    }


    public function findById($id)
    {
        $place = $this->typeDestination->where('id', $id)->first();
        if (!isset($place)) {
            throw new WebException('Ops , Tipe Tujuan Tidak Ditemukan');
        }
        return $place;
    }


    public function create($request)
    {
        try {
            //code...
            $this->typeDestination->create($request);

        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }


    public function update($request, $id)
    {
        $place = $this->findById($id);
        if (!isset($place)) {
            throw new WebException("Ops , Id Tipe Tujuan Tidak Ditemukan");
        }
        $updated = $place->update(
            $request
        );
        if ($updated) {
            return;
        }
        throw new WebException('Ops , Gagal Memperbarui Tipe Tujuan Terjadi Kesalahan');
    }

    public function delete($id)
    {
        $place = $this->findById($id);
        try {
            $place->delete();
        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }



}