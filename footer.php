<?php
/**
 * The Footer template for Rene Medical Clinic Theme (Figma Match)
 */
$phone = get_option('rene_phone', '+7 (800) 555-35-35');
$address = get_option('rene_address', 'г. Москва, ул. Центральная, д. 10');
?>
<!-- 🌟 UNIFIED FOOTER (FIGMA 202:26) -->
<footer class="site-footer" id="contacts">
    <div class="container">
        <!-- Top Row: Logo, Hours, Address, Phone, CTA, Socials -->
        <div class="footer-top-grid">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/aec2cde32bb8a186faf80b86e8fd9eacf61c9341.png'); ?>" alt="Medical Clinic" style="height: 48px;">
            </a>

            <div class="footer-meta-item">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/clock.svg'); ?>" alt="Время" style="width: 20px;" onerror="this.src='<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/a7e5deb507afb2375e43e59383bc9a071454ab00.svg'); ?>';">
                <span>Пн-Пт 09:00-20:00;<br>Сб-Вс 10:00-18:00</span>
            </div>

            <div class="footer-meta-item">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/map.svg'); ?>" alt="Адрес" style="width: 20px;" onerror="this.src='<?php echo esc_url(get_template_directory_uri() . '/assets/images/assets/4a84f4712afe31754bfd5e656bc10a8ced41f936.svg'); ?>';">
                <span><?php echo esc_html($address); ?></span>
            </div>

            <div style="font-size: 20px; font-weight: 600;">
                <?php echo esc_html($phone); ?>
            </div>

            <a href="#booking" class="btn btn-primary" data-open-modal="booking">Перезвоните мне</a>

            <div class="footer-social-row">
                <a href="https://t.me/medclinic_demo" class="footer-social-icon" target="_blank" rel="noopener" title="Telegram">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/social-tg.svg'); ?>" alt="Telegram">
                </a>
                <a href="https://wa.me/78005553535" class="footer-social-icon" target="_blank" rel="noopener" title="WhatsApp">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/social-wa.svg'); ?>" alt="WhatsApp">
                </a>
                <a href="https://vk.com/medclinic_demo" class="footer-social-icon" target="_blank" rel="noopener" title="VK">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/social-vk.svg'); ?>" alt="VK">
                </a>
                <a href="https://instagram.com/medclinic_demo" class="footer-social-icon" target="_blank" rel="noopener" title="Instagram">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/social-ig.svg'); ?>" alt="Instagram">
                </a>
            </div>
        </div>

        <!-- Middle Row: Disclaimer and License Info -->
        <div class="footer-mid-grid">
            <div>
                <p style="margin-bottom: 14px;">
                    Сайт носит информационный характер и не является публичной офертой, согласно Статье 437 (2) ГК РФ. Цены приведены, как справочная информация и могут быть изменены. Для получения подробной информации о стоимости, сроках и условиях звоните по телефону клиники.
                </p>
                <p>
                    Мы используем файлы cookie для того, чтобы предоставить пользователям больше возможностей при посещении сайта Медикал Клиник
                </p>
            </div>

            <div>
                <div class="footer-payment-group">
                    <span class="footer-payment-title">Мы принимаем к оплате:</span>
                    <div class="footer-payment-icons">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/payment-visa.svg'); ?>" alt="Visa" class="footer-payment-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/payment-mastercard.svg'); ?>" alt="Mastercard" class="footer-payment-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/payment-mir.svg'); ?>" alt="МИР" class="footer-payment-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/payment-sbp.svg'); ?>" alt="СБП" class="footer-payment-icon">
                    </div>
                </div>
                <p>
                    Медицинские услуги лицензированы и предоставляются ООО "Клиника интегративной медицины" в медицинском центре по адресу: 420032, Россия, Республика Татарстан, г. Москва, ул. Энгельса, д. 7, корп. 3, помещение 1. Лицензия на медицинскую деятельность Л041-01181-16/00355613.
                </p>
            </div>
        </div>

        <!-- Bottom Copyright and Links -->
        <div class="footer-bottom-grid">
            <div>© 2014 - 2025 Клиника интегративной медицины Все права защищены</div>
            <a href="<?php echo esc_url(home_url('/privacy')); ?>" style="color: inherit; text-decoration: none;">Политика конфиденциальности</a>
            <a href="<?php echo esc_url(home_url('/terms')); ?>" style="color: inherit; text-decoration: none;">Пользовательское соглашение</a>
        </div>

        <!-- Warning Bar (Bebas Neue Cyrillic) -->
        <div class="footer-warning-bar">
            ИМЕЮТСЯ ПРОТИВОПОКАЗАНИЯ, НЕОБХОДИМА КОНСУЛЬТАЦИЯ С ВРАЧОМ
        </div>
    </div>
</footer>

<!-- 4 Themes Demo Switcher Widget -->
<div class="theme-switcher-widget">
    <span style="font-size: 12px; font-weight: 600; color: #4a5660;" data-i18n="theme_switcher.title">Стиль:</span>
    <div class="theme-dots">
        <div class="theme-dot theme-dot-blue active" data-theme-val="blue" title="Голубой (Классика)"></div>
        <div class="theme-dot theme-dot-green" data-theme-val="green" title="Зеленый (Wellness)"></div>
        <div class="theme-dot theme-dot-cream" data-theme-val="cream" title="Кремовый (Премиум)"></div>
        <div class="theme-dot theme-dot-rose" data-theme-val="rose" title="Пыльно-розовый (Эстетика)"></div>
    </div>
</div>

<!-- Modal Dialog -->
<div class="modal-overlay" id="booking-modal">
    <div class="modal-dialog">
        <button type="button" class="modal-close" id="modal-close-btn">✕</button>
        <div id="booking-form-wrap">
            <h3 style="font-size: 24px; margin-bottom: 8px;" data-i18n="booking_modal.title">Запись на прием к специалисту</h3>
            <p style="font-size: 14px; color: #4a5660; margin-bottom: 20px;" data-i18n="booking_modal.subtitle">Оставьте заявку, и координатор перезвонит в течение 5 минут</p>
            <form id="booking-form">
                <input type="text" class="form-control" placeholder="Ваше имя *" required data-i18n="booking_modal.name_placeholder">
                <input type="tel" class="form-control" placeholder="+7 (___) ___-__-__ *" required data-i18n="booking_modal.phone_placeholder">
                <select class="form-control">
                    <option value="" data-i18n="appointment_form.dept_default">Выберите отделение</option>
                    <option value="endocrinology" data-i18n="dept.endocrinology">Эндокринология</option>
                    <option value="spine" data-i18n="dept.spine">Позвоночник и суставы</option>
                    <option value="neurology" data-i18n="dept.neurology">Неврология</option>
                </select>
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-top: 10px;" data-i18n="booking_modal.submit_btn">Подтвердить запись</button>
            </form>
        </div>
        <div id="booking-success" style="display: none; text-align: center; padding: 20px 0;">
            <div style="font-size: 40px; margin-bottom: 12px;">✅</div>
            <h3 data-i18n="booking_modal.success_title">Заявка принята!</h3>
            <p style="color: #4a5660; font-size: 14px;" data-i18n="booking_modal.success_desc">Мы свяжемся с вами в ближайшее время.</p>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
