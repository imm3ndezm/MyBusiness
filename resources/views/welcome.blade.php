@extends('layouts.GuestVision')

@section('title')
    Welcome!
@endsection

@section('content')
    <section
        class="relative overflow-hidden bg-gradient-to-b transition-colors duration-700 from-blue-50 dark:from-sky-700 via-transparent to-transparent pb-12 pt-20 sm:pb-16 sm:pt-32 lg:pb-24 xl:pb-32 xl:pt-40">
        <div class="relative z-10">
            <div
                class="absolute inset-x-0 top-1/2 -z-10 flex -translate-y-1/2 justify-center overflow-hidden [mask-image:radial-gradient(50%_45%_at_50%_55%,white,transparent)]">
                <svg class="h-[60rem] w-[100rem] flex-none stroke-blue-600 opacity-20" aria-hidden="true">
                    <defs>
                        <pattern id="e9033f3e-f665-41a6-84ef-756f6778e6fe" width="200" height="200" x="50%" y="50%"
                            patternUnits="userSpaceOnUse" patternTransform="translate(-100 0)">
                            <path d="M.5 200V.5H200" fill="none"></path>
                        </pattern>
                    </defs>
                    <svg x="50%" y="50%" class="overflow-visible fill-blue-50">
                        <path d="M-300 0h201v201h-201Z M300 200h201v201h-201Z" stroke-width="0"></path>
                    </svg>
                    <rect width="100%" height="100%" stroke-width="0" fill="url(#e9033f3e-f665-41a6-84ef-756f6778e6fe)">
                    </rect>
                </svg>
            </div>
        </div>
        <div class="relative z-20 mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">

                <h1 class="text-gray-950 dark:text-gray-100 text-6xl font-semibold">My<span
                        class="text-blue-500 font-extrabold">Business</span></h1>

                <h2 class="mt-6 text-lg leading-8 text-gray-600 dark:text-gray-100">
                    Choose a more eco-friendly way to hydrate with our 100% recyclable cartons.
                </h2>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a class="isomorphic-link isomorphic-link--internal inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-4 py-3 text-sm font-semibold text-white shadow-sm transition-all duration-150 hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                        href="/login">Shop Now
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="relative mx-auto mt-10 max-w-lg flex flex-row justify-center gap-32">
                <img class="w-full rounded-2xl border border-gray-100 shadow"
                    src="https://images.unsplash.com/photo-1587502536575-6dfba0a6e017" alt="">
                <img class="w-full rounded-2xl border border-gray-100 shadow"
                    src="https://images.unsplash.com/photo-1587502536575-6dfba0a6e017" alt="">

            </div>
        </div>
    </section>

    <div class="bg-transparent h-44">

    </div>

    <section>
        <div
            class="bg-gradient-to-t transition-colors duration-700 from-blue-50 dark:from-sky-700 via-transparent to-transparent-700 py-24 sm:py-32">
            <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
                <h2 class="text-center text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">Deploy faster</h2>
                <p
                    class="mx-auto mt-2 max-w-lg text-pretty text-center text-4xl font-medium tracking-tight text-gray-950 dark:text-gray-100 transition duration-700 sm:text-5xl">
                    Everything you need to deploy your app.</p>
                <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
                    <div class="relative lg:row-span-2">
                        <div class="absolute inset-px rounded-lg bg-white lg:rounded-l-[2rem]"></div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                            <div class="px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10">
                                <p class="mt-2 text-lg/7 font-medium tracking-tight text-gray-950 max-lg:text-center">Mobile
                                    friendly</p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Anim aute id magna
                                    aliqua ad
                                    ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.</p>
                            </div>
                            <div
                                class="relative min-h-[30rem] w-full grow [container-type:inline-size] max-lg:mx-auto max-lg:max-w-sm">
                                <div
                                    class="absolute inset-x-10 bottom-0 top-10 overflow-hidden rounded-t-[12cqw] border-x-[3cqw] border-t-[3cqw] border-gray-700 bg-gray-900 shadow-2xl">
                                    <img class="size-full object-cover object-top"
                                        src="https://tailwindui.com/plus/img/component-images/bento-03-mobile-friendly.png"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div
                            class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 lg:rounded-l-[2rem]">
                        </div>
                    </div>
                    <div class="relative max-lg:row-start-1">
                        <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-t-[2rem]"></div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                            <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                                <p class="mt-2 text-lg/7 font-medium tracking-tight text-gray-950 max-lg:text-center">
                                    Performance</p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Lorem ipsum, dolor sit
                                    amet
                                    consectetur adipisicing elit maiores impedit.</p>
                            </div>
                            <div
                                class="flex flex-1 items-center justify-center px-8 max-lg:pb-12 max-lg:pt-10 sm:px-10 lg:pb-2">
                                <img class="w-full max-lg:max-w-xs"
                                    src="https://tailwindui.com/plus/img/component-images/bento-03-performance.png"
                                    alt="">
                            </div>
                        </div>
                        <div
                            class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-t-[2rem]">
                        </div>
                    </div>
                    <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                        <div class="absolute inset-px rounded-lg bg-white"></div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)]">
                            <div class="px-8 pt-8 sm:px-10 sm:pt-10">
                                <p class="mt-2 text-lg/7 font-medium tracking-tight text-gray-950 max-lg:text-center">
                                    Security
                                </p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Morbi viverra dui mi
                                    arcu
                                    sed. Tellus semper adipiscing suspendisse semper morbi.</p>
                            </div>
                            <div class="flex flex-1 items-center [container-type:inline-size] max-lg:py-6 lg:pb-2">
                                <img class="h-[min(152px,40cqw)] object-cover object-center"
                                    src="https://tailwindui.com/plus/img/component-images/bento-03-security.png"
                                    alt="">
                            </div>
                        </div>
                        <div class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5"></div>
                    </div>
                    <div class="relative lg:row-span-2">
                        <div class="absolute inset-px rounded-lg bg-white max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]">
                        </div>
                        <div
                            class="relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                            <div class="px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10">
                                <p class="mt-2 text-lg/7 font-medium tracking-tight text-gray-950 max-lg:text-center">
                                    Powerful
                                    APIs</p>
                                <p class="mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center">Sit quis amet rutrum
                                    tellus
                                    ullamcorper ultricies libero dolor eget sem sodales gravida.</p>
                            </div>
                            <div class="relative min-h-[30rem] w-full grow">
                                <div
                                    class="absolute bottom-0 left-10 right-0 top-10 overflow-hidden rounded-tl-xl bg-gray-900 shadow-2xl">
                                    <div class="flex bg-gray-800/40 ring-1 ring-white/5">
                                        <div class="-mb-px flex text-sm font-medium leading-6 text-gray-400">
                                            <div
                                                class="border-b border-r border-b-white/20 border-r-white/10 bg-white/5 px-4 py-2 text-white">
                                                NotificationSetting.jsx</div>
                                            <div class="border-r border-gray-600/10 px-4 py-2">App.jsx</div>
                                        </div>
                                    </div>
                                    <div class="px-6 pb-14 pt-6">
                                        <!-- Your code example -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-blue-50 dark:bg-sky-700 h-44">

    </div>
    <section class="bg-gradient-to-b from-blue-50 dark:from-sky-700 to-teal-200 dark:to-teal-800">
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header class="text-center">
                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">New Collection</h2>

                <p class="mx-auto mt-4 max-w-md text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
                    dicta incidunt est ipsam, officia dolor fugit natus?
                </p>
            </header>
            <div x-data="{ selectedTab: 'groups' }" class="w-full pt-5">
                <div @keydown.right.prevent="$focus.wrap().next()" @keydown.left.prevent="$focus.wrap().previous()"
                    class="flex justify-center gap-2 overflow-x-auto border-b border-neutral-300 dark:border-neutral-700"
                    role="tablist" aria-label="tab options">
                    <button @click="selectedTab = 'groups'" :aria-selected="selectedTab === 'groups'"
                        :tabindex="selectedTab === 'groups' ? '0' : '-1'"
                        :class="selectedTab === 'groups' ?
                            'font-bold text-black border-b-2 border-black dark:border-white dark:text-white' :
                            'text-neutral-600 font-medium dark:text-neutral-300 dark:hover:border-b-neutral-300 dark:hover:text-white hover:border-b-2 hover:border-b-neutral-800 hover:text-neutral-900'"
                        class="h-min px-4 py-2 text-sm" type="button" role="tab"
                        aria-controls="tabpanelGroups">Groups</button>

                    <button @click="selectedTab = 'likes'" :aria-selected="selectedTab === 'likes'"
                        :tabindex="selectedTab === 'likes' ? '0' : '-1'"
                        :class="selectedTab === 'likes' ?
                            'font-bold text-black border-b-2 border-black dark:border-white dark:text-white' :
                            'text-neutral-600 font-medium dark:text-neutral-300 dark:hover:border-b-neutral-300 dark:hover:text-white hover:border-b-2 hover:border-b-neutral-800 hover:text-neutral-900'"
                        class="h-min px-4 py-2 text-sm" type="button" role="tab"
                        aria-controls="tabpanelLikes">Likes</button>

                    <button @click="selectedTab = 'comments'" :aria-selected="selectedTab === 'comments'"
                        :tabindex="selectedTab === 'comments' ? '0' : '-1'"
                        :class="selectedTab === 'comments' ?
                            'font-bold text-black border-b-2 border-black dark:border-white dark:text-white' :
                            'text-neutral-600 font-medium dark:text-neutral-300 dark:hover:border-b-neutral-300 dark:hover:text-white hover:border-b-2 hover:border-b-neutral-800 hover:text-neutral-900'"
                        class="h-min px-4 py-2 text-sm" type="button" role="tab"
                        aria-controls="tabpanelComments">Comments</button>

                    <button @click="selectedTab = 'saved'" :aria-selected="selectedTab === 'saved'"
                        :tabindex="selectedTab === 'saved' ? '0' : '-1'"
                        :class="selectedTab === 'saved' ?
                            'font-bold text-black border-b-2 border-black dark:border-white dark:text-white' :
                            'text-neutral-600 font-medium dark:text-neutral-300 dark:hover:border-b-neutral-300 dark:hover:text-white hover:border-b-2 hover:border-b-neutral-800 hover:text-neutral-900'"
                        class="h-min px-4 py-2 text-sm" type="button" role="tab"
                        aria-controls="tabpanelSaved">Saved</button>

                </div>
                <div class="px-2 py-4 text-neutral-600 dark:text-neutral-300">
                    <div x-show="selectedTab === 'groups'" id="tabpanelGroups" role="tabpanel" aria-label="groups">

                        <ul class="mt-8 grid grid-cols-1 gap-4 lg:grid-cols-3">
                            <li>
                                <a href="#" class="group relative block">
                                    <img src="https://images.unsplash.com/photo-1618898909019-010e4e234c55?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                                        alt=""
                                        class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90" />

                                    <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                                        <h3 class="text-xl font-medium text-white">Casual Trainers</h3>

                                        <span
                                            class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                                            Shop Now
                                        </span>
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="group relative block">
                                    <img src="https://images.unsplash.com/photo-1624623278313-a930126a11c3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                                        alt=""
                                        class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90" />

                                    <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                                        <h3 class="text-xl font-medium text-white">Winter Jumpers</h3>

                                        <span
                                            class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                                            Shop Now
                                        </span>
                                    </div>
                                </a>
                            </li>

                            <li class="lg:col-span-2 lg:col-start-2 lg:row-span-2 lg:row-start-1">
                                <a href="#" class="group relative block">
                                    <img src="https://images.unsplash.com/photo-1593795899768-947c4929449d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2672&q=80"
                                        alt=""
                                        class="aspect-square w-full object-cover transition duration-500 group-hover:opacity-90" />

                                    <div class="absolute inset-0 flex flex-col items-start justify-end p-6">
                                        <h3 class="text-xl font-medium text-white">Skinny Jeans Blue</h3>

                                        <span
                                            class="mt-1.5 inline-block bg-black px-5 py-3 text-xs font-medium uppercase tracking-wide text-white">
                                            Shop Now
                                        </span>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>

                    <div x-show="selectedTab === 'likes'" id="tabpanelLikes" role="tabpanel" aria-label="likes"><b><a
                                href="#" class="underline">Likes</a></b> tab is selected
                    </div>

                    <div x-show="selectedTab === 'comments'" id="tabpanelComments" role="tabpanel"
                        aria-label="comments"><b><a href="#" class="underline">Comments</a></b> tab is selected
                    </div>

                    <div x-show="selectedTab === 'saved'" id="tabpanelSaved" role="tabpanel" aria-label="saved"><b><a
                                href="#" class="underline">Saved</a></b> tab is selected
                    </div>
                </div>
            </div>




        </div>
    </section>


    <div class="bg-teal-200 dark:bg-teal-800 h-44">

    </div>

    <section
        class="bg-gradient-to-t from-transparent dark:from-transparent to-teal-200 dark:to-teal-800 overflow-hidden sm:grid sm:grid-cols-2 sm:items-center p-5">
        <div class="p-8 md:p-12 lg:px-16 lg:py-24">
            <div class="mx-auto max-w-xl text-center ltr:sm:text-left rtl:sm:text-right">
                <h2 class="text-2xl font-bold text-gray-900 md:text-3xl">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit
                </h2>

                <p class="hidden text-gray-500 md:mt-4 md:block">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et, egestas tempus tellus etiam
                    sed. Quam a scelerisque amet ullamcorper eu enim et fermentum, augue. Aliquet amet volutpat
                    quisque ut interdum tincidunt duis.
                </p>

                <div class="mt-4 md:mt-8">
                    <a href="#"
                        class="inline-block rounded bg-emerald-600 px-12 py-3 text-sm font-medium text-white transition hover:bg-emerald-700 focus:outline-none focus:ring focus:ring-yellow-400">
                        Get Started Today
                    </a>
                </div>
            </div>
        </div>

        <img alt=""
            src="https://images.unsplash.com/photo-1484959014842-cd1d967a39cf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
            class="h-full w-full object-cover sm:h-[calc(100%_-_2rem)] sm:self-end sm:rounded-ss-[30px] sm:rounded-ee-[30px] md:h-[calc(100%_-_4rem)] md:rounded-ss-[60px] md:rounded-ee-[60px]" />
    </section>
@endsection
