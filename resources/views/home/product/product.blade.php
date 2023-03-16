@extends('layouts.app')
@section('content')

    <div class="container-fluid">
        <div class="card shadow">
            <div class="card-header py-3">
                <p class="text-primary m-0 fw-bold">Data Admin</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="row">
                        <div class="col-md-6 text-nowrap">
{{--                            <a class="btn btn-outline-success" href="{{ route('admin.create') }}"> Tambah Admin</a>--}}
                        </div>
                    </div>
                    <div class="table-responsive table mt-2" id="dataTable" role="grid"
                         aria-describedby="dataTable_info">
                        <table class="table table-striped" id="dataTable">
                            <tr>
                                <th>Email</th>
                                <th>Nama</th>
                            </tr>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->name }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection

