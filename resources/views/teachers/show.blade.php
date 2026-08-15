
@extends('layouts.app')

@section('title',$title)

@section('content')

    <a href="{{ route('teachers.index') }}"
       class="mb-4 block text-[11px] uppercase tracking-[0.2em] text-slate-400">
        ← BUKU INDUK
    </a>

    <div class="border border-[#E5E3DB] bg-white">

        <div class="flex items-start justify-between border-b border-[#E5E3DB] p-6">

            <div>
                <p class="mb-1 text-[11px] uppercase tracking-[0.2em] text-[#A16207]">
                    Lembar Guru
                </p>

                <h1 class="font-display text-3xl font-semibold text-[#16213A]">
                    {{ $teacher['name'] }}
                </h1>

                <p class="mt-1 font-mono text-xs text-slate-500">
                    NIP {{ $teacher['nip'] }}
                </p>
            </div>

            <a href="{{ route('teachers.edit', ['id' => $teacher['id']]) }}"
               class="bg-[#16213A] px-5 py-2.5 text-sm font-medium text-white transition hover:bg-[#26324f]">
                Ubah
            </a>

        </div>

        <div class="border-b border-[#EFEDE6] px-6 py-5">
            <div class="flex justify-between">
                <span class="text-[11px] uppercase tracking-[0.15em] text-slate-400">
                    NIP
                </span>

                <strong class="text-sm text-[#16213A]">
                    {{ $teacher['nip'] }}
                </strong>
            </div>
        </div>

        <div class="border-b border-[#EFEDE6] px-6 py-5">
            <div class="flex justify-between">
                <span class="text-[11px] uppercase tracking-[0.15em] text-slate-400">
                    Nama Lengkap
                </span>

                <strong class="text-sm text-[#16213A]">
                    {{ $teacher['name'] }}
                </strong>
            </div>
        </div>

        <div class="border-b border-[#EFEDE6] px-6 py-5">
            <div class="flex justify-between">
                <span class="text-[11px] uppercase tracking-[0.15em] text-slate-400">
                    Jenis Kelamin
                </span>

                <strong class="text-sm text-[#16213A]">
                    {{ $teacher['gender'] }}
                </strong>
            </div>
        </div>

        <div class="border-b border-[#EFEDE6] px-6 py-5">
            <div class="flex justify-between">
                <span class="text-[11px] uppercase tracking-[0.15em] text-slate-400">
                    Mata Pelajaran
                </span>

                <strong class="text-sm text-[#16213A]">
                    {{ $teacher['subject'] }}
                </strong>
            </div>
        </div>

        <div class="border-b border-[#EFEDE6] px-6 py-5">
            <div class="flex justify-between">
                <span class="text-[11px] uppercase tracking-[0.15em] text-slate-400">
                    No. Telepon
                </span>

                <strong class="text-sm text-[#16213A]">
                    {{ $teacher['phone'] }}
                </strong>
            </div>
        </div>

        <div class="border-b border-[#EFEDE6] px-6 py-5">
            <div class="flex justify-between items-center">
                <span class="text-[11px] uppercase tracking-[0.15em] text-slate-400">
                    Status
                </span>

                <x-status-badge :status="$teacher['status']" />
            </div>
        </div>

        <div class="flex justify-end gap-5 p-5">

            <a href="{{ route('teachers.index') }}"
               class="px-4 py-2.5 text-sm font-medium text-slate-500 hover:text-[#16213A]">
                Kembali
            </a>

            <form action="{{ route('teachers.destroy', ['id' => $teacher['id']]) }}"
                  method="POST"
                  onsubmit="return confirm('Hapus data guru ini dari buku induk?')">

                @csrf
                @method('DELETE')

                <button type="submit"
                        class="border border-red-200 px-5 py-2.5 text-sm font-medium text-red-700 hover:bg-red-50">
                    Hapus
                </button>

            </form>

        </div>

    </div>

@endsection

