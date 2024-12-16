<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manjari:wght@100;400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body class="font-poppins">
    <div class="flex overflow-hidden flex-col bg-white">
        <nav class="flex flex-col mt-1.5 w-full bg-white max-md:max-w-full" aria-label="Main Navigation">
            <div
                class="flex z-10 flex-wrap gap-10 justify-center place-content-center items-center pr-8 mt-0 mb-0 w-full h-[159px] max-md:pr-5 max-md:mb-2.5 max-md:max-w-full">
                <div class="flex flex-col self-stretch px-2.5 pb-2.5 my-auto w-[169px]">
                    <img loading="lazy"
                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/22f7bc01bb8ba3743ee164e4c5deaa7b8eec658d92ba135b824a494eb7586e7d?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0"
                        class="object-contain aspect-[1.14] w-[149px]" alt="Company Logo" />
                </div>
                <div
                    class="flex flex-wrap gap-8 justify-center items-center self-stretch my-auto text-lg leading-loose text-center text-black min-w-[240px] max-md:max-w-full">
                    <a href="#jobs"
                        class="self-stretch px-7 pb-7 my-auto whitespace-nowrap w-[92px] max-md:px-5 font-medium"
                        tabindex="0">Jobs</a>
                    <a href="#exams"
                        class="self-stretch px-12 pb-7 my-auto whitespace-nowrap w-[149px] max-md:px-5 font-medium"
                        tabindex="0">Exams</a>
                    <a href="#community"
                        class="self-stretch px-6 pb-6 my-auto  whitespace-nowrap w-[149px] max-md:px-5 font-medium"
                        tabindex="0" style="color: #D39C32;">Community</a>
                    <a href="#career" class="self-stretch px-7 pb-7 my-auto w-[149px] max-md:px-5 font-medium"
                        tabindex="0">Set career</a>
                </div>
                <div class="flex gap-7 items-center self-stretch my-auto pb-7">
                    <button aria-label="Search" class="focus:outline-none" tabindex="0">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/49a3a3a045b985a55707eba8ab4dc297ee7b92fbfb3a7d0619e2b94e72cb4123?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0"
                            class="object-contain shrink-0 self-stretch my-auto aspect-[0.86] w-[18px]"
                            alt="" />
                    </button>
                    <button aria-label="User Profile" class="focus:outline-none" tabindex="0">
                        <img loading="lazy"
                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/46223d1a92a2cbeaad09a6f2b5461340d9763780d92d3d344d809308f236134c?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0"
                            class="object-contain shrink-0 self-stretch my-auto w-11 aspect-square" alt="" />
                    </button>
                </div>
            </div>
        </nav>

        <main class="flex z-10 flex-col px-20 md:px-[2%] py-8 -mt-10 w-full bg-orange-50 max-md:px-5 max-md:max-w-full">
            <div class="w-full max-md:max-w-full">
                <div class="  md:w-full flex gap-5 max-md:flex-col">
                    <aside class="flex flex-col w-3/12 max-md:ml-0 max-md:w-full" role="complementary"
                        aria-label="Job Filters">
                        <div class="flex flex-col mt-11 max-md:mt-10">
                            <div
                                class="flex flex-col items-start px-8 lg:px-4 pt-7 pb-16 w-full bg-white rounded-3xl shadow-2xl max-md:px-5">
                                <div
                                    class="flex gap-5 justify-between self-stretch w-full text-center whitespace-nowrap items-center">
                                    <div class="flex gap-2 text-xl font-semibold leading-10 text-orange-400">
                                        <img loading="lazy"
                                            src="https://cdn.builder.io/api/v1/image/assets/TEMP/5a6baa4d9a4c95ac730a77ce06721b5b13229ad8c1899d90e3db3531562dcaf1?placeholderIfAbsent=true&apiKey=e00d3c793b254127971e1d09475396f0"
                                            alt="Filter icon"
                                            class="object-contain shrink-0 my-auto aspect-square w-[18px]" />
                                        <span role="heading" aria-level="2">Filter</span>
                                    </div>
                                    <div class="flex h-full items-center place-content-center">
                                        <button
                                            class=" text-xs leading-4 text-black hover:cursor-pointer hover:text-yellow-300 focus:outline-none focus:ring-orange-400"
                                            tabindex="0">reset</button>
                                    </div>
                                </div>
                                <!-- #region qualified or not-->

                                <fieldset class="w-full flex flex-col items-center my-2 ">
                                    <legend
                                        class="mt-3.5 text-base font-semibold leading-10 md:leading-tight md:mb-2 md:pt-3  text-black">
                                        Qualification Status</legend>
                                    <div
                                        class="flex gap-2 text-sm md:flex-col lg:flex-row font-medium text-center text-black">


                                        <input type="radio" name="is_qualified" id="qualified"
                                            class="hidden peer job-filter" value="qualified">
                                        <label for="qualified"
                                            class="flex flex-col whitespace-nowrap cursor-pointer peer-checked:*:bg-[#D39C32] peer-checked:*:text-white peer-checked:*:border-white">
                                            <span
                                                class="py-1 px-3 bg-white rounded-xl border border-black border-solid hover:bg-gray-50 focus-within:ring-2 focus-within:ring-orange-400">Qualified</span>
                                        </label>
                                        <div>
                                            <input type="radio" checked name="is_qualified" id="Not-qualified"
                                                class="hidden peer job-filter" value="not_qualified">
                                            <label for="Not-qualified"
                                                class="flex flex-col whitespace-nowrap cursor-pointer peer-checked:*:bg-[#D39C32] peer-checked:*:text-white peer-checked:*:border-white">
                                                <span
                                                    class="px-3 py-1 bg-white rounded-xl border border-black border-solid hover:bg-gray-50 focus-within:ring-2 focus-within:ring-orange-400">Not
                                                    Qualified</span>
                                            </label>
                                        </div>
                                </fieldset>

                                <!-- #endregion  qualified or not-->



                                <!-- #region type state or central-->
                                <fieldset class="w-full flex flex-col items-center my-2">
                                    <legend
                                        class="mt-3.5 text-base font-semibold leading-10 md:leading-tight md:mb-2 md:pt-3  text-black">
                                        Type</legend>
                                    <div
                                        class="flex gap-2 text-sm md:flex-col lg:flex-row font-medium text-center text-black">

                                        <div>

                                            <input type="radio" checked name="gov_type" id="central"
                                                class="hidden peer job-filter" value="centre">
                                            <label for="central"
                                                class="flex flex-col whitespace-nowrap cursor-pointer peer-checked:*:bg-[#D39C32] peer-checked:*:text-white peer-checked:*:border-white">
                                                <input type="radio" name="qualification" class="sr-only"
                                                    aria-label="Type central filter" />
                                                <span
                                                    class="py-1 px-3 bg-white rounded-xl border border-black border-solid hover:bg-gray-50 focus-within:ring-2 focus-within:ring-orange-400">Central</span>
                                            </label>
                                        </div>
                                        <div>
                                            <input type="radio" name="gov_type" id="state"
                                                class="hidden peer job-filter" value="state">
                                            <label for="state"
                                                class="flex flex-col whitespace-nowrap cursor-pointer peer-checked:*:bg-[#D39C32] peer-checked:*:text-white peer-checked:*:border-white">
                                                <input type="radio" name="type" class="sr-only"
                                                    aria-label="Type state filter" />
                                                <span
                                                    class="px-3 py-1 bg-white rounded-xl border border-black border-solid hover:bg-gray-50 focus-within:ring-2 focus-within:ring-orange-400">State</span>
                                            </label>
                                        </div>
                                </fieldset>

                                <!-- #endregion  type state or central -->

                                <!-- #region Vancancy-->
                                <fieldset class="w-full flex flex-col items-center my-2">
                                    <legend
                                        class="mt-3.5 text-base font-semibold leading-10 md:leading-tight md:mb-2 md:pt-3 center text-black">
                                        Vacancy</legend>

                                    <div
                                        class="flex gap-2 text-sm md:flex-col lg:flex-row font-medium text-center text-black">

                                        <div>

                                            <input type="radio" checked name="vacancy" id="available"
                                                class="hidden peer job-filter" value="available">
                                            <label for="available"
                                                class="flex flex-col whitespace-nowrap cursor-pointer peer-checked:*:bg-[#D39C32] peer-checked:*:text-white peer-checked:*:border-white">
                                                <span
                                                    class="py-1 px-3 bg-white rounded-xl border border-black border-solid hover:bg-gray-50 focus-within:ring-2 focus-within:ring-orange-400">Available</span>
                                            </label>
                                        </div>
                                        <div>
                                            <input type="radio" checked name="vacancy" id="not-available"
                                                class="hidden peer job-filter" value="not_available">
                                            <label for="not-available"
                                                class="flex flex-col whitespace-nowrap cursor-pointer peer-checked:*:bg-[#D39C32] peer-checked:*:text-white peer-checked:*:border-white">
                                                <span
                                                    class="px-3 py-1 bg-white rounded-xl border border-black border-solid hover:bg-gray-50 focus-within:ring-2 focus-within:ring-orange-400">Not
                                                    Available</span>
                                            </label>
                                        </div>
                                </fieldset>

                                <!-- #endregion  Vancancy -->

                                <div class="mb-6 mt-8">
                                    <h3 class="text-lg font-semibold text-black mb-4">Interested Areas</h3>

                                    <ul>
                                        @foreach ($interestAreas as $area)
                                            <li>
                                                <label class="flex items-center">
                                                    <input type="checkbox" name="interest_areas[]"
                                                        class="form-checkbox text-yellow-600 w-5 h-5 mr-3 rounded-xl job-filter"
                                                        value="{{ $area->id }}" checked>
                                                    <span class="font-medium text-black">{{ $area->name }}</span>
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <button class="text-sm mt-3 block" style="color: #D39C32;">show more...</button>
                                </div>

                                <!-- Qualification Type -->

                            </div>
                        </div>
                    </aside>

                    <main class="flex flex-col ml-0 w-9/12 max-md:ml-0 max-md:w-full md:grow md:w-full "
                        role="main">
                        <div class="flex flex-col w-full max-md:mt-8 max-md:max-w-full">
                            <div class="flex flex-col w-full max-md:max-w-full">
                                <p class="self-start text-base leading-10  mr-4  text-black max-md:max-w-full">
                                    *<span class="filter_num"></span> jobs were filtered out from <span
                                        class="total_num"></span><span class="text-nowrap"> on the basis
                                        of caste and gender</span>
                                </p>


                                <div id="jobs">



                                </div>

                                <div class="flex justify-center">
                                    <a id="loadMore" href="javascript:void(0)"
                                        class="bg-gold hover:bg-gold-dark mt-3 text-white-700 font-semibold hover:text-white py-2 px-4 rounded">
                                        Button
                                    </a>
                                </div>


                            </div>
                        </div>
                    </main>
                </div>
            </div>

        </main>

        <footer
            class="flex flex-col py-10 pr-24 pl-20  w-full  min-h-[425px] max-md:px-5 max-md:mt-10 max-md:max-w-full"
            role="contentinfo" style="background-color: #D39C32;">
            <div class="flex flex-wrap gap-10 items-center w-full max-md:max-w-full">
                <img src="assets/ihya footer.png" alt="">
                <nav class="flex flex-col self-stretch my-auto text-xl leading-none text-white w-[124px]"
                    aria-label="Useful links">
                    <h3 class="font-bold">Useful links</h3>
                    <ul class="flex flex-col mt-5 w-full font-medium">
                        <li><a href="#login"
                                class="hover: focus:outline-none hover:cursor-pointer focus:ring-white rounded">Log
                                in</a></li>
                        <li class="mt-5"><a href="#jobs"
                                class="hover: focus:outline-none hover:cursor-pointer focus:ring-white rounded">Jobs</a>
                        </li>
                        <li class="mt-5"><a href="#community"
                                class="hover: focus:outline-none hover:cursor-pointer focus:ring-white rounded">Community</a>
                        </li>
                        <li class="mt-5"><a href="#career"
                                class="hover: focus:outline-none hover:cursor-pointer focus:ring-white rounded">Career</a>
                        </li>
                    </ul>
                </nav>
                <nav class="flex flex-col self-stretch my-auto text-xl leading-none text-white w-[132px]"
                    aria-label="Related links">
                    <h3 class="font-bold">Related links</h3>
                    <ul class="flex flex-col mt-5 w-28 max-w-full font-medium">
                        <li><a href="#about"
                                class="hover: focus:outline-none hover:cursor-pointer focus:ring-white rounded">About
                                Us</a></li>
                        <li class="mt-5"><a href="#contact"
                                class="hover: focus:outline-none hover:cursor-pointer focus:ring-white rounded">Contact
                                Us</a></li>
                        <li class="mt-5"><a href="#faq"
                                class="hover: focus:outline-none hover:cursor-pointer focus:ring-white rounded">FAQ</a>
                        </li>
                        <li class="mt-5"><a href="#guide"
                                class="hover: focus:outline-none hover:cursor-pointer focus:ring-white rounded">Guide</a>
                        </li>
                    </ul>
                </nav>
                <div class="flex flex-col self-stretch my-auto w-[142px]">
                    <h3 class="text-xl font-medium leading-none text-white">Follow us</h3>
                    <div class="flex gap-3 items-center mt-2 w-full">
                        <a href="#social1" class="focus:outline-none hover:cursor-pointer focus:ring-white rounded"
                            aria-label="Social media link">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/544444cbdc39572295adc3512609a54b0d7b5f60b627ef7865b9cb9d9271d67b?apiKey=e00d3c793b254127971e1d09475396f0&"
                                class="object-contain shrink-0 self-stretch my-auto aspect-square w-[35px]"
                                alt="" />
                        </a>
                        <a href="#social2" class="focus:outline-none hover:cursor-pointer focus:ring-white rounded"
                            aria-label="Social media link">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/a0e76f8decbc27146d36f6aa02cbcae87cde11aafbc7818fdede1e87b57e1679?apiKey=e00d3c793b254127971e1d09475396f0&"
                                class="object-contain shrink-0 self-stretch my-auto aspect-square w-[47px]"
                                alt="" />
                        </a>
                        <a href="#social3" class="focus:outline-none hover:cursor-pointer focus:ring-white rounded"
                            aria-label="Social media link">
                            <img loading="lazy"
                                src="https://cdn.builder.io/api/v1/image/assets/TEMP/8bd89289919b9daced6aeaf2252afca7c1881afb3fb10db5e3c623e6f2846100?apiKey=e00d3c793b254127971e1d09475396f0&"
                                class="object-contain shrink-0 self-stretch my-auto aspect-[1.41] w-[38px]"
                                alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div
                class="gap-2.5 self-stretch p-2.5 mt-2.5 w-full text-base font-medium leading-tight text-center text-white max-md:max-w-full">
                All rights reserved
                <span class="font-bold">© Ihya 2024</span>
            </div>
        </footer>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        let currentPage = 1;
        let isLastPage = false; // Flag to track if it's the last page

        // Listen for changes on radio buttons with class 'isQualified'
        $(".job-filter").change(function() {
            currentPage = 1; // Reset page number
            isLastPage = false; // Reset last page flag
            $('#jobs').empty(); // Clear previous jobs
            loadPage(); // Load the first page
        });

        function loadPage() {
            let filters = {
                is_qualified: $("input[name='is_qualified']:checked").val(),
                gov_type: $("input[name='gov_type']:checked").val(),
                vacancy: $("input[name='vacancy']:checked").val(),
                interest_areas: $("input[name='interest_areas[]']:checked").map(function() {
                    return $(this).val()
                }).get(),
                qualifications: $("input[name='qualifications[]']:checked").map(function() {
                    return $(this).val()
                }).get(),
                page: currentPage // Include the current page in the request
            };

            $.ajax({
                url: "{{ route('jobs.store') }}",
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: filters,
                success: function(response) {
                    let total = "";
                    console.log(response.is_qualified);

                    if (response.is_qualified) {
                        const jobsArray = Object.values(response.jobs);
                        console.log(jobsArray)
                        if (jobsArray.length == 0) {
                            hideIt()
                        }

                        jobsArray.forEach(element => {
                            const qualifications = element.job_qualifications
                                .map(q => `${q.name}`)
                                .join(' , ');
                            let first = `<article class="px-12 py-8 md:px-6 mt-2 bg-white rounded-2xl shadow-lg max-md:px-5 max-md:mr-1.5 max-md:max-w-full" role="article">
                                        <div class="flex gap-5 max-md:flex-col md:gap-0 md:place-content-between">
                                            <div class="flex flex-col w-[76%] max-md:ml-0 max-md:w-full">
                                                <div class="flex grow gap-8 max-md:mt-10" id="">
                                                    <div class="flex flex-col grow shrink-0 self-start basis-0 w-fit">
                                                        <div class="flex text-center w-full">
                                                            <h2 class=" text-2xl font-semibold leading-1 text-black md:shrink-0 text-start">
                                                                ${element.title}</h2>
                                                            <span class="z-10 px-2.5 pt-2 ml-3 pb-2 my-auto text-base font-medium leading-4 md:text-nowrap text-white bg-green-600 rounded-lg md:ml-2 md:mb-1 md:py-1 ">Qualified</span>
                                                        </div>`;
                            first = first + `<p class="mt-1.5 text-base font-medium leading-6 text-black max-md:mr-2.5">
                                        <span class="font-semibold text-nowrap">Required Qualifications:</span>
                                        <span>${qualifications}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col ml-5 md:ml-0  max-md:ml-0 max-md:w-full">
                            <div class="flex flex-col  my-auto max-md:mt-10 md:mt-0 ">
                                <p class="self-end md:self-start text-sm font-medium leading-none text-black max-md:mr-2.5 md:mr-0 md:text-center md:mt-7 md:ml-1  mr-6">
                                    Vacancies: <span class="font-bold">56</span>
                                </p>
                                <button class="mt-3 px-5 md:px-2  py-1.5 md:text-nowrap text-lg font-semibold text-white rounded-xl bg-[#D39C32] hover:bg-yellow-800  focus:outline-none focus:ring-2 focus:ring-[#dfdcd6]" tabindex="0">Read more</button>
                            </div>
                        </div>
                </div>
                </article>`;
                            total = total + first;
                        });
                    } else {
                        const failedJobsArray = Object.values(response.not_qualified_jobs);
                        if (failedJobsArray.length === 0) {
                            $('#loadMore')
                                .hide(); // Hide "Load More" button if no not qualified jobs
                        }

                        failedJobsArray.forEach(element => {
                            const qualifications = element.job.job_qualifications
                                .map(q => `${q.name}`)
                                .join(' , ');
                            const missingQualifications = element
                                .missing_qualifications
                                .map(q => `${q}`)
                                .join(' , ');

                            let first = `<article class="px-12 py-8 md:px-6 mt-2 bg-white rounded-2xl shadow-lg max-md:px-5 max-md:mr-1.5 max-md:max-w-full" role="article">
                                        <div class="flex gap-5 max-md:flex-col md:gap-0 md:place-content-between">
                                            <div class="flex flex-col w-[76%] max-md:ml-0 max-md:w-full">
                                                <div class="flex grow gap-8 max-md:mt-10" id="">
                                                    <div class="flex flex-col grow shrink-0 self-start basis-0 w-fit">
                                                        <div class="flex text-center w-full">
                                                            <h2 class=" text-2xl font-semibold leading-1 text-black md:shrink-0 text-start">
                                                                ${element.job.title}</h2>
                                                            <span class="z-10 px-2.5 pt-2 ml-3 pb-2 my-auto text-base font-medium leading-4 md:text-nowrap text-white bg-red-600 rounded-lg md:ml-2 md:mb-1 md:py-1 ">Not Qualified</span>
                                                        </div>`;
                            first = first + `<p class="mt-1.5 text-base font-medium leading-6 text-black max-md:mr-2.5">
                                        <span class="font-semibold text-nowrap">Required Qualifications:</span>
                                        <span>${qualifications}</span>
                                    </p>
                                    <p class="mt-1.5 text-base font-medium leading-6 text-black max-md:mr-2.5">
                                        <span class="font-semibold text-nowrap text-red-600">Missing Qualifications:</span>
                                        <span>${missingQualifications}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col ml-5 md:ml-0  max-md:ml-0 max-md:w-full">
                            <div class="flex flex-col  my-auto max-md:mt-10 md:mt-0 ">
                                <p class="self-end md:self-start text-sm font-medium leading-none text-black max-md:mr-2.5 md:mr-0 md:text-center md:mt-7 md:ml-1  mr-6">
                                    Vacancies: <span class="font-bold">56</span>
                                </p>
                                <button class="mt-3 px-5 md:px-2  py-1.5 md:text-nowrap text-lg font-semibold text-white rounded-xl bg-[#D39C32] hover:bg-yellow-800  focus:outline-none focus:ring-2 focus:ring-[#dfdcd6]" tabindex="0">Read more</button>
                            </div>
                        </div>
                </div>
                </article>`;
                            total = total + first;
                        });
                    }

                    const jobDiv = $('#jobs');
                    jobDiv.append(total); // Append the jobs to the existing list

                    // If we've reached the last page, hide the "Load More" button
                    if (response.current_page >= response.last_page) {
                        $('#loadMore').hide();
                        isLastPage = true;
                    } else {
                        $('#loadMore').show();
                    }
                },
                error: function() {
                    console.log('Error loading jobs');
                },
            });
        }

        loadPage();

        // Load more on button click
        $('#loadMore').click(function() {
            if (!isLastPage) {
                currentPage++; // Increment the page
                loadPage(); // Load the next page
            }
        });

        function hideIt() {
            $('#loadMore').val('sd')
            console.log($('#loadMore'))
        }
    });
</script>

</html>
