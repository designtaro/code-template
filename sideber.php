<aside>
    <?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'primary-sidebar' ); ?>
    <?php else : ?>
        <p>sidebar contents</p>
    <?php endif; ?>
</aside>
