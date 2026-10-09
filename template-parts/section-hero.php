<?php
/**
 * Hero Section Template Part (Figma 202:26 / 202:67)
 */
?>
<section class="hero-figma" id="home">
    <div class="container">
        <div class="hero-body-grid">
            <!-- Left Column: Heading, Subtitle, CTA Button, Promo Card -->
            <div class="hero-left-col reveal-on-scroll">
                <!-- 3-line Hero Main Heading (Figma 202:67) -->
                <h1 class="hero-main-heading" data-i18n="hero.title">КЛИНИКА<br>ИНТЕГРАТИВНОЙ<br>МЕДИЦИНЫ</h1>
                <p class="hero-subheading" data-i18n="hero.subtitle">Ваш путь к здоровью — интегративный подход к лечению!</p>
                
                <div class="hero-cta-btn-wrap">
                    <a href="#booking" class="btn btn-primary btn-hero-cta" data-open-modal="booking" data-i18n="hero.cta">Записаться на приём</a>
                </div>

                <!-- Interactive Hero Promo Card Carousel (Figma 212:680) -->
                <div class="figma-promo-card-wrap">
                    <div class="figma-promo-card">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/ae96da2b5d2ff4a3ded07ee033fb6c3f7f2bbd45.png'); ?>" alt="Диагностика" class="figma-promo-thumb">
                        <div class="figma-promo-content">
                            <div class="figma-promo-text" data-i18n="hero.promo_badge_desc">Полная диагностика щитовидной железы <br>у эндокринолога: консультация, узи, анализы</div>
                            <div class="figma-promo-price" data-i18n="hero.promo_badge_price">6 999 ₽</div>
                        </div>
                        <button type="button" class="figma-promo-action-btn" title="Следующее предложение">
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

            <!-- Right Column: Visual Composition with Concentric Circles & 3 Floating Stat Chips (Figma 202:30..123) -->
            <div class="hero-visual-col reveal-on-scroll delay-2">
                <div class="hero-circles-wrap">
                    <div class="circle-bg-4"></div>
                    <div class="circle-bg-2"></div>
                    <div class="circle-bg-3"></div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero_center.png'); ?>" alt="Клиника" class="circle-bg-1-img">

                    <!-- 3 Floating Chips anchored to circles -->
                    <div class="figma-chip figma-chip-doctors">
                        <div class="figma-avatar-stack">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/55f6b30bfe9501b009fd1a3545eb7bee7513a97a.png'); ?>" class="figma-avatar" alt="Dr">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/009bb99f71ff2e3701a0f705319e5d35472e92ad.png'); ?>" class="figma-avatar" alt="Dr">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/189cfa982fa45c762e0567ce96f42c81098f2191.png'); ?>" class="figma-avatar" alt="Dr">
                        </div>
                        <div style="width: 133px; display: flex; flex-direction: column; gap: 2px; align-items: flex-end; text-align: right;">
                            <div class="chip-num" data-i18n="hero.stat_doctors_num">40+</div>
                            <div class="chip-label" data-i18n="hero.stat_doctors_text">Опытных врачей</div>
                        </div>
                    </div>

                    <div class="figma-chip figma-chip-patients">
                        <div style="display: flex; flex-direction: column; gap: 2px; align-items: flex-end; text-align: right;">
                            <div class="chip-num" data-i18n="hero.stat_patients_num">150к +</div>
                            <div class="chip-label" data-i18n="hero.stat_patients_text">Довольных пациентов</div>
                        </div>
                    </div>

                    <div class="figma-chip figma-chip-directions">
                        <div class="figma-chip-icon-box">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/e9816969a128a37e3a6d1256280e5c8cb21a91e0.svg'); ?>" alt="Медицинские направления">
                        </div>
                        <div style="display: flex; flex-direction: column; gap: 2px; align-items: flex-end; text-align: right;">
                            <div class="chip-num" data-i18n="hero.stat_directions_num">20 +</div>
                            <div class="chip-label" data-i18n="hero.stat_directions_text">Медицинских направлений</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
