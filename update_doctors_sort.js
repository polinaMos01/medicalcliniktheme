const fs = require('fs');

let html = fs.readFileSync('doctors.html', 'utf8');

// 1. Add sort dropdown to filter row if not present
const oldFilterParent = `<div class="drop-down-field-parent">
                <!-- Dropdown 1: Специализация -->`;

const newFilterParent = `<div class="drop-down-field-parent">
                <!-- Dropdown 1: Специализация -->`;

// Let's check where the dropdowns are
const dropDownFieldsPattern = /(<!-- Dropdown 4: Пол -->[\s\S]*?<\/div>\s*<\/div>)/;

const sortDropdownHtml = `
                <!-- Dropdown 5: Сортировка -->
                <div class="drop-down-field sort-dropdown-field">
                    <select id="sort-doctors" aria-label="Сортировка">
                        <option value="default">Сортировка</option>
                        <option value="name-asc">По имени (А–Я)</option>
                        <option value="name-desc">По имени (Я–А)</option>
                        <option value="price-asc">По стоимости (сначала дешевле)</option>
                        <option value="price-desc">По стоимости (сначала дороже)</option>
                        <option value="exp-desc">По стажу (больше стаж)</option>
                        <option value="exp-asc">По стажу (меньше стаж)</option>
                        <option value="rating-desc">По рейтингу (высокий рейтинг)</option>
                    </select>
                    <div class="left-content">
                        <span class="label2" id="label-sort">Сортировка</span>
                        <span class="dropdown-icon">
                            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L6 6L11 1" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                </div>`;

if (!html.includes('id="sort-doctors"')) {
    html = html.replace(dropDownFieldsPattern, `$1${sortDropdownHtml}`);
}

// 2. Doctor cards metadata list (15 doctors)
const doctorsData = [
  { name: "Иванов Алексей Сергеевич", spec: "osteopath", exp: 23, deg: "highest", gen: "male", rating: 4.8, price: 2999 },
  { name: "Смирнова Елена Викторовна", spec: "endocrinologist", exp: 18, deg: "highest", gen: "female", rating: 4.9, price: 3500 },
  { name: "Александров Михаил Юрьевич", spec: "neurologist", exp: 15, deg: "highest", gen: "male", rating: 4.8, price: 3200 },
  { name: "Варданян Асмик Кареновна", spec: "endocrinologist", exp: 16, deg: "kmn", gen: "female", rating: 5.0, price: 3800 },
  { name: "Сергеев Дмитрий Николаевич", spec: "orthopedist", exp: 14, deg: "highest", gen: "male", rating: 4.9, price: 3200 },
  { name: "Петрова Анна Васильевна", spec: "therapist", exp: 12, deg: "highest", gen: "female", rating: 4.8, price: 2900 },
  { name: "Хабибуллин Рамиль Ильдарович", spec: "podologist", exp: 11, deg: "lead", gen: "male", rating: 4.8, price: 2999 },
  { name: "Захарова Ольга Павловна", spec: "psychotherapist", exp: 19, deg: "highest", gen: "female", rating: 4.9, price: 4000 },
  { name: "Гарипов Булат Маратович", spec: "kinesiologist", exp: 10, deg: "lead", gen: "male", rating: 4.8, price: 2999 },
  { name: "Сафина Лейсан Ринатовна", spec: "phlebologist", exp: 13, deg: "highest", gen: "female", rating: 4.8, price: 2999 },
  { name: "Кузнецов Артем Валерьевич", spec: "therapist", exp: 17, deg: "highest", gen: "male", rating: 4.9, price: 3100 },
  { name: "Мингазов Ильяс Фаридович", spec: "urologist", exp: 21, deg: "kmn", gen: "male", rating: 4.8, price: 3500 },
  { name: "Федорова Екатерина Дмитриевна", spec: "nutritionist", exp: 9, deg: "lead", gen: "female", rating: 4.8, price: 2800 },
  { name: "Садыков Тимур Рашидович", spec: "epileptologist", exp: 16, deg: "highest", gen: "male", rating: 4.9, price: 3400 },
  { name: "Ахметова Гузель Ильсуровна", spec: "integrative", exp: 15, deg: "highest", gen: "female", rating: 4.8, price: 2999 }
];

// Update each doc-card
let index = 0;
html = html.replace(/<div class="doc-card"[^>]*>/g, (match) => {
    if (index < doctorsData.length) {
        const d = doctorsData[index];
        index++;
        return `<div class="doc-card" data-specialty="${d.spec}" data-experience="${d.exp}" data-degree="${d.deg}" data-gender="${d.gen}" data-name="${d.name}" data-price="${d.price}" data-rating="${d.rating}">`;
    }
    return match;
});

fs.writeFileSync('doctors.html', html, 'utf8');
console.log('Successfully updated doctors.html with sort dropdown and 15 doctor metadata tags.');
