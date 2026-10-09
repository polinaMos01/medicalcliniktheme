<?php
/**
 * Theme Functions & White-Label Medical Administration
 * Theme: Rene Medical Clinic
 */

if (!defined('ABSPATH')) {
    exit;
}

// 1. Theme Setup
function rene_medical_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
    add_theme_support('custom-logo', [
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    register_nav_menus([
        'primary' => __('Главное меню', 'rene-medical'),
        'footer'  => __('Меню в подвале', 'rene-medical'),
    ]);
}
add_action('after_setup_theme', 'rene_medical_setup');

// 2. Enqueue Scripts & Styles
function rene_medical_scripts() {
    wp_enqueue_style('rene-fonts', get_template_directory_uri() . '/assets/css/fonts.css', [], '1.0.0');
    wp_enqueue_style('rene-themes', get_template_directory_uri() . '/assets/css/themes.css', ['rene-fonts'], '1.0.0');
    wp_enqueue_style('rene-main', get_template_directory_uri() . '/assets/css/main.css', ['rene-themes'], '1.0.0');
    wp_enqueue_style('rene-responsive', get_template_directory_uri() . '/assets/css/responsive.css', ['rene-main'], '1.0.0');
    wp_enqueue_style('rene-animations', get_template_directory_uri() . '/assets/css/animations.css', ['rene-main'], '1.0.0');
    wp_enqueue_style('rene-style', get_stylesheet_uri(), ['rene-main'], '1.0.0');

    // JS
    wp_enqueue_script('rene-theme-switcher', get_template_directory_uri() . '/assets/js/theme-switcher.js', [], '1.0.0', true);
    wp_enqueue_script('rene-i18n', get_template_directory_uri() . '/assets/js/i18n.js', [], '1.0.0', true);
    wp_enqueue_script('rene-main-js', get_template_directory_uri() . '/assets/js/main.js', ['rene-theme-switcher', 'rene-i18n'], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'rene_medical_scripts');

// 3. Custom Post Types (Doctors, Services, Reviews, Appointments Mini-CRM)
function rene_medical_register_cpts() {
    // Doctors
    register_post_type('rene_doctor', [
        'labels' => [
            'name'          => '👨‍⚕️ Врачи',
            'singular_name' => 'Врач',
            'add_new'       => 'Добавить врача',
            'add_new_item'  => 'Добавить нового специалиста',
            'edit_item'     => 'Редактировать профиль врача',
        ],
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-businessman',
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest' => true,
    ]);

    // Services
    register_post_type('rene_service', [
        'labels' => [
            'name'          => '🏥 Услуги и Программы',
            'singular_name' => 'Услуга',
            'add_new'       => 'Добавить услугу',
            'add_new_item'  => 'Добавить новую программу / услугу',
            'edit_item'     => 'Редактировать услугу',
        ],
        'public'       => true,
        'has_archive'  => true,
        'menu_icon'    => 'dashicons-heart',
        'supports'     => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest' => true,
    ]);

    // Reviews
    register_post_type('rene_review', [
        'labels' => [
            'name'          => '💬 Отзывы пациентов',
            'singular_name' => 'Отзыв',
            'add_new'       => 'Добавить отзыв',
            'add_new_item'  => 'Добавить отзыв пациента',
            'edit_item'     => 'Редактировать отзыв',
        ],
        'public'       => true,
        'menu_icon'    => 'dashicons-testimonial',
        'supports'     => ['title', 'editor', 'custom-fields'],
        'show_in_rest' => true,
    ]);

    // Appointments (Mini-CRM)
    register_post_type('rene_appointment', [
        'labels' => [
            'name'               => '📅 Онлайн-записи (CRM)',
            'singular_name'      => 'Запись',
            'add_new'            => 'Создать запись',
            'add_new_item'       => 'Новая запись на прием',
            'edit_item'          => 'Просмотр карточки записи',
            'all_items'          => 'Все заявки с сайта',
        ],
        'public'          => false,
        'show_ui'         => true,
        'show_in_menu'    => true,
        'menu_icon'       => 'dashicons-calendar-alt',
        'supports'        => ['title', 'custom-fields'],
        'capability_type' => 'post',
    ]);
}
add_action('init', 'rene_medical_register_cpts');

// 4. White-Label Admin Custom Medical Dashboard
function rene_medical_dashboard_widget() {
    wp_add_dashboard_widget(
        'rene_clinic_dashboard_widget',
        '🏥 Панель управления клиникой (White-Label)',
        'rene_render_dashboard_widget'
    );
}
add_action('wp_dashboard_setup', 'rene_medical_dashboard_widget');

function rene_render_dashboard_widget() {
    $doctors_count = wp_count_posts('rene_doctor')->publish;
    $services_count = wp_count_posts('rene_service')->publish;
    $appointments_count = wp_count_posts('rene_appointment')->publish;
    ?>
    <div style="padding: 10px 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;">
        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; margin-bottom: 20px;">
            <div style="background: #EFF7FD; border: 1px solid #C9D7E2; padding: 14px; border-radius: 10px; text-align: center;">
                <div style="font-size: 24px; font-weight: bold; color: #315778;"><?php echo esc_html($appointments_count); ?></div>
                <div style="font-size: 12px; color: #4A5660; margin-top: 4px;">Новых заявок</div>
            </div>
            <div style="background: #F0FDF4; border: 1px solid #A7F3D0; padding: 14px; border-radius: 10px; text-align: center;">
                <div style="font-size: 24px; font-weight: bold; color: #065F46;"><?php echo esc_html($doctors_count); ?></div>
                <div style="font-size: 12px; color: #047857; margin-top: 4px;">Врачей в штате</div>
            </div>
            <div style="background: #FFFBEB; border: 1px solid #FDE68A; padding: 14px; border-radius: 10px; text-align: center;">
                <div style="font-size: 24px; font-weight: bold; color: #B45309;"><?php echo esc_html($services_count); ?></div>
                <div style="font-size: 12px; color: #92400E; margin-top: 4px;">Активных услуг</div>
            </div>
        </div>
        <div style="display: flex; gap: 10px; flex-wrap: wrap;">
            <a href="<?php echo esc_url(admin_url('post-new.php?post_type=rene_doctor')); ?>" class="button button-primary" style="background: #5AA6EB; border-color: #5AA6EB; border-radius: 6px;">➕ Добавить врача</a>
            <a href="<?php echo esc_url(admin_url('post-new.php?post_type=rene_service')); ?>" class="button" style="border-radius: 6px;">➕ Добавить услугу</a>
            <a href="<?php echo esc_url(admin_url('edit.php?post_type=rene_appointment')); ?>" class="button button-primary" style="background: #10B981; border-color: #10B981; border-radius: 6px;">📋 Просмотреть заявки</a>
            <a href="<?php echo esc_url(admin_url('admin.php?page=rene-theme-settings')); ?>" class="button" style="border-radius: 6px;">⚙️ Настройки тем & Цветов</a>
        </div>
    </div>
    <?php
}

// 5. Remove Standard Cluttered WP Dashboard Widgets
function rene_remove_default_dashboard_widgets() {
    remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
    remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
    remove_meta_box('dashboard_primary', 'dashboard', 'side');
    remove_meta_box('dashboard_secondary', 'dashboard', 'side');
    remove_meta_box('dashboard_welcome', 'dashboard', 'normal');
}
add_action('wp_dashboard_setup', 'rene_remove_default_dashboard_widgets', 999);

// 6. Custom Admin Settings Page for Clinic Themes & Contacts
function rene_add_admin_settings_menu() {
    add_menu_page(
        'Настройки клиники',
        '⚙️ Клиника (White-Label)',
        'manage_options',
        'rene-theme-settings',
        'rene_render_settings_page',
        'dashicons-admin-generic',
        2
    );
}
add_action('admin_menu', 'rene_add_admin_settings_menu');

function rene_render_settings_page() {
    if (isset($_POST['rene_save_settings']) && check_admin_referer('rene_settings_verify')) {
        update_option('rene_default_theme', sanitize_text_field($_POST['rene_default_theme']));
        update_option('rene_phone', sanitize_text_field($_POST['rene_phone']));
        update_option('rene_email', sanitize_email($_POST['rene_email']));
        update_option('rene_address', sanitize_text_field($_POST['rene_address']));
        update_option('rene_whatsapp', sanitize_text_field($_POST['rene_whatsapp']));
        update_option('rene_license', sanitize_text_field($_POST['rene_license']));
        echo '<div class="updated"><p>Настройки клиники успешно сохранены!</p></div>';
    }

    $current_theme = get_option('rene_default_theme', 'blue');
    $phone = get_option('rene_phone', '+7 (495) 120-33-88');
    $email = get_option('rene_email', 'info@rene-clinic.ru');
    $address = get_option('rene_address', 'г. Москва, ул. Большая Полянка, д. 42');
    $whatsapp = get_option('rene_whatsapp', '+79991234567');
    $license = get_option('rene_license', 'Лицензия ЛО-77-01-021456 от 15.04.2023');
    ?>
    <div class="wrap" style="max-width: 800px; font-family: -apple-system, BlinkMacSystemFont, sans-serif;">
        <h1 style="display: flex; align-items: center; gap: 10px;">🏥 Настройки медицинской клиники <span style="font-size: 14px; background: #EFF7FD; color: #315778; padding: 4px 10px; border-radius: 12px;">White-Label</span></h1>
        <p style="color: #666;">Настройте базовую цветовую гамму для демонстрации или работы сайта, контакты и реквизиты.</p>

        <form method="post" action="" style="background: #fff; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0; margin-top: 20px;">
            <?php wp_nonce_field('rene_settings_verify'); ?>

            <h3 style="margin-top: 0; border-bottom: 1px solid #edf2f7; padding-bottom: 10px;">🎨 Цветовая гамма сайта по умолчанию</h3>
            <table class="form-table">
                <tr>
                    <th scope="row">Основная палитра</th>
                    <td>
                        <select name="rene_default_theme" style="min-width: 300px; height: 38px; border-radius: 6px;">
                            <option value="blue" <?php selected($current_theme, 'blue'); ?>>🔵 Голубой (Классическая медицина / Доверие)</option>
                            <option value="green" <?php selected($current_theme, 'green'); ?>>🟢 Зеленый (Здоровье / Стоматология / Эко)</option>
                            <option value="cream" <?php selected($current_theme, 'cream'); ?>>🟡 Кремовый (Премиум / Айвори / Эстетика)</option>
                            <option value="rose" <?php selected($current_theme, 'rose'); ?>>🌸 Пыльно-розовый (Косметология / Дерматология)</option>
                        </select>
                        <p class="description">Посетители также могут переключать палитры через плавающую демо-плашку.</p>
                    </td>
                </tr>
            </table>

            <h3 style="margin-top: 30px; border-bottom: 1px solid #edf2f7; padding-bottom: 10px;">📞 Контактные данные клиники</h3>
            <table class="form-table">
                <tr>
                    <th scope="row">Основной телефон</th>
                    <td><input type="text" name="rene_phone" value="<?php echo esc_attr($phone); ?>" class="regular-text" style="height: 38px; border-radius: 6px;" /></td>
                </tr>
                <tr>
                    <th scope="row">Email для заявок</th>
                    <td><input type="email" name="rene_email" value="<?php echo esc_attr($email); ?>" class="regular-text" style="height: 38px; border-radius: 6px;" /></td>
                </tr>
                <tr>
                    <th scope="row">Адрес клиники</th>
                    <td><input type="text" name="rene_address" value="<?php echo esc_attr($address); ?>" class="regular-text" style="height: 38px; border-radius: 6px;" /></td>
                </tr>
                <tr>
                    <th scope="row">WhatsApp для связи</th>
                    <td><input type="text" name="rene_whatsapp" value="<?php echo esc_attr($whatsapp); ?>" class="regular-text" style="height: 38px; border-radius: 6px;" /></td>
                </tr>
                <tr>
                    <th scope="row">Лицензия и юр. реквизиты</th>
                    <td><input type="text" name="rene_license" value="<?php echo esc_attr($license); ?>" class="regular-text" style="height: 38px; border-radius: 6px;" /></td>
                </tr>
            </table>

            <p class="submit" style="margin-top: 24px;">
                <input type="submit" name="rene_save_settings" class="button button-primary" value="Сохранить настройки" style="background: #5AA6EB; border-color: #5AA6EB; height: 40px; padding: 0 24px; font-weight: 600; border-radius: 8px;" />
            </p>
        </form>
    </div>
    <?php
}

// 7. Custom Login Screen Styling (White Label Medical)
function rene_custom_login_styles() {
    ?>
    <style type="text/css">
        body.login {
            background-color: #EFF7FD;
            font-family: 'Raleway', -apple-system, sans-serif;
        }
        #login h1 a {
            background-image: none !important;
            display: none !important;
        }
        #login::before {
            content: '🏥 MEDICAL CLINIC';
            display: block;
            text-align: center;
            font-size: 28px;
            font-weight: 700;
            color: #315778;
            margin-bottom: 24px;
            letter-spacing: -0.02em;
        }
        .login form {
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid #C9D7E2;
            box-shadow: 0 16px 40px rgba(90, 166, 235, 0.12);
            padding: 30px;
        }
        .wp-core-ui .button-primary {
            background: #5AA6EB !important;
            border-color: #5AA6EB !important;
            border-radius: 10px !important;
            height: 42px !important;
            line-height: 40px !important;
            font-weight: 600 !important;
        }
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'rene_custom_login_styles');
