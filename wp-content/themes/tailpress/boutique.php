<?php /* Template Name: Page Boutique */ ?>
<?php get_header(); ?>
    <div class=" text-center py-8 text-neutral-600 md:pt-0 md:-mt-12 lg:-mt-24">
        <div class="max-w-max mx-auto relative">
            <h1 class="text-pixel-35 lg:text-pixel-50 font-bold"><?php the_title(); ?></h1>
            <div class="hidden md:block h-12 w-14 absolute bottom-3 -left-11">
                <img class="object-fill w-full h-full -z-[1] opacity-10"
                     src="<?php echo get_template_directory_uri() . '/resources/images/boutique/title-filigrane.svg' ?>"
                     alt="<?php the_title(); ?>"/>
            </div>
        </div>
        <div class="uppercase mt-6">
            <a href="/" class="text-primary hover:underline">Accueil</a><span
                    class="ml-1 mr-1">></span><a href="#">Boutique</a></div>
    </div>

    <button class="bg-primary inline-block h-[73px] w-[64px] rounded-r-md grid gap-1 place-content-center fixed top-[10%] my-8 z-[3] left-0
hover:bg-[#246596] active:bg-[#215C8A] md:hidden">
        <svg
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

    <div class="bg-primary mx-auto my-8 max-w-[685px] h-20
    grid grid-cols-[144px_2fr_3fr] gap-4 rounded-md pr-6 hidden md:grid
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
            <button class="category-toggle uppercase max-w-[150px] h-10 rounded-full bg-transparent hover:bg-primary-dark border border-white text-white flex items-center min-w-max px-6">
                Catégories<i class="fa-solid fa-caret-down ml-2"></i>
            </button>
            <div class="category-dropdown hidden py-2 absolute z-10 max-w-screen-sm w-full mt-2 bg-white border border-primary rounded-lg text-primary flex flex-col gap-2">
                <div class="hover:bg-primary hover:text-white px-2 py-1">
                    <input type="checkbox" id="scales" name="scales"
                           checked>
                    <label for="scales">One</label>
                </div>
                <div class="hover:bg-primary hover:text-white px-2 py-1">
                    <input type="checkbox" id="scales" name="scales"
                           checked>
                    <label for="scales">Two</label>
                </div>
                <div class="hover:bg-primary hover:text-white px-2 py-1">
                    <input type="checkbox" id="scales" name="scales"
                           checked>
                    <label for="scales">Three</label>
                </div>
            </div>
        </div>
        <form action="#" class="h-10 self-center" method="get">
            <label for="search" class="sr-only">Rechercher</label>
            <div class="w-full h-full bg-[#2E84AF] flex items-center relative rounded-full">
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

    <div class="mx-auto grid grid-cols-1 gap-x-6 gap-y-8 sm:gap-6 justify-items-center px-6 pb-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-w-[1280px]">
        <?php for ($x = 1; $x <= 6; $x++): ?>
            <div class="bg-white mx-auto drop-shadow-xl mx-auto sm:mx-0 min-h-max max-w-[560px] text-center py-4 relative rounded-md">
                <div class="border-b-gray-200 border-b-2 pb-8">
                    <div class="absolute top-0 left-0 m-4 z-[2] h-[4.375rem] w-[4.375rem] bg-secondary rounded-full flex items-center justify-center">
                        <p class="font-bold font-dm-bold text-white"><?= $x ?>2,50€</p>
                    </div>
                    <div class="mx-auto mt-4 drop-shadow-xl w-[200px] h-[250px]">
                        <img class="object-contain w-full h-full"
                             src="<?php echo get_template_directory_uri() . '/resources/images/boutique/1.jpeg' ?>"
                             alt="image numéro <?= $x ?>"/>
                    </div>
                </div>
                <p class="text-pixel-13 font-bold font-dm-bold text-gray-400 mt-8">Enseignement</p>
                <h2 class="text-xl text-neutral-600 font-bold font-dm-bold line-clamp-2 mt-2 mb-6 mx-4">Lorem ipsum
                    dolor sit amet,
                    consectetur adipisicing elit. Consequuntur illo magnam possimus, quod repellat velit. Aliquid
                    consectetur
                    dignissimos dolorem doloribus dolorum eos excepturi expedita nulla officiis? Itaque laboriosam omnis
                    rerum</h2>
                <p class="text-neutral-500 mb-2">Tout public : <span class="text-secondary font-bold font-dm-bold">25,00€</span>
                </p>
                <p class="text-neutral-500 border-t-gray-400 border-t inline-block min-w-max pt-2">* Membre UPE : <span
                            class="text-secondary font-bold font-dm-bold">22,50€</span></p>
                <a class="absolute top-0 left-0 right-0
                block z-[5] h-full w-full border-2 border-opacity-0 border-primary hover:border-opacity-100 transition-all rounded-md"
                   href="<?= site_url().'/boutique/new-boutique-product/' ?>" title="Voir l'article XXX echo title"><span class="sr-only">Voir l'article XXX</span></a>
            </div>
        <?php endfor; ?>
    </div>
<?php get_footer(); ?>