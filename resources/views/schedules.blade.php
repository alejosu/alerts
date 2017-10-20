@extends ('templates.index')

@section('content')

    <table>
        <thead>
            <th>Vehiculo</th>
            <th>Rutina</th>
            <th>Fecha</th>
            <th>Kilometraje</th>
        </thead>
        <tbody>
            @foreach($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->vehicle_routines->vehicle->number }}</td>
                    <td>{{ $schedule->vehicle_routines->routine->name }}</td>
                    <td>{{ $schedule->vehicle_routines->routine->name }}</td>
                </tr>
        </tbody>
    </table>

@endsection