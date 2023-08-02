<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Choose Framework for Web Development that you want to focus on?') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-green-600">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 ">

                    <div class="my-10 text-center">
                        <label for="framework lg">Framework:</label>
                        <div class="flex justify-around mt-10">
                            <label class=" pr-16 p-2 hover:bg-blue-200 flex justify-between align-middle justify-items-center" for="react">
                                <input class="mt-1" type="radio" name="framework" id="react" value="React" >
                                <img class="ml-5" width="20px" src="{{asset('img/react.png')}}" alt="">
                                React
                            </label>
                            <label class="  pr-16 p-2 hover:bg-red-200 flex justify-between align-middle justify-items-center"  for="angular">
                                <input class="mt-1"  type="radio" name="framework" id="angular" value="Angular">
                                <img class="ml-5" width="20px" src="{{asset('img/angular.png')}}" alt="">
                                Angular
                            </label>
                            <label class="  pr-16 p-2 hover:bg-green-200 flex justify-between align-middle justify-items-center"  for="vue">
                                <input class="mt-1"  type="radio" name="framework" id="vue" value="Vue">
                                <img class="ml-5" width="20px" src="{{asset('img/vue.png')}}" alt="">
                                Vue
                            </label>
                        </div>
                    </div>
                    <div class="flex justify-center mt-20">
                        <input type="submit" class="bg-green-600 hover:bg-green-700 cursor-pointer rounded p-3 px-10 text-white" value="Start">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
