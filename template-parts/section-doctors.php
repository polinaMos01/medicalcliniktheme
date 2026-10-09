<?php
/**
 * Doctors Section Template Part (Figma 202:26)
 */
?>
<section class="doctors-section" id="doctors">
    <div class="container">
        <div class="section-title-wrap">
            <h2 class="h2-title" data-i18n="doctors.title">Наши врачи</h2>
            <a href="doctors.html" class="btn btn-outline-dark" data-i18n="doctors.all_btn">Все врачи →</a>
        </div>

        <div class="doctors-grid-3col">
            <!-- Doctor Card 1 -->
            <div class="doctor-fig-card reveal-on-scroll">
                <div class="doctor-fig-photo-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/doctor_1.png'); ?>" alt="Иванов Алексей">
                    <div class="doctor-fig-tag">Врач высшей категории</div>
                </div>
                <div class="doctor-rating-row">
                    <span class="star-badge">★ (4,8)</span>
                    <span style="color: var(--color-gray-light);">• 23 отзыва</span>
                </div>
                <div>
                    <h3 style="font-size: 18px; margin-bottom: 4px;">Иванов Алексей Сергеевич</h3>
                    <div style="font-size: 14px; color: var(--color-secondary-gray);">Остеопат • 23 года стажа</div>
                </div>
                <div class="doctor-price-row">
                    <div class="price-item"><span>В клинике</span><strong>2 999 ₽</strong></div>
                    <div class="price-item"><span>Онлайн</span><strong>2 999 ₽</strong></div>
                    <div class="price-item"><span>На дом</span><strong>2 999 ₽</strong></div>
                </div>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <button type="button" class="btn btn-primary" style="width: 100%;" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</button>
                    <a href="doctor-single.html" class="btn btn-outline-dark" style="width: 100%;">Подробнее о враче</a>
                </div>
            </div>

            <!-- Doctor Card 2 -->
            <div class="doctor-fig-card reveal-on-scroll delay-1">
                <div class="doctor-fig-photo-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/doctor_2.png'); ?>" alt="Смирнова Елена">
                    <div class="doctor-fig-tag">Кандидат мед. наук</div>
                </div>
                <div class="doctor-rating-row">
                    <span class="star-badge">★ (4,9)</span>
                    <span style="color: var(--color-gray-light);">• 48 отзывов</span>
                </div>
                <div>
                    <h3 style="font-size: 18px; margin-bottom: 4px;" data-i18n="doctors.doc1_name">Смирнова Елена Викторовна</h3>
                    <div style="font-size: 14px; color: var(--color-secondary-gray);" data-i18n="doctors.doc1_role">Эндокринолог • 18 лет стажа</div>
                </div>
                <div class="doctor-price-row">
                    <div class="price-item"><span>В клинике</span><strong>4 500 ₽</strong></div>
                    <div class="price-item"><span>Онлайн</span><strong>3 500 ₽</strong></div>
                    <div class="price-item"><span>На дом</span><strong>6 000 ₽</strong></div>
                </div>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <button type="button" class="btn btn-primary" style="width: 100%;" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</button>
                    <a href="doctor-single.html" class="btn btn-outline-dark" style="width: 100%;">Подробнее о враче</a>
                </div>
            </div>

            <!-- Doctor Card 3 -->
            <div class="doctor-fig-card reveal-on-scroll delay-2">
                <div class="doctor-fig-photo-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/doctor_3.png'); ?>" alt="Александров Михаил">
                    <div class="doctor-fig-tag">Врач высшей категории</div>
                </div>
                <div class="doctor-rating-row">
                    <span class="star-badge">★ (4,9)</span>
                    <span style="color: var(--color-gray-light);">• 35 отзывов</span>
                </div>
                <div>
                    <h3 style="font-size: 18px; margin-bottom: 4px;" data-i18n="doctors.doc2_name">Александров Михаил Сергеевич</h3>
                    <div style="font-size: 14px; color: var(--color-secondary-gray);" data-i18n="doctors.doc2_role">Невролог • 14 лет стажа</div>
                </div>
                <div class="doctor-price-row">
                    <div class="price-item"><span>В клинике</span><strong>3 500 ₽</strong></div>
                    <div class="price-item"><span>Онлайн</span><strong>2 999 ₽</strong></div>
                    <div class="price-item"><span>На дом</span><strong>5 000 ₽</strong></div>
                </div>
                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <button type="button" class="btn btn-primary" style="width: 100%;" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</button>
                    <a href="doctor-single.html" class="btn btn-outline-dark" style="width: 100%;">Подробнее о враче</a>
                </div>
            </div>
        </div>
    </div>
</section>
