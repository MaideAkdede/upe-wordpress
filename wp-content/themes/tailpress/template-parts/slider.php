<div class="pb-8 pt-14 bg-white">
    <div class="owl-carousel owl-theme">
        <?php for ($x = 1; $x <= 6; $x++): ?>
            <figure class="h-slider relative mb-8">
                <img class="backdrop-grayscale h-full w-full object-contain"
                     src="<?php echo get_template_directory_uri() . '/resources/images/home-slider/' . $x . '.png' ?>"
                     alt="Image of">
                <div class="absolute backdrop-grayscale bg-white/30 h-full w-full top-0"></div>
                <figcaption class="sr-only">ghjk</figcaption>
            </figure>
        <?php endfor; ?>
    </div>
</div>