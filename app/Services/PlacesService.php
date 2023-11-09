<?php

namespace App\Services;

use App\Exceptions\WebException;
use App\Models\Places;

class PlacesService implements Service
{

    private Places $places;


    public function __construct()
    {
        $this->places = new Places();
    }


    public function findAll()
    {
        return $this->places->all();
    }


    public function findById($id)
    {
        $place = $this->places->where('id', $id)->first();
        if (!isset($place)) {
            throw new WebException('Ops , Tempat Tidak Ditemukan');
        }
        return $place;
    }


    public function create($request)
    {
        try {
            //code...
            $this->places->create($request);

        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }


    public function update($request, $id)
    {
        $place = $this->findById($id);
        if (!isset($place)) {
            throw new WebException("Ops , Id Tempat Tidak Ditemukan");
        }
        $updated = $place->update(
            $request
        );
        if ($updated) {
            return;
        }
        throw new WebException('Ops , Gagal Memperbarui Tempat Terjadi Kesalahan');
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