const fs = require('fs');
const path = require('path');

const projectDir = '/Users/polinapogosyan/.gemini/antigravity/scratch/rene-medical-wp';

const newHeaderNavRow = `        <!-- Bottom Row: Navigation Menu -->
        <div class="header-nav-row">
            <a href="doctors.html" data-i18n="nav.doctors">Врачи</a>
            <a href="departments.html" data-i18n="nav.departments">Направления</a>
            <a href="diagnostics.html" data-i18n="nav.diagnostics">Диагностика</a>
            <a href="procedures.html" data-i18n="nav.procedures">Процедуры</a>
            <a href="treatments.html" data-i18n="nav.treatments">Мы лечим</a>
            <div class="nav-item-dropdown">
                <a href="about.html" class="nav-link-dropdown">
                    <span data-i18n="nav.about">О клинике</span>
                    <svg class="dropdown-arrow-icon" width="10" height="6" viewBox="0 0 10 6" fill="none">
                        <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <div class="dropdown-menu">
                    <a href="about.html" data-i18n="nav.about">О нас</a>
                    <a href="licences.html" data-i18n="nav.licences">Лицензии</a>
                    <a href="vacancies.html">Вакансии</a>
                    <a href="blog.html" data-i18n="nav.blog">Блог</a>
                </div>
            </div>
            <div class="nav-item-dropdown">
                <a href="services.html" class="nav-link-dropdown">
                    <span data-i18n="nav.patients">Пациенту</span>
                    <svg class="dropdown-arrow-icon" width="10" height="6" viewBox="0 0 10 6" fill="none">
                        <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <div class="dropdown-menu">
                    <a href="promotions.html">Акции</a>
                    <a href="tax-deduction.html">Налоговый вычет</a>
                    <a href="faq.html">FAQ</a>
                </div>
            </div>
            <a href="contacts.html" data-i18n="nav.contacts">Контакты</a>
        </div>`;

const newMobileMenu = `<!-- Mobile Fullscreen Menu -->
<div class="mobile-menu-overlay" id="mobile-menu">
    <ul class="mobile-nav-links">
        <li><a href="doctors.html" data-i18n="nav.doctors">Врачи</a></li>
        <li><a href="departments.html" data-i18n="nav.departments">Направления</a></li>
        <li><a href="diagnostics.html" data-i18n="nav.diagnostics">Диагностика</a></li>
        <li><a href="procedures.html" data-i18n="nav.procedures">Процедуры</a></li>
        <li><a href="treatments.html" data-i18n="nav.treatments">Мы лечим</a></li>
        <li><a href="about.html" data-i18n="nav.about">О нас</a></li>
        <li><a href="licences.html" data-i18n="nav.licences">Лицензии</a></li>
        <li><a href="vacancies.html">Вакансии</a></li>
        <li><a href="blog.html" data-i18n="nav.blog">Блог</a></li>
        <li><a href="promotions.html">Акции</a></li>
        <li><a href="tax-deduction.html">Налоговый вычет</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="contacts.html" data-i18n="nav.contacts">Контакты</a></li>
    </ul>
    <div style="display: flex; flex-direction: column; gap: 16px;">
        <div class="lang-switcher" style="justify-content: center;">
            <button type="button" class="lang-btn active" data-lang="ru">RU</button>
            <button type="button" class="lang-btn" data-lang="en">EN</button>
            <button type="button" class="lang-btn" data-lang="hy">HY</button>
        </div>
        <a href="#booking" class="btn btn-primary" style="width: 100%; text-align: center;" data-open-modal="booking" data-i18n="nav.book_appointment">Записаться на прием</a>
    </div>
</div>`;

const headerNavRowRegex = /<!-- Bottom Row: Navigation Menu -->[\s\S]*?<div class="header-nav-row">[\s\S]*?<\/div>(\s*<\/div>\s*<\/header>)/;
const mobileMenuRegex = /<!-- Mobile Fullscreen Menu -->[\s\S]*?<div class="mobile-menu-overlay" id="mobile-menu">[\s\S]*?<\/div>\s*<\/div>/;

const htmlFiles = fs.readdirSync(projectDir).filter(f => f.endsWith('.html'));

for (const file of htmlFiles) {
    const filePath = path.join(projectDir, file);
    let content = fs.readFileSync(filePath, 'utf8');

    let updated = false;
    if (headerNavRowRegex.test(content)) {
        content = content.replace(headerNavRowRegex, `${newHeaderNavRow}$1`);
        updated = true;
    } else {
        // Try alternate pattern
        const altNavRegex = /<div class="header-nav-row">[\s\S]*?<\/div>(\s*<\/div>\s*<\/header>)/;
        if (altNavRegex.test(content)) {
            content = content.replace(altNavRegex, `${newHeaderNavRow}$1`);
            updated = true;
        }
    }

    if (mobileMenuRegex.test(content)) {
        content = content.replace(mobileMenuRegex, newMobileMenu);
        updated = true;
    }

    if (updated) {
        fs.writeFileSync(filePath, content, 'utf8');
        console.log(`Successfully updated navigation in: ${file}`);
    } else {
        console.log(`Could not match header nav pattern in: ${file}`);
    }
}
