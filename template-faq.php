<?php 
/*template name: Сторінка "FAQ"*/
get_header() ?>
            <section class="faq">
                <div class="container">
                    <div class="accordeon">
                                <?php
                                $faq_list = get_field('faq-list');
                                foreach ($faq_list as $value) {?>
                                    <div class="accordeon__wrapper"> 
                                    <button class="accordion"><?php echo $value['faq_q']?></button>
                                    <div class="panel">
                                        <p>
                                            <?php echo $value['faq_answer']?>
                                        </p>
                                    </div>
                                </div>
                                <?php } ?>
                        
                        
                    </div>
                </div>
            </section>
<?php 
get_footer() ?>