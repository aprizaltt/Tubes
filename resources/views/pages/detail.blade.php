@extends('index')

@section('content')
<div class="flex justify-center gap-6 w-full p-12">
    @include('partials.sidebar')
    <div class="bg-gradient-to-b-greenish rounded-lg flex justify-center flex-col gap-4 p-8 w-full">
        @include('partials.back')
        <h2 class="font-semibold text-xl text-white">Bidang Kegiatan Organisasi dan Kepemimpinan</h2>
            <table class="border bg-gradient-to-b-dark w-full">
                <tr class="text-white">
                    <th>No</th>
                    <th>Kegiatan</th>
                    <th>No Sk</th>
                    <th>Tingkat</th>
                    <th>Jabatan</th>
                    <th>Tahun</th>
                    <th>Keterangan</th>
                    <th>Nilai</th>
                    <th>Edit</th>
                    <th>Unduh</th>
                    <th>Hapus</th>
                </tr>
                @if (count($data_penalaran) > 0)
                @foreach ($data_organisasi as $key => $item)
                <tr class="bg-white">
                    <td class="text-center">{{ $key + 1 }}</td>
                    <td>{{ $item->kegiatan }}</td>
                    <td>{{ $item->no_sk }}</td>
                    <td>{{ $item->tingkatan }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td class="text-center">{{ $item->nilai ?? '-' }}</td>
                    <td>
                        <a href="{{ route('form.organisasi.update', $item->id) }}" class="p-1 w-full block">
                            <img class="mx-auto" src="{{ asset('assets/img/pencil.svg') }}" alt="pencil">
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('download', $item->id) }}" class="p-1 w-full block">
                            <img class="mx-auto" src="{{ asset('assets/img/file-pdf.svg') }}" alt="pdf">
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('form.organisasi.delete', $item->id) }}" class="p-1 w-full block">
                            <img class="mx-auto" src="{{ asset('assets/img/trash.svg') }}" alt="">
                        </a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr class="bg-white">
                    <td colspan="11" class="text-center">Tidak Ada Kegiatan</td>
                </tr>
                @endif
            </table>
        
            <h2 class="font-semibold text-xl text-white">Bidang Kegiatan Penalaran dan Keilmuan</h2>
            <table class="border bg-gradient-to-b-dark w-full">
                <tr class="text-white">
                    <th>No</th>
                    <th>Kegiatan</th>
                    <th>No Sk</th>
                    <th>Tingkat</th>
                    <th>Jabatan</th>
                    <th>Tahun</th>
                    <th>Keterangan</th>
                    <th>Nilai</th>
                    <th>Edit</th>
                    <th>Unduh</th>
                    <th>Hapus</th>
                </tr>
                @if (count($data_penalaran) > 0)
                @foreach ($data_penalaran as $key => $item)
                <tr class="bg-white">
                    <td class="text-center">{{ $key + 1 }}</td>
                    <td>{{ $item->kegiatan }}</td>
                    <td>{{ $item->no_sk }}</td>
                    <td>{{ $item->tingkatan }}</td>
                    <td>{{ $item->jabatan }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>{{ $item->keterangan }}</td>
                    <td class="text-center">{{ $item->nilai ?? '-' }}</td>
                    <td>
                        <a href="{{ route('form.penalaran.update', $item->id) }}" class="p-1 w-full block">
                            <img class="mx-auto" src="{{ asset('assets/img/pencil.svg') }}" alt="pencil">
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('download', $item->id) }}" class="p-1 w-full block">
                            <img class="mx-auto" src="{{ asset('assets/img/file-pdf.svg') }}" alt="pdf">
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('form.penalaran.delete', $item->id) }}" class="p-1 w-full block">
                            <img class="mx-auto" src="{{ asset('assets/img/trash.svg') }}" alt="">
                        </a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr class="bg-white">
                    <td colspan="11" class="text-center">Tidak Ada Kegiatan</td>
                </tr>
                @endif
            </table>
    </div>
</div>

@if (session('success'))
<script>
    alert('{{ session('
        success ') }}');
</script>
@endif
@if (session('error'))
<script>
    alert('{{ session('
        error ') }}');
</script>
@endif
@endsection

@section('js')
<script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
