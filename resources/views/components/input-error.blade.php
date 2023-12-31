@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-danger p-0', 'style' => 'list-style-type: none;']) }}>
        @foreach ((array) $messages as $message)
            <li>{{ $message }}</li>
        @endforeach
    </ul>
@endif
