<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SwApi</title>

    <base href="{{ asset("/") }}">

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">

</head>
<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="0" tabindex="0">

<nav id="navbar" class="navbar sticky-top navbar-expand-lg navbar-dark bg-black border-bottom border-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url("/")  }}">
            <svg version="1.1" width="80" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink"
                 x="0px" y="0px"
                 viewBox="0 0 150 81" style="enable-background:new 0 0 150 81;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill-rule: evenodd;
                        clip-rule: evenodd;
                        fill: #FFFFFF;
                    }
                </style>
                <g>
                    <path class="st0" d="M0.38,28.84V39.3c0,0,27.04,0,30.6,0c3.56,0,8.1-3.29,8.1-8.73c0-2.19,0.84-3.61-1.73-6.51l-3.91-4.64
		c-2.24-2.09,0.27-2.09,2.15-2.09c1.05,0,12.92,0,12.92,0V39.3h10.24V17.33h13.81V7.93H27.83c-5.44,0-8.1,5.22-7.95,7.94
		c0.15,2.72,0.65,6.14,5.17,10.25c4.12,3.75-2.04,2.72-2.66,2.72C19.26,28.84,0.38,28.84,0.38,28.84L0.38,28.84z"/>
                    <path class="st0" d="M95.2,7.93H78.67L69.41,39.3h10.31l1.67-4.39h10.88l1.61,4.39h10.1L95.2,7.93L95.2,7.93z M83.69,27.38
		l3.56-11.51l3.35,11.51H83.69L83.69,27.38z"/>
                    <path class="st0" d="M136.62,28.84c-3.97,0-3.97-1.46-3.97-1.46c3.41,0,6.43-4.96,6.43-10.04c0-5.08-4.96-9.41-8.94-9.41
		c-3.97,0-22.23,0-22.23,0V39.3h11.3V28.84c0,0,4.81,5.65,7.32,7.95c2.51,2.3,2.72,2.51,6.13,2.51c3.41,0,17.74,0,17.74,0V28.84
		C150.38,28.84,140.59,28.84,136.62,28.84L136.62,28.84z M126.37,21.52c-2.87,0-7.17,0-7.17,0v-5.65c0,0,4.87,0,7.17,0
		C129.65,15.87,130.22,21.52,126.37,21.52L126.37,21.52z"/>
                    <polygon class="st0" points="0.38,43.28 11.94,43.28 14.86,53.74 17.58,43.28 29.72,43.28 32.86,53.74 35.99,43.28 46.03,43.28
		36.83,74.65 27.63,74.65 23.59,59.8 19.05,74.65 9.63,74.65 0.38,43.28 	"/>
                    <path class="st0" d="M69.76,43.45H53.23l-9.26,31.37h10.31l1.67-4.39h10.88l1.61,4.39h10.1L69.76,43.45L69.76,43.45z M58.25,62.9
		l3.56-11.51l3.35,11.51H58.25L58.25,62.9z"/>
                    <path class="st0" d="M136.83,52.69c-1.88,0-3.93,0.22-1.69,2.31l3.91,4.64c2.57,2.89,2.53,4.1,2.53,6.29
		c0,5.44-5.38,8.73-8.94,8.73l-24.72,0.17c-3.41,0-3.62-0.21-6.13-2.51c-2.51-2.3-7.32-7.95-7.32-7.95v10.46h-11.3V43.45
		c0,0,18.26,0,22.23,0c3.97,0,8.94,4.33,8.94,9.41s-3.02,10.04-6.43,10.04c0,0,1.5,1.51,4.01,1.51c2.51,0,12.18,0.01,12.18,0.01
		c0.62,0,6.78,1.03,2.66-2.72c-4.52-4.11-5.02-7.53-5.17-10.25c-0.15-2.72,2.2-8.17,7.64-8.17h21.14v9.41H136.83L136.83,52.69z
		 M101.65,57.04c-2.87,0-7.17,0-7.17,0v-5.65c0,0,4.87,0,7.17,0C104.94,51.39,105.5,57.04,101.65,57.04L101.65,57.04z"/>
                </g>
            </svg>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#introduccion">Inicio</a>
                <a class="nav-link" href="#personas">Personas</a>
                <a class="nav-link" href="#peliculas">Películas</a>
                <a class="nav-link" href="#naves">Naves espaciales</a>
                <a class="nav-link" href="#vehiculos">Vehículos</a>
                <a class="nav-link" href="#especies">Especies</a>
                <a class="nav-link" href="#planetas">Planetas</a>
            </div>
        </div>
    </div>
</nav>

<main>
    <h1 class="pt-3 text-center text-white">Star Wars - API</h1>
    <h2 class="mt-3 text-center text-white-50">Documentación</h2>

    <section class="container my-2 pb-4 border-bottom border-white" id="introduccion">
        <div class="alert my-5 text-white " role="alert" id="migracion">
            <h3 class="alert-heading">¡Atención!</h3>
            <p>Para que puedas probar mejor la API, te ofrecemos importar datos para probar. Si querés hacerlo, podés darle click al siguiente botón y aguardar leyendo la documentación.</p>
            <hr>
            <button class="btn btn-outline-light d-block mx-auto" id="importar">Importar datos</button>
        </div>

        <h3>URL base</h3>
        <p>La URL base de la API es <code>/api</code></p>

        <div class="card bg-white rounded p-3">
            <h4>Ejemplo petición</h4>
            <code>
                {{ \Illuminate\Support\Facades\URL::asset("/api") }}
            </code>
        </div>

        <div class="card bg-white rounded my-2 p-3">
            <h4>Ejemplo respuesta</h4>
            <code>
                <pre>Content-Type: application/json
{
    "films": "{{ \Illuminate\Support\Facades\URL::asset("/api/films") }}",
    "vehicles": "{{ \Illuminate\Support\Facades\URL::asset("/api/vehicles") }}",
    "starships": "{{ \Illuminate\Support\Facades\URL::asset("/api/starships") }}",
    "planets": "{{ \Illuminate\Support\Facades\URL::asset("/api/planets") }}",
    "people": "{{ \Illuminate\Support\Facades\URL::asset("/api/people") }}",
    "species": "{{ \Illuminate\Support\Facades\URL::asset("/api/species") }}"
}</pre>
            </code>
        </div>


        <h3>Búsquedas</h3>
        <p>Todos los modelos soportan el parámetro <code>search</code> para búsquedas.</p>

        <div class="card bg-white rounded p-3">
            <code>
                {{ \Illuminate\Support\Facades\URL::asset("/api/") }}/?search=foo
            </code>
        </div>
    </section>

    <section class="container my-2 py-3" id="personas">
        <h3>Personas</h3>
        <p>Datos de todas las personas de Star Wars</p>

        <h4>Endpoints</h4>
        <ul>
            <li><code class="text-success"> GET </code> : <code>/people/</code> - Listado de todas las personas</li>
            <li><code class="text-success"> GET </code> : <code>/people/{id}</code> - Datos de una persona específica</li>
        </ul>

        <h4>Búsquedas</h4>
        <p><code>name</code> - Nombre de la persona</p>

        <div class="card bg-white rounded p-3">
            <h4>Ejemplo petición</h4>
            <code>
                {{ \Illuminate\Support\Facades\URL::asset("/api/people/1") }}
            </code>
        </div>

        <div class="card bg-white rounded my-2 p-3">
            <h4>Ejemplo respuesta</h4>
            <code>
                <pre>Content-Type: application/json
{
    "results":
        {
            "name":"Luke Skywalker",
            "birth_year":"19BBY",
            "eye_color":"blue"
            ,"gender":"male",
            "hair_color":"blond",
            "height":"172",
            "mass":"77",
            "skin_color":"fair",
            "planet_id":null,
            "created":"2021-02-28T00:00:00.000000Z",
            "edited":"2021-02-28T17:30:37.000000Z",
            "films":[
                "{{ \Illuminate\Support\Facades\URL::asset("/api/films/1") }}",
                "{{ \Illuminate\Support\Facades\URL::asset("/api/films/2") }}",
                "{{ \Illuminate\Support\Facades\URL::asset("/api/films/3") }}",
                "{{ \Illuminate\Support\Facades\URL::asset("/api/films/6") }}",
                "{{ \Illuminate\Support\Facades\URL::asset("/api/films/7") }}",
                "{{ \Illuminate\Support\Facades\URL::asset("/api/films/8") }}",
                "{{ \Illuminate\Support\Facades\URL::asset("/api/films/9") }}",
                "{{ \Illuminate\Support\Facades\URL::asset("/api/films/12") }}"
            ],
            "starships":[
                "{{ \Illuminate\Support\Facades\URL::asset("/api/starships/12") }}",
                "{{ \Illuminate\Support\Facades\URL::asset("/api/starships/22") }}"
            ],
            "vehicles":[
                "{{ \Illuminate\Support\Facades\URL::asset("/api/vehicles/14") }}",
                "{{ \Illuminate\Support\Facades\URL::asset("/api/vehicles/30") }}"
            ],
            "species":[],
            "homeworld":[]
        }
}</pre>
            </code>
        </div>

    </section>



    <section class="container my-2 py-3" id="peliculas">
        <h3>Películas</h3>
        <p>Datos de todas las películas de Star Wars</p>

        <h4>Endpoints</h4>
        <ul>
            <li><code class="text-success"> GET </code> : <code>/films/</code> - Listado de todas las películas</li>
            <li><code class="text-success"> GET </code> : <code>/films/{id}</code> - Datos de una película específica</li>
        </ul>

        <h4>Búsquedas</h4>
        <p><code>title</code> - Nombre de la película</p>

        <div class="card bg-white rounded p-3">
            <h4>Ejemplo petición</h4>
            <code>
                {{ \Illuminate\Support\Facades\URL::asset("/api/films/1") }}
            </code>
        </div>

        <div class="card bg-white rounded my-2 p-3">
            <h4>Ejemplo respuesta</h4>
            <code>
                <pre>Content-Type: application/json
{
    "results":
        {
            "title":"A New Hope",
            "episode_id":4,
            "opening_crawl":"It is a period of civil war.\r\nRebel spaceships, striking\r\nfrom a hidden base, have won\r\ntheir first victory against\r\nthe evil Galactic Empire.\r\n\r\nDuring the battle, Rebel\r\nspies managed to steal secret\r\nplans to the Empire's\r\nultimate weapon, the DEATH\r\nSTAR, an armored space\r\nstation with enough power\r\nto destroy an entire planet.\r\n\r\nPursued by the Empire's\r\nsinister agents, Princess\r\nLeia races home aboard her\r\nstarship, custodian of the\r\nstolen plans that can save her\r\npeople and restore\r\nfreedom to the galaxy....",
            "director":"George Lucas",
            "producer":"Gary Kurtz, Rick McCallum",
            "release_date":"1977-05-25",
            "created":"2021-02-28T00:00:00.000000Z",
            "edited":"2021-02-28T21:52:23.000000Z",
            "planets":[
                {{ \Illuminate\Support\Facades\URL::asset("/api/planets/1") }},
                ...
            ],
            "starships":[
                {{ \Illuminate\Support\Facades\URL::asset("/api/starships/2") }},
                {{ \Illuminate\Support\Facades\URL::asset("/api/starships/3") }},
                ...
            ],
            "vehicles":[
                {{ \Illuminate\Support\Facades\URL::asset("/api/vehicles/4") }},
                {{ \Illuminate\Support\Facades\URL::asset("/api/vehicles/6") }},
                ...
            ],
            "species":
            [
                ...
            ],
            "characters":[
                {{ \Illuminate\Support\Facades\URL::asset("/api/people/1") }},
                {{ \Illuminate\Support\Facades\URL::asset("/api/people/2") }},
                ...
            ]
        }
}</pre>
            </code>
        </div>

    </section>


    <section class="container my-2 py-3" id="naves">
        <h3>Naves espaciales</h3>
        <p>Datos de todas las naves espaciales de Star Wars</p>

        <h4>Endpoints</h4>
        <ul>
            <li><code class="text-success"> GET </code> : <code>/starships/</code> - Listado de todas las naves espaciales</li>
            <li><code class="text-success"> GET </code> : <code>/starships/{id}</code> - Datos de una nave espacial específica</li>
            <li><code class="text-success"> GET </code> : <code>/starships/{id}/count</code> - Cantidad de una nave espacial específica en stock</li>
            <li><code class="text-warning"> PUT </code> : <code>/starships/{id}/count/{value}</code> - Setea una nueva cantidad de naves en stock</li>
            <li><code class="text-warning"> PUT </code> : <code>/starships/{id}/add/{value}</code> - Aumenta <code>value</code> cantidades de naves en stock</li>
            <li><code class="text-warning"> PUT </code> : <code>/starships/{id}/sub/{value}</code> - Disminuye <code>value</code> cantidades de naves en stock</li>
        </ul>

        <h4>Búsquedas</h4>
        <p><code>name</code> - Nombre de la nave</p>
        <p><code>model</code> - Modelo de la nave</p>

        <div class="card bg-white rounded p-3">
            <h4>Ejemplo petición</h4>
            <code>
                {{ \Illuminate\Support\Facades\URL::asset("/api/starships/12") }}
            </code>
        </div>

        <div class="card bg-white rounded my-2 p-3">
            <h4>Ejemplo respuesta</h4>
            <code>
                <pre>Content-Type: application/json
{
    "results":
        {
            "title":"A New Hope",
            "episode_id":4,
            "opening_crawl":"It is a period of civil war.\r\nRebel spaceships, striking\r\nfrom a hidden base, have won\r\ntheir first victory against\r\nthe evil Galactic Empire.\r\n\r\nDuring the battle, Rebel\r\nspies managed to steal secret\r\nplans to the Empire's\r\nultimate weapon, the DEATH\r\nSTAR, an armored space\r\nstation with enough power\r\nto destroy an entire planet.\r\n\r\nPursued by the Empire's\r\nsinister agents, Princess\r\nLeia races home aboard her\r\nstarship, custodian of the\r\nstolen plans that can save her\r\npeople and restore\r\nfreedom to the galaxy....",
            "director":"George Lucas",
            "producer":"Gary Kurtz, Rick McCallum",
            "release_date":"1977-05-25",
            "created":"2021-02-28T00:00:00.000000Z",
            "edited":"2021-02-28T21:52:23.000000Z",
            "planets":[
                {{ \Illuminate\Support\Facades\URL::asset("/api/planets/1") }},
                ...
            ],
            "starships":[
                {{ \Illuminate\Support\Facades\URL::asset("/api/starships/2") }},
                {{ \Illuminate\Support\Facades\URL::asset("/api/starships/3") }},
                ...
            ],
            "vehicles":[
                {{ \Illuminate\Support\Facades\URL::asset("/api/vehicles/4") }},
                {{ \Illuminate\Support\Facades\URL::asset("/api/vehicles/6") }},
                ...
            ],
            "species":[],
            "characters":[
                {{ \Illuminate\Support\Facades\URL::asset("/api/people/1") }},
                {{ \Illuminate\Support\Facades\URL::asset("/api/people/2") }},
                ...
            ]
        }
}</pre>
            </code>
        </div>

    </section>


    <section class="container my-2 py-3" id="vehiculos">
        <h3>Vehículos</h3>
        <p>Datos de todos los vehículos de Star Wars</p>

        <h4>Endpoints</h4>
        <ul>
            <li><code class="text-success"> GET </code> : <code>/vehicles/</code> - Listado de todos los vehículos</li>
            <li><code class="text-success"> GET </code> : <code>/vehicles/{id}</code> - Datos de un vehículo específico</li>
            <li><code class="text-success"> GET </code> : <code>/vehicles/{id}/count</code> - Cantidad de un vehículo específico en stock</li>
            <li><code class="text-warning"> PUT </code> : <code>/vehicles/{id}/count/{value}</code> - Setea un vehículo cantidad de naves en stock</li>
            <li><code class="text-warning"> PUT </code> : <code>/vehicles/{id}/add/{value}</code> - Aumenta <code>value</code> cantidades de vehículos en stock</li>
            <li><code class="text-warning"> PUT </code> : <code>/vehicles/{id}/sub/{value}</code> - Disminuye <code>value</code> cantidades de vehículos en stock</li>
        </ul>

        <h4>Búsquedas</h4>
        <p><code>name</code> - Nombre del vehículo</p>
        <p><code>model</code> - Modelo del vehículo</p>

        <div class="card bg-white rounded p-3">
            <h4>Ejemplo petición</h4>
            <code>
                {{ \Illuminate\Support\Facades\URL::asset("/api/vehicles/1") }}
            </code>
        </div>

        <div class="card bg-white rounded my-2 p-3">
            <h4>Ejemplo respuesta</h4>
            <code>
                <pre>Content-Type: application/json
{
    "results":{
        "name":"Imperial Speeder Bike","model":"74-Z speeder bike",
        "vehicle_class":"speeder",
        "manufacturer":"Aratech Repulsor Company",
        "length":"3",
        "cost_in_credits":"8000",
        "crew":"1",
        "passengers":"1",
        "max_atmosphering_speed":"360",
        "cargo_capacity":"4",
        "consumables":"1 day",
        "count":0,
        "created":"2021-02-28T00:00:00.000000Z",
        "edited":"2021-02-28T22:22:39.000000Z",
        "pilots":[
            "{{ \Illuminate\Support\Facades\URL::asset("/api/people/1") }},
            "{{ \Illuminate\Support\Facades\URL::asset("/api/people/5") }}
        ],
        "films":[
            "{{ \Illuminate\Support\Facades\URL::asset("/api/films/3") }}
        ]
    }
}</pre>
            </code>
        </div>

    </section>



    <section class="container my-2 py-3" id="especies">
        <h3>Especies</h3>
        <p>Datos de todas las especies de Star Wars</p>

        <h4>Endpoints</h4>
        <ul>
            <li><code class="text-success"> GET </code> : <code>/species/</code> - Listado de todas las especies</li>
            <li><code class="text-success"> GET </code> : <code>/species/{id}</code> - Datos de una especie específica</li>
        </ul>

        <h4>Búsquedas</h4>
        <p><code>name</code> - Nombre de la especie</p>

        <div class="card bg-white rounded p-3">
            <h4>Ejemplo petición</h4>
            <code>
                {{ \Illuminate\Support\Facades\URL::asset("/api/species/1") }}
            </code>
        </div>

        <div class="card bg-white rounded my-2 p-3">
            <h4>Ejemplo respuesta</h4>
            <code>
                <pre>Content-Type: application/json
{
    "results":{
        "name":"Human",
        "classification":"mammal",
        "designation":"sentient",
        "average_height":"180",
        "average_lifespan":"120",
        "eye_colors":"brown, blue, green, hazel, grey, amber",
        "hair_colors":"blonde, brown, black, red",
        "skin_colors":"caucasian, black, asian, hispanic",
        "language":"Galactic Basic",
        "created":"2014-12-10T13:52:11.000000Z",
        "edited":"2014-12-20T21:36:42.000000Z",
        "people":[
            "{{ \Illuminate\Support\Facades\URL::asset("\/api\/people\/1") }}
            ...
        ],
        "films":[
            "{{ \Illuminate\Support\Facades\URL::asset("\/api\/films\/1") }}
            ...
        ]
    }
}</pre>
            </code>
        </div>

    </section>



    <section class="container mt-2 py-3" id="planetas">
        <h3>Planetas</h3>
        <p>Datos de todos los planetas de Star Wars</p>

        <h4>Endpoints</h4>
        <ul>
            <li><code class="text-success"> GET </code> : <code>/planets/</code> - Listado de todos los planetas</li>
            <li><code class="text-success"> GET </code> : <code>/planets/{id}</code> - Datos de un planeta específico</li>
        </ul>

        <h4>Búsquedas</h4>
        <p><code>name</code> - Nombre del planeta</p>

        <div class="card bg-white rounded p-3">
            <h4>Ejemplo petición</h4>
            <code>
                {{ \Illuminate\Support\Facades\URL::asset("/api/planets/1") }}
            </code>
        </div>

        <div class="card bg-white rounded my-2 p-3">
            <h4>Ejemplo respuesta</h4>
            <code>
                <pre>Content-Type: application/json
{
    "results":{
        "name":"Tatooine",
        "diameter":"10465",
        "rotation_period":"23",
        "orbital_period":"304",
        "gravity":"1 standard",
        "population":"200000",
        "climate":"arid",
        "terrain":"desert",
        "surface_water":"1",
        "url":"{{ \Illuminate\Support\Facades\URL::asset("/api/planets/1")}},
        "created":"2014-12-09T00:00:00.000000Z",
        "edited":"2014-12-20T20:58:18.000000Z",
        "residents":[
            "{{ \Illuminate\Support\Facades\URL::asset("/api/people/1")}},
            "{{ \Illuminate\Support\Facades\URL::asset("/api/people/2")}},
            ...
        ],
        "films":[
            "{{ \Illuminate\Support\Facades\URL::asset("/api/films/1")}},
            "{{ \Illuminate\Support\Facades\URL::asset("/api/films/3")}},
            ...
        ]
    }
}</pre>
            </code>
        </div>

    </section>


</main>

    <div role="alert" aria-live="assertive" aria-atomic="true" class="toast d-block" data-bs-autohide="false" id="toast">
        <div class="toast-header">
            <svg class="rounded me-2" width="30" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
            <style type="text/css">
                .st0{fill:#1D1D1B;}
            </style>
                            <g>
                                <rect x="16.81" y="42.96" class="st0" width="16.62" height="0.54"/>
                                <g>
                                    <polygon class="st0" points="19.74,42.12 20.86,42.12 20.86,39.32 19.74,40.85 		"/>
                                    <polygon class="st0" points="30.51,42.12 29.39,42.12 29.39,39.32 30.51,40.85 		"/>
                                    <polygon class="st0" points="22.16,42.17 23.13,42.17 23.13,36.72 22.16,37.69 		"/>
                                    <polygon class="st0" points="28.08,42.17 27.11,42.17 27.11,36.72 28.08,37.69 		"/>
                                    <rect x="24.44" y="35.95" class="st0" width="1.38" height="6.22"/>
                                </g>
                                <polygon class="st0" points="25.12,48 28.25,46.05 31.38,44.1 25.12,44.1 18.87,44.1 21.99,46.05 	"/>
                            </g>
                            <path d="M48.96,32.54c-3.45-7.62-7.51-13.19-7.51-13.19S41.8,1.11,25.16,1.11l-0.01,5.45l-0.01-5.45c-16.64,0-16.3,18.24-16.3,18.24
                s-4.06,5.57-7.51,13.19s5.45,11,5.45,11c-3.01-9.02,6.67-5.32,6.67-5.32l3,5.11v-1.22l-3.41-6.27v-1.63l4.14,7.39l6.66-6.91
                c0,0,0.28-1.18,1.31-1.22c1.02,0.05,1.3,1.22,1.3,1.22l6.66,6.91l4.14-7.39v1.63l-3.41,6.27v1.22l3.01-5.11c0,0,9.68-3.7,6.67,5.32
                C43.51,43.54,52.41,40.17,48.96,32.54z M29.94,20.77c0,0,2.38-2.04,5.43-2.04c3.06,0,7.4,5.03,7.4,5.03s0.68,1.19,0.24,1.56
                c-0.54-0.2-4.55-5.54-7.71-5.54c-3.16,0-4.48,1.7-4.99,1.53S29.94,20.77,29.94,20.77z M7.69,23.76c0,0,4.35-5.03,7.4-5.03
                s5.43,2.04,5.43,2.04s0.14,0.37-0.37,0.54s-1.83-1.53-4.99-1.53c-3.16,0-7.17,5.33-7.71,5.54C7.01,24.95,7.69,23.76,7.69,23.76z
                 M13.13,28.38l1.09,0.07c2.95,2.21,8.59,0.71,8.59,0.71l-0.03,1.15C14.59,31.23,13.13,28.38,13.13,28.38z M22.87,33.27
                c0,0-5.16,1.49-5.16,6.52L17,37.99c0,0,0.25-2.28,3.44-4.72c0,0-0.79-1.97-5.58-0.37l-1.09-1.56c0,0,0.58,0.71,2.07,0.34
                c1.49-0.37,3.4-0.92,7.03,0.54V33.27z M22.81,28.31c-6.79,1.43-9.03-1.22-9.03-2.65c0-1.63,1.02-1.9,1.02-1.9
                c-4.28-1.02-7.68,8.58-8.29,10.39c-0.86,2.56,0.39,3.85,0.39,3.85c-1.1,0.66-1,2.05-1,2.05c-2.9-2.9,3.14-17.59,8.63-16.91
                c4.21,0,6.01,2.62,8.42,3.87L22.81,28.31z M27.05,30.96c0,0-2.24-0.84-3.67,0v-0.9c0,0,1.63-0.75,3.67,0.03V30.96z M27.05,29.54
                c0,0-2.24-1.22-3.67,0v-1.3c0,0,1.63-1.09,3.67,0.04V29.54z M35.44,32.9c-4.79-1.6-5.58,0.37-5.58,0.37
                c3.19,2.45,3.44,4.72,3.44,4.72l-0.71,1.8c0-5.03-5.16-6.52-5.16-6.52v-1.05c3.63-1.46,5.54-0.92,7.03-0.54
                c1.49,0.37,2.07-0.34,2.07-0.34L35.44,32.9z M27.53,30.32l-0.03-1.15c0,0,5.64,1.49,8.59-0.71l1.09-0.07
                C37.17,28.38,35.71,31.23,27.53,30.32z M44.46,40.06c0,0,0.1-1.39-1-2.05c0,0,1.25-1.29,0.39-3.85c-0.61-1.81-4.01-11.41-8.29-10.39
                c0,0,1.02,0.27,1.02,1.9c0,1.43-2.24,4.08-9.03,2.65l-0.14-1.29c2.41-1.26,4.21-3.87,8.42-3.87C41.33,22.47,47.37,37.16,44.46,40.06
                z"/>
            </svg>

            <strong class="me-auto">Importación</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Los datos se terminaron de importar
        </div>
    </div>
</body>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/importacion.js"></script>
</html>
