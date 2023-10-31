@extends('layouts.dashboard')


@section('content')
    <!-- DataTales Example -->
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Tetala</th>
                                <th>Kelas</th>
                                <th>Alamat</th>
                                <th>Umur</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item['nama'] }}</td>
                                    <td>{{ $item['nim'] }}</td>
                                    <td>{{ $item['tetala'] }}</td>
                                    <td>{{ $item['kelas'] }}</td>
                                    <td>{{ $item['alamat'] }}</td>
                                    <td>{{ $item['umur'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
