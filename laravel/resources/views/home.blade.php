<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>trains</title>
</head>
<body>
    <h1>Treni</h1>
    <div class="container">
        @foreach ($trains as $train)
            <div class="card">
                <section class="content-card">
                    <h2>Azienda: {{ $train->azienda }}</h2>
                    <div class="title">
                        <p>Stazione di partenza: <h3>{{ $train->stazione_partenza  }}</h3></p>
                    </div>
                    <div class="title">
                        <p>Stazione di arrivo: <h3>{{ $train->stazione_arrivo  }}</h3></p>
                    </div>
                    <section class="info">
                        <div class="title">
                            <p>Orario di partenza: <h3>{{ $train->orario_partenza  }}</h3></p>
                        </div>
                        <div class="title">
                            <p>Orario di arrivo: <h3>{{ $train->orario_arrivo }}</h3></p>
                        </div>
                        <div class="title">
                            <p>Codice treno: <h3>{{ $train->codice_treno }}</h3></p>
                        </div>
                        <div class="title">
                            <p>Numero carrozze: <h3>{{ $train->numero_carrozze }}</h3></p>  
                        </div>
                        <div class="title">
                            <p>In Orario: <h3>{{ $train->in_orario }}</h3></p>
                        </div>
                        <div class="title">
                            <p>Cancellato: <h3>{{ $train->cancellato }}</h3></p>
                        </div>
                    </section>
                </section>
            </div>
        @endforeach
    </div>
</body>
</html>