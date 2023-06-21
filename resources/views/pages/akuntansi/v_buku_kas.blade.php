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

        <!-- Page Heading -->
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Kas Kecil</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No. Bukti</th>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Penerimaan</th>
                                <th>Pengeluaran</th>
                                <th>Saldo</th>
                                <th>No. Akun</th>
                                <th>Nama Akun</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>No. Bukti</th>
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
                                <td>{{$data->no_bukti}}</td>
                                <td>{{$data->tanggal}}</td>
                                <td>{{$data->keterangan}}</td>
                                <td>{{$data->debit}}</td>
                                <td>{{$data->kredit}}</td>
                                <td>{{$data->saldo}}</td>
                                <td>{{$data->no_akun}}</td>
                                <td>{{$data->nama_akun}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>

</html>