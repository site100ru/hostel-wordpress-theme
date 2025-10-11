<?php
/**
 * Template Name: О хостеле
 */

get_header();
?>

<!-- Вывод контента Gutenberg -->
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        
        // Выводим контент
        the_content();
    }
}
?>

<script>
    function galleryOn(modalId, slideIndex) {
        var wrapper = document.getElementById('galleryWrapper-' + modalId);
        var modal = document.getElementById(modalId);
        
        if (wrapper && modal) {
            wrapper.style.display = 'block';
            document.body.style.overflow = 'hidden';
            
            // Переключаемся на нужный слайд
            if (typeof slideIndex !== 'undefined' && typeof bootstrap !== 'undefined') {
                var bsCarousel = new bootstrap.Carousel(modal);
                bsCarousel.to(slideIndex);
            }
        }
    }

    function closeGallery(modalId) {
        var wrapper = document.getElementById('galleryWrapper-' + modalId);
        
        if (wrapper) {
            wrapper.style.display = 'none';
            document.body.style.overflow = '';
        }
    }
    
    // Закрытие по клавише Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' || e.keyCode === 27) {
            var openWrappers = document.querySelectorAll('.gallery-modal-wrapper[style*="display: block"]');
            openWrappers.forEach(function(wrapper) {
                wrapper.style.display = 'none';
            });
            document.body.style.overflow = '';
        }
    });
    
    // Закрытие по клику на фон
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('gallery-modal-wrapper')) {
            e.target.style.display = 'none';
            document.body.style.overflow = '';
        }
    });
</script>

<?php get_footer(); ?>