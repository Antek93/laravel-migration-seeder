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
                            <h2>
                                {{ $train->id }}
                            </h2>
                            <h2>
                                {{ $train->Azienda }}
                            </h2>
                            <h2>
                                {{ $train->Stazione}}
                               </h2>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>
