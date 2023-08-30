{{-- issues container/box --}}

@props(['issues', 'status'])

@php
    $count = $issues->count();
@endphp

<div style="min-height: 50vh; width: calc(100% / 5.2)" class="bg-white shadow-sm rounded px-2 py-3">
    <h4 class="mb-2 text-uppercase fs-5">
        {{ $status }}
        @if ($count)
            <span class="text-primary">{{ ' ' . $count }}</span>{{ $count > 1 ? ' issues' : ' issue' }}
        @endif
    </h4>
    <hr class="mt-0"/>
    @foreach ($issues as $issue)
        <div class="card border-0 bg-light shadow-sm mb-2">
            <div class="card-header">
                <a href="/projects/{{ $issue->project->slug }}/{{ $issue->slug }}" class="text-decoration-none">
                    {{ $issue->title }}
                </a>
            </div>
            <div class="card-body">
            {{ substr($issue->description, 0, 50) . '...' }} 
            </div>
        </div>
    @endforeach
</div>