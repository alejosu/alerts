@extends ('templates.index')

@section('content')

    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <table class="table">
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
                            <td>{{ $schedule->calculateNextRoutineDate }}</td>
                            <td>{{ $schedule->calculateNextRoutineKm}}</td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>

@endsection