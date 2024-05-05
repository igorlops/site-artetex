@extends('layout.app')

@section('title-site', "Sobre")

@section('content')

        <div  class="sobre">
            <h2>Sobre Nós</h2>
        </div>

    <body>
        <div class="container">
            <div class="d-flex justify-content-around flex-column gap-3">
                <div class="primeiro-topico col-4 d-flex flex-row w-100 align-items-center">
                    <div class="text-primery col-6">
                        <h2>Com uma história de tradição e profunda expertise no setor têxtil</h2>
                        <p>A Artetex se destaca como uma referência na comercialização de tecidos e malhas,
                            oferecendo produtos da mais alta qualidade para atender às demandas exigentes do mercado de moda brasileiro.</p>
                    </div>
                    <div class="image col-6">
                        <img class="h-100" src="{{asset("img/photo-sobre-nos.jpg")}}" alt="Conhecida por sua tradição e experiência no mercado têxtil">
                    </div>
                </div>
            </div>
        </div>
        <div class="segundo-topico col-4 d-flex flex-row w-100 align-items-center bg-earth">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="image">
                            <img class="h-100" src="{{asset("img/photo-sobre-nos-dois.jpg")}}" alt="Conhecida por sua tradição e experiência no mercado têxtil">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="text-section">
                            <h2>Equipe estruturada e qualificada</h2>
                            <p>Possuímos uma equipe estruturada e qualificada na condução do trabalho,
                                onde nossa prioridade é a entrega de um produto único e de qualidade Artetex.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="terceiro-topico col-4 d-flex flex-row w-100 align-items-center">
                <div class="text-terction col-6">
                    <h2>Aprimoramento, a inovação e a superioridade</h2>
                    <p>Buscamos continuamente o aprimoramento, a inovação e a
                        superioridade do nosso amplo portfólio de tecidos e malhas a fim de
                        entregar os melhores artigos e condições no mercado, para nossos clientes, em todo o Brasil.</p>
                </div>
                <div class="image col-6">
                    <img class="h-100" src="{{asset("img/photo-sobre-nos-tress.jpg")}}" alt="Conhecida por sua tradição e experiência no mercado têxtil">
                </div>
            </div>
        </div>
    </body>


@endsection
