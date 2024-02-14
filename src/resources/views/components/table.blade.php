<table class="table fs-3">
    <thead>
    <tr>
        <th scope="col">{{ $firstColumn }}</th>
        <th scope="col">{{ $secondColumn }}</th>
    </tr>
    </thead>
    <tbody>

    {{ $slot }}

    <tr>
    </tr>
    </tbody>
</table>
