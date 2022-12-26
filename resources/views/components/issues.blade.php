@props(['issues', 'status'])

@php
    $count = $issues->count();
@endphp

<div style="height: 50vh; width: 280px" class="bg-white shadow-sm rounded px-2 py-3">
    <h4 class="mb-2 text-uppercase fs-5">{{ $status }}
        @if ($count)
            <span class="text-primary">{{ ' ' . $count }}</span>{{ $count > 1 ? ' issues' : ' issue' }}
        @endif
    </h4>
    <hr class="mt-0"/>
    @foreach ($issues as $issue)
        <div class="card border-0 bg-light shadow-sm">
            <div class="card-header">
                {{ $issue->title }}
            </div>
            <div class="card-body">
            {{ substr($issue->description, 0, 50) . '...' }} 
            </div>
        </div>
    @endforeach
</div>