<h4>Active snippets</h4>
@foreach ($snippets as $rule)
    <span class="pr-3">{{ $rule->abbreviation }} => {{ $rule->snippet }}</span>
@endforeach
