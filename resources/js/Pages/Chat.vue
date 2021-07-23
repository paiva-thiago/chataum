<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Chat!
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex" style="min-height:400px;max-height:400px;">
                    <!-- Listagem de usuários aqui -->
                    <div class="w-3/12 bg-gray-200 bg-opacity-25 shadow-xl border-gray-200 overflow-y-auto">
                        <ul>
                            <li 
                            v-for="user in users" :key="user.id"
                            class="p-6 text-lg text-gray-600 leading-7 font-semibold border-b border-gray-200 hover:bg-gray-200 hover:bg-opacity-50 hover:cursor-pointer">
                                <p class="flex items-center">
                                    {{user.name}}<span class="ml-2 w-2 h-2 bg-green-500 rounded-full"></span>
                                </p>
                            </li>                            
                        </ul>
                    </div>
                    <!-- Caixa das mensagens -->
                    <div class="w-9/12 flex flex-col justify-between">                        
                            <div class="w-full p-6 flex flex-col overflow-y-auto">
                                <div class="w-full mb-3">
                                    <p class="inline-block p-2 rounded-md messageToMe" style="max-width:75%">
                                        <strong>Carmine Brodnex: </strong> 
                                        <span>
                                            Preciso de ajuda!
                                        </span>
                                        <time class="block mt-1 text-xs text-gray-400">21/06/2021 10:15</time>
                                    </p>
                                </div>
                                <div class="w-full mb-3">
                                    <p class="inline-block p-2 rounded-md messageFromMe" style="max-width:75%">
                                        <strong>Thiago Paiva: </strong> 
                                        <span>
                                            Olá! O que precisa?
                                        </span>
                                        <time class="block mt-1 text-xs text-gray-400">21/06/2021 10:15</time>
                                    </p>
                                </div>
                                <div class="w-full mb-3">
                                    <p class="inline-block p-2 rounded-md messageToMe" style="max-width:75%">
                                        <strong>Jujuba Brodnex: </strong> 
                                        <span>
                                            Ajuda!
                                        </span>
                                        <time class="block mt-1 text-xs text-gray-400">21/06/2021 10:15</time>
                                    </p>
                                </div>
                                <div class="w-full mb-3">
                                    <p class="inline-block p-2 rounded-md messageFromMe" style="max-width:75%">
                                        <strong>Thiago Paiva: </strong> 
                                        <span>
                                            Mas com o que?
                                        </span>
                                        <time class="block mt-1 text-xs text-gray-400">21/06/2021 10:15</time>
                                    </p>
                                </div>
                                <div class="w-full mb-3">
                                    <p class="inline-block p-2 rounded-md messageToMe" style="max-width:75%">
                                        <strong>Carmine Brodnex: </strong> 
                                        <span>
                                            Com o sistema de Ajuda!
                                        </span>
                                        <time class="block mt-1 text-xs text-gray-400">21/06/2021 10:15</time>
                                    </p>
                                </div>
                            </div>
                            <div class="w-full bg-gray-200 bg-opacity-25 p-6 border-t border-gray-200">
                                <form>    
                                    <div class="flex rounded-md overflow-hidden border border-gray-300">
                                        <input type="text" class="flex-1  px-4 py-2 text-sm focus:outline-none">
                                        <button class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2">Enviar</button>
                                    </div>
                                </form> 
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
        data(){
            console.log('passando pelo data()')
            return {
                users:[]
            }
        },
        mounted(){
            console.log('passando pelo mounted()')
            console.log('chamando api/users')
            axios.get('api/users').then(response=>{
                this.users = response.data.users
                console.log(this.users)
            })
            console.log('rota retornada')
        }
    }
</script>

<style>
.messageFromMe{
    /*@apply(bg-indigo-300 bg-opacity-25);*/
    background-color:#e7ecfb;
/*    background-opacity:25;*/
    float:right;
}
.messageToMe{
    /*@apply( bg-gray-300 bg-opacity-25);*/
    background-color:#fbfbfb;
    /*background-opacity:25;*/
    float:left;
}

</style>
