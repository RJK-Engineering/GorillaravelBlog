@foreach ($archives as $record)
    <a class="nav-link" href="/?month={{ $record['month'] }}&year={{ $record['year'] }}">
        {{  $record['month'] . " " . $record['year']  }}
    </a>
@endforeach
