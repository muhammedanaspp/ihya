<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
    <title>Do</title>
</head>

<body>
    <section class="flex place-content-center items-center bg-gold-bg px-10">
        <div class="bg-white">
            <div class="flex max-h-64 w-auto">
                <img src="{{ asset('assets/src/foot image.png') }}" alt="" />
            </div>

            <div class="flex place-content-between items-center px-5">
                <div class="flex flex-col items-center">
                    <img src="{{ asset('assets/src/Circled User Male Skin Type 3.png') }}" alt="Profile Photo"
                        class="w-[200px] h-[200px]" />
                    <p class="font-semibold text-xl">{{ $user->name }}</p>
                    <p>{{ $mahall->name }}, {{ $state->name }}, India</p>
                </div>

                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 12 12">
                        <title>pen</title>
                        <g fill="#000000">
                            <path
                                d="M11.707,1.879,10.121.293a1,1,0,0,0-1.414,0L7.354,1.646l3,3,1.353-1.353A1,1,0,0,0,11.707,1.879Z">
                            </path>
                            <polygon points="6.646 2.354 1 8 0 12 4 11 9.646 5.354 6.646 2.354" fill="#000000">
                            </polygon>
                        </g>
                    </svg>
                </div>
            </div>

            <!-- #region  accordion-->

            <div class="mt-6" id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium border border-b-0 rounded-t-xl gap-3"
                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                        aria-controls="accordion-collapse-body-1">
                        <span>Saved Jobs</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="p-5 border border-b-0">
                        <!-- #region -->
                        @foreach ($savedJobs as $job)
                            <div
                                class="flex place-content-between w-full px-6 border rounded-md text-xl py-4 font-medium">
                                <p>{{ $job->title }}</p>

                            </div>
                        @endforeach
                    </div>
                </div>

                <h2 id="accordion-collapse-heading-2">
                    <button type="button"
                        class="flex items-center justify-between w-full p-5 font-medium border border-b-0 gap-3"
                        data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                        aria-controls="accordion-collapse-body-2">
                        <span>Your Qualifications</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="p-5 border border-b-0">
                        <!-- #region -->
                        <div class="flex place-content-between w-full px-6 border rounded-md text-xl py-4 font-medium">
                            <p>PhD</p>
                            <button class="text-base hover:bg-gold-bg bg-gold-bg-dark px-6 rounded-full">
                                upload certificate
                            </button>
                        </div>

                        <div class="flex place-content-between w-full px-6 border rounded-md text-xl py-4 font-medium">
                            <p>PhD</p>
                        </div>

                        <div class="flex place-content-between w-full px-6 border rounded-md text-xl py-4 font-medium">
                            <p>PhD</p>
                        </div>
                        <!-- #endregion -->
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-3">
                    <button type="button" class="flex items-center justify-between w-full p-5 font-medium border gap-3"
                        data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                        aria-controls="accordion-collapse-body-3">
                        <span>Your Interested areas</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="p-5 border border-t-0">
                        <!-- #region -->
                        <div class="flex place-content-between w-full px-6 border rounded-md text-xl py-4 font-medium">
                            <p>PhD</p>
                        </div>

                        <div class="flex place-content-between w-full px-6 border rounded-md text-xl py-4 font-medium">
                            <p>PhD</p>
                        </div>

                        <div class="flex place-content-between w-full px-6 border rounded-md text-xl py-4 font-medium">
                            <p>PhD</p>
                        </div>
                        <!-- #endregion -->
                    </div>
                </div>
            </div>

            <!-- #endregion accrodion  -->
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>

</html>
