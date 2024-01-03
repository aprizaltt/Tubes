@extends('index')

@section('content')
    <div class="flex justify-center gap-6 w-full p-12">
        <div class="bg-gradient-to-b-greenish rounded-lg flex justify-center flex-col gap-4 p-8 w-full">
            <form target="{{ @$data ? route('form.organisasi.update.post', @$data->id) : route('form.organisasi.post') }}"
                method="POST" enctype="multipart/form-data">
                <h1 class="text-xl text-white font-semibold">Bidang Kegiatan Organisasi dan Kepemimpinan</h1>
                <div class="p-6 w-full rounded-xl flex flex-col gap-4 mb-4">
                    @csrf
                    <input type="hidden" name="formtype" value="organisasi">
                    <div class="form-group">
                        <label class="font-medium text-white">Pilih Kegiatan</label>
                        <select class="border rounded-md p-2 bg-white focus:outline-none text-black" name="kegiatan"
                            required>
                            <option value="">Pilih Kegiatan</option>
                            <option value="Panitia Kegiatan" {{ @$data->kegiatan == 'Panitia Kegiatan' ? 'selected' : '' }}>
                                Panitia Kegiatan</option>
                            <option value="Kepengurusan Organisasi"
                                {{ @$data->kegiatan == 'Kepengurusan Organisasi' ? 'selected' : '' }}>Kepengurusan
                                Organisasi</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="font-medium text-white">Nama Kegiatan</label>
                        <input required class="border-0 p-2 rounded-md" type="text" name="nama"
                            value="{{ @$data->nama ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label class="font-medium text-white">Keterangan</label>
                        <input required class="border-0 p-2 rounded-md" type="text" name="keterangan"
                            value="{{ @$data->keterangan ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label class="font-medium text-white">Jabatan</label>
                        <input required class="border-0 p-2 rounded-md" type="text" name="jabatan"
                            value="{{ @$data->jabatan ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label class="font-medium text-white">Tingkatan</label>
                        <input required class="border-0 p-2 rounded-md" type="text" name="tingkatan"
                            value="{{ @$data->tingkatan ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label class="font-medium text-white">Tahun</label>
                        <input required class="border-0 p-2 rounded-md" type="text" name="tahun"
                            value="{{ @$data->tahun ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label class="font-medium text-white">Nomor Sertifikat/SK</label>
                        <input required class="border-0 p-2 rounded-md" type="text" name="no_sk"
                            value="{{ @$data->no_sk ?? '' }}">
                    </div>
                    <div class="form-group">
                        <label class="font-medium text-white">Upload Sertifikat</label>
                        <input class="border-0 p-2 bg-white rounded-md" type="file" name="sertifikat"
                            {{ @$data->sertifikat ? '' : 'required' }}>
                    </div>
                </div>
                <div class="flex justify-start gap-4 ml-6">
                    <a href="{{ url()->previous() }}"
                        class="rounded-lg text-white flex items-center gap-2 bg-greenish-100 px-4 py-2">
                        <img src="{{ asset('assets/img/arrow-left-circled-svgrepo-com.svg') }}" alt="arrow">Kembali
                    </a>
                    <button class="flex gap-2 items-center rounded-lg text-white btn-simpan px-4 py-2" type="submit">
                        <img src="{{ asset('assets/img/save-svgrepo-com.svg') }}" alt="disk">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection



