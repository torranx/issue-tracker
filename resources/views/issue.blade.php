{{-- single issue --}}

@props(['issue', 'project'])

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-primary fs-4 py-3">
            {{ $project->name }}
        </h2>
    </x-slot>

    <div class="container mt-4 rounded d-flex align-items-center justify-content-between p-0" style="height: 700px;">
        <div class="w-75 bg-white p-4 h-100 me-3 rounded shadow-sm">
            <h3>{{ $issue->title }}</h3>
            <p>
                {{ $issue->description }}
            </p>
        </div>
        <div class="w-25 bg-white p-4 h-100 rounded shadow-sm text-capitalize">
            <p>Status: {{ $issue->status }}</p>
            <p>Author: {{ $issue->author->name }}</p>
            <p>Assignee: {{ $issue->assigned->name }}</p>
            <p>Started: {{ $issue->started_at ? strftime("%d, %b %Y", strtotime($issue->started_at)) : "-" }}</p>
            <p>Last updated: {{ strftime("%d, %b %Y", strtotime($issue->updated_at)) }}</p>
            <p>Created: {{ strftime("%d, %b %Y", strtotime($issue->created_at)) }}</p>
        </div>
    </div>
</x-app-layout>