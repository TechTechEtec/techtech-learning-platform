{% extends "partials/body.twig.php" %}

{% block title %} Cadastro Escola | Techtech {% endblock %}

{% block body %}

    <!-- MODAL TO CHOOSE THE AVATAR  -->
    {% embed "components/avatarsModal.twig.php" %}
        {% block imageSchools %}
            <div class="w-full avatar-group flex flex-row flex-wrap justify-center items-center gap-[1rem]">
                {% for image in imagesSchools %}
                    <sl-avatar
                        data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.15"
                        shape="circle"
                        style="--size:6rem; cursor:pointer;"
                        image="http://drive.google.com/uc?id={{image.id}}"
                        label="{{image.label}}"
                        class="avatar"
                    ></sl-avatar>
                {% endfor %}
            </div>
        {% endblock %}
    {% endembed %}
    
    <!-- SIGNUP PAGE -->
    <div class="w-screen h-screen bg-[url({{BASE}}imgs/background.png)] bg-contain bg-no-repeat bg-center bg-darkerPurple dark:bg-lighteerie relative overflow-x-hidden flex flex-row items-start md:items-center justify-center p-4">

        <button title="Início" onclick="window.history.go(-1); return false;" class="text-4xl text-purple absolute top-[0.625rem] left-[0.625rem]">
            <sl-icon name="arrow-left-square"></sl-icon>
        </button>

        <!-- Toogle Dark/Light Button -->
        <div class="fixed bottom-[0.625rem] right-[0.625rem] z-10">
            {% embed "components/toggleDarkModeButton.twig.php" %} {% endembed%}
        </div>

        <main class="flex flex-wrap flex-col 2sm:flex-row space-y-2 gap-[1rem] rounded-md items-start justify-center bg-white dark:bg-eerie mt-[3rem] p-[2rem] shadow-lg w-full max-w-[37.5rem] min-h-[21.875rem]" data-aos="fade-up" data-aos-mirror="true" data-aos-once="true" data-aos-duration="800">

            <div class="flex w-full h-full min-h-[21.875rem] items-center justify-around flex-1 flex-col">
                <sl-avatar
                    data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025"
                    image=""
                    shape="circle"
                    label="Your Avatar"
                    style="--size:8rem; cursor:pointer"
                    id="chosseAvatar"
                 ></sl-avatar>

                <h2 class="font-nerko text-2xl text-orange font-semibold">Escolha seu avatar!</h2>

                <sl-badge id="school_badge" variant="danger" pill pulse>Escola</sl-badge>

                <p class="text-eerie dark:text-grey">Já tem uma conta ? <a href="{{BASE}}signin" title="Signin" class="text-blue">Entre</a> </p>
            </div>

            <!-- DIVIDER -->
            <div id="divider" class="hidden 2sm:block min-h-[21.875rem] w-[0.125rem] bg-grey text-grey drop-shadow-sm rounded-md mx-2">
            </div>

            <form class="h-full w-full flex-1 flex flex-col items-center px-[1.5rem]" method="post" action="{{BASE}}@signup-school">

                <input class="hidden" name="avatar" value="" id="inputAvatar"/>

                <div class="mt-[0.5rem] font-bold flex flex-col">
                    <label class="text-eerie dark:text-grey" for="name">Nome da Instituição</label>
                    <input class="bg-grey rounded-md h-[2.5rem] w-full caret-purple focus:outline-purple focus:outline-1"
                    id="name"
                    type="text"
                    name="name"
                    required
                    placeholder="@name"
                    autocomplete="off"
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col">
                    <label class="text-eerie dark:text-grey" for="email">E-mail Institucional</label>
                    <input class="bg-grey rounded-md h-[2.5rem] w-full caret-purple focus:outline-purple focus:outline-1"
                    id="email"
                    type="email"
                    name="email"
                    required
                    autocomplete="off"
                    >
                </div>

                <div class="mt-2 font-bold flex flex-col">
                    <label class="text-eerie dark:text-grey" for="password">Senha</label>
                    <input class="bg-grey rounded-md h-[2.5rem] w-full caret-purple focus:outline-purple focus:outline-1"
                    id="password"
                    type="password"
                    name="password"
                    required
                    autocomplete="off"
                    >
                </div>

                <div class="mt-[0.5rem] font-bold flex flex-col">
                    <label class="text-eerie dark:text-grey" for="confirmpassword">Confirmar Senha</label>
                    <input class="bg-grey rounded-md h-[2.5rem] w-full caret-purple focus:outline-purple focus:outline-1"
                    id="confirmpassword"
                    type="password"
                    name="confirmpassword"
                    required
                    autocomplete="off"
                    >
                </div>
            
                <button class="bg-orange rounded-md w-[9rem] h-[2.25rem] text-center text-white flex items-center justify-center group mt-[2rem]">
                    Cadastrar
                </button>
            </form>
        </main>
    </div>

    <style>
        #school_badge::part(base){
            background: #D71C6D;
            padding: 1rem;
            color: white;
            padding: 1rem 0.5rem;
            cursor: default;
            border-radius: 0.5rem;
            box-shadow: 0.1875rem 0.1875rem 0.1875rem grey;
            min-width: 8.125rem;
            text-align: center;
        }

        #chosseAvatar::part(base){
            border: 3px solid #D71C6D;
        }
    </style>
    
{% endblock %}