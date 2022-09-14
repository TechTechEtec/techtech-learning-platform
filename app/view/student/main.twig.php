{% extends "partials/body.twig.php" %}

{% block title %} Student | Techtech {% endblock %}

{% block body %}
<div class="w-screen h-screen bg-[url({{BASE}}/imgs/background.png)] bg-contain bg-no-repeat bg-center bg-lightpurple relative overflow-x-hidden flex flex-row items-center justify-center">

<div class="bg-white box-content h-1014 w-1440 p-4 border-4">

        <!-- Nome -->
        <div class="mt-4 font-bold">
            <label for="nome">Nome</label>
            <input
            id="nome"
            type="text"
            >
        </div>

        <!-- E-mail -->
        <div class="mt-4 font-bold">
            <label for="email">E-mail</label>
            <input
            id="email"
            type="text"
            >
        </div>

        <!-- Nascimento -->
        <div class="mt-4 font-bold">
            <label for="data de nascimento">Data de Nascimento</label>
            <input
            id="data de nascimento"
            type="date"
            >
        </div>

        <!-- Instituição -->

        <div class="mt-4 font-bold">
            <label class="" for="instituição">Instituição</label>
            <input
            id="instituição"
            type="text"
            >
        </div>

        <!-- Senha -->

        <div class="mt-4 font-bold">
            <label for="senha">Senha</label>
            <input
            id="senha"
            type="text"
            >

            <!-- botão -->
            <button class="bg-orange rounded-md px-10 h-10 text-white flex items-center group mt-4">
                <i class="ph-user"></i>
                <span class="pl-2">Cadastro</span>
            </button>

        </div>
    </div>

</div>
{% endblock %}