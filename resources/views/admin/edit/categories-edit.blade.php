@extends('layouts.app')
<title>Edit Kategori - SPPD Puskesmas Ketrowonojoyo</title>
@section('content')
    <style>
        .custom-border {
            border: 1px solid rgba(128, 128, 128, 0.5);
            transition: border-color 0.3s;
            /* Add a transition for a smooth effect */
        }

        .custom-border:hover {
            border-color: var(--primary);
        }

        .custom-card {
            box-shadow: 0 4px 8px var(--primary);
            ;
            /* Edit sesuai kebutuhan */
            transition: box-shadow 0.3s ease;
            /* Efek transisi */
        }

        .custom-card:hover {
            box-shadow: 0 8px 16px var(--primary);
            ;
            /* Edit sesuai kebutuhan saat hover */
        }
    </style>
    <div class="container-fluid">
        <!-- row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <h2 class="card-title " style="font-weight: bold; font-size: 25px">Edit Kategori</h2>
                    </div>
                    <hr class="m-0" style="opacity: 30%;
        height: 0.7px; ">
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form-valide-with-icon needs-validation" novalidate="">

                                <div class="mb-3">
                                    <label class="text-label form-label ps-2" style="font-size: 19px; font-weight: 500">Nama
                                        Kategori</label>
                                    <input type="text" class="form-control input-default custom-border"
                                        placeholder="Masukkan Nama Kategori">
                                </div>

                                <button type="submit" class="btn me-2 btn-dark">Kembali</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
