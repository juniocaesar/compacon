<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container-stretch">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col my-auto">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel Kas Kecil</h6>
                    </div>
                    <div class="col">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fas fa-plus"></i> Input Baru
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-success">
                                            <h1 class="modal-title text-light fs-5" id="exampleModalLabel">Input
                                                Transaksi Baru
                                            </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">

                                            <!-- Insert Kas Kecil Form -->
                                            <form>
                                                <div class="mb-3">
                                                    <label for="inputKeterangan" class="form-label">Keterangan</label>
                                                    <input type="text" class="form-control" id="inputKeterangan" aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputNominal" class="form-label">Nominal</label>
                                                    <input type="number" class="form-control" id="inputNominal">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputJenisTransaksi" class="form-label">Jenis
                                                        Transaksi</label>
                                                    <select class="form-select form-select" id="inputJenisTransaksi" aria-label=".form-select-sm example">
                                                        <option selected value="debit">Debit</option>
                                                        <option value="kredit">Kredit</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="inputAkun" class="form-label">Akun</label>
                                                    <input id="inputAkun" class="form-control">
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-success">Simpan</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No. Ref</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Debit</th>
                                <th>Kredit</th>
                                <th>Saldo</th>
                                <th>No. Akun</th>
                                <th>Nama Akun</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No. Ref</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Debit</th>
                                <th>Kredit</th>
                                <th>Saldo</th>
                                <th>No. Akun</th>
                                <th>Nama Akun</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($data_kas_kecil as $data)
                            <tr>
                                <td>{{$data->no}}</td>
                                <td>{{$data->tanggal}}</td>
                                <td>{{$data->keterangan}}</td>
                                <td style="text-align: right;">{{$data->debit}}</td>
                                <td style="text-align: right;">{{$data->kredit}}</td>
                                <td style="text-align: right;">{{$data->saldo}}</td>
                                <td> - </td>
                                <td> - </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer">


            </div>





















        </div>
    </div>
</body>

</html>