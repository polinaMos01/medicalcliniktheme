<?php
/**
 * Info Blocks Section (3 Cards with Consultation, Home Visit, Equipment)
 * Figma Nodes: 212:696, 226:485, 226:494
 */
?>
<section class="info-blocks-wrapper" id="about">
    <!-- Block 1: In-Person Consultation -->
    <div class="info-block-item">
        <div class="container info-block-row">
            <div class="info-block-text-col reveal-on-scroll">
                <h2 data-i18n="info_blocks.block1_title">Очная консультация <br>с опытными специалистами</h2>
                <p data-i18n="info_blocks.block1_desc">В нашей клинике мы понимаем, что здоровье — это самое ценное, что у нас есть. Поэтому мы предлагаем вам возможность пройти очную консультацию с высококвалифицированными специалистами в области интегративной медицины.</p>
                <a href="#booking" class="btn btn-primary" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</a>
            </div>
            <div class="reveal-on-scroll delay-2">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/block1_consult.png'); ?>" alt="Консультация" class="info-block-media-img">
            </div>
        </div>
    </div>

    <!-- Block 2: Urgent Home Visit (Reversed Layout) -->
    <div class="info-block-item reversed">
        <div class="container info-block-row">
            <div class="reveal-on-scroll delay-2">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/block2_homevisit.png'); ?>" alt="Вызов врача" class="info-block-media-img">
            </div>
            <div class="info-block-text-col reveal-on-scroll">
                <h2 data-i18n="info_blocks.block2_title">Срочный вызов врача <br>на дом</h2>
                <p data-i18n="info_blocks.block2_desc">Когда здоровье подводит, каждая минута на счету. Мы понимаем, что иногда вам может понадобиться медицинская помощь в экстренном порядке, и именно поэтому мы предлагаем услугу срочного вызова врача на дом.</p>
                <a href="#booking" class="btn btn-primary" data-open-modal="booking" data-i18n="info_blocks.block2_btn">Вызвать врача</a>
            </div>
        </div>
    </div>

    <!-- Block 3: Modern Equipment & Diagnostics -->
    <div class="info-block-item">
        <div class="container info-block-row">
            <div class="info-block-text-col reveal-on-scroll">
                <h2 data-i18n="info_blocks.block3_title">Высокоточное оборудование <br>и современные методики исследования</h2>
                <p data-i18n="info_blocks.block3_desc">В нашей клинике мы обеспечиваем пациентов передовыми и эффективными методами диагностики и лечения. Используем высокоточное оборудование и современные методики, позволяющие получать точные результаты и разрабатывать индивидуальные планы терапии. В распоряжении — новейшие аппараты для УЗИ, рентгена, МРТ и КТ. Также клиника оснащена современными лабораториями, где выполняется широкий спектр анализов: от общих и биохимических до специализированных тестов.</p>
                <a href="#booking" class="btn btn-primary" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</a>
            </div>
            <div class="reveal-on-scroll delay-2">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/block3_equipment.png'); ?>" alt="Оборудование" class="info-block-media-img">
            </div>
        </div>
    </div>
</section>
