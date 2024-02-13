@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Train timetable:</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Train code:</th>
                <th scope="col">Departing from:</th>
                <th scope="col">At:</th>
                <th scope="col">Destination:</th>
                <th scope="col">On time:</th>
                <th scope="col">Cancelled:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains->sortBy('departure_time') as $train)
            <tr style="{{ $train->cancelled ? 'text-decoration: line-through;' : '' }}">
                <th scope="row">{{ $train -> train_code }}</th>
                <td>{{ $train -> departure_station }}</td>
                <td>{{ $train -> departure_time }}</td>
                <td>{{ $train -> arrival_station }}</td>
                @if ($train->on_time == 1)
                    <td class="table-warning">
                        Delayed
                    </td>
                @else
                    <td class="table-success">
                        On time
                    </td>
                @endif
                @if ($train->cancelled == 1)
                    <td class="table-danger text-decoration-none">
                        Train Cancelled
                    </td>
                @else
                    <td>
                        Not cancelled
                    </td>
                @endif
            </tr>
                
            @endforeach
            
        </tbody>
    </table>
@endsection

