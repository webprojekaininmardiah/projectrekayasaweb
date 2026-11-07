@extends('layouts.app')

@section('title', 'Project Detail')

@section('content')
<div class="container flex-grow-1 py-4">

    <div class="mb-4">
        <a href="{{ route('project.index') }}" class="btn btn-danger">
            Kembali
        </a>
    </div>

    <div class="row g-4">

        <div class="col-md-7">
            <img
                src="{{ asset('images/' . $project->image) }}"
                alt="{{ $project->title }}"
                class="img-fluid w-100 rounded shadow-sm"
                style="min-height: 300px; max-height: 450px; object-fit: cover;"
            >
        </div>

        <div class="col-md-5">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body">

                    <h3 class="card-title fw-bold mb-3">
                        {{ $project->title }}
                    </h3>

                    <div class="mb-3">
                        <span class="badge bg-info text-dark">
                            {{ $project->kategori ?? 'Belum Dikategorikan' }}
                        </span>
                    </div>

                    <div class="mb-3">
                        <strong>Teknologi:</strong>
                        <p class="mb-0">{{ $project->teknologi }}</p>
                    </div>

                    <div class="mb-3">
                        <strong>Status Proyek:</strong>
                        <div class="mt-1">
                            <span class="badge bg-success">
                                {{ $project->status }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <strong>Deskripsi Proyek:</strong>
                        <p class="card-text mt-1">
                            {{ $project->description }}
                        </p>
                    </div>

                    <div class="border-top pt-3 mt-3">
                        <small class="text-muted">
                            Dibuat:
                            {{ $project->created_at->format('d M Y') }}
                        </small>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection