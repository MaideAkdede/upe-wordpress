<button class="bg-primary h-filter-mobile w-filter-mobile rounded-r-md flex flex-col justify-center gap-1 fixed top-10% my-8 z-3 left-0
hover:bg-primary-hover active:bg-primary-active md:hidden">
    <svg class="mx-auto"
        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30.417"
        height="37.109" viewBox="0 0 30.417 37.109">
        <defs>
            <clipPath id="clip-path-filter">
                <rect width="30.417" height="37.109" fill="#fff"/>
            </clipPath>
        </defs>
        <g clip-path="url(#clip-path-filter)">
            <path
                d="M3.668,24.475V.71a.71.71,0,1,0-1.42,0V24.475a2.954,2.954,0,0,0,0,5.736V36.4a.71.71,0,0,0,1.42,0V30.211a2.954,2.954,0,0,0,0-5.736"
                fill="#fff"/>
            <path
                d="M38.168,11.6V.71a.71.71,0,1,0-1.42,0V11.6a2.954,2.954,0,0,0,0,5.736V36.4a.71.71,0,0,0,1.42,0V17.338a2.954,2.954,0,0,0,0-5.736"
                transform="translate(-22.249)" fill="#fff"/>
            <path
                d="M72.668,3.347V.71a.71.71,0,1,0-1.42,0V3.347a2.954,2.954,0,0,0,0,5.736V36.4a.71.71,0,0,0,1.42,0V9.082a2.954,2.954,0,0,0,0-5.736"
                transform="translate(-44.498)" fill="#fff"/>
        </g>
    </svg>
    <span class="uppercase text-white text-opacity-60 text-xs leading-3">Filtrer</span>
</button>

<div class="bg-primary mx-auto my-8 max-w-2xl h-20
    grid grid-cols-filter gap-4 rounded-md pr-6 hidden md:grid
    text-white font-dm-bold text-bold text-xs">
    <div class="md:bg-primary-dark flex gap-3 place-content-center items-center h-full rounded-md">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="17"
             height="20" viewBox="0 0 30.417 37.109">
            <defs>
                <clipPath id="clip-path">
                    <rect id="Rectangle_77" data-name="Rectangle 77" width="30.417" height="37.109" fill="#fff"/>
                </clipPath>
            </defs>
            <g id="Groupe_94" data-name="Groupe 94" clip-path="url(#clip-path)">
                <path id="Tracé_43" data-name="Tracé 43"
                      d="M3.668,24.475V.71a.71.71,0,1,0-1.42,0V24.475a2.954,2.954,0,0,0,0,5.736V36.4a.71.71,0,0,0,1.42,0V30.211a2.954,2.954,0,0,0,0-5.736"
                      fill="#fff"/>
                <path id="Tracé_44" data-name="Tracé 44"
                      d="M38.168,11.6V.71a.71.71,0,1,0-1.42,0V11.6a2.954,2.954,0,0,0,0,5.736V36.4a.71.71,0,0,0,1.42,0V17.338a2.954,2.954,0,0,0,0-5.736"
                      transform="translate(-22.249)" fill="#fff"/>
                <path id="Tracé_45" data-name="Tracé 45"
                      d="M72.668,3.347V.71a.71.71,0,1,0-1.42,0V3.347a2.954,2.954,0,0,0,0,5.736V36.4a.71.71,0,0,0,1.42,0V9.082a2.954,2.954,0,0,0,0-5.736"
                      transform="translate(-44.498)" fill="#fff"/>
            </g>
        </svg>
        <span class="uppercase">Filtres</span>
    </div>
    <div class="justify-self-center self-center relative">
        <button class="category-toggle uppercase max-w-filter h-10 rounded-full bg-transparent hover:bg-primary-dark border border-white text-white flex items-center min-w-max px-6">
            Catégories<i class="fa-solid fa-caret-down ml-2"></i>
        </button>
        <div class="category-dropdown hidden py-2 absolute z-10 max-w-screen-sm w-full mt-2 bg-white border border-primary rounded-lg text-primary flex flex-col gap-2">
            <div class="hover:bg-primary hover:text-white hover:cursor-pointer px-2 py-1">
                <input type="checkbox" id="scales1" name="scales1">
                <label for="scales1">One</label>
            </div>
            <div class="hover:bg-primary hover:text-white hover:cursor-pointer px-2 py-1">
                <input type="checkbox" id="scales2" name="scales2">
                <label for="scales2">Two</label>
            </div>
            <div class="hover:bg-primary hover:text-white hover:cursor-pointer px-2 py-1">
                <input type="checkbox" id="scales3" name="scales3">
                <label for="scales3">Three</label>
            </div>
        </div>
    </div>
    <form action="#" class="h-10 self-center" method="get">
        <label for="search" class="sr-only">Rechercher</label>
        <div class="w-full h-full bg-filter-search flex items-center relative rounded-full">
            <input class="pl-4 h-full pr-8 text-white bg-transparent
                placeholder-white w-full
                focus:outline-none focus:ring-2 focus:ring-white focus:rounded-full"
                   name="search" type="text" id="search" placeholder="RECHERCHER UN ÉVÈNEMENT">
            <button type="submit" class="absolute right-0 top-0 bottom-0 p-2 text-white">
                <i class="fa-solid fa-magnifying-glass text-white text-opacity-60 mr-2.5"></i>
                <span class="sr-only">lancer ma recherche de filtrage</span>
            </button>
        </div>
    </form>
</div>