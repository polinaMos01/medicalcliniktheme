<?php
/**
 * Services & Programs Section
 * Figma Node: 252:7320 / 481:12693
 */
$services = [
    [
        'id' => 'card1',
        'title' => 'Комплексный Check-up «Здоровье 360»',
        'desc' => 'Полное скрининговое обследование всех систем организма за 1 день с заключением главврача',
        'price' => '24 500',
    ],
    [
        'id' => 'card2',
        'title' => 'Интегративная программа антивозрастной терапии',
        'desc' => 'Персональный протокол клеточного восстановления, IV-терапия, нутрицевтическая поддержка и детокс',
        'price' => '18 900',
    ],
    [
        'id' => 'card3',
        'title' => 'Диагностика и лечение болей в спине',
        'desc' => 'МРТ консультация + сеанс мягкой мануальной коррекции и кинезиотерапии',
        'price' => '9 200',
    ],
];
?>
<section class="section services-section" id="services">
    <div class="container">
        <div class="section-title-wrap">
            <h2 data-i18n="services.title">Популярные медицинские программы</h2>
        </div>

        <div class="services-grid">
            <?php foreach ($services as $svc) : ?>
                <div class="service-card reveal-on-scroll">
                    <div>
                        <h3 class="service-title" data-i18n="services.<?php echo $svc['id']; ?>_title"><?php echo esc_html($svc['title']); ?></h3>
                        <p class="service-desc" data-i18n="services.<?php echo $svc['id']; ?>_desc"><?php echo esc_html($svc['desc']); ?></p>
                    </div>
                    <div class="service-footer">
                        <div class="price-tag">
                            <span data-i18n="services.<?php echo $svc['id']; ?>_price"><?php echo esc_html($svc['price']); ?></span>
                            <span data-i18n="services.currency">₽</span>
                        </div>
                        <button type="button" class="btn btn-primary" data-open-modal="booking" data-i18n="services.book">Записаться</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
