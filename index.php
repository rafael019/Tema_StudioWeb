<?php get_header(); ?>
<img class="img-responsive" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/>
<div class="conteudo">
    <main>
        <section class="meio">
            <div class="container">
                <div class="row">
                    <div class="noticias col-md-9">
                        <?php
//Se houver algum post
                        if(have_posts()) : 
//Enquanto houver algum post, chame o post de determinada maneira
                            while(have_posts()) : the_post()
                                ?>     
                                <!-- Busca os Formatos de Post -->
                                <?php get_template_part('content', get_post_format()); ?>
                            <?php endwhile; ?>
                            <div class="paginacao text-left">
                                <?php next_posts_link('<< Mais Antigos');?>
                            </div>
                            <div class="paginacao text-right">
                                <?php previous_posts_link('Mais Recentes >>');?>
                            </div>
                        <?php else: ?>
                            <p>Não tem nada ainda pra mostrar</p>
                        <?php endif; ?>
                    </div>
                    <aside class="barra-lateral col-md-3">
                        <?php get_sidebar('blog'); ?>
                    </aside>
                </div>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>