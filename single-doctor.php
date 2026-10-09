<?php
/**
 * Single Doctor Template
 * Figma Node: 297:5851
 *
 * @package ReneMedical
 */

get_header(); ?>

<main class="site-main">
    <div class="container">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs" style="padding: 24px 0 16px; font-size: 14px; color: var(--color-gray-light);">
            <a href="<?php echo esc_url(home_url('/')); ?>" style="color: var(--color-secondary-gray); text-decoration: none;" data-i18n="nav.home">Главная</a> / 
            <a href="<?php echo esc_url(home_url('/doctors/')); ?>" style="color: var(--color-secondary-gray); text-decoration: none;" data-i18n="nav.doctors">Врачи</a> / 
            <span style="color: var(--color-primary);"><?php the_title(); ?></span>
        </div>

        <!-- 🌟 1. DOCTOR HERO PROFILE CARD (FIGMA 297:5851) -->
        <section class="doc-single-hero">
            <div class="doc-single-profile-card reveal-on-scroll">
                <div class="doc-single-photo-box">
                    <div class="doc-single-photo-wrap">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large'); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/doctor_1.png'); ?>" alt="<?php the_title_attribute(); ?>">
                        <?php endif; ?>
                        <div class="doc-single-tag-badge">Врач высшей категории</div>
                    </div>
                    <button type="button" class="btn btn-primary" style="width: 100%;" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</button>
                </div>

                <div class="doc-single-info">
                    <h1 class="doc-single-name"><?php the_title(); ?></h1>
                    <div class="doc-single-specialty">Остеопат • 23 года стажа</div>

                    <div class="doc-single-rating-row">
                        <span class="star-badge">(4,8) ★</span>
                        <span style="color: var(--color-secondary-gray); font-size: 14px;">• 24 отзыва</span>
                    </div>

                    <div class="doc-single-tags">
                        <span class="doc-spec-badge">Остеопат</span>
                        <span class="doc-spec-badge">Мануальный терапевт</span>
                        <span class="doc-spec-badge">Рефлексотерапевт</span>
                        <span class="doc-spec-badge">Кинезиолог</span>
                    </div>

                    <p class="doc-single-bio-brief">
                        Ведущий специалист клиники в области остеопатии и мануальной терапии. Обладает глубокими знаниями биомеханики тела и многолетним клиническим опытом, применяет мягкотканные и краниосакральные техники для безопасного и эффективного восстановления здоровья.
                    </p>

                    <div class="doc-single-prices">
                        <div class="doc-price-pill">
                            <span>В клинике:</span>
                            <strong>2 999 ₽</strong>
                        </div>
                        <div class="doc-price-pill">
                            <span>Онлайн:</span>
                            <strong>2 999 ₽</strong>
                        </div>
                        <div class="doc-price-pill">
                            <span>На дом:</span>
                            <strong>2 999 ₽</strong>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- 🌟 2. ЗАПИСАТЬСЯ В 1 КЛИК -->
    <section class="banner-1click">
        <div class="container">
            <div class="banner-1click-card">
                <div>
                    <h2 class="h2-title" style="margin-bottom: 16px;">Записаться в 1 клик</h2>
                    <p style="font-size: 16px; line-height: 24px; color: var(--color-secondary-gray); margin-bottom: 28px;">
                        Не упустите возможность заботиться о своем здоровье! Запишитесь на прием к врачу прямо сейчас и получите квалифицированную медицинскую помощь. Мы ждем вас!
                    </p>
                    <div class="banner-1click-buttons">
                        <button type="button" class="btn btn-primary" data-open-modal="booking" style="display: inline-flex; align-items: center; justify-content: center; gap: 8px;">
                            <span>Вызвать врача на дом</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.75 10.125L12 3.75L20.25 10.125V19.5C20.25 20.1213 19.7463 20.625 19.125 20.625H4.875C4.25368 20.625 3.75 20.1213 3.75 19.5V10.125Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9 17.25H15" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </button>
                        <button type="button" class="btn btn-primary" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</button>
                    </div>
                </div>
                <div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/banner_1click.png'); ?>" alt="Запись" style="width: 100%; height: 380px; border-radius: 20px; object-fit: cover;">
                </div>
            </div>
        </div>
    </section>

    <!-- 🌟 3. О ВРАЧЕ (FIGMA 297:5989) -->
    <section class="doc-about-section">
        <div class="container">
            <div class="doc-about-grid">
                <div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/why_us.png'); ?>" alt="О враче" class="doc-about-img">
                </div>
                <div class="doc-about-text">
                    <h2 class="h2-title" style="margin-bottom: 20px;">О враче</h2>
                    <p>
                        Врач придерживается холистического подхода: организм рассматривается как единая саморегулирующаяся система, где нарушение в одной зоне может вызывать дискомфорт и болевые ощущения в совершенно другой.
                    </p>
                    <p>
                        Проводит точную пальпаторную диагностику, выявляет первопричины дисфункций опорно-двигательного аппарата, снимает мышечные спазмы, восстанавливает нормальную подвижность суставов и циркуляцию жидкостей в тканях.
                    </p>
                    <p>
                        Постоянно участвует в международных медицинских конференциях и авторских семинарах по биодинамической остеопатии и прикладной кинезиологии.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🌟 4. СПЕЦИАЛИЗАЦИЯ (FIGMA 297:5915) -->
    <section class="doc-section-block">
        <div class="container">
            <div class="doc-info-card">
                <h3 class="doc-info-card-title">Специализация</h3>
                <div class="doc-spec-list">
                    <div class="doc-spec-col">
                        <h4>1. Патологии, с которыми обращаются:</h4>
                        <ul>
                            <li>Боли в спине, шее, пояснице и суставах (остеохондроз, протрузии, грыжи)</li>
                            <li>Головные боли, мигрени, головокружения и синдром хронической усталости</li>
                            <li>Нарушения осанки, сколиоз, плоскостопие и мышечный дисбаланс</li>
                            <li>Восстановление после спортивных травм и хирургических вмешательств</li>
                            <li>Функциональные нарушения внутренних органов и спаечные процессы</li>
                        </ul>
                    </div>
                    <div class="doc-spec-col">
                        <h4>2. Применяемые методики:</h4>
                        <ul>
                            <li>Мягкотканные остеопатические и фасциальные техники</li>
                            <li>Краниосакральная и висцеральная терапия</li>
                            <li>Прикладная кинезиология и мануальное мышечное тестирование</li>
                            <li>Постизометрическая релаксация мышц (ПИР)</li>
                            <li>Кинезиотейпирование и составление индивидуального двигательного режима</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🌟 5. ОБРАЗОВАНИЕ (FIGMA 297:5945) -->
    <section class="doc-section-block">
        <div class="container">
            <div class="doc-info-card">
                <h3 class="doc-info-card-title">Образование</h3>
                <div class="doc-timeline">
                    <div class="doc-timeline-item">
                        <div class="doc-timeline-year">2001</div>
                        <div class="doc-timeline-content">
                            <h4>Казанский государственный медицинский университет (КГМУ)</h4>
                            <p>Специальность: «Лечебное дело», диплом с отличием.</p>
                        </div>
                    </div>
                    <div class="doc-timeline-item">
                        <div class="doc-timeline-year">2003</div>
                        <div class="doc-timeline-content">
                            <h4>Клиническая ординатура по специальности «Неврология»</h4>
                            <p>Кафедра неврологии и мануальной терапии КГМУ.</p>
                        </div>
                    </div>
                    <div class="doc-timeline-item">
                        <div class="doc-timeline-year">2007</div>
                        <div class="doc-timeline-content">
                            <h4>Институт остеопатической медицины им. В.Л. Андрианова (г. Санкт-Петербург)</h4>
                            <p>Диплом доктора остеопатии (DO), международная сертификация.</p>
                        </div>
                    </div>
                    <div class="doc-timeline-item">
                        <div class="doc-timeline-year">2018, 2023</div>
                        <div class="doc-timeline-content">
                            <h4>Периодическая аккредитация и повышение квалификации</h4>
                            <p>Курсы «Интегративная остеопатия и биодинамика», «Прикладная кинезиология в вертебрологии».</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🌟 6. ОПЫТ РАБОТЫ (FIGMA 297:5962) -->
    <section class="doc-section-block">
        <div class="container">
            <div class="doc-info-card">
                <h3 class="doc-info-card-title">Опыт работы</h3>
                <div class="doc-timeline">
                    <div class="doc-timeline-item">
                        <div class="doc-timeline-year">2019 — н. в.</div>
                        <div class="doc-timeline-content">
                            <h4>Клиника интегративной медицины «Медикал Клиник» (г. Москва)</h4>
                            <p>Ведущий врач-остеопат, мануальный терапевт, член экспертного совета клиники.</p>
                        </div>
                    </div>
                    <div class="doc-timeline-item">
                        <div class="doc-timeline-year">2011 — 2019</div>
                        <div class="doc-timeline-content">
                            <h4>Центр восстановительной медицины и реабилитации</h4>
                            <p>Врач-невролог, остеопат. Курирование сложных клинических случаев после травм.</p>
                        </div>
                    </div>
                    <div class="doc-timeline-item">
                        <div class="doc-timeline-year">2003 — 2011</div>
                        <div class="doc-timeline-content">
                            <h4>Городская клиническая больница</h4>
                            <p>Врач-невролог стационарного отделения.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🌟 7. ДОКУМЕНТЫ И СЕРТИФИКАТЫ (FIGMA 297:5936) -->
    <section class="doc-section-block">
        <div class="container">
            <div class="section-title-wrap" style="margin-bottom: 24px;">
                <h2 class="h2-title">Документы и сертификаты</h2>
            </div>
            <div class="doc-cert-grid">
                <div class="doc-cert-card">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery_1.png'); ?>" alt="Сертификат" class="doc-cert-img">
                    <div class="doc-cert-title">Диплом о высшем медицинском образовании</div>
                </div>
                <div class="doc-cert-card">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery_2.png'); ?>" alt="Сертификат" class="doc-cert-img">
                    <div class="doc-cert-title">Сертификат специалиста по остеопатии</div>
                </div>
                <div class="doc-cert-card">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery_3.png'); ?>" alt="Сертификат" class="doc-cert-img">
                    <div class="doc-cert-title">Удостоверение о повышении квалификации</div>
                </div>
                <div class="doc-cert-card">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery_4.png'); ?>" alt="Сертификат" class="doc-cert-img">
                    <div class="doc-cert-title">Международный сертификат по кинезиологии</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🌟 8. ОТЗЫВЫ О ВРАЧЕ -->
    <section class="reviews-section" id="reviews">
        <div class="container">
            <div class="section-title-wrap">
                <h2 class="h2-title" data-i18n="reviews.title">Отзывы о враче</h2>
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
                        Алексей Сергеевич буквально поставил меня на ноги! После первого же сеанса прошла острая боль в пояснице, которая мучила меня полгода. Очень внимательный и деликатный доктор. Спасибо огромное!
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
                        Проходил курс мягкой остеопатии после спортивной травмы шеи. Результат потрясающий: шея свободно поворачивается, головные боли ушли. Настоящий профессионал с золотыми руками.
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
                        Очень благодарна доктору за чуткий подход и подробные рекомендации по лечебной гимнастике. Сеансы проходят очень комфортно и безболезненно. Рекомендую всем знакомым!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 🌟 9. ДРУГИЕ ВРАЧИ КЛИНИКИ -->
    <section class="doctors-section" id="doctors">
        <div class="container">
            <div class="section-title-wrap">
                <h2 class="h2-title">Другие специалисты клиники</h2>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="btn btn-outline-dark" data-i18n="doctors.all_btn">Все врачи →</a>
            </div>

            <div class="doctors-grid-3col">
                <!-- Doctor Card 1 -->
                <div class="doctor-fig-card reveal-on-scroll">
                    <div class="doctor-fig-photo-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/doctor_2.png'); ?>" alt="Смирнова Елена">
                        <div class="doctor-fig-tag">Врач высшей категории</div>
                    </div>
                    <div class="doctor-rating-row">
                        <span class="star-badge">(4,8) ★</span>
                        <span style="color: var(--color-gray-light);">• 23 отзыва</span>
                    </div>
                    <div>
                        <h3 style="font-size: 18px; margin-bottom: 4px;">Смирнова Елена Викторовна</h3>
                        <div style="font-size: 14px; color: var(--color-secondary-gray);">Эндокринолог, к.м.н. • 18 лет стажа</div>
                    </div>
                    <div class="doctor-price-row">
                        <div class="price-item"><span>В клинике</span><strong>2 999 ₽</strong></div>
                        <div class="price-item"><span>Онлайн</span><strong>2 999 ₽</strong></div>
                        <div class="price-item"><span>На дом</span><strong>2 999 ₽</strong></div>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <button type="button" class="btn btn-primary" style="width: 100%;" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</button>
                        <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="btn btn-outline-dark" style="width: 100%;">Подробнее о враче</a>
                    </div>
                </div>

                <!-- Doctor Card 2 -->
                <div class="doctor-fig-card reveal-on-scroll delay-1">
                    <div class="doctor-fig-photo-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/doctor_3.png'); ?>" alt="Александров Михаил">
                        <div class="doctor-fig-tag">Врач высшей категории</div>
                    </div>
                    <div class="doctor-rating-row">
                        <span class="star-badge">(4,8) ★</span>
                        <span style="color: var(--color-gray-light);">• 23 отзыва</span>
                    </div>
                    <div>
                        <h3 style="font-size: 18px; margin-bottom: 4px;">Александров Михаил Юрьевич</h3>
                        <div style="font-size: 14px; color: var(--color-secondary-gray);">Невролог, вертебролог • 15 лет стажа</div>
                    </div>
                    <div class="doctor-price-row">
                        <div class="price-item"><span>В клинике</span><strong>2 999 ₽</strong></div>
                        <div class="price-item"><span>Онлайн</span><strong>2 999 ₽</strong></div>
                        <div class="price-item"><span>На дом</span><strong>2 999 ₽</strong></div>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <button type="button" class="btn btn-primary" style="width: 100%;" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</button>
                        <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="btn btn-outline-dark" style="width: 100%;">Подробнее о враче</a>
                    </div>
                </div>

                <!-- Doctor Card 3 -->
                <div class="doctor-fig-card reveal-on-scroll delay-2">
                    <div class="doctor-fig-photo-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/doctor_1.png'); ?>" alt="Хабибуллина Динара">
                        <div class="doctor-fig-tag">Врач высшей категории</div>
                    </div>
                    <div class="doctor-rating-row">
                        <span class="star-badge">(4,8) ★</span>
                        <span style="color: var(--color-gray-light);">• 23 отзыва</span>
                    </div>
                    <div>
                        <h3 style="font-size: 18px; margin-bottom: 4px;">Хабибуллина Динара Ринатовна</h3>
                        <div style="font-size: 14px; color: var(--color-secondary-gray);">Диетолог-нутрициолог • 11 лет стажа</div>
                    </div>
                    <div class="doctor-price-row">
                        <div class="price-item"><span>В клинике</span><strong>2 999 ₽</strong></div>
                        <div class="price-item"><span>Онлайн</span><strong>2 999 ₽</strong></div>
                        <div class="price-item"><span>На дом</span><strong>2 999 ₽</strong></div>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <button type="button" class="btn btn-primary" style="width: 100%;" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</button>
                        <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="btn btn-outline-dark" style="width: 100%;">Подробнее о враче</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🌟 10. ОСТАЛИСЬ ВОПРОСЫ? (FIGMA 144:7472) -->
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
                <div class="media-box-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/gallery_1.png" alt="Фото клиники 1"></div>
                <div class="media-box-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/gallery_2.png" alt="Фото клиники 2"></div>
                <div class="media-box-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/gallery_3.png" alt="Фото клиники 3"></div>
                <div class="media-box-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/gallery_4.png" alt="Фото клиники 4"></div>
                <div class="media-box-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/gallery_5.png" alt="Фото клиники 5"></div>
                <div class="media-box-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/gallery_6.png" alt="Фото клиники 6"></div>
            </div>

            <div class="media-grid-6" id="media-gallery-videos" style="display: none;">
                <div class="media-box-item" style="background: #000; position: relative; display: flex; align-items: center; justify-content: center; cursor: pointer;" data-open-modal="booking">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/gallery_1.png" style="opacity: 0.6;" alt="Видео">
                    <div style="position: absolute; width: 56px; height: 56px; border-radius: 50%; background: var(--color-primary); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 22px;">▶</div>
                </div>
                <div class="media-box-item" style="background: #000; position: relative; display: flex; align-items: center; justify-content: center; cursor: pointer;" data-open-modal="booking">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/gallery_2.png" style="opacity: 0.6;" alt="Видео">
                    <div style="position: absolute; width: 56px; height: 56px; border-radius: 50%; background: var(--color-primary); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 22px;">▶</div>
                </div>
                <div class="media-box-item" style="background: #000; position: relative; display: flex; align-items: center; justify-content: center; cursor: pointer;" data-open-modal="booking">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/gallery_3.png" style="opacity: 0.6;" alt="Видео">
                    <div style="position: absolute; width: 56px; height: 56px; border-radius: 50%; background: var(--color-primary); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 22px;">▶</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🌟 ПРИМИТЕ ПОМОЩЬ ОТ НАШИХ СПЕЦИАЛИСТОВ -->
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
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/icons/phone.svg" alt="Телефон" class="cta-contact-icon">
                            <a href="tel:+78005553535" class="cta-contact-link" data-i18n="nav.phone">+7 (800) 555-35-35</a>
                        </div>
                        <div class="cta-contact-row">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/icons/location.svg" alt="Адрес" class="cta-contact-icon">
                            <span data-i18n="nav.address">г. Москва, ул. Центральная, д. 10</span>
                        </div>
                        <div class="cta-contact-row">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/icons/clock.svg" alt="Режим работы" class="cta-contact-icon">
                            <span data-i18n="nav.work_hours">Пн-Пт 09:00-20:00; Сб-Вс 10:00-18:00</span>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</button>
                </div>
                <div class="cta-help-image-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cta_help.png" alt="Помощь" class="cta-help-img">
                </div>
            </div>
        </div>
    </section>

    <!-- 🌟 ЛИЦЕНЗИИ (FIGMA 212:1281) -->
    <section class="licences-fignode-section">
        <div class="container">
            <div class="licences-header-fig">
                <h2 class="licences-header-title" data-i18n="nav.licences">Лицензии</h2>
                <a href="licences.html" class="licences-link-all">
                    <span data-i18n="licences.all_btn">Все лицензии</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>

            <div class="licences-grid-fig">
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

    <!-- 🌟 НАМ ДОВЕРЯЮТ -->
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

    <!-- 🌟 ОТЗЫВЫ -->
    

    <!-- 🌟 ОСТАЛИСЬ ВОПРОСЫ? (FIGMA 144:7472) -->
    

    

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
</main>

<?php get_footer(); ?>
