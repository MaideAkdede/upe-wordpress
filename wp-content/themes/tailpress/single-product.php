<?php get_header(); ?>

    <div class=" text-center py-8 text-neutral-600 md:pt-0 md:-mt-12 lg:-mt-24">
        <div class="max-w-max mx-auto relative">
            <h1 class="text-pixel-35 lg:text-pixel-50 font-bold">Boutique</h1>
            <div class="hidden md:block h-12 w-14 absolute bottom-3 -left-11">
                <img class="object-fill w-full h-full -z-[1] opacity-10"
                     src="<?php echo get_template_directory_uri() . '/resources/images/boutique/title-filigrane.svg' ?>"
                     alt="Boutique"/>
            </div>
        </div>
        <div class="uppercase mt-6">
            <a href="/" class="text-primary hover:underline">Accueil</a><span
                    class="ml-1 mr-1">></span><a href="/boutique">Boutique</a></div>
    </div>

    <div class="container mx-auto w-auto min-h-pixel-250 px-12 lg:grid lg:grid-cols-product-lg md:gap-16 lg:gap-36">
        <div class="drop-shadow-xl max-w-sm-product-img mx-auto mb-8 lg:m-0 md:max-w-lg-product-img h-full">
            <img class="object-cover w-full h-full"
                 src="<?php echo get_template_directory_uri() . '/resources/images/boutique/1.jpeg' ?>"
                 alt="image numéro"/>
        </div>
        <div class="grid content-end justify-items-start gap-2">
            <h1 class="text-primary font-bold font-dm-bold text-pixel-30 md:max-w-char-24 mb-2">Le modèle de l'occupation humaine (MOH): chapitre 10</h1>
            <div class="flex gap-6 text-neutral-600 text-pixel-22 font-bold font-dm-bold">
                <p>34,50€</p>
                <p class="text-secondary"><span class="text-pixel-13 text-neutral-600 font-dm-regular font-normal uppercase tracking-widest">Prix membre UPE : </span>30,00€</p>
            </div>
            <div class="text-category text-light font-bold font-dm-bold flex gap-4 my-4">
                <a href="" title="" class="block rounded-full border border-light py-1 px-2 hover:bg-light hover:text-white">Enseignement</a>
                <a href="" title="" class="block rounded-full border border-light py-1 px-2 hover:bg-light hover:text-white">Gériatrie</a>
            </div>
            <div class="prose line-clamp-4 text-neutral-600 my-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias eius incidunt minima minus provident
                    quisquam quod. Eligendi error ex, fuga necessitatibus neque numquam perferendis quo reiciendis
                    repudiandae sequi. Eos, ut.</p>
            </div>
            <span class="hidden lg:block w-[150%] transform -translate-x-[25%] -z-20 h-px bg-light"></span>
            <button class="btn-primary my-6">Ajouter au panier</button>
            <div class="flex gap-3">
                <div class="w-14 h-8 p-1 border rounded-lg">
                    <img class="h-full w-full object-contain" src="<?php echo get_template_directory_uri() . '/resources/images/payments/1.svg' ?>" alt="">
                </div>
                <div class="w-14 h-8 p-1 border rounded-lg">
                    <img class="h-full w-full object-contain" src="<?php echo get_template_directory_uri() . '/resources/images/payments/2.svg' ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-12 pt-20 pb-6">
        <a href="/boutique" title="Retourner à la page boutique" class="border-primary border rounded-full text-primary uppercase text-button px-4 py-3 font-bold font-dm-bold hover:bg-primary active:bg-primary-active hover:text-white"> <i class="fa-solid fa-caret-left p-1"></i> Retour à la boutique</a>
    </div>
<?php get_footer(); ?>