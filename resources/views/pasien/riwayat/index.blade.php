@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>Pasien <small>Riwayat Periksa</small></h1>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Riwayat Pemeriksaan Anda</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive"> <!-- Membungkus tabel dengan table-responsive untuk scroll -->
                    <table id="riwayatTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Dokter</th>
                                <th>Tanggal Periksa</th>
                                <th>Keluhan</th>
                                <th>Diagnosa</th>
                                <th>Obat</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $riwayats = [
                                    [
                                        'dokter' => ['nama' => 'Andi'],
                                        'tanggal' => '2025-04-01',
                                        'keluhan' => 'Demam dan batuk',
                                        'diagnosa' => 'Influenza',
                                        'obats' => [
                                            ['nama' => 'Paracetamol'],
                                            ['nama' => 'OBH Combi']
                                        ]
                                    ],
                                    [
                                        'dokter' => ['nama' => 'Aisyah'],
                                        'tanggal' => '2025-03-15',
                                        'keluhan' => 'Sakit kepala',
                                        'diagnosa' => 'Migrain',
                                        'obats' => [
                                            ['nama' => 'Bodrex'],
                                            ['nama' => 'Amoxicillin']
                                        ]
                                    ],
                                ];
                            @endphp

                            @foreach($riwayats as $i => $riwayat)
                                <tr>
                                    <td>{{ $i + 1 }}</td>
                                    <td>{{ $riwayat['dokter']['nama'] }}</td>
                                    <td>{{ $riwayat['tanggal'] }}</td>
                                    <td>{{ $riwayat['keluhan'] }}</td>
                                    <td>{{ $riwayat['diagnosa'] }}</td>
                                    <td>
                                        <ul>
                                            @foreach($riwayat['obats'] as $obat)
                                                <li>{{ $obat['nama'] }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
