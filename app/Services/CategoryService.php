<?php

namespace App\Services;

use App\Exceptions\WebException;
use App\Models\Category;

class CategoryService implements Service
{

    private Category $category;

    public function __construct()
    {
        $this->category = new Category();
    }


    public function create($request)
    {
        $created = $this->category->create($request);
        return $created;
    }

    public function update($request, $id)
    {
        $category = $this->findById($id);
        if (!isset($category)) {
            throw new WebException("Ops , Id Category Tidak Ditemukan");
        }
        $updated = $category->update(
            $request
        );
        if ($updated) {
            return;
        }
        throw new WebException('Ops , Gagal Memperbarui Category Terjadi Kesalahan');
    }


    public function delete($id)
    {
        $category = $this->findById($id);
        try {
            //code...
            $category->delete();
        } catch (\Throwable $th) {
            //throw $th;
            throw new WebException($th->getMessage());
        }
    }

    public function findAll()
    {
        return $this->category->all();
    }


    public function findById($id)
    {
        $category = $this->category->where('id', $id)->first();


        if (!isset($category)) {
            throw new WebException('Category Tidak Ditemukan');
        }
        return $category;
    }





}