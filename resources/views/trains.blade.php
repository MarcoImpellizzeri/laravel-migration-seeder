@extends('layouts.public')

@section('content')
    <div class="container py-5">
        <table class="table border">
            <thead>
                <tr>
                    <th scope="col">azienda</th>
                    <th scope="col">data partenza</th>
                    <th scope="col">stazione partenza</th>
                    <th scope="col">stazione arrivo</th>
                    <th scope="col">orario partenza</th>
                    <th scope="col">orario arrivo</th>
                    <th scope="col">codice treno</th>
                    <th scope="col">numero carrozze</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train->data_partenza }}</td>
                        <td>{{ $train->stazione_partenza }}</td>
                        <td>{{ $train->stazione_arrivo }}</td>
                        <td>{{ $train->orario_partenza }}</td>
                        <td>{{ $train->orario_arrivo }}</td>
                        <td>{{ $train->codice_treno }}</td>
                        <td>{{ $train->numero_carrozze }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
