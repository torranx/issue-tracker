@php
    $statuses = ['to_do', 'in_progress', 'for_testing', 'for_review', 'done'];
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-primary fs-4 py-3">
            {{ __('Project') }}
        </h2>
    </x-slot>
    
    <h3 class="mb-4">{{ $project->name }}</h3>
    <div class="d-flex justify-content-between">
        @foreach ($statuses as $status)
            <x-issues :issues="$issues[$status]" status="{{ str_replace('_', ' ', $status) }}"></x-issues>
        @endforeach
    </div>
</x-app-layout>
