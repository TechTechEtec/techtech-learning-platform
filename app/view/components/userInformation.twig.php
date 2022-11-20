
<!-- MODAL TO SHOW PROGRESS INFORMATION  -->
{% if session.perfil == 'student' %}
    {% embed "components/studentProgressInformation.twig.php" %}{% endembed %}
{% endif %}

<div class="bg-white text-black md:dark:bg-lighteerie dark:bg-eerie dark:text-grey md:min-h-screen h-full flex-1 md:fixed overflow-y-auto top-0 bottom-0 z-1 overflow-y-auto overflow-x-hidden border-r-[1px] flex flex-col 2sm:flex-row md:flex-col items-start justify-start gap-0 2sm:gap-8 md:gap-0 shadow-md dark:border-eerie p-4 m-r-4 min-w-[260px] w-full py-[2rem] px-[3rem] md:p-4 md:max-w-[260px] scroll-less-visible">

    <div id="user_information_session" class="w-full 2sm:w-[40%] md:w-full text-center flex flex-1 md:flex-none flex-col gap-[1rem] items-center justify-stretch md:justify-start">

        <sl-avatar
            id="avatar_user"
            image="{{session.avatar}}"
            shape="circle"
            label="{{ session.name }}"
            style="--size:8rem"
        ></sl-avatar>

        <p class="w-full font-bold text-lg font-mukta text-center ">{{ session.name }}</p>

        <sl-badge variant="primary" pill pulse>{{session.perfil == 'student' ? "Estudante" : session.perfil == 'school' ? "Escola": session.perfil == 'teacher' ? "Professor" : 'Administrador'}}</sl-badge>

        <p class="my-6 w-full text-left text-xl leading-[1.5rem] text-eerie dark:text-[#bdbdbd] font-medium  font-mukta">Desumilde jamais. Não é orgulho, é postura!</p>
    </div>

    {% if session.perfil == 'student' %}

    <div class="w-full 2sm:w-[60%] md:w-full flex flex-1 md:flex-none flex-col items-start justify-stretch md:justify-start">
        <ul class="w-full list-none flex flex-col justify-start items-stretch cursor-default mt-[2rem]">
            <li class="flex flex-row items-center justify-start gap-[1.5rem]">
                <span class="font-bold text-lg uppercase font-mukta">Pontuação:</span>
                <span class="text-xl font-roboto flex flex-row items-center justify-start gap-[0.5rem] ">
                    <span class="text-md font-normal text-lighteerie dark:text-grey">{{session.totalScore}}</span>  
                    <sl-icon name="fire" style="color: #e25822"></sl-icon> 
                </span>
            </li>
            <li class="flex flex-row items-center justify-start gap-[1.5rem]">
                <span  class="font-bold text-lg uppercase font-mukta">Módulo:</span>
                <span class="text-xl font-roboto flex flex-row items-center justify-start gap-[0.5rem] ">
                    <span class="text-md font-normal text-lighteerie dark:text-grey">{{session.actualModule}}</span>  

                    <sl-icon name="book" class="text-darkpurple dark:text-purple"></sl-icon> 
                </span>
            </li> 
        </ul>

        <div data-tilt  data-tilt-speed="1000" data-tilt-perspective="800" data-tilt-scale="1.025" class="w-full mt-4 text-center text-purple font-bold mt-4 p-4 py-8 border-2 border-lightpurple rounded-md drop-shadow-sm cursor-pointer" id="showProgressInfo">
            <sl-progress-ring value="{{session.progressInPorcentage}}" class="progress-ring-values" style=" 
            --track-color: hsl(281, 100%, 95%); 
            --track-width:0.5rem;
            --indicator-color: hsl(252, 100%, 68%);
            --indicator-width:0.7rem;"
            >
                <p class="text-darkpurple dark:text-purple">{{ session.progressInPorcentage }} %</p> 
            </sl-progress-ring>

            <p class="font-bold text-lg uppercase font-mukta mt-2">Progresso</p>
        </div>   
    </div>
    
       
    {% endif %}
</div>

<style>

    #avatar_user::part(base){
        border: 2px solid hsl(252, 100%, 68%);
    }

    html.dark #avatar_user::part(base){
        border: 2px solid white;
    }

</style>