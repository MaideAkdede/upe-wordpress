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

    <?php get_template_part('template-parts/filters');?>

    <div class="mx-auto grid grid-cols-1 gap-x-6 gap-y-8 sm:gap-6 justify-items-center px-6 pb-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 max-w-[1280px]">
        <?php for ($x = 1; $x <= 6; $x++): ?>
            <div class="bg-white drop-shadow-xl text-center py-4 relative rounded-md">
                <div class="border-b-gray-200 border-b-2 pb-8">
                    <div class="absolute top-0 left-0 m-4 z-[2] h-price-sticker w-price-sticker bg-secondary rounded-full flex items-center justify-center">
                        <p class="font-bold font-dm-bold text-white"><?= $x ?>2,50€</p>
                    </div>
                    <div class="mx-auto mt-4 drop-shadow-xl w-[200px] h-[250px]">
                        <img class="object-contain w-full h-full"
                             src="<?php echo get_template_directory_uri() . '/resources/images/boutique/1.jpeg' ?>"
                             alt="image numéro <?= $x ?>"/>
                    </div>
                </div>
                <p class="text-category font-bold font-dm-bold text-gray-400 mt-8">Enseignement</p>
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