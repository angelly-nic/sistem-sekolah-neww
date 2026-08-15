
@extends('layouts.app')

@section('title',$title)

@section('content')

    <div class="mb-8 border-b border-[#E5E3DB] pb-5">

        <a href="{{ route('teachers.index') }}"
           class="mb-3 block text-[11px] uppercase tracking-[0.2em] text-slate-400">
            ← BUKU INDUK
        </a>

        <h1 class="font-display text-3xl font-semibold text-[#16213A]">
            Ubah Data Guru
        </h1>

        <p class="mt-1 text-sm text-slate-500">
            Memperbarui catatan atas nama
            <strong class="text-[#16213A]">{{ $teacher['name'] }}</strong>.
        </p>

    </div>

    <div class="border border-[#E5E3DB] bg-white p-6">

        <form action="{{ route('teachers.update', ['id' => $teacher['id']]) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-6">
                <label class="mb-2 block text-[11px] font-semibold uppercase tracking-[0.15em] text-[#16213A]">
                    NIP
                </label>

                <input type="text"
                       name="nip"
                       value="{{ $teacher['nip'] }}"
                       class="w-full border border-[#D9D6CD] bg-[#FAF9F5] px-4 py-3 text-sm text-[#16213A] outline-none focus:border-[#16213A]">
            </div>

            <div class="mb-6">
                <label class="mb-2 block text-[11px] font-semibold uppercase tracking-[0.15em] text-[#16213A]">
                    Nama Lengkap
                </label>

                <input type="text"
                       name="name"
                       value="{{ $teacher['name'] }}"
                       class="w-full border border-[#D9D6CD] bg-[#FAF9F5] px-4 py-3 text-sm text-[#16213A] outline-none focus:border-[#16213A]">
            </div>

            <div class="mb-6">
                <label class="mb-2 block text-[11px] font-semibold uppercase tracking-[0.15em] text-[#16213A]">
                    Jenis Kelamin
                </label>

                <select name="gender"
                        class="w-full border border-[#D9D6CD] bg-[#FAF9F5] px-4 py-3 text-sm text-[#16213A] outline-none focus:border-[#16213A]">

                    <option value="Laki-Laki"
                        {{ $teacher['gender'] == 'Laki-Laki' ? 'selected' : '' }}>
                        Laki-Laki
                    </option>

                    <option value="Perempuan"
                        {{ $teacher['gender'] == 'Perempuan' ? 'selected' : '' }}>
                        Perempuan
                    </option>

                </select>
            </div>

            <div class="mb-6">
                <label class="mb-2 block text-[11px] font-semibold uppercase tracking-[0.15em] text-[#16213A]">
                    Mata Pelajaran
                </label>

                <input type="text"
                       name="subject"
                       value="{{ $teacher['subject'] }}"
                       class="w-full border border-[#D9D6CD] bg-[#FAF9F5] px-4 py-3 text-sm text-[#16213A] outline-none focus:border-[#16213A]">
            </div>

            <div class="mb-6">
                <label class="mb-2 block text-[11px] font-semibold uppercase tracking-[0.15em] text-[#16213A]">
                    No. Telepon
                </label>

                <input type="text"
                       name="phone_number"
                       value="{{ $teacher['phone'] }}"
                       class="w-full border border-[#D9D6CD] bg-[#FAF9F5] px-4 py-3 text-sm text-[#16213A] outline-none focus:border-[#16213A]">
            </div>

            <div class="mb-6">
                <label class="mb-2 block text-[11px] font-semibold uppercase tracking-[0.15em] text-[#16213A]">
                    Status
                </label>

                <select name="status"
                        class="w-full border border-[#D9D6CD] bg-[#FAF9F5] px-4 py-3 text-sm text-[#16213A] outline-none focus:border-[#16213A]">

                    <option value="Aktif"
                        {{ $teacher['status'] == 'Aktif' ? 'selected' : '' }}>
                        Aktif
                    </option>

                    <option value="Tidak Aktif"
                        {{ $teacher['status'] == 'Tidak Aktif' ? 'selected' : '' }}>
                        Tidak Aktif
                    </option>

                </select>
            </div>

            <div class="flex justify-end gap-5 border-t border-[#E5E3DB] pt-5">

                <a href="{{ route('teachers.index') }}"
                   class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">
                    Batal
                </a>

                <button type="submit"
                        class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
                    Perbarui Catatan
                </button>

            </div>

        </form>

    </div>

@endsection

