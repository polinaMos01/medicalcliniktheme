<?php
/**
 * FAQ Section Template Part
 * Figma Node: 249:7447 / 361:7450
 */
$faqs = [
    [
        'id' => 'q1',
        'q' => 'Что такое интегративная медицина и чем она отличается от классической?',
        'a' => 'Интегративная медицина сочетает лучшие достижения классической доказательной медицины с персонализированными методиками восстановления организма, поиском глубинных причин дисбаланса и превентивным подходом.',
    ],
    [
        'id' => 'q2',
        'q' => 'Как подготовиться к первичному приему?',
        'a' => 'Рекомендуется взять с собой результаты всех предыдущих анализов и выписок за последний год. При необходимости сдачи анализов лучше приходить натощак.',
    ],
    [
        'id' => 'q3',
        'q' => 'Можно ли вызвать врача на дом для забора анализов или капельниц?',
        'a' => 'Да, наша выездная служба работает без выходных по Москве и МО. Врач приедет с необходимым портативным диагностическим оборудованием.',
    ],
    [
        'id' => 'q4',
        'q' => 'Предоставляете ли вы документы для налогового вычета (13%)?',
        'a' => 'Да, мы оформляем полный комплект документов и справку об оплате медицинских услуг для получения налогового вычета в ФНС.',
    ],
];
?>
<section class="section faq-section" id="faq">
    <div class="container">
        <div class="section-title-wrap" style="justify-content: center; text-align: center;">
            <h2 data-i18n="faq.title">Часто задаваемые вопросы</h2>
        </div>

        <div class="faq-list">
            <?php foreach ($faqs as $index => $faq) : ?>
                <div class="faq-item <?php echo $index === 0 ? 'active' : ''; ?> reveal-on-scroll">
                    <button type="button" class="faq-question">
                        <span data-i18n="faq.<?php echo $faq['id']; ?>"><?php echo esc_html($faq['q']); ?></span>
                        <span class="faq-icon">▾</span>
                    </button>
                    <div class="faq-answer">
                        <p data-i18n="faq.a<?php echo ($index + 1); ?>"><?php echo esc_html($faq['a']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div style="text-align: center; margin-top: 32px;">
            <button type="button" class="btn btn-primary" data-open-modal="booking" style="padding: 12px 32px;">Задайте свой вопрос</button>
        </div>
    </div>
</section>
