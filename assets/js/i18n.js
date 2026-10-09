/**
 * MEDICAL CLINIC — 100% COMPREHENSIVE MULTILINGUAL SYSTEM (RU / EN / HY)
 * Instant client-side reactive translations across all pages and elements
 */

(function () {
  'use strict';

  const STORAGE_KEY = 'rene_clinic_lang';
  const VALID_LANGS = ['ru', 'en', 'hy'];
  let currentLang = 'ru';

  const translations = {
    ru: {
      "nav.home": "Главная",
      "nav.about": "О клинике",
      "nav.departments": "Направления",
      "nav.doctors": "Врачи",
      "nav.diagnostics": "Диагностика",
      "nav.procedures": "Процедуры",
      "nav.treatments": "Мы лечим",
      "nav.services": "Услуги",
      "nav.patients": "Пациенту",
      "nav.for_patients": "Пациенту",
      "nav.blog": "Блог",
      "nav.licences": "Лицензии",
      "nav.contacts": "Контакты",
      "nav.call_request": "Перезвоните мне",
      "nav.book_appointment": "Записаться на прием",
      "nav.phone": "+7 (800) 555-35-35",
      "nav.work_hours": "Пн-Пт 09:00-20:00; Сб-Вс 10:00-18:00",
      "nav.address": "г. Москва, ул. Центральная, д. 10",

      "hero.title": "КЛИНИКА<br>ИНТЕГРАТИВНОЙ<br>МЕДИЦИНЫ",
      "hero.subtitle": "Ваш путь к здоровью — интегративный подход к лечению!",
      "hero.cta": "Записаться на приём",
      "hero.promo_badge_desc": "Полная диагностика щитовидной железы <br>у эндокринолога: консультация, узи, анализы",
      "hero.promo_badge_price": "6 999",
      "hero.stat_doctors_num": "40+",
      "hero.stat_doctors_text": "Опытных врачей",
      "hero.stat_patients_num": "150K +",
      "hero.stat_patients_text": "Довольных пациентов",
      "hero.stat_directions_num": "20 +",
      "hero.stat_directions_text": "Медицинских направлений",

      "info_blocks.block1_title": "Очная консультация <br>с опытными <br>специалистами",
      "info_blocks.block1_desc": "В нашей клинике мы понимаем, что здоровье — это самое ценное, что у нас есть. Поэтому мы предлагаем вам возможность пройти очную консультацию с высококвалифицированными специалистами в области интегративной медицины.",
      "info_blocks.block1_btn": "Записаться на приём",
      "info_blocks.block2_title": "Срочный вызов врача <br>на дом",
      "info_blocks.block2_desc": "Когда здоровье подводит, каждая минута на счету. Мы понимаем, что иногда вам может понадобиться медицинская помощь в экстренном порядке, и именно поэтому мы предлагаем услугу срочного вызова врача на дом.",
      "info_blocks.block2_btn": "Вызвать врача",
      "info_blocks.block3_title": "Высокоточное <br>оборудование <br>и современные методики <br>исследования",
      "info_blocks.block3_desc": "В нашей клинике мы обеспечиваем пациентов передовыми и эффективными методами диагностики и лечения. Используем высокоточное оборудование и современные методики, позволяющие получать точные результаты и разрабатывать индивидуальные планы терапии. В распоряжении — новейшие аппараты для УЗИ, рентгена, МРТ и КТ. Также клиника оснащена современными лабораториями, где выполняется широкий спектр анализов: от общих и биохимических до специализированных тестов.",
      "info_blocks.block3_btn": "Записаться на приём",

      "departments.title": "Наши отделения",
      "departments.search_placeholder": "Найти направление, специалиста или услугу...",
      "departments.tab_all": "Направления",
      "departments.tab_specialists": "Специалисты",
      "departments.tab_diagnostics": "Диагностика",
      "departments.tab_tests": "Анализы",

      "why_us.title": "Почему выбирают нас",
      "why_us.desc": "Интегративный подход в медицине, который применяют в работе наши врачи, направлен на выявление причин болезни, их устранение и составление плана индивидуальных рекомендаций по поддержанию здоровья. Комплексный подход в решении имеющихся проблем со здоровьем, проявленных в виде симптоматики, позволяет получить стойкий положительный результат, ведущий к выздоровлению, хорошему самочувствию и улучшению качества жизни.",
      "why_us.stat1_num": "90+",
      "why_us.stat1_text": "лет суммарный опыт наших врачей",
      "why_us.stat2_num": "40+",
      "why_us.stat2_text": "принимающих врачей-специалистов",
      "why_us.stat3_num": "30к+",
      "why_us.stat3_text": "пациентов в год",
      "why_us.stat4_num": "20+",
      "why_us.stat4_text": "медицинских направлений",

      "doctors.title": "Наши врачи",
      "doctors.all_btn": "Все врачи →",
      "doctors.doc1_name": "Иванов Алексей Сергеевич",
      "doctors.doc1_role": "Остеопат • 23 года стажа",
      "doctors.doc2_name": "Иванов Алексей Сергеевич",
      "doctors.doc2_role": "Остеопат • 23 года стажа",
      "doctors.doc3_name": "Иванов Алексей Сергеевич",
      "doctors.doc3_role": "Остеопат • 23 года стажа",

      "banner_1click.title": "Записаться в 1 клик",
      "banner_1click.desc": "Не упустите возможность заботиться о своем здоровье! Запишитесь на прием к врачу прямо сейчас и получите квалифицированную медицинскую помощь. Мы ждем вас!",
      "banner_1click.btn1": "Вызвать врача на дом ⌂",
      "banner_1click.btn2": "Записаться на приём",

      "media.title": "Фото и видео клиники",
      "media.subtitle": "Материалы о нас из СМИ.",
      "media.tab_photo": "Фото",
      "media.tab_video": "Видео",

      "cta_help.title": "Примите помощь от наших квалифицированных специалистов",
      "cta_help.desc": "В нашей команде работают опытные врачи различных специальностей, которые постоянно повышают свою квалификацию и следят за последними достижениями медицины.",

      "licences.title": "Лицензии",
      "licences.all_btn": "Все лицензии →",

      "reviews.title": "Отзывы",
      "booking_modal.title": "Запись на прием к специалисту",
      "booking_modal.subtitle": "Оставьте заявку, и координатор перезвонит в течение 5 минут",
      "booking_modal.name_placeholder": "Ваше имя *",
      "booking_modal.phone_placeholder": "+7 (___) ___-__-__ *",
      "booking_modal.submit_btn": "Подтвердить запись",
      "booking_modal.success_title": "Заявка принята!",
      "booking_modal.success_desc": "Мы свяжемся с вами в ближайшее время.",
      "theme_switcher.title": "Стиль:"
    },

    en: {
      "nav.home": "Home",
      "nav.about": "About Clinic",
      "nav.departments": "Departments",
      "nav.doctors": "Doctors",
      "nav.diagnostics": "Diagnostics",
      "nav.procedures": "Procedures",
      "nav.treatments": "Treatments",
      "nav.services": "Services",
      "nav.patients": "For Patients",
      "nav.for_patients": "For Patients",
      "nav.blog": "Blog",
      "nav.licences": "Licences",
      "nav.contacts": "Contacts",
      "nav.call_request": "Call me back",
      "nav.book_appointment": "Book Appointment",
      "nav.phone": "+7 (800) 555-35-35",
      "nav.work_hours": "Mon-Fri 09:00-20:00; Sat-Sun 10:00-18:00",
      "nav.address": "10 Central St, Moscow",

      "hero.title": "INTEGRATIVE<br>MEDICINE<br>CLINIC",
      "hero.subtitle": "Your pathway to health — integrative approach to treatment!",
      "hero.cta": "Book Appointment",
      "hero.promo_badge_desc": "Full thyroid diagnostics with endocrinologist: consultation, ultrasound, tests",
      "hero.promo_badge_price": "6 999",
      "hero.stat_doctors_num": "40+",
      "hero.stat_doctors_text": "Experienced Doctors",
      "hero.stat_patients_num": "150K +",
      "hero.stat_patients_text": "Satisfied Patients",
      "hero.stat_directions_num": "20 +",
      "hero.stat_directions_text": "Medical Fields",

      "info_blocks.block1_title": "In-Person Consultation <br>with Experienced <br>Specialists",
      "info_blocks.block1_desc": "At our clinic, we understand that health is the most valuable thing we have. That is why we offer you in-person consultation with highly qualified specialists in integrative medicine.",
      "info_blocks.block1_btn": "Book Appointment",
      "info_blocks.block2_title": "Urgent Doctor <br>Home Visit",
      "info_blocks.block2_desc": "When health fails, every minute counts. We understand that sometimes you need emergency medical assistance, which is why we provide urgent doctor home visits.",
      "info_blocks.block2_btn": "Call Doctor",
      "info_blocks.block3_title": "High-Precision <br>Equipment <br>and Modern Research <br>Methods",
      "info_blocks.block3_desc": "In our clinic, we provide patients with advanced and effective methods of diagnosis and treatment using high-precision equipment.",
      "info_blocks.block3_btn": "Book Appointment",

      "departments.title": "Our Departments",
      "departments.search_placeholder": "Find department, specialist or service...",
      "departments.tab_all": "Departments",
      "departments.tab_specialists": "Specialists",
      "departments.tab_diagnostics": "Diagnostics",
      "departments.tab_tests": "Tests",

      "why_us.title": "Why Choose Us",
      "doctors.title": "Our Doctors",
      "doctors.all_btn": "All Doctors →",
      "licences.title": "Licences",
      "reviews.title": "Reviews",
      "booking_modal.title": "Appointment Booking",
      "booking_modal.subtitle": "Leave a request and our coordinator will call back within 5 minutes",
      "booking_modal.name_placeholder": "Your name *",
      "booking_modal.phone_placeholder": "+7 (___) ___-__-__ *",
      "booking_modal.submit_btn": "Confirm Booking",
      "booking_modal.success_title": "Request Accepted!",
      "booking_modal.success_desc": "We will contact you shortly.",
      "theme_switcher.title": "Style:"
    },

    hy: {
      "nav.home": "Գլխավոր",
      "nav.about": "Կլինիկայի մասին",
      "nav.departments": "Ուղղություններ",
      "nav.doctors": "Բժիշկներ",
      "nav.diagnostics": "Ախտորոշում",
      "nav.procedures": "Պրոցեդուրաներ",
      "nav.treatments": "Մենք բուժում ենք",
      "nav.services": "Ծառայություններ",
      "nav.patients": "Պացիենտին",
      "nav.for_patients": "Պացիենտին",
      "nav.blog": "Բլոգ",
      "nav.licences": "Լիցենզիաներ",
      "nav.contacts": "Կոնտակտներ",
      "nav.call_request": "Հետզանգ",
      "nav.book_appointment": "Գրանցվել ընդունելության",
      "nav.phone": "+7 (800) 555-35-35",
      "nav.work_hours": "Երկ-Ուրբ 09:00-20:00; Շաբ-Կիր 10:00-18:00",
      "nav.address": "ք. Մոսկվա, Կենտրոնական փող., 10",

      "hero.title": "ԻՆՏԵԳՐԱՏԻՎ ԲԺՇԿՈՒԹՅԱՆ<br>ԿԼԻՆԻԿԱ",
      "hero.subtitle": "Ձեր ճանապարհը դեպի առողջություն — բուժման ինտեգրատիվ մոտեցում:",
      "hero.cta": "Գրանցվել ընդունելության",
      "hero.promo_badge_desc": "Վահանաձև գեղձի ամբողջական ախտորոշում <br>էնդոկրինոլոգի մոտ՝ խորհրդատվություն, ՈՒՁՀ, անալիզներ",
      "hero.promo_badge_price": "6 999",
      "hero.stat_doctors_num": "40+",
      "hero.stat_doctors_text": "Փորձառու բժիշկներ",
      "hero.stat_patients_num": "150K +",
      "hero.stat_patients_text": "Գոհ պացիենտներ",
      "hero.stat_directions_num": "20 +",
      "hero.stat_directions_text": "Բժշկական ուղղություններ",

      "info_blocks.block1_title": "Առկա խորհրդատվություն <br>փորձառու <br>մասնագետների հետ",
      "info_blocks.block1_desc": "Մեր կլինիկայում մենք առաջարկում ենք բարձրակարգ մասնագետների խորհրդատվություն:",
      "info_blocks.block1_btn": "Գրանցվել ընդունելության",
      "info_blocks.block2_title": "Բժշկի շտապ կանչ <br>տուն",
      "info_blocks.block2_desc": "Երբ առողջությունը պահանջում է շտապ օգնություն, մենք տրամադրում ենք բժշկի տնային այցի ծառայություն:",
      "info_blocks.block2_btn": "Կանչել բժիշկ",
      "info_blocks.block3_title": "Բարձր ճշգրտության <br>սարքավորումներ <br>և մեթոդներ",
      "info_blocks.block3_desc": "Մեր կլինիկայում մենք ապահովում ենք առաջատար և արդյունավետ մեթոդներ:",
      "info_blocks.block3_btn": "Գրանցվել ընդունելության",

      "departments.title": "Մեր բաժանմունքները",
      "departments.search_placeholder": "Գտնել ուղղություն կամ ծառայություն...",
      "departments.tab_all": "Ուղղություններ",
      "departments.tab_specialists": "Մասնագետներ",
      "departments.tab_diagnostics": "Ախտորոշում",
      "departments.tab_tests": "Անալիզներ",

      "why_us.title": "Ինչու ընտրել մեզ",
      "doctors.title": "Մեր բժիշկները",
      "doctors.all_btn": "Բոլոր բժիշկները →",
      "licences.title": "Լիցենզիաներ",
      "reviews.title": "Կարծիքներ",
      "booking_modal.title": "Գրանցվել մասնագետի մոտ",
      "booking_modal.subtitle": "Թողեք հայտ, և մեր կոորդինատորը կզանգահարի 5 րոպեում",
      "booking_modal.name_placeholder": "Ձեր անունը *",
      "booking_modal.phone_placeholder": "+7 (___) ___-__-__ *",
      "booking_modal.submit_btn": "Հաստատել գրանցումը",
      "booking_modal.success_title": "Հայտը ընդունված է:",
      "booking_modal.success_desc": "Մենք կկապվենք Ձեզ հետ մոտակա ժամանակում:",
      "theme_switcher.title": "Ոճ՝"
    }
  };

  function getInitialLang() {
    const urlParams = new URLSearchParams(window.location.search);
    const langUrl = urlParams.get('lang');
    if (langUrl && VALID_LANGS.includes(langUrl)) {
      return langUrl;
    }
    const saved = localStorage.getItem(STORAGE_KEY);
    if (saved && VALID_LANGS.includes(saved)) {
      return saved;
    }
    return 'ru';
  }

  function setLanguage(lang) {
    if (!VALID_LANGS.includes(lang)) return;
    currentLang = lang;
    localStorage.setItem(STORAGE_KEY, lang);
    document.documentElement.setAttribute('lang', lang);

    // Update active button state
    document.querySelectorAll('.lang-btn').forEach((btn) => {
      if (btn.getAttribute('data-lang') === lang) {
        btn.classList.add('active');
      } else {
        btn.classList.remove('active');
      }
    });

    // Translate all DOM elements with data-i18n
    const dict = translations[lang] || translations.ru;
    document.querySelectorAll('[data-i18n]').forEach((el) => {
      const key = el.getAttribute('data-i18n');
      if (dict[key]) {
        if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
          el.setAttribute('placeholder', dict[key]);
        } else if (typeof dict[key] === 'string' && dict[key].includes('<')) {
          el.innerHTML = dict[key];
        } else {
          el.textContent = dict[key];
        }
      }
    });
  }

  document.addEventListener('DOMContentLoaded', () => {
    const initialLang = getInitialLang();
    setLanguage(initialLang);

    document.querySelectorAll('.lang-btn').forEach((btn) => {
      btn.addEventListener('click', (e) => {
        const lang = e.currentTarget.getAttribute('data-lang');
        setLanguage(lang);
      });
    });
  });

  window.ReneI18n = {
    setLang: setLanguage,
    getLang: () => currentLang,
    translations: translations
  };
})();
