<?php
/**
 * Template Name: Мы лечим (Каталог заболеваний)
 * Description: Standalone Treatments page with condition cards
 */

get_header();
?>

<main class="site-main">
    <div class="container">
        <!-- Breadcrumbs -->
        <div class="breadcrumbs" style="padding: 24px 0 16px; font-size: 14px; color: var(--color-gray-light);">
            <a href="<?php echo esc_url(home_url('/')); ?>" style="color: var(--color-secondary-gray); text-decoration: none;" data-i18n="nav.home">Главная</a> / 
            <span style="color: var(--color-primary);" data-i18n="nav.treatments">Мы лечим</span>
        </div>

        <!-- 🌟 PAGE HEADER -->
        <section class="treatments-header-section" style="padding-bottom: 24px;">
            <h1 class="h2-title" style="font-size: clamp(32px, 4vw, 48px); margin-bottom: 12px;" data-i18n="nav.treatments">Мы лечим</h1>
            <p style="font-family: 'Raleway', sans-serif; font-size: 18px; line-height: 1.5; color: var(--color-secondary-gray); max-width: 860px; margin-bottom: 32px;">
                Интегративный подход к лечению заболеваний позвоночника, суставов, нервной системы, внутренних органов и обменных процессов. Выберите проблему или симптом, чтобы узнать подробнее о методах лечения и ведущих специалистах клиники интегративной медицины.
            </p>

            <!-- Search and Filter Tabs -->
            <div class="dept-controls" style="margin-bottom: 36px;">
                <div class="dept-search-wrap" style="flex: 1; min-width: 280px;">
                    <svg class="dept-search-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    <input type="text" id="treatment-search-input" placeholder="Найти заболевание, симптом или проблему...">
                </div>

                <div class="dept-tabs-bar" id="treatment-category-tabs">
                    <button type="button" class="dept-tab-btn active" data-filter="all">Все проблемы</button>
                    <button type="button" class="dept-tab-btn" data-filter="spine">Позвоночник и спина</button>
                    <button type="button" class="dept-tab-btn" data-filter="joints">Суставы и стопы</button>
                    <button type="button" class="dept-tab-btn" data-filter="neuro">Неврология и голова</button>
                    <button type="button" class="dept-tab-btn" data-filter="organs">ЖКТ и эндокринология</button>
                    <button type="button" class="dept-tab-btn" data-filter="vascular">Сосуды и тонус</button>
                </div>
            </div>
        </section>

        <!-- 🌟 ПЛАШКИ С ЗАБОЛЕВАНИЯМИ И ПРОБЛЕМАМИ (CONDITIONS GRID) -->
        <section class="conditions-catalog-section" style="margin-bottom: 64px;">
            <div class="conditions-grid-4col" id="treatments-grid">
                <?php
                $conditions = array(
                    array('id' => 'osteochondrosis', 'name' => 'Остеохондроз', 'category' => 'spine'),
                    array('id' => 'hernia', 'name' => 'Грыжи и протрузии', 'category' => 'spine'),
                    array('id' => 'gastro', 'name' => 'Расстройства ЖКТ', 'category' => 'organs'),
                    array('id' => 'endocrine', 'name' => 'Эндокринные расстройства', 'category' => 'organs'),
                    array('id' => 'headache', 'name' => 'Головные боли и слабость', 'category' => 'neuro'),
                    array('id' => 'joints', 'name' => 'Боли в суставах и артроз', 'category' => 'joints'),
                    array('id' => 'scoliosis', 'name' => 'Сколиоз и осанка', 'category' => 'spine'),
                    array('id' => 'sleep', 'name' => 'Нарушения сна и стресс', 'category' => 'neuro'),
                    array('id' => 'varicose', 'name' => 'Варикоз и тяжесть в ногах', 'category' => 'vascular'),
                    array('id' => 'fatigue', 'name' => 'Хроническая усталость', 'category' => 'neuro'),
                    array('id' => 'sciatica', 'name' => 'Защемление седалищного нерва (ишиас)', 'category' => 'spine'),
                    array('id' => 'tunnel', 'name' => 'Онемение рук и пальцев', 'category' => 'neuro'),
                    array('id' => 'flatfoot', 'name' => 'Плоскостопие и боли в стопе', 'category' => 'joints'),
                    array('id' => 'myofascial', 'name' => 'Мышечные спазмы и зажимы', 'category' => 'spine'),
                    array('id' => 'dizziness', 'name' => 'Головокружения и шум в ушах', 'category' => 'neuro'),
                    array('id' => 'post-trauma', 'name' => 'Реабилитация после травм', 'category' => 'spine'),
                    array('id' => 'tmj', 'name' => 'Дисфункция челюсти (ВНЧС)', 'category' => 'joints'),
                    array('id' => 'metabolic', 'name' => 'Метаболический синдром', 'category' => 'organs'),
                    array('id' => 'whiplash', 'name' => 'Хлыстовая травма шеи', 'category' => 'spine'),
                    array('id' => 'psychosomatic', 'name' => 'Психосоматические боли', 'category' => 'neuro'),
                );

                foreach ($conditions as $c) :
                ?>
                <a href="<?php echo esc_url(home_url('/treatment-single?id=' . $c['id'])); ?>" class="condition-card-item reveal-on-scroll" data-category="<?php echo esc_attr($c['category']); ?>">
                    <div class="condition-card-title"><?php echo esc_html($c['name']); ?></div>
                    <div class="condition-card-arrow">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- 🌟 3 PILLARS (ПРИНЦИПЫ НАШЕГО ЛЕЧЕНИЯ) -->
        <section class="service-pillars-3col" style="margin-bottom: 64px;">
            <div class="service-pillar-item">
                <div class="service-pillar-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                    </svg>
                </div>
                <h3 class="service-pillar-title">Комплексное лечение</h3>
                <p class="service-pillar-desc">
                    Мы не ограничиваемся снятием боли — наша цель найти и устранить истинную причину заболевания в организме.
                </p>
            </div>

            <div class="service-pillar-item">
                <div class="service-pillar-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                        <line x1="8" y1="21" x2="16" y2="21"/>
                        <line x1="12" y1="17" x2="12" y2="21"/>
                    </svg>
                </div>
                <h3 class="service-pillar-title">Современные методики</h3>
                <p class="service-pillar-desc">
                    Используем мягкие остеопатические техники, прикладную кинезиологию, высокоточную диагностику и восстановительную терапию.
                </p>
            </div>

            <div class="service-pillar-item">
                <div class="service-pillar-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                    </svg>
                </div>
                <h3 class="service-pillar-title">Индивидуальный подход</h3>
                <p class="service-pillar-desc">
                    Для каждого пациента составляется индивидуальная программа реабилитации с учетом возраста и сопутствующих факторов.
                </p>
            </div>
        </section>

        <!-- 🌟 НАШИ ВРАЧИ -->
        <?php get_template_part('template-parts/section', 'doctors'); ?>

        <!-- 🌟 FAQ SECTION -->
        <?php get_template_part('template-parts/section', 'faq'); ?>

        <!-- 🌟 ФОРМА ОБРАТНОЙ СВЯЗИ -->
        <section class="questions-section" style="margin-bottom: 60px;">
            <div class="questions-card">
                <div>
                    <h2 class="doc-booking-title">Остались вопросы?</h2>
                    <p class="doc-booking-desc">
                        Если вы не нашли свое заболевание или хотите уточнить, какой специалист вам поможет — оставьте заявку, и наш врач-координатор проконсультирует вас.
                    </p>
                    <form id="questions-form" onsubmit="event.preventDefault(); alert('Спасибо! Мы ответим на ваш вопрос в течение 15 минут.'); this.reset();">
                        <input type="text" class="form-control-fig" placeholder="Ваше имя *" required style="margin-bottom: 12px;">
                        <input type="tel" class="form-control-fig mask-phone" placeholder="Телефон *" required style="margin-bottom: 12px;">
                        <input type="text" class="form-control-fig" placeholder="Ваш вопрос или симптом *" required style="margin-bottom: 12px;">
                        <label class="custom-checkbox-row" style="margin-bottom: 16px;">
                            <input type="checkbox" required checked>
                            <span>Нажимая кнопку Отправить, вы принимаете условия политики конфиденциальности</span>
                        </label>
                        <button type="submit" class="btn btn-primary" style="padding: 12px 36px;">Отправить</button>
                    </form>
                </div>
                <div>
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/questions_doc.png'); ?>" alt="Вопросы" style="width: 100%; height: 420px; border-radius: 20px; object-fit: cover;">
                </div>
            </div>
        </section>
    </div>
</main>

<script>
// Interactive search and filtering for treatments catalog
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('treatment-search-input');
    const filterTabs = document.querySelectorAll('#treatment-category-tabs .dept-tab-btn');
    const cards = document.querySelectorAll('#treatments-grid .condition-card-item');

    let currentFilter = 'all';
    let currentQuery = '';

    function updateGrid() {
        cards.forEach(card => {
            const title = card.querySelector('.condition-card-title').textContent.toLowerCase();
            const category = card.getAttribute('data-category');

            const matchesSearch = title.includes(currentQuery);
            const matchesFilter = (currentFilter === 'all' || category === currentFilter);

            if (matchesSearch && matchesFilter) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }

    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            currentQuery = e.target.value.trim().toLowerCase();
            updateGrid();
        });
    }

    filterTabs.forEach(btn => {
        btn.addEventListener('click', function() {
            filterTabs.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            currentFilter = this.getAttribute('data-filter') || 'all';
            updateGrid();
        });
    });
});
</script>

<?php
get_footer();
