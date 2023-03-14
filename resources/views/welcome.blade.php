<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Migration Seeder</title>

    {{-- Includiamo gli assets con la direttiva @vite --}}
    @vite('resources/js/app.js')
</head>

<body>

    <main>
        <div class="container">
            <div class="row">
                @foreach ($trains as $train)
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h5>
                                    {{ $train->id }}
                                </h5>
                                <h5>
                                    {{ $train->Azienda }}
                                </h5>
                                <h5>
                                    {{ $train->Stazione_di_arrivo }}
                                </h5>
                                <h5>
                                    {{ $train->Stazione_di_partenza }}
                                </h5>
                                <h5>
                                    {{ $train->Orario_di_partenza }}
                                </h5>
                                <h5>
                                    {{ $train->Orario_di_arrivo }}
                                </h5>
                                <h5>
                                    {{ $train->Codice_treno }}
                                </h5>
                                <h5>
                                    {{ $train->Numero_carrozze }}
                                </h5>
                                <h5>
                                    {{ $train->In_orario }}
                                </h5>
                                <h5>
                                    {{ $train->Cancellato }}
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>
