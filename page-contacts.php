<?php
/**
 * Template Name: Contacts Page
 * Template for Contacts (Figma 247:4886)
 * Rene Medical Clinic Theme
 */
get_header();
?>

<main id="primary" class="site-main">
    <!-- 🌟 1. HERO SECTION (FIGMA 247:4886 / 247:5165) -->
    <section class="contacts-page-hero">
        <div class="container">
            <div class="contacts-breadcrumbs">
                <a href="<?php echo esc_url(home_url('/')); ?>" data-i18n="nav.home">Главная</a> / 
                <span data-i18n="nav.contacts">Контакты</span>
            </div>

            <h1 class="contacts-hero-title">КОНТАКТЫ</h1>
            <p class="contacts-hero-subtitle">Если у вас есть вопросы или вы хотите получить консультацию, свяжитесь с нами удобным для вас способом.</p>

            <div class="contacts-hero-grid">
                <!-- Left Details -->
                <div class="contacts-hero-info reveal-on-scroll">
                    <div class="contacts-hero-rows">
                        <div class="contacts-hero-row">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/3ec6860c68b4da62592e55f3ba4cd7f3fea2681d.svg'); ?>" alt="Телефон" class="contacts-hero-icon" onerror="this.src='<?php echo esc_url(get_template_directory_uri() . '/assets/icons/phone.svg'); ?>';">
                            <a href="tel:+78005553535" class="contacts-hero-link" style="font-size: 18px;">+7 (800) 555-35-35</a>
                        </div>
                        <div class="contacts-hero-row">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/4a84f4712afe31754bfd5e656bc10a8ced41f936.svg'); ?>" alt="Адрес" class="contacts-hero-icon">
                            <p class="contacts-hero-text">г. Москва, ул. Центральная, д. 10</p>
                        </div>
                        <div class="contacts-hero-row">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/a7e5deb507afb2375e43e59383bc9a071454ab00.svg'); ?>" alt="Режим работы" class="contacts-hero-icon">
                            <p class="contacts-hero-text">Пн-Пт 09:00-20:00;<br>Сб-Вс 10:00-18:00</p>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" data-open-modal="booking" style="width: 100%; max-width: 280px; padding: 14px 28px; border-radius: 12px; font-weight: 600;">Записаться на приём</button>
                </div>

                <!-- Right Photo -->
                <div class="contacts-hero-photo-wrap reveal-on-scroll delay-1">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/contacts_hero.png'); ?>" alt="Клиника интегративной медицины" onerror="this.src='<?php echo esc_url(get_template_directory_uri() . '/assets/images/why_us.png'); ?>';">
                </div>
            </div>
        </div>
    </section>

    <!-- 🌟 2. INTERACTIVE MAP SECTION (FIGMA 247:5659) -->
    <section class="contacts-map-section">
        <div class="container">
            <div class="contacts-map-top">
                <div class="map-tabs-group">
                    <button type="button" class="map-tab-btn active" data-map-tab="yandex">Яндекс.Карта</button>
                    <button type="button" class="map-tab-btn" data-map-tab="google">Google Карта</button>
                </div>
                <a href="https://yandex.ru/maps/?rtext=~55.8239,49.1257" target="_blank" rel="noopener noreferrer" class="btn btn-primary map-route-btn" id="map-route-btn">
                    <span>Построить маршрут</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 2a8 8 0 0 0-8 8c0 5.25 8 12 8 12s8-6.75 8-12a8 8 0 0 0-8-8z"/>
                        <circle cx="12" cy="10" r="3"/>
                    </svg>
                </a>
            </div>

            <div class="contacts-map-frame reveal-on-scroll">
                <iframe id="map-yandex" src="https://yandex.ru/map-widget/v1/?ll=49.125700%2C55.823900&z=16&pt=49.125700,55.823900,pm2rdm" width="100%" height="480" frameborder="0" allowfullscreen="true"></iframe>
                <iframe id="map-google" src="https://maps.google.com/maps?q=55.8239,49.1257&hl=ru&z=16&output=embed" width="100%" height="480" frameborder="0" allowfullscreen="true" style="display: none;"></iframe>
            </div>
        </div>
    </section>

    <!-- 🌟 3. QUESTIONS / CONTACT FORM SECTION (FIGMA 249:7503 / 242:3300) -->
    <section class="contacts-questions-section" id="questions">
        <div class="container">
            <div class="contacts-questions-card reveal-on-scroll">
                <div class="questions-card-left">
                    <h2 class="questions-card-title">Остались вопросы?</h2>
                    <p class="questions-card-desc">
                        Если у вас есть вопросы, пожелания или комментарии, пожалуйста, заполните форму обратной связи ниже. Мы постараемся ответить на ваше сообщение в кратчайшие сроки.
                    </p>
                    <form id="contacts-form" class="questions-form-stack" onsubmit="event.preventDefault(); alert('Спасибо за обращение! Ваше письмо отправлено.'); this.reset();">
                        <input type="text" name="name" class="questions-form-input" placeholder="Имя *" required>
                        <input type="email" name="email" class="questions-form-input" placeholder="Email *" required>
                        <input type="text" name="question" class="questions-form-input" placeholder="Вопрос *" required>
                        <div class="questions-policy-row">
                            <input type="checkbox" id="contacts-q-policy" required style="width: 20px; height: 20px; margin-top: 2px; accent-color: var(--color-primary); cursor: pointer;">
                            <label for="contacts-q-policy" class="questions-policy-label">Нажимая кнопку Отправить, вы принимаете условия пользовательского соглашения и политики конфиденциальности</label>
                        </div>
                        <button type="submit" class="btn btn-primary questions-submit-btn">Отправить</button>
                    </form>
                </div>
                <div class="questions-photo-wrap">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/contacts_help_figma.png'); ?>" alt="Остались вопросы?" class="questions-photo-img" onerror="this.src='<?php echo esc_url(get_template_directory_uri() . '/assets/images/cta_help.png'); ?>';">
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
