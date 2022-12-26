<x-app-layout>
    <x-slot name="header">
        <div class="d-flex align-items-center">
            <h2 class="text-primary fs-4 py-3">
                {{ __('Dashboard') }}
                <span class="text-muted">|</span>
            </h2>
            <a class="ms-3 btn btn-primary">New Project</a>
        </div>
    </x-slot>
    
    @foreach ($projects as $project)
        <div class="card w-50 mb-2 shadow-sm border-0">
            <div class="card-body">
                <a class="card-title text-decoration-none fs-4" href="/projects/{{ $project->slug }}">{{ $project->name }}</a>
                <p class="card-text text-muted mb-0">Last updated {{ $project->updated_at }}</p>
                <p class="card-text text-muted">Created on {{ $project->created_at }}</p>
            </div>
        </div>
    @endforeach
</x-app-layout>
