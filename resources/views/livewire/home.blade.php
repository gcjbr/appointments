<div class="space-y-10">
    <div>
        <h2 class="text-xl font-medium">Choose a professional </h2>
        <div class="grid grid-col-2  md:grid-cols-5 gap-8 mt-6">
            @foreach($employees as $employee)

                <a href=""
                   class="py-8 px-4 borders borders-slate-200 rounded-lg shadow-sm flex flex-col items-center justify-center text-center text-white hover:bg-gray=50/75">
                    <img src="{{$employee->profile_photo_url}}" class="w-full h-full rounded-lg" alt="">
                    <div class="text-sm font-medium mt-3 text-slate-600">
                        {{$employee->name}}
                    </div>

                </a>
            @endforeach
        </div>
    </div>
    <div>
        <h2 class="text-xl font-medium">Or, choose a service </h2>
        <div class="grid grid-col-2  md:grid-cols-5 gap-8 mt-6">
            @foreach($services as $service)

                <x-service :service="$service"/>

            @endforeach
        </div>
    </div>
</div>

