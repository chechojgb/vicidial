@extends('layouts.layoutAdmin')

@section('title', 'Inicio')

@section('content')
<main class="ease-soft-in-out xl:ml-68.5 relative h-full max-h-screen rounded-xl transition-all duration-200">
    <!-- Navbar -->
    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all shadow-none duration-250 ease-soft-in rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="true">
      <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
          <!-- breadcrumb -->
          <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
            <li class="text-sm leading-normal">
              <a class="opacity-50 text-slate-700" href="javascript:;">Pages</a>
            </li>
            <li class="text-sm pl-2 capitalize leading-normal text-slate-700 before:float-left before:pr-2 before:text-gray-600 before:content-['/']" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="mb-0 font-bold capitalize">Dashboard</h6>
        </nav>

        <div class="flex items-center mt-2 grow sm:mt-0 sm:mr-6 md:mr-0 lg:flex lg:basis-auto">
          <div class="flex items-center md:ml-auto md:pr-4">
            <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease-soft">
              <span class="text-sm ease-soft leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                <i class="fas fa-search"></i>
              </span>
              <input type="text" class="pl-8.75 text-sm focus:shadow-soft-primary-outline ease-soft w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
            </div>
          </div>
          <ul class="flex flex-row justify-end pl-0 mb-0 list-none md-max:w-full">
            <!-- online builder btn  -->
            <!-- <li class="flex items-center">
              <a class="inline-block px-8 py-2 mb-0 mr-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro border-fuchsia-500 ease-soft-in hover:scale-102 active:shadow-soft-xs text-fuchsia-500 hover:border-fuchsia-500 active:bg-fuchsia-500 active:hover:text-fuchsia-500 hover:text-fuchsia-500 tracking-tight-soft hover:bg-transparent hover:opacity-75 hover:shadow-none active:text-white active:hover:bg-transparent" target="_blank" href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053">Online Builder</a>
            </li> -->
            <li class="flex items-center">
              <a href="./pages/sign-in.html" class="block px-0 py-2 text-sm font-semibold transition-all ease-nav-brand text-slate-500">
                <i class="fa fa-user sm:mr-1"></i>
                <span class="hidden sm:inline">Sign In</span>
              </a>
            </li>
            <li class="flex items-center pl-4 xl:hidden">
              <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand text-slate-500" sidenav-trigger>
                <div class="w-4.5 overflow-hidden">
                  <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  <i class="ease-soft mb-0.75 relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                  <i class="ease-soft relative block h-0.5 rounded-sm bg-slate-500 transition-all"></i>
                </div>
              </a>
            </li>
            <li class="flex items-center px-4">
              <a href="javascript:;" class="p-0 text-sm transition-all ease-nav-brand text-slate-500">
                <i fixed-plugin-button-nav class="cursor-pointer fa fa-cog"></i>
                <!-- fixed-plugin-button-nav  -->
              </a>
            </li>

            <!-- notifications -->

            <li class="relative flex items-center pr-2">
              <p class="hidden transform-dropdown-show"></p>
              <a href="javascript:;" class="block p-0 text-sm transition-all ease-nav-brand text-slate-500" dropdown-trigger aria-expanded="false">
                <i class="cursor-pointer fa fa-bell"></i>
              </a>

              <ul dropdown-menu class="text-sm transform-dropdown before:font-awesome before:leading-default before:duration-350 before:ease-soft lg:shadow-soft-3xl duration-250 min-w-44 before:sm:right-7.5 before:text-5.5 pointer-events-none absolute right-0 top-0 z-50 origin-top list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:right-2 before:left-auto before:top-0 before:z-50 before:inline-block before:font-normal before:text-white before:antialiased before:transition-all before:content-['\f0d8'] sm:-mr-6 lg:absolute lg:right-0 lg:left-auto lg:mt-2 lg:block lg:cursor-pointer">
                <!-- add show class on dropdown open js -->
                <li class="relative mb-2">
                  <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg bg-transparent px-4 duration-300 hover:bg-gray-200 hover:text-slate-700 lg:transition-colors" href="javascript:;">
                    <div class="flex py-1">
                      <div class="my-auto">
                        <img src="{{asset('assets/img/team-2.jpg')}}" class="inline-flex items-center justify-center mr-4 text-sm text-white h-9 w-9 max-w-none rounded-xl" />
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-1 text-sm font-normal leading-normal"><span class="font-semibold">New message</span> from Laur</h6>
                        <p class="mb-0 text-xs leading-tight text-slate-400">
                          <i class="mr-1 fa fa-clock"></i>
                          13 minutes ago
                        </p>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="relative mb-2">
                  <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" href="javascript:;">
                    <div class="flex py-1">
                      <div class="my-auto">
                        <img src="{{asset('assets/img/small-logos/logo-spotify.svg')}}" class="inline-flex items-center justify-center mr-4 text-sm text-white bg-gradient-to-tl from-gray-900 to-slate-800 h-9 w-9 max-w-none rounded-xl" />
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-1 text-sm font-normal leading-normal"><span class="font-semibold">New album</span> by Travis Scott</h6>
                        <p class="mb-0 text-xs leading-tight text-slate-400">
                          <i class="mr-1 fa fa-clock"></i>
                          1 day
                        </p>
                      </div>
                    </div>
                  </a>
                </li>

                <li class="relative">
                  <a class="ease-soft py-1.2 clear-both block w-full whitespace-nowrap rounded-lg px-4 transition-colors duration-300 hover:bg-gray-200 hover:text-slate-700" href="javascript:;">
                    <div class="flex py-1">
                      <div class="inline-flex items-center justify-center my-auto mr-4 text-sm text-white transition-all duration-200 ease-nav-brand bg-gradient-to-tl from-slate-600 to-slate-300 h-9 w-9 rounded-xl">
                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                          <title>credit-card</title>
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                              <g transform="translate(1716.000000, 291.000000)">
                                <g transform="translate(453.000000, 454.000000)">
                                  <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                                  <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                </g>
                              </g>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="flex flex-col justify-center">
                        <h6 class="mb-1 text-sm font-normal leading-normal">Payment successfully completed</h6>
                        <p class="mb-0 text-xs leading-tight text-slate-400">
                          <i class="mr-1 fa fa-clock"></i>
                          2 days
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- end Navbar -->

    <!-- cards -->
    <div class="w-full px-6 py-6 mx-auto">
      <!-- row 1 -->
      <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal">Agents Logged In</p>
                    <h5 class="mb-0 font-bold">
                      $53,000
                      <span class="text-sm leading-normal font-weight-bolder text-lime-500">+55%</span>
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-blue-500 to-blue-600">
                    <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal">Agents In calls</p>
                    <h5 class="mb-0 font-bold">
                      $53,000
                      <span class="text-sm leading-normal font-weight-bolder text-lime-500">+55%</span>
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-blue-500 to-blue-600">
                    <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal">Active Calls</p>
                    <h5 class="mb-0 font-bold">
                      $53,000
                      <span class="text-sm leading-normal font-weight-bolder text-lime-500">+55%</span>
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-blue-500 to-blue-600">
                    <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- card4 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
          <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
              <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                  <div>
                    <p class="mb-0 font-sans text-sm font-semibold leading-normal">Calls Ringing</p>
                    <h5 class="mb-0 font-bold">
                      $53,000
                      <span class="text-sm leading-normal font-weight-bolder text-lime-500">+55%</span>
                    </h5>
                  </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                  <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-to-tl from-blue-500 to-blue-600">
                    <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- cards row 2 -->
      

      <!-- cards row 3 -->

      
        <!-- card 1 -->
        

        <!-- card 2 -->
        

        <!-- card 3 -->
        

        <!-- card 4 -->

      <!-- cards row 4 -->

      <div class="flex flex-wrap my-6 -mx-3">
        <!-- card 1 -->

        <div class="w-full max-w-full px-3 mt-0 mb-6 md:mb-0 md:w-1/2 md:flex-none lg:w-2/3 lg:flex-none">
          <div class="border-black/12.5 shadow-soft-xl relative flex min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
              <div class="flex flex-wrap mt-0 -mx-3">
                <div class="flex-none w-7/12 max-w-full px-3 mt-0 lg:w-1/2 lg:flex-none">
                  <h6>Projects</h6>
                  <p class="mb-0 text-sm leading-normal">
                    <i class="fa fa-check text-cyan-500"></i>
                    <span class="ml-1 font-semibold">30 done</span>
                    this month
                  </p>
                </div>
                <div class="flex-none w-5/12 max-w-full px-3 my-auto text-right lg:w-1/2 lg:flex-none">
                  <div class="relative pr-6 lg:float-right">
                    <a dropdown-trigger class="cursor-pointer" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-slate-400"></i>
                    </a>
                    <p class="hidden transform-dropdown-show"></p>

                    <ul dropdown-menu class="z-100 text-sm transform-dropdown shadow-soft-3xl duration-250 before:duration-350 before:font-awesome before:ease-soft min-w-44 -ml-34 before:text-5.5 pointer-events-none absolute top-0 m-0 mt-2 list-none rounded-lg border-0 border-solid border-transparent bg-white bg-clip-padding px-2 py-4 text-left text-slate-500 opacity-0 transition-all before:absolute before:top-0 before:right-7 before:left-auto before:z-40 before:text-white before:transition-all before:content-['\f0d8']">
                      <li class="relative">
                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Action</a>
                      </li>
                      <li class="relative">
                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Another action</a>
                      </li>
                      <li class="relative">
                        <a class="py-1.2 lg:ease-soft clear-both block w-full whitespace-nowrap rounded-lg border-0 bg-transparent px-4 text-left font-normal text-slate-500 lg:transition-colors lg:duration-300" href="javascript:;">Something else here</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-auto p-6 px-0 pb-2">
              <div class="overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                  <thead class="align-bottom">
                    <tr>
                      <th class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Companies</th>
                      <th class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Members</th>
                      <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Budget</th>
                      <th class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">Completion</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <div class="flex px-2 py-1">
                          <div>
                            <img src="{{asset('assets/img/small-logos/logo-xd.svg')}}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="xd" />
                          </div>
                          <div class="flex flex-col justify-center">
                            <h6 class="mb-0 text-sm leading-normal">Soft UI XD Version</h6>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <div class="mt-2 avatar-group">
                          <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                            <img src="{{asset('assets/img/team-1.jpg')}}" class="w-full rounded-full" alt="team1" />
                          </a>
                          <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                            Ryan Tompson
                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                          </div>
                          <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                            <img src="{{asset('assets/img/team-2.jpg')}}" class="w-full rounded-full" alt="team2" />
                          </a>
                          <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                            Romina Hadid
                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                          </div>
                          <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                            <img src="{{asset('assets/img/team-3.jpg')}}" class="w-full rounded-full" alt="team3" />
                          </a>
                          <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                            Alexander Smith
                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                          </div>
                          <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                            <img src="{{asset('assets/img/team-4.jpg')}}" class="w-full rounded-full" alt="team4" />
                          </a>
                          <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                            Jessica Doe
                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                        <span class="text-xs font-semibold leading-tight"> $14,000 </span>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <div class="w-3/4 mx-auto">
                          <div>
                            <div>
                              <span class="text-xs font-semibold leading-tight">60%</span>
                            </div>
                          </div>
                          <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                            <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-3/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <div class="flex px-2 py-1">
                          <div>
                            <img src="{{asset('assets/img/small-logos/logo-atlassian.svg')}}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="atlassian" />
                          </div>
                          <div class="flex flex-col justify-center">
                            <h6 class="mb-0 text-sm leading-normal">Add Progress Track</h6>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <div class="mt-2 avatar-group">
                          <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                            <img src="{{asset('assets/img/team-2.jpg')}}" class="w-full rounded-full" alt="team5" />
                          </a>
                          <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                            Romina Hadid
                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                          </div>
                          <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                            <img src="{{asset('assets/img/team-4.jpg')}}" class="w-full rounded-full" alt="team6" />
                          </a>
                          <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                            Jessica Doe
                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                        <span class="text-xs font-semibold leading-tight"> $3,000 </span>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <div class="w-3/4 mx-auto">
                          <div>
                            <div>
                              <span class="text-xs font-semibold leading-tight">10%</span>
                            </div>
                          </div>
                          <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                            <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 w-1/10 -ml-px flex h-1.5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <div class="flex px-2 py-1">
                          <div>
                            <img src="{{asset('assets/img/small-logos/logo-slack.svg')}}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="team7" />
                          </div>
                          <div class="flex flex-col justify-center">
                            <h6 class="mb-0 text-sm leading-normal">Fix Platform Errors</h6>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <div class="mt-2 avatar-group">
                          <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                            <img src="{{asset('assets/img/team-3.jpg')}}" class="w-full rounded-full" alt="team8" />
                          </a>
                          <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                            Romina Hadid
                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                          </div>
                          <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                            <img src="{{asset('assets/img/team-1.jpg')}}" class="w-full rounded-full" alt="team9" />
                          </a>
                          <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                            Jessica Doe
                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                        <span class="text-xs font-semibold leading-tight"> Not set </span>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <div class="w-3/4 mx-auto">
                          <div>
                            <div>
                              <span class="text-xs font-semibold leading-tight">100%</span>
                            </div>
                          </div>
                          <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                            <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <div class="flex px-2 py-1">
                          <div>
                            <img src="{{asset('assets/img/small-logos/logo-spotify.svg')}}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="spotify" />
                          </div>
                          <div class="flex flex-col justify-center">
                            <h6 class="mb-0 text-sm leading-normal">Launch our Mobile App</h6>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <div class="mt-2 avatar-group">
                          <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                            <img src="{{asset('assets/img/team-4.jpg')}}" class="w-full rounded-full" alt="user1" />
                          </a>
                          <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                            Ryan Tompson
                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                          </div>
                          <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                            <img src="{{asset('assets/img/team-3.jpg')}}" class="w-full rounded-full" alt="user2" />
                          </a>
                          <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                            Romina Hadid
                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                          </div>
                          <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                            <img src="{{asset('assets/img/team-4.jpg')}}" class="w-full rounded-full" alt="user3" />
                          </a>
                          <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                            Alexander Smith
                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                          </div>
                          <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                            <img src="{{asset('assets/img/team-1.jpg')}}" class="w-full rounded-full" alt="user4" />
                          </a>
                          <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                            Jessica Doe
                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                        <span class="text-xs font-semibold leading-tight"> $20,500 </span>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <div class="w-3/4 mx-auto">
                          <div>
                            <div>
                              <span class="text-xs font-semibold leading-tight">100%</span>
                            </div>
                          </div>
                          <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                            <div class="duration-600 ease-soft bg-gradient-to-tl from-green-600 to-lime-400 -mt-0.38 -ml-px flex h-1.5 w-full flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <div class="flex px-2 py-1">
                          <div>
                            <img src="{{asset('assets/img/small-logos/logo-jira.svg')}}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="jira" />
                          </div>
                          <div class="flex flex-col justify-center">
                            <h6 class="mb-0 text-sm leading-normal">Add the New Pricing Page</h6>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <div class="mt-2 avatar-group">
                          <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                            <img src="{{asset('assets/img/team-4.jpg')}}" class="w-full rounded-full" alt="user5" />
                          </a>
                          <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                            Ryan Tompson
                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap">
                        <span class="text-xs font-semibold leading-tight"> $500 </span>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                        <div class="w-3/4 mx-auto">
                          <div>
                            <div>
                              <span class="text-xs font-semibold leading-tight">25%</span>
                            </div>
                          </div>
                          <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                            <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-1/4 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="25"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                        <div class="flex px-2 py-1">
                          <div>
                            <img src="{{asset('assets/img/small-logos/logo-invision.svg')}}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="invision" />
                          </div>
                          <div class="flex flex-col justify-center">
                            <h6 class="mb-0 text-sm leading-normal">Redesign New Online Shop</h6>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                        <div class="mt-2 avatar-group">
                          <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                            <img src="{{asset('assets/img/team-1.jpg')}}" class="w-full rounded-full" alt="user6" />
                          </a>
                          <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                            Ryan Tompson
                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                          </div>
                          <a href="javascript:;" class="relative z-20 inline-flex items-center justify-center w-6 h-6 -ml-4 text-xs text-white transition-all duration-200 border-2 border-white border-solid rounded-full ease-soft-in-out hover:z-30" data-target="tooltip_trigger" data-placement="bottom">
                            <img src="{{asset('assets/img/team-4.jpg')}}" class="w-full rounded-full" alt="user7" />
                          </a>
                          <div data-target="tooltip" class="hidden px-2 py-1 text-sm text-white bg-black rounded-lg" role="tooltip">
                            Jessica Doe
                            <div class="invisible absolute h-2 w-2 bg-inherit before:visible before:absolute before:h-2 before:w-2 before:rotate-45 before:bg-inherit before:content-['']" data-popper-arrow></div>
                          </div>
                        </div>
                      </td>
                      <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-0 whitespace-nowrap">
                        <span class="text-xs font-semibold leading-tight"> $2,000 </span>
                      </td>
                      <td class="p-2 align-middle bg-transparent border-0 whitespace-nowrap">
                        <div class="w-3/4 mx-auto">
                          <div>
                            <div>
                              <span class="text-xs font-semibold leading-tight">40%</span>
                            </div>
                          </div>
                          <div class="text-xs h-0.75 w-30 m-0 flex overflow-visible rounded-lg bg-gray-200">
                            <div class="duration-600 ease-soft bg-gradient-to-tl from-blue-600 to-cyan-400 -mt-0.38 -ml-px flex h-1.5 w-2/5 flex-col justify-center overflow-hidden whitespace-nowrap rounded bg-fuchsia-500 text-center text-white transition-all" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"></div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- card 2 -->

        <div class="w-full max-w-full px-3 md:w-1/2 md:flex-none lg:w-1/3 lg:flex-none">
          <div class="border-black/12.5 shadow-soft-xl relative flex h-full min-w-0 flex-col break-words rounded-2xl border-0 border-solid bg-white bg-clip-border">
            <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
              <h6>Orders overview</h6>
              <p class="text-sm leading-normal">
                <i class="fa fa-arrow-up text-lime-500"></i>
                <span class="font-semibold">24%</span> this month
              </p>
            </div>
            <div class="flex-auto p-4">
              <div class="before:border-r-solid relative before:absolute before:top-0 before:left-4 before:h-full before:border-r-2 before:border-r-slate-100 before:content-[''] before:lg:-ml-px">
                <div class="relative mb-4 mt-0 after:clear-both after:table after:content-['']">
                  <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                    <i class="relative z-10 leading-none text-transparent ni ni-bell-55 leading-pro bg-gradient-to-tl from-green-600 to-lime-400 bg-clip-text fill-transparent"></i>
                  </span>
                  <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                    <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">$2400, Design changes</h6>
                    <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">22 DEC 7:20 PM</p>
                  </div>
                </div>
                <div class="relative mb-4 after:clear-both after:table after:content-['']">
                  <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                    <i class="relative z-10 leading-none text-transparent ni ni-html5 leading-pro bg-gradient-to-tl from-red-600 to-rose-400 bg-clip-text fill-transparent"></i>
                  </span>
                  <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                    <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">New order #1832412</h6>
                    <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">21 DEC 11 PM</p>
                  </div>
                </div>
                <div class="relative mb-4 after:clear-both after:table after:content-['']">
                  <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                    <i class="relative z-10 leading-none text-transparent ni ni-cart leading-pro bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text fill-transparent"></i>
                  </span>
                  <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                    <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">Server payments for April</h6>
                    <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">21 DEC 9:34 PM</p>
                  </div>
                </div>
                <div class="relative mb-4 after:clear-both after:table after:content-['']">
                  <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                    <i class="relative z-10 leading-none text-transparent ni ni-credit-card leading-pro bg-gradient-to-tl from-red-500 to-yellow-400 bg-clip-text fill-transparent"></i>
                  </span>
                  <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                    <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">New card added for order #4395133</h6>
                    <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">20 DEC 2:20 AM</p>
                  </div>
                </div>
                <div class="relative mb-4 after:clear-both after:table after:content-['']">
                  <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                    <i class="relative z-10 leading-none text-transparent ni ni-key-25 leading-pro bg-gradient-to-tl from-blue-600 to-pink-500 bg-clip-text fill-transparent"></i>
                  </span>
                  <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                    <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">Unlock packages for development</h6>
                    <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">18 DEC 4:54 AM</p>
                  </div>
                </div>
                <div class="relative mb-0 after:clear-both after:table after:content-['']">
                  <span class="w-6.5 h-6.5 text-base absolute left-4 z-10 inline-flex -translate-x-1/2 items-center justify-center rounded-full bg-white text-center font-semibold">
                    <i class="relative z-10 leading-none text-transparent ni ni-money-coins leading-pro bg-gradient-to-tl from-gray-900 to-slate-800 bg-clip-text fill-transparent"></i>
                  </span>
                  <div class="ml-11.252 pt-1.4 lg:max-w-120 relative -top-1.5 w-auto">
                    <h6 class="mb-0 text-sm font-semibold leading-normal text-slate-700">New order #9583120</h6>
                    <p class="mt-1 mb-0 text-xs font-semibold leading-tight text-slate-400">18 DEC</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="pt-4">
        <div class="w-full px-6 mx-auto">
          <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
            <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2 lg:flex-none">
              <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                ©
                <script>
                  document.write(new Date().getFullYear() + ",");
                </script>
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-semibold text-slate-700" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="w-full max-w-full px-3 mt-0 shrink-0 lg:w-1/2 lg:flex-none">
              <ul class="flex flex-wrap justify-center pl-0 mb-0 list-none lg:justify-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://creative-tim.com/blog" class="block px-4 pt-0 pb-1 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="block px-4 pt-0 pb-1 pr-0 text-sm font-normal transition-colors ease-soft-in-out text-slate-500" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- end cards -->
  </main>
  <div fixed-plugin>
    <a fixed-plugin-button class="bottom-7.5 right-7.5 text-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700">
      <i class="py-2 pointer-events-none fa fa-cog"> </i>
    </a>
    <!-- -right-90 in loc de 0-->
    <div fixed-plugin-card class="z-sticky shadow-soft-3xl w-90 ease-soft -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white bg-clip-border px-2.5 duration-200">
      <div class="px-6 pt-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
        <div class="float-left">
          <h5 class="mt-4 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-right mt-6">
          <button fixed-plugin-close-button class="inline-block p-0 mb-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:scale-102 leading-pro ease-soft-in tracking-tight-soft bg-150 bg-x-25 active:opacity-85 text-slate-700">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="h-px mx-0 my-1 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent" />
      <div class="flex-auto p-6 pt-0 sm:pt-4">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)">
          <div class="my-2 text-left" sidenav-colors>
            <span class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-blue-600 to-pink-500 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-slate-700 text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" active-color data-color-from="blue-600" data-color-to="pink-500" onclick="sidebarColor(this)"></span>
            <span class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-gray-900 to-slate-800 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color-from="gray-900" data-color-to="slate-800" onclick="sidebarColor(this)"></span>
            <span class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-blue-600 to-cyan-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color-from="blue-600" data-color-to="cyan-400" onclick="sidebarColor(this)"></span>
            <span class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-green-600 to-lime-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color-from="green-600" data-color-to="lime-400" onclick="sidebarColor(this)"></span>
            <span class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-red-500 to-yellow-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color-from="red-500" data-color-to="yellow-400" onclick="sidebarColor(this)"></span>
            <span class="text-xs rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-to-tl from-red-600 to-rose-400 relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color-from="red-600" data-color-to="rose-400" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-4">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm leading-normal">Choose between 2 different sidenav types.</p>
        </div>
        <div class="flex">
          <button transparent-style-btn class="inline-block w-full px-4 py-3 mb-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border border-transparent border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-600 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-blue-600 to-pink-500 bg-fuchsia-500 hover:border-fuchsia-500" data-class="bg-transparent" active-style>Transparent</button>
          <button white-style-btn class="inline-block w-full px-4 py-3 mb-2 ml-2 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-to-tl xl-max:from-blue-600 xl-max:to-pink-500 xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500" data-class="bg-white">White</button>
        </div>
        <p class="block mt-2 text-sm leading-normal xl:hidden">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-4">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="min-h-6 mb-0.5 block pl-0">
          <input navbarFixed class="rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5 relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right" type="checkbox" />
        </div>
        <hr class="h-px bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent sm:my-6" />
        <a class="inline-block w-full px-6 py-3 mb-4 text-xs font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer leading-pro ease-soft-in hover:shadow-soft-xs hover:scale-102 active:opacity-85 tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-to-tl from-gray-900 to-slate-800" href="https://www.creative-tim.com/product/soft-ui-dashboard-tailwind" target="_blank">Free Download</a>
        <a class="inline-block w-full px-6 py-3 mb-4 text-xs font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro ease-soft-in tracking-tight-soft bg-150 bg-x-25 border-slate-700 text-slate-700 hover:bg-transparent hover:text-slate-700 hover:shadow-none active:bg-slate-700 active:text-white active:hover:bg-transparent active:hover:text-slate-700 active:hover:shadow-none" href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/" target="_blank">View documentation</a>
        <div class="w-full text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard-tailwind" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-4">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20Tailwind%20made%20by%20%40CreativeTim&hashtags=webdesign,dashboard,tailwindcss&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-tailwind" class="inline-block px-6 py-3 mb-0 mr-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700" target="_blank"> <i class="mr-1 fab fa-twitter"></i> Tweet </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard-tailwind" class="inline-block px-6 py-3 mb-0 mr-2 text-xs font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700" target="_blank"> <i class="mr-1 fab fa-facebook-square"></i> Share </a>
        </div>
      </div>
    </div>
</div>
   
@endsection