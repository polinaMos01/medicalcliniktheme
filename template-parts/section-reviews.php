<?php
/**
 * Reviews Carousel Section
 */
?>
<section class="reviews-section" id="reviews">
    <div class="container">
        <div class="section-title-wrap">
            <h2 class="h2-title" data-i18n="reviews.title">Отзывы</h2>
            <div style="display: flex; gap: 8px;">
                <button type="button" class="btn btn-secondary" id="reviews-prev" style="padding: 8px 16px;">←</button>
                <button type="button" class="btn btn-secondary" id="reviews-next" style="padding: 8px 16px;">→</button>
            </div>
        </div>

        <div class="reviews-grid-3" id="reviews-track">
            <div class="review-card-fig reveal-on-scroll">
                <div class="review-user-row">
                    <div class="user-avatar-name">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/55f6b30bfe9501b009fd1a3545eb7bee7513a97a.png'); ?>" alt="Ирина">
                        <div>
                            <div style="font-weight: 600;">Ирина</div>
                            <div style="font-size: 12px; color: var(--color-gray-light);">21.04.2025</div>
                        </div>
                    </div>
                    <div style="color: var(--color-rating);">★★★★★</div>
                </div>
                <p style="font-size: 14px; line-height: 22px; color: var(--color-secondary-gray);">
                    Врач Кристина Игоревна проявила высокий уровень профессионализма: внимательно выслушала мои жалобы, провела тщательный осмотр и предложила несколько вариантов лечения, объяснив их преимущества. Рекомендую этого специалиста всем, кто ищет качественную помощь в области дерматологии!
                </p>
            </div>

            <div class="review-card-fig reveal-on-scroll delay-1">
                <div class="review-user-row">
                    <div class="user-avatar-name">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/009bb99f71ff2e3701a0f705319e5d35472e92ad.png'); ?>" alt="Алексей">
                        <div>
                            <div style="font-weight: 600;">Алексей М.</div>
                            <div style="font-size: 12px; color: var(--color-gray-light);">18.04.2025</div>
                        </div>
                    </div>
                    <div style="color: var(--color-rating);">★★★★★</div>
                </div>
                <p style="font-size: 14px; line-height: 22px; color: var(--color-secondary-gray);">
                    Проходил комплексный Check-up по рекомендации друзей. За один визит сдал все анализы и прошёл УЗИ без очередей и ожидания. Врачи очень деликатные и внимательные, клиника на высшем уровне!
                </p>
            </div>

            <div class="review-card-fig reveal-on-scroll delay-2">
                <div class="review-user-row">
                    <div class="user-avatar-name">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/189cfa982fa45c762e0567ce96f42c81098f2191.png'); ?>" alt="Елена">
                        <div>
                            <div style="font-weight: 600;">Елена В.</div>
                            <div style="font-size: 12px; color: var(--color-gray-light);">14.04.2025</div>
                        </div>
                    </div>
                    <div style="color: var(--color-rating);">★★★★★</div>
                </div>
                <p style="font-size: 14px; line-height: 22px; color: var(--color-secondary-gray);">
                    Интегративный подход действительно работает! Мне помогли восстановить уровень железа и нормализовать гормональный фон без лишних лекарств. Спасибо доктору за чуткость и поддержку.
                </p>
            </div>

            <div class="review-card-fig reveal-on-scroll">
                <div class="review-user-row">
                    <div class="user-avatar-name">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/doctor1.jpg'); ?>" alt="Михаил">
                        <div>
                            <div style="font-weight: 600;">Михаил Д.</div>
                            <div style="font-size: 12px; color: var(--color-gray-light);">09.04.2025</div>
                        </div>
                    </div>
                    <div style="color: var(--color-rating);">★★★★★</div>
                </div>
                <p style="font-size: 14px; line-height: 22px; color: var(--color-secondary-gray);">
                    Обратился к остеопату после травмы спины. После курса процедур боли полностью ушли, вернулась лёгкость движений. Отличная клиника, современное оборудование и вежливый персонал!
                </p>
            </div>

            <div class="review-card-fig reveal-on-scroll delay-1">
                <div class="review-user-row">
                    <div class="user-avatar-name">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/doctor2.jpg'); ?>" alt="Светлана">
                        <div>
                            <div style="font-weight: 600;">Светлана К.</div>
                            <div style="font-size: 12px; color: var(--color-gray-light);">02.04.2025</div>
                        </div>
                    </div>
                    <div style="color: var(--color-rating);">★★★★★</div>
                </div>
                <p style="font-size: 14px; line-height: 22px; color: var(--color-secondary-gray);">
                    Очень понравилась атмосфера клиники — спокойно, уютно, без больничного стресса. Врач подробно объяснила результаты УЗИ и составила план коррекции питания. Буду обращаться ещё!
                </p>
            </div>

            <div class="review-card-fig reveal-on-scroll delay-2">
                <div class="review-user-row">
                    <div class="user-avatar-name">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/doctor3.jpg'); ?>" alt="Дмитрий">
                        <div>
                            <div style="font-weight: 600;">Дмитрий Р.</div>
                            <div style="font-size: 12px; color: var(--color-gray-light);">28.03.2025</div>
                        </div>
                    </div>
                    <div style="color: var(--color-rating);">★★★★★</div>
                </div>
                <p style="font-size: 14px; line-height: 22px; color: var(--color-secondary-gray);">
                    Заказывали вызов врача на дом для пожилых родителей. Специалист приехал вовремя со всем необходимым оборудованием, сделал ЭКГ и назначил грамотное лечение. Огромное спасибо за заботу!
                </p>
            </div>
        </div>

        <div style="text-align: center; margin-top: 32px;">
            <button type="button" class="btn btn-primary" data-open-modal="booking">Оставьте отзыв</button>
        </div>
    </div>
</section>
