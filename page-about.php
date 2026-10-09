<?php
/**
 * Template Name: About Page
 * Template for About Clinic (Figma 242:3058)
 * Rene Medical Clinic Theme
 */
get_header();
?>

<main id="primary" class="site-main">

    <!-- 🌟 1. ПЕРВЫЙ БЛОК: HERO «О НАС» (FIGMA 242:3058) -->
    <section class="hero-figma" id="about-hero">
        <div class="container">
            <div class="hero-body-grid">
                <!-- Left Column: Heading, Subtitle, CTA Button, Promo Card -->
                <div class="hero-left-col reveal-on-scroll">
                    <div style="font-size: 14px; color: var(--color-gray-light); margin-bottom: 20px;">
                        <a href="<?php echo esc_url(home_url('/')); ?>" style="color: var(--color-secondary-gray); text-decoration: none;" data-i18n="nav.home">Главная</a> / 
                        <span style="color: var(--color-primary);" data-i18n="nav.about">О нас</span>
                    </div>

                    <h1 class="about-hero-single-line-title" data-i18n="nav.about">О клинике</h1>
                    <p class="hero-subheading">Мы стремимся к тому, чтобы каждый пациент чувствовал себя комфортно и уверенно в нашей клинике.</p>
                    
                    <div class="hero-cta-btn-wrap">
                        <a href="#booking" class="btn btn-primary btn-hero-cta" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</a>
                    </div>

                    <!-- Interactive Hero Promo Card Carousel (Figma 212:680) -->
                    <div class="figma-promo-card-wrap">
                        <div class="figma-promo-card">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/ae96da2b5d2ff4a3ded07ee033fb6c3f7f2bbd45.png'); ?>" alt="Диагностика" class="figma-promo-thumb">
                            <div class="figma-promo-content">
                                <div class="figma-promo-text">Полный скрининг всех органов и систем за 1 день</div>
                                <div class="figma-promo-price">24 500 ₽</div>
                            </div>
                            <button type="button" class="figma-promo-action-btn" title="Подробнее">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/4c188abb827930997332f5712fb0b507021257e2.svg'); ?>" alt="↗">
                            </button>
                        </div>
                        <div class="figma-promo-dots">
                            <div class="figma-promo-dot active"></div>
                            <div class="figma-promo-dot"></div>
                            <div class="figma-promo-dot"></div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Exact Figma Hero Photo (588x560 at 1440, larger at 1920) -->
                <div class="about-hero-img-wrap reveal-on-scroll delay-2">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/about_hero_main.png'); ?>" alt="О нашей клинике" class="about-hero-main-img" onerror="this.src='<?php echo esc_url(get_template_directory_uri() . '/assets/images/doctor1.png'); ?>';">
                </div>
            </div>
        </div>
    </section>

    <!-- 🌟 2. ПОЧЕМУ ВЫБИРАЮТ НАС (WHY US) -->
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

    <!-- 🌟 3. ФОТО И ВИДЕО КЛИНИКИ -->
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

            <div class="media-grid-6" id="media-gallery-videos" style="display: none;">
                <div class="media-box-item" style="background: #000; position: relative; display: flex; align-items: center; justify-content: center; cursor: pointer;" data-open-modal="booking">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery_1.png'); ?>" style="opacity: 0.6;" alt="Видео">
                    <div style="position: absolute; width: 56px; height: 56px; border-radius: 50%; background: var(--color-primary); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 22px;">▶</div>
                </div>
                <div class="media-box-item" style="background: #000; position: relative; display: flex; align-items: center; justify-content: center; cursor: pointer;" data-open-modal="booking">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery_2.png'); ?>" style="opacity: 0.6;" alt="Видео">
                    <div style="position: absolute; width: 56px; height: 56px; border-radius: 50%; background: var(--color-primary); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 22px;">▶</div>
                </div>
                <div class="media-box-item" style="background: #000; position: relative; display: flex; align-items: center; justify-content: center; cursor: pointer;" data-open-modal="booking">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery_3.png'); ?>" style="opacity: 0.6;" alt="Видео">
                    <div style="position: absolute; width: 56px; height: 56px; border-radius: 50%; background: var(--color-primary); color: #fff; display: flex; align-items: center; justify-content: center; font-size: 22px;">▶</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🌟 4. МИССИЯ (FRAME 48096563 / FIGMA 243:3893) -->
    <section class="mission-quote-section">
        <div class="container">
            <p class="mission-quote-content reveal-on-scroll">
                «Наша главная миссия — <span class="highlight-primary">обеспечить каждому пациенту доступ</span> к высококачественной медицинской помощи в комфортной атмосфере. Все процедуры и лечения проводятся с использованием современного оборудования и по самым высоким стандартам медицины, а <span class="highlight-primary">каждый пациент для нас уникален</span>.»
            </p>
        </div>
    </section>

    <!-- 🌟 5. КЛИНИКА ИНТЕГРАТИВНОЙ МЕДИЦИНЫ RENE (SPECIALIZATION FIGMA 249:6865) -->
    <section class="departments-section" id="departments">
        <div class="container">
            <div class="section-title-wrap">
                <h2 class="h2-title">Клиника интегративной медицины RENE</h2>
            </div>

            <div class="dept-controls">
                <div class="dept-search-wrap">
                    <svg class="dept-search-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <input type="text" id="dept-search-input" placeholder="Найти направление, специалиста или услугу..." data-i18n="departments.search_placeholder">
                </div>

                <div class="dept-tabs-bar">
                    <button type="button" class="dept-tab-btn active" data-category="all" data-i18n="departments.tab_all">Все направления</button>
                    <button type="button" class="dept-tab-btn" data-category="specialists">Специалисты</button>
                    <button type="button" class="dept-tab-btn" data-category="diagnostics">Диагностика</button>
                    <button type="button" class="dept-tab-btn" data-category="tests">Анализы</button>
                </div>
            </div>

            <div class="dept-grid-fignode" id="dept-grid-container">
                <!-- 🩺 1. НАПРАВЛЕНИЯ (DIRECTIONS) -->
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name" data-i18n="dept.endocrinology">Эндокринология</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name">Остеопатия</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name" data-i18n="dept.neurology">Неврология</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name" data-i18n="dept.orthopedics">Ортопедия и травматология</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name" data-i18n="dept.podology">Подология</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name">Подиатрия</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name" data-i18n="dept.psychology">Психотерапия</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name" data-i18n="dept.kinesiology">Кинезиология</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name">Гирудотерапия</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode wide-2col" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name">Вертеброневрология</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name" data-i18n="dept.vertebrology">Вертебрология</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name" data-i18n="dept.phlebology">Флебология</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name">Терапия</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name" data-i18n="dept.urology">Урология</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name" data-i18n="dept.dietetics">Диетология и нутрициология</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name" data-i18n="dept.epileptology">Эпилептология</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name" data-i18n="dept.rheumatology">Ревматология</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name" data-i18n="dept.homeopathy">Гомеопатия</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode wide-2col" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name" data-i18n="dept.manual">Мануальная терапия</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode wide-2col" data-category="directions"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Направление</span><div class="dept-card-name" data-i18n="dept.integrative">Интегративная медицина</div></div></a>

                <!-- 👨‍⚕️ 2. СПЕЦИАЛИСТЫ (SPECIALISTS) -->
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Врач-эндокринолог</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Врач-остеопат</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Врач-невролог</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Травматолог-ортопед</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Специалист</span><div class="dept-card-name">Подолог</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Врач-подиатр</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Психотерапевт</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Специалист</span><div class="dept-card-name">Прикладной кинезиолог</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Гирудотерапевт</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode wide-2col" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Вертеброневролог</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Вертебролог</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Врач-флеболог</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Врач-терапевт</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Врач-уролог</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Диетолог-нутрициолог</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Эпилептолог</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Врач-ревматолог</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Врач-гомеопат</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode wide-2col" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Мануальный терапевт</div></div></a>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="dept-card-fignode wide-2col" data-category="specialists"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Врач</span><div class="dept-card-name">Врач интегративной медицины</div></div></a>

                <!-- 🔬 3. ДИАГНОСТИКА (DIAGNOSTICS) -->
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="diagnostics"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">УЗИ</span><div class="dept-card-name">УЗИ экспертного класса</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="diagnostics"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">УЗИ</span><div class="dept-card-name">УЗИ сосудов головы и шеи</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="diagnostics"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">УЗИ</span><div class="dept-card-name">УЗИ суставов и связок</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="diagnostics"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Кардио</span><div class="dept-card-name">ЭКГ с расшифровкой</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="diagnostics"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Кардио</span><div class="dept-card-name">Холтер-мониторирование</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="diagnostics"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Кардио</span><div class="dept-card-name">СМАД (мониторинг АД)</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="diagnostics"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Диагностика</span><div class="dept-card-name">Биоимпедансометрия тела</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="diagnostics"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Ортопедия</span><div class="dept-card-name">Компьютерная плантография</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="diagnostics"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Дерматология</span><div class="dept-card-name">Цифровая видеодерматоскопия</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode wide-2col" data-category="diagnostics"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Check-up</span><div class="dept-card-name">Комплексный Check-up «Здоровье 360°»</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="diagnostics"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Остеопатия</span><div class="dept-card-name">Остеопатическая диагностика</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="diagnostics"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Кинезио</span><div class="dept-card-name">Оценка постурального баланса</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode wide-2col" data-category="diagnostics"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Check-up</span><div class="dept-card-name">Скрининг гормонального статуса</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode wide-2col" data-category="diagnostics"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Неврология</span><div class="dept-card-name">Нейросонография с допплерографией</div></div></a>

                <!-- 🧪 4. АНАЛИЗЫ (TESTS) -->
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="tests"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Анализы</span><div class="dept-card-name">Гормональный профиль щитовидной железы</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="tests"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Анализы</span><div class="dept-card-name">Половой гормональный профиль</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="tests"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Биохимия</span><div class="dept-card-name">Биохимический анализ крови (28 пок.)</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="tests"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Базовый</span><div class="dept-card-name">Клинический анализ крови + СОЭ</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="tests"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Дефициты</span><div class="dept-card-name">Витамины D3, B12, B9 и ферритин</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="tests"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Интегративная</span><div class="dept-card-name">Детокс-панель и токсичные металлы</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="tests"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Интегративная</span><div class="dept-card-name">Оксидативный стресс и антиоксиданты</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="tests"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Кардио</span><div class="dept-card-name">Липидограмма и риски атеросклероза</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="tests"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Онко</span><div class="dept-card-name">Онкомаркеры базовые и расширенные</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="tests"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Иммунология</span><div class="dept-card-name">Иммунограмма и маркеры воспаления</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="tests"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Генетика</span><div class="dept-card-name">Генетический паспорт нутригенетики</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="tests"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Аллергия</span><div class="dept-card-name">Тест пищевой непереносимости (IgG4)</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode" data-category="tests"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Стресс</span><div class="dept-card-name">Суточный кортизол в слюне (ритм стресса)</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode wide-2col" data-category="tests"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Микробиота</span><div class="dept-card-name">Анализ микробиоты по Осипову (ХМС)</div></div></a>
                <a href="<?php echo esc_url(home_url('/services/')); ?>" class="dept-card-fignode wide-2col" data-category="tests"><div class="dept-card-ico-fig"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="" style="width:24px;height:24px;"></div><div class="dept-card-text-fig"><span class="dept-card-badge">Комплекс</span><div class="dept-card-name">Комплексный детокс-скрининг организма</div></div></a>
            </div>
        </div>
    </section>

    <!-- 🌟 6. НАШИ ПРЕИМУЩЕСТВА (FIGMA 252:6977) -->
    <section class="advantages-section-fig">
        <div class="container">
            <h2 class="h2-title">Наши преимущества</h2>
            <div class="advantages-grid-fig">
                <div class="advantage-card-fig reveal-on-scroll">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/clinic_icon_1.png'); ?>" alt="Квалифицированные специалисты" class="adv-icon">
                    <div class="adv-body">
                        <h3 class="adv-title">Квалифицированные специалисты</h3>
                        <p class="adv-desc">Мы гордимся тем, что наши специалисты постоянно повышают свою квалификацию и следят за последними достижениями в области здравоохранения.</p>
                    </div>
                </div>

                <div class="advantage-card-fig reveal-on-scroll delay-1">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/clinic_icon_2.png'); ?>" alt="Современное оборудование" class="adv-icon">
                    <div class="adv-body">
                        <h3 class="adv-title">Современное оборудование</h3>
                        <p class="adv-desc">Мы используем только новейшее медицинское оборудование и технологии для диагностики и лечения, что обеспечивает высокую точность обследований и эффективность процедур.</p>
                    </div>
                </div>

                <div class="advantage-card-fig reveal-on-scroll delay-2">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/clinic_icon_3.png'); ?>" alt="Индивидуальный подход" class="adv-icon">
                    <div class="adv-body">
                        <h3 class="adv-title">Индивидуальный подход</h3>
                        <p class="adv-desc">Для нас каждый пациент уникален, и поэтому мы предлагаем персонализированные планы лечения, учитывающие индивидуальные потребности и пожелания.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🌟 7. ЗАПИСАТЬСЯ В 1 КЛИК -->
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

    <!-- 🌟 8. ЛИЦЕНЗИИ (FIGMA 212:1281) -->
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

    <!-- 🌟 9. НАШИ ВРАЧИ -->
    <section class="doctors-section" id="doctors">
        <div class="container">
            <div class="section-title-wrap">
                <h2 class="h2-title" data-i18n="doctors.title">Наши врачи</h2>
                <a href="<?php echo esc_url(home_url('/doctors/')); ?>" class="btn btn-outline-dark" data-i18n="doctors.all_btn">Все врачи →</a>
            </div>

            <div class="doctors-grid-3col">
                <!-- Doctor Card 1 -->
                <div class="doctor-fig-card reveal-on-scroll">
                    <div class="doctor-fig-photo-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/doctor_1.png'); ?>" alt="Иванов Алексей">
                        <div class="doctor-fig-tag">Врач высшей категории</div>
                    </div>
                    <div class="doctor-rating-row">
                        <span class="star-badge">(4,8) ★</span>
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
                        <a href="<?php echo esc_url(home_url('/doctor-single/')); ?>" class="btn btn-outline-dark" style="width: 100%;">Подробнее о враче</a>
                    </div>
                </div>

                <!-- Doctor Card 2 -->
                <div class="doctor-fig-card reveal-on-scroll delay-1">
                    <div class="doctor-fig-photo-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/doctor_2.png'); ?>" alt="Смирнова Елена">
                        <div class="doctor-fig-tag">Врач высшей категории</div>
                    </div>
                    <div class="doctor-rating-row">
                        <span class="star-badge">(4,8) ★</span>
                        <span style="color: var(--color-gray-light);">• 23 отзыва</span>
                    </div>
                    <div>
                        <h3 style="font-size: 18px; margin-bottom: 4px;" data-i18n="doctors.doc1_name">Иванов Алексей Сергеевич</h3>
                        <div style="font-size: 14px; color: var(--color-secondary-gray);" data-i18n="doctors.doc1_role">Остеопат • 23 года стажа</div>
                    </div>
                    <div class="doctor-price-row">
                        <div class="price-item"><span>В клинике</span><strong>2 999 ₽</strong></div>
                        <div class="price-item"><span>Онлайн</span><strong>2 999 ₽</strong></div>
                        <div class="price-item"><span>На дом</span><strong>2 999 ₽</strong></div>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <button type="button" class="btn btn-primary" style="width: 100%;" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</button>
                        <a href="<?php echo esc_url(home_url('/doctor-single/')); ?>" class="btn btn-outline-dark" style="width: 100%;">Подробнее о враче</a>
                    </div>
                </div>

                <!-- Doctor Card 3 -->
                <div class="doctor-fig-card reveal-on-scroll delay-2">
                    <div class="doctor-fig-photo-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/doctor_3.png'); ?>" alt="Александров Михаил">
                        <div class="doctor-fig-tag">Врач высшей категории</div>
                    </div>
                    <div class="doctor-rating-row">
                        <span class="star-badge">(4,8) ★</span>
                        <span style="color: var(--color-gray-light);">• 23 отзыва</span>
                    </div>
                    <div>
                        <h3 style="font-size: 18px; margin-bottom: 4px;" data-i18n="doctors.doc2_name">Иванов Алексей Сергеевич</h3>
                        <div style="font-size: 14px; color: var(--color-secondary-gray);" data-i18n="doctors.doc2_role">Остеопат • 23 года стажа</div>
                    </div>
                    <div class="doctor-price-row">
                        <div class="price-item"><span>В клинике</span><strong>2 999 ₽</strong></div>
                        <div class="price-item"><span>Онлайн</span><strong>2 999 ₽</strong></div>
                        <div class="price-item"><span>На дом</span><strong>2 999 ₽</strong></div>
                    </div>
                    <div style="display: flex; flex-direction: column; gap: 8px;">
                        <button type="button" class="btn btn-primary" style="width: 100%;" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</button>
                        <a href="<?php echo esc_url(home_url('/doctor-single/')); ?>" class="btn btn-outline-dark" style="width: 100%;">Подробнее о враче</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 🌟 10. ПРИМИТЕ ПОМОЩЬ ОТ НАШИХ СПЕЦИАЛИСТОВ (CTA CONTACTS) -->
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

    <!-- 🌟 11. НАМ ДОВЕРЯЮТ (RATINGS FIGMA MATCH) -->
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

    <!-- 🌟 12. ОТЗЫВЫ (REVIEWS) -->
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

    <!-- 🌟 13. НОВОСТИ (FIGMA 249:7368) -->
    <section class="news-fignode-section" id="news">
        <div class="container">
            <div class="news-fignode-header">
                <h2 class="news-fignode-title" data-i18n="nav.blog">Новости</h2>
                <div class="news-fignode-arrows">
                    <button type="button" class="review-arrow-btn" id="news-prev" title="Назад">←</button>
                    <button type="button" class="review-arrow-btn" id="news-next" title="Вперед">→</button>
                </div>
            </div>

            <div class="news-fignode-grid">
                <article class="news-card-fignode reveal-on-scroll">
                    <div class="news-card-img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/news_figma.png'); ?>" alt="Новости 1" onerror="this.src='<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery_1.png'); ?>';">
                    </div>
                    <div class="news-card-body-wrap">
                        <div>
                            <div class="news-date-text">21.04.2025</div>
                            <h3 class="news-title-text">Новые методы диагностики: <br>что изменится в 2025 году?</h3>
                        </div>
                        <p class="news-desc-text">Узнайте о последних инновациях в диагностике, которые позволяют быстрее и точнее выявлять заболевания.</p>
                        <a href="<?php echo esc_url(home_url('/article/')); ?>" class="news-read-btn">
                            <span>Читать</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </article>

                <article class="news-card-fignode reveal-on-scroll delay-1">
                    <div class="news-card-img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/news_figma.png'); ?>" alt="Новости 2" onerror="this.src='<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery_2.png'); ?>';">
                    </div>
                    <div class="news-card-body-wrap">
                        <div>
                            <div class="news-date-text">21.04.2025</div>
                            <h3 class="news-title-text">Новые методы диагностики: <br>что изменится в 2025 году?</h3>
                        </div>
                        <p class="news-desc-text">Узнайте о последних инновациях в диагностике, которые позволяют быстрее и точнее выявлять заболевания.</p>
                        <a href="<?php echo esc_url(home_url('/article/')); ?>" class="news-read-btn">
                            <span>Читать</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </article>

                <article class="news-card-fignode reveal-on-scroll delay-2">
                    <div class="news-card-img-wrap">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/news_figma.png'); ?>" alt="Новости 3" onerror="this.src='<?php echo esc_url(get_template_directory_uri() . '/assets/images/gallery_3.png'); ?>';">
                    </div>
                    <div class="news-card-body-wrap">
                        <div>
                            <div class="news-date-text">21.04.2025</div>
                            <h3 class="news-title-text">Новые методы диагностики: <br>что изменится в 2025 году?</h3>
                        </div>
                        <p class="news-desc-text">Узнайте о последних инновациях в диагностике, которые позволяют быстрее и точнее выявлять заболевания.</p>
                        <a href="<?php echo esc_url(home_url('/article/')); ?>" class="news-read-btn">
                            <span>Читать</span>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </a>
                    </div>
                </article>
            </div>

            <div class="news-footer-btn-wrap">
                <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="news-btn-all">Читать все новости</a>
            </div>
        </div>
    </section>

    <!-- 🌟 14. СВЯЗЬ С ДИРЕКТОРОМ (FIGMA 249:7421) -->
    <section class="director-fignode-section" id="director">
        <div class="container">
            <div class="director-card-fignode reveal-on-scroll">
                <div class="director-form-col">
                    <h2 class="director-title-fig">Связь с директором</h2>
                    <p class="director-desc-fig">
                        Если у вас есть вопросы, пожелания или комментарии, пожалуйста, заполните форму обратной связи ниже. Мы постараемся ответить на ваше сообщение в кратчайшие сроки.
                    </p>
                    <form id="director-form" class="director-inputs-stack" onsubmit="event.preventDefault(); alert('Спасибо за обращение! Ваше письмо передано лично директору.'); this.reset();">
                        <input type="text" class="director-input-item" placeholder="Имя *" required>
                        <input type="email" class="director-input-item" placeholder="Email *" required>
                        <input type="text" class="director-input-item" placeholder="Вопрос *" required>
                        <div class="director-policy-row">
                            <input type="checkbox" required style="width: 20px; height: 20px; margin-top: 2px;">
                            <p class="director-policy-text">Нажимая кнопку Отправить, вы принимаете условия пользовательского соглашения и политики конфиденциальности</p>
                        </div>
                        <button type="submit" class="director-submit-btn">Отправить</button>
                    </form>
                </div>
                <div class="director-image-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/director_form_figma.png'); ?>" alt="Связь с директором" onerror="this.src='<?php echo esc_url(get_template_directory_uri() . '/assets/images/questions_doc.png'); ?>';">
                </div>
            </div>
        </div>
    </section>

    <!-- 🌟 15. FAQ (FIGMA 249:7448) -->
    <section class="faq-section" id="faq">
        <div class="container faq-container">
            <h2 class="h2-title" style="margin-bottom: 32px;">FAQ</h2>

            <div class="faq-fig-item active">
                <button type="button" class="faq-fig-trigger">
                    <span><strong>1.</strong>&nbsp;&nbsp;Как записаться на прием к врачу?</span>
                    <span>⌃</span>
                </button>
                <div class="faq-fig-answer">
                    <p>Вы можете записаться на прием к врачу, позвонив по телефону нашей клиники или оставив онлайн заявку на нашем сайте.</p>
                </div>
            </div>

            <div class="faq-fig-item">
                <button type="button" class="faq-fig-trigger">
                    <span><strong>2.</strong>&nbsp;&nbsp;Предоставляете ли вы услуги срочного вызова врача на дом?</span>
                    <span>⌄</span>
                </button>
                <div class="faq-fig-answer">
                    <p>Да, наша служба выездной медицинской помощи работает ежедневно без выходных с портативным диагностическим оборудованием.</p>
                </div>
            </div>

            <div class="faq-fig-item">
                <button type="button" class="faq-fig-trigger">
                    <span><strong>3.</strong>&nbsp;&nbsp;Какие виды исследований вы проводите в вашей клинике?</span>
                    <span>⌄</span>
                </button>
                <div class="faq-fig-answer">
                    <p>Мы проводим экспертное УЗИ всех органов, ЭКГ, холтеровское мониторирование, а также полный спектр лабораторных и генетических анализов.</p>
                </div>
            </div>

            <div class="faq-fig-item">
                <button type="button" class="faq-fig-trigger">
                    <span><strong>4.</strong>&nbsp;&nbsp;Каковы часы работы вашей клиники?</span>
                    <span>⌄</span>
                </button>
                <div class="faq-fig-answer">
                    <p>Клиника работает с понедельника по пятницу с 09:00 до 20:00, в субботу и воскресенье — с 10:00 до 18:00.</p>
                </div>
            </div>

            <div class="faq-fig-item">
                <button type="button" class="faq-fig-trigger">
                    <span><strong>5.</strong>&nbsp;&nbsp;Принимаете ли вы пациентов без предварительной записи?</span>
                    <span>⌄</span>
                </button>
                <div class="faq-fig-answer">
                    <p>При наличии экстренных показаний мы окажем помощь незамедлительно, однако для планового комфортного приема рекомендуем предварительную запись.</p>
                </div>
            </div>

            <div class="faq-fig-item">
                <button type="button" class="faq-fig-trigger">
                    <span><strong>6.</strong>&nbsp;&nbsp;Есть ли у вас программа лояльности для постоянных клиентов?</span>
                    <span>⌄</span>
                </button>
                <div class="faq-fig-answer">
                    <p>Да, у нас действуют накопительные семейные скидки, а также специальные комплексные пакеты Check-up с выгодой до 35%.</p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 32px;">
                <button type="button" class="btn btn-primary" data-open-modal="booking" style="padding: 12px 32px;">Задайте свой вопрос</button>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
