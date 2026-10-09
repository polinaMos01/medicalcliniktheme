<?php
/**
 * The Header template for Rene Medical Clinic Theme
 */
$default_theme = get_option('rene_default_theme', 'blue');
$phone = get_option('rene_phone', '+7 (800) 555-35-35');
$address = get_option('rene_address', 'г. Москва, ул. Центральная, 57');
$hours = get_option('rene_hours', 'Пн-Пт 09:00-20:00; Сб-Вс 10:00-18:00');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> data-theme="<?php echo esc_attr($default_theme); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Noto+Sans+Armenian:wght@400;500;700&family=Open+Sans:wght@400;600;700&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- 🌟 UNIFIED 2-TIER HEADER (FIGMA 202:46) -->
<header class="site-header">
    <div class="container">
        <!-- Top Row: Logo, Location, Schedule, Phone, CTA, Languages -->
        <div class="header-top-row">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/assets/aec2cde32bb8a186faf80b86e8fd9eacf61c9341.png" alt="Medical Clinic" class="header-logo-img">
            </a>

            <div class="header-meta-group">
                <div class="header-meta-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/assets/4a84f4712afe31754bfd5e656bc10a8ced41f936.svg" alt="Локация" class="header-meta-icon">
                    <span data-i18n="nav.address"><?php echo esc_html($address); ?></span>
                </div>

                <div class="header-meta-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/assets/a7e5deb507afb2375e43e59383bc9a071454ab00.svg" alt="Время" class="header-meta-icon">
                    <span data-i18n="nav.work_hours"><?php echo nl2br(esc_html(str_replace('; ', ";\n", $hours))); ?></span>
                </div>
            </div>

            <div class="header-phone-group">
                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', $phone)); ?>" class="header-phone-val"><?php echo esc_html($phone); ?></a>

                <div class="lang-switcher">
                    <button type="button" class="lang-btn active" data-lang="ru">RU</button>
                    <button type="button" class="lang-btn" data-lang="en">EN</button>
                    <button type="button" class="lang-btn" data-lang="hy">HY</button>
                </div>

                <a href="#booking" class="btn btn-primary" data-open-modal="booking" data-i18n="nav.call_request">Перезвоните мне</a>

                <button class="burger-btn" id="burger-btn" aria-label="Открыть меню">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>

        <!-- Bottom Row: Navigation Menu -->
        <div class="header-nav-row">
            <a href="<?php echo esc_url(home_url('/doctors')); ?>" data-i18n="nav.doctors">Врачи</a>
            <a href="<?php echo esc_url(home_url('/departments')); ?>" data-i18n="nav.departments">Направления</a>
            <a href="<?php echo esc_url(home_url('/diagnostics')); ?>" data-i18n="nav.diagnostics">Диагностика</a>
            <a href="<?php echo esc_url(home_url('/procedures')); ?>" data-i18n="nav.procedures">Процедуры</a>
            <a href="<?php echo esc_url(home_url('/treatments')); ?>" data-i18n="nav.treatments">Мы лечим</a>
            <div class="nav-item-dropdown">
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="nav-link-dropdown">
                    <span data-i18n="nav.about">О клинике</span>
                    <svg class="dropdown-arrow-icon" width="10" height="6" viewBox="0 0 10 6" fill="none">
                        <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <div class="dropdown-menu">
                    <a href="<?php echo esc_url(home_url('/about')); ?>" data-i18n="nav.about">О нас</a>
                    <a href="<?php echo esc_url(home_url('/licences')); ?>" data-i18n="nav.licences">Лицензии</a>
                    <a href="<?php echo esc_url(home_url('/vacancies')); ?>">Вакансии</a>
                    <a href="<?php echo esc_url(home_url('/blog')); ?>" data-i18n="nav.blog">Блог</a>
                </div>
            </div>
            <div class="nav-item-dropdown">
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="nav-link-dropdown">
                    <span data-i18n="nav.patients">Пациенту</span>
                    <svg class="dropdown-arrow-icon" width="10" height="6" viewBox="0 0 10 6" fill="none">
                        <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <div class="dropdown-menu">
                    <a href="<?php echo esc_url(home_url('/promotions')); ?>">Акции</a>
                    <a href="<?php echo esc_url(home_url('/tax-deduction')); ?>">Налоговый вычет</a>
                    <a href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a>
                </div>
            </div>
            <a href="<?php echo esc_url(home_url('/contacts')); ?>" data-i18n="nav.contacts">Контакты</a>
        </div>
    </div>
</header>

<!-- Mobile Fullscreen Menu -->
<div class="mobile-menu-overlay" id="mobile-menu">
    <ul class="mobile-nav-links">
        <li><a href="<?php echo esc_url(home_url('/doctors')); ?>" data-i18n="nav.doctors">Врачи</a></li>
        <li><a href="<?php echo esc_url(home_url('/departments')); ?>" data-i18n="nav.departments">Направления</a></li>
        <li><a href="<?php echo esc_url(home_url('/diagnostics')); ?>" data-i18n="nav.diagnostics">Диагностика</a></li>
        <li><a href="<?php echo esc_url(home_url('/procedures')); ?>" data-i18n="nav.procedures">Процедуры</a></li>
        <li><a href="<?php echo esc_url(home_url('/treatments')); ?>" data-i18n="nav.treatments">Мы лечим</a></li>
        <li><a href="<?php echo esc_url(home_url('/about')); ?>" data-i18n="nav.about">О нас</a></li>
        <li><a href="<?php echo esc_url(home_url('/licences')); ?>" data-i18n="nav.licences">Лицензии</a></li>
        <li><a href="<?php echo esc_url(home_url('/vacancies')); ?>">Вакансии</a></li>
        <li><a href="<?php echo esc_url(home_url('/blog')); ?>" data-i18n="nav.blog">Блог</a></li>
        <li><a href="<?php echo esc_url(home_url('/promotions')); ?>">Акции</a></li>
        <li><a href="<?php echo esc_url(home_url('/tax-deduction')); ?>">Налоговый вычет</a></li>
        <li><a href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a></li>
        <li><a href="<?php echo esc_url(home_url('/contacts')); ?>" data-i18n="nav.contacts">Контакты</a></li>
    </ul>
    <div style="display: flex; flex-direction: column; gap: 16px;">
        <div class="lang-switcher" style="justify-content: center;">
            <button type="button" class="lang-btn active" data-lang="ru">RU</button>
            <button type="button" class="lang-btn" data-lang="en">EN</button>
            <button type="button" class="lang-btn" data-lang="hy">HY</button>
        </div>
        <a href="#booking" class="btn btn-primary" style="width: 100%; text-align: center;" data-open-modal="booking" data-i18n="nav.book_appointment">Записаться на прием</a>
    </div>
</div>
