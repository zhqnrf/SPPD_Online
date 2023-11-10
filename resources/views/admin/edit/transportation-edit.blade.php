@extends('layouts.app')
<title>Edit Transportasi - SPPD Puskesmas Ketrowonojoyo</title>
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
                        <h2 class="card-title " style="font-weight: bold; font-size: 25px">Edit Transportasi</h2>
                    </div>
                    <hr class="m-0" style="opacity: 30%;
        height: 0.7px; ">
                    <div class="card-body">
                        <div class="basic-form">
                            <form class="form-valide-with-icon needs-validation" novalidate="">

                                <div class="mb-3">
                                    <label class="text-label form-label ps-2" style="font-size: 19px; font-weight: 500">Nama
                                        Transportasi</label>
                                    <input type="text" class="form-control input-default custom-border"
                                        placeholder="Masukkan Nama Transportasi">
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 my-1">
                                        <label class="text-label form-label ps-2"
                                            style="font-size: 19px; font-weight: 500">Jenis Transportasi
                                        </label>
                                        <select class="me-sm-2 default-select form-control wide custom-border"
                                            id="inlineFormCustomSelect">
                                            {{-- <option selected="">Choose...</option> --}}
                                            <option value="1">Darat</option>
                                            <option value="2">Laut</option>
                                            <option value="3">Udara</option>
                                        </select>
                                    </div>
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
