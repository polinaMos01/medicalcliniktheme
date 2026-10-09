<?php
/**
 * Front Page Template (Figma 202:26)
 * Rene Medical Clinic Theme
 */
get_header();
?>

<main id="primary" class="site-main">
    <?php
    get_template_part('template-parts/section-hero');
    get_template_part('template-parts/section-info-blocks');
    get_template_part('template-parts/section-departments');
    ?>

    <!-- Why Us Section -->
    <section class="why-us-section">
        <div class="container">
            <h2 class="h2-title" style="margin-bottom: 32px;">Почему выбирают нас</h2>
            
            <div class="why-us-grid">
                <div>
                    <p style="font-size: 16px; line-height: 24px; color: var(--color-black); margin-bottom: 24px;">
                        Интегративный подход в медицине, который применяют в работе наши врачи, направлен на выявление причин болезни, их устранение и составление плана индивидуальных рекомендаций по поддержанию здоровья. Комплексный подход в решении имеющихся проблем со здоровьем, проявленных в виде симптоматики, позволяет получить стойкий положительный результат, ведущий к выздоровлению, хорошему самочувствию и улучшению качества жизни.
                    </p>

                    <div class="why-stats-2x2">
                        <div class="why-stat-box">
                            <div class="stat-big-num">90+</div>
                            <div class="stat-sub">лет суммарный опыт наших врачей</div>
                        </div>
                        <div class="why-stat-box">
                            <div class="stat-big-num">40+</div>
                            <div class="stat-sub">принимающих врачей-специалистов</div>
                        </div>
                        <div class="why-stat-box">
                            <div class="stat-big-num">30к+</div>
                            <div class="stat-sub">пациентов в год</div>
                        </div>
                        <div class="why-stat-box">
                            <div class="stat-big-num">20+</div>
                            <div class="stat-sub">медицинских направлений</div>
                        </div>
                    </div>
                </div>

                <div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/why_us.png'); ?>" alt="О клинике" style="width: 100%; height: 460px; border-radius: 20px; object-fit: cover; box-shadow: 0 16px 40px rgba(0,0,0,0.06);">
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/section-doctors'); ?>

    <!-- Banner 1-Click -->
    <section class="banner-1click">
        <div class="container">
            <div class="banner-1click-card">
                <div>
                    <h2 class="h2-title" style="margin-bottom: 16px;">Записаться в 1 клик</h2>
                    <p style="font-size: 16px; line-height: 24px; color: var(--color-secondary-gray); margin-bottom: 28px;">
                        Не упустите возможность заботиться о своем здоровье! Запишитесь на прием к врачу прямо сейчас и получите квалифицированную медицинскую помощь. Мы ждем вас!
                    </p>
                    <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                        <button type="button" class="btn btn-primary" data-open-modal="booking" style="display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
                            <span>Вызвать врача на дом</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.75 10.125L12 3.75L20.25 10.125V19.5C20.25 20.1213 19.7463 20.625 19.125 20.625H4.875C4.25368 20.625 3.75 20.1213 3.75 19.5V10.125Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9 17.25H15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </button>
                        <button type="button" class="btn btn-outline-dark" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</button>
                    </div>
                </div>
                <div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/banner_1click.png'); ?>" alt="Запись" style="width: 100%; height: 380px; border-radius: 20px; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- Photo & Video Media Section -->
    <section class="media-section">
        <div class="container">
            <div class="section-title-wrap">
                <div>
                    <h2 class="h2-title">Фото и видео клиники</h2>
                    <p style="color: var(--color-secondary-gray); font-size: 16px; margin-top: 6px;">Материалы о нас из СМИ.</p>
                </div>
                <div class="dept-tabs-bar">
                    <button type="button" class="dept-tab-btn active" data-media-tab="photo">Фото</button>
                    <button type="button" class="dept-tab-btn" data-media-tab="video">Видео</button>
                </div>
            </div>

            <div class="media-grid-6" id="media-gallery-photos">
                <div class="media-box-item"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery_1.png'); ?>" alt="Фото клиники 1"></div>
                <div class="media-box-item"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery_2.png'); ?>" alt="Фото клиники 2"></div>
                <div class="media-box-item"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery_3.png'); ?>" alt="Фото клиники 3"></div>
                <div class="media-box-item"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery_4.png'); ?>" alt="Фото клиники 4"></div>
                <div class="media-box-item"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery_5.png'); ?>" alt="Фото клиники 5"></div>
                <div class="media-box-item"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery_6.png'); ?>" alt="Фото клиники 6"></div>
            </div>
        </div>
    </section>

    <!-- Help Banner -->
    <section class="cta-help-section" id="help">
        <div class="container">
            <div class="cta-help-card">
                <div class="cta-help-content">
                    <h2 class="h2-title" style="margin-bottom: 24px;" data-i18n="cta_help.title">Примите помощь от наших квалифицированных специалистов</h2>
                    <p style="font-size: 16px; line-height: 24px; color: var(--color-secondary-gray); margin-bottom: 28px;" data-i18n="cta_help.desc">
                        В нашей команде работают опытные врачи различных специальностей, которые постоянно повышают свою квалификацию и следят за последними достижениями медицины.
                    </p>
                    <div class="cta-help-contacts">
                        <div class="cta-contact-row">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/phone.svg'); ?>" alt="Телефон" class="cta-contact-icon">
                            <a href="tel:+78005553535" class="cta-contact-link" data-i18n="nav.phone">+7 (800) 555-35-35</a>
                        </div>
                        <div class="cta-contact-row">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/location.svg'); ?>" alt="Адрес" class="cta-contact-icon">
                            <span data-i18n="nav.address">г. Москва, ул. Центральная, д. 10</span>
                        </div>
                        <div class="cta-contact-row">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/clock.svg'); ?>" alt="Режим работы" class="cta-contact-icon">
                            <span data-i18n="nav.work_hours">Пн-Пт 09:00-20:00; Сб-Вс 10:00-18:00</span>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</button>
                </div>
                <div class="cta-help-image-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/cta_help.png'); ?>" alt="Помощь" class="cta-help-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Licences (FIGMA 212:1281) -->
    <section class="licences-fignode-section">
        <div class="container">
            <div class="licences-header-fig">
                <h2 class="licences-header-title" data-i18n="nav.licences">Лицензии</h2>
                <a href="<?php echo esc_url(home_url('/licences/')); ?>" class="licences-link-all">
                    <span data-i18n="licences.all_btn">Все лицензии</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>

            <div class="licences-grid-fig">
                <!-- Card 1 -->
                <div class="licence-card-fig">
                    <div class="licence-icon-56">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 6C9.58 6 6 9.58 6 14V42C6 46.42 9.58 50 14 50H42C46.42 50 50 46.42 50 42V18L36 4H14C9.58 4 6 7.58 6 12" stroke="var(--color-primary-dark)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M34 4V16C34 17.1 34.9 18 36 18H48" stroke="var(--color-primary-dark)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 32H32" stroke="var(--color-primary-dark)" stroke-width="4" stroke-linecap="round"/>
                            <path d="M16 40H26" stroke="var(--color-primary-dark)" stroke-width="4" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="licence-text-wrap">
                        <div class="licence-text-title">Лицензия №1234567890/МД</div>
                        <div class="licence-text-desc">На осуществление медицинской деятельности</div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="licence-card-fig">
                    <div class="licence-icon-56">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 6C9.58 6 6 9.58 6 14V42C6 46.42 9.58 50 14 50H42C46.42 50 50 46.42 50 42V18L36 4H14C9.58 4 6 7.58 6 12" stroke="var(--color-primary-dark)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M34 4V16C34 17.1 34.9 18 36 18H48" stroke="var(--color-primary-dark)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 32H32" stroke="var(--color-primary-dark)" stroke-width="4" stroke-linecap="round"/>
                            <path d="M16 40H26" stroke="var(--color-primary-dark)" stroke-width="4" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="licence-text-wrap">
                        <div class="licence-text-title">Лицензия №1234567890/МД</div>
                        <div class="licence-text-desc">На осуществление медицинской деятельности</div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="licence-card-fig">
                    <div class="licence-icon-56">
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 6C9.58 6 6 9.58 6 14V42C6 46.42 9.58 50 14 50H42C46.42 50 50 46.42 50 42V18L36 4H14C9.58 4 6 7.58 6 12" stroke="var(--color-primary-dark)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M34 4V16C34 17.1 34.9 18 36 18H48" stroke="var(--color-primary-dark)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M16 32H32" stroke="var(--color-primary-dark)" stroke-width="4" stroke-linecap="round"/>
                            <path d="M16 40H26" stroke="var(--color-primary-dark)" stroke-width="4" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="licence-text-wrap">
                        <div class="licence-text-title">Лицензия №1234567890/МД</div>
                        <div class="licence-text-desc">На осуществление медицинской деятельности</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Ratings -->
    <section class="ratings-section">
        <div class="container">
            <h2 class="h2-title" style="margin-bottom: 32px;">Нам доверяют</h2>

            <div class="ratings-grid-3">
                <a href="https://yandex.ru/maps" target="_blank" rel="noopener noreferrer" class="rating-agg-card">
                    <div>
                        <div class="rating-agg-title">Яндекс</div>
                        <div class="rating-agg-sub">722 отзыва</div>
                    </div>
                    <div class="rating-agg-val">4.9 <span class="rating-agg-star">⭐</span></div>
                </a>
                <a href="https://2gis.ru" target="_blank" rel="noopener noreferrer" class="rating-agg-card">
                    <div>
                        <div class="rating-agg-title">2ГИС</div>
                        <div class="rating-agg-sub">722 отзыва</div>
                    </div>
                    <div class="rating-agg-val">4.9 <span class="rating-agg-star">⭐</span></div>
                </a>
                <a href="https://maps.google.com" target="_blank" rel="noopener noreferrer" class="rating-agg-card">
                    <div>
                        <div class="rating-agg-title">Google</div>
                        <div class="rating-agg-sub">722 отзыва</div>
                    </div>
                    <div class="rating-agg-val">4.9 <span class="rating-agg-star">⭐</span></div>
                </a>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/section-reviews'); ?>

    <!-- Questions Form -->
    <section class="questions-section">
        <div class="container">
            <div class="questions-card">
                <div>
                    <h2 class="h2-title" style="margin-bottom: 16px;">Остались вопросы?</h2>
                    <p style="font-size: 16px; line-height: 24px; color: var(--color-secondary-gray); margin-bottom: 24px;">
                        Если у вас есть вопросы, пожелания или комментарии, пожалуйста, заполните форму обратной связи ниже. Мы постараемся ответить на ваше сообщение в кратчайшие сроки.
                    </p>
                    <form id="questions-form" onsubmit="event.preventDefault(); alert('Спасибо! Мы ответим на ваш вопрос в течение 15 минут.'); this.reset();">
                        <input type="text" class="form-control-fig" placeholder="Ваше имя *" required>
                        <input type="tel" class="form-control-fig mask-phone" placeholder="Телефон *" required>
                        <input type="text" class="form-control-fig" placeholder="Ваш вопрос *" required>
                        <label class="custom-checkbox-row">
                            <input type="checkbox" required>
                            <span>Нажимая кнопку Отправить, вы принимаете условия пользовательского соглашения и политики конфиденциальности</span>
                        </label>
                        <button type="submit" class="btn btn-primary" style="padding: 12px 32px;">Отправить</button>
                    </form>
                </div>
                <div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/questions_doc.png'); ?>" alt="Вопросы" style="width: 100%; height: 420px; border-radius: 20px; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/section-faq'); ?>
</main>

<?php
get_footer();
