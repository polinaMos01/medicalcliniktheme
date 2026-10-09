/**
 * ====================================================================
 * MEDICAL CLINIC — COMPLETE INTERACTIVE LOGIC & ANIMATIONS
 * - Hero Promo Card Carousel
 * - Doctors Slider Carousel (Prev/Next & Touch Swipe)
 * - Reviews Slider Carousel
 * - Photo & Video Media Switcher
 * - FAQ Accordion
 * - Departments Live Search & Filter Tabs
 * - Online Booking Modal Dialog & Form Handling
 * - Mobile Fullscreen Menu
 * - Micro-interactions, GPU Scroll Reveals & Hovers
 * ====================================================================
 */

document.addEventListener('DOMContentLoaded', () => {
  'use strict';

  // ================= 1. HERO PROMO CARD CAROUSEL =================
  const promoSlides = [
    {
      title: "Полная диагностика щитовидной железы",
      desc: "Полная диагностика щитовидной железы \nу эндокринолога: консультация, узи, анализы",
      price: "6 999 ₽",
      img: "assets/images/assets/ae96da2b5d2ff4a3ded07ee033fb6c3f7f2bbd45.png"
    },
    {
      title: "Комплексный Check-up «Здоровье 360»",
      desc: "Полный скрининг всех органов и систем за 1 день",
      price: "24 500 ₽",
      img: "assets/images/card_image.png"
    },
    {
      title: "Интегративная программа Anti-Age",
      desc: "Клеточное восстановление, детокс и IV-терапия",
      price: "18 900 ₽",
      img: "assets/images/gallery_5.png"
    }
  ];

  let currentPromoIndex = 0;
  const promoCard = document.querySelector('.figma-promo-card');
  const promoDots = document.querySelectorAll('.figma-promo-dot');
  const promoActionBtn = document.querySelector('.figma-promo-action-btn');

  function renderPromoSlide(index) {
    if (!promoCard) return;
    currentPromoIndex = (index + promoSlides.length) % promoSlides.length;
    const slide = promoSlides[currentPromoIndex];

    const imgEl = promoCard.querySelector('.figma-promo-thumb');
    const descEl = promoCard.querySelector('.figma-promo-text');
    const priceEl = promoCard.querySelector('.figma-promo-price');

    if (imgEl) imgEl.src = slide.img;
    if (descEl) descEl.textContent = slide.desc;
    if (priceEl) priceEl.textContent = slide.price;

    promoDots.forEach((dot, idx) => {
      if (idx === currentPromoIndex) dot.classList.add('active');
      else dot.classList.remove('active');
    });
  }

  if (promoActionBtn) {
    promoActionBtn.addEventListener('click', (e) => {
      e.stopPropagation();
      renderPromoSlide(currentPromoIndex + 1);
    });
  }

  promoDots.forEach((dot, idx) => {
    dot.addEventListener('click', () => renderPromoSlide(idx));
  });

  // Auto rotate promo card every 5 seconds
  setInterval(() => {
    if (promoCard) renderPromoSlide(currentPromoIndex + 1);
  }, 5000);


  // ================= 2. DOCTORS & REVIEWS SLIDER CAROUSELS =================
  function initCarousel(containerSelector, prevBtnSelector, nextBtnSelector) {
    const container = document.querySelector(containerSelector);
    const prevBtn = document.querySelector(prevBtnSelector);
    const nextBtn = document.querySelector(nextBtnSelector);

    if (!container) return;

    function getScrollAmount() {
      const firstChild = container.firstElementChild;
      if (!firstChild) return 360;
      const style = window.getComputedStyle(container);
      const gap = parseFloat(style.gap) || 24;
      return firstChild.offsetWidth + gap;
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', (e) => {
        e.preventDefault();
        const amount = getScrollAmount();
        container.scrollBy({ left: -amount, behavior: 'smooth' });
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', (e) => {
        e.preventDefault();
        const amount = getScrollAmount();
        container.scrollBy({ left: amount, behavior: 'smooth' });
      });
    }
  }

  initCarousel('#doctors-track', '#doctors-prev', '#doctors-next');
  initCarousel('#reviews-track', '#reviews-prev', '#reviews-next');
  initCarousel('#licences-track', '#licences-prev', '#licences-next');


  // ================= 3. PHOTO / VIDEO MEDIA TABS (Figma 508:24029) =================
  const mediaTabs = document.querySelectorAll('[data-media-tab]');
  const photoGallery = document.getElementById('media-gallery-photos');
  const videoGallery = document.getElementById('media-gallery-videos');

  mediaTabs.forEach((tab) => {
    tab.addEventListener('click', (e) => {
      mediaTabs.forEach((t) => t.classList.remove('active'));
      e.currentTarget.classList.add('active');
      const target = e.currentTarget.getAttribute('data-media-tab');

      if (target === 'video') {
        if (photoGallery) photoGallery.style.display = 'none';
        if (videoGallery) videoGallery.style.display = 'grid';
      } else {
        if (videoGallery) videoGallery.style.display = 'none';
        if (photoGallery) photoGallery.style.display = 'grid';
      }
    });
  });


  // ================= 4. DEPARTMENTS SEARCH & TABS FILTERING =================
  const searchInput = document.getElementById('dept-search-input');
  const deptCards = document.querySelectorAll('.dept-card-fignode, .dept-grid-card, .dept-card');
  const deptTabs = document.querySelectorAll('.dept-tab-btn, .dept-tab');

  function filterDepartments() {
    const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
    const activeTab = document.querySelector('.dept-tab-btn.active, .dept-tab.active');
    const activeCategory = activeTab ? (activeTab.getAttribute('data-category') || 'all') : 'all';

    let visibleCount = 0;
    deptCards.forEach((card) => {
      const cardText = card.textContent.toLowerCase();
      const cardCategoryAttr = card.getAttribute('data-category') || 'directions all';
      const cardCategories = cardCategoryAttr.split(' ');

      const matchesSearch = query === '' || cardText.includes(query);
      const matchesCategory =
        (activeCategory === 'all' || activeCategory === 'directions')
          ? (cardCategories.includes('directions') || cardCategories.includes('all'))
          : cardCategories.includes(activeCategory);

      if (matchesSearch && matchesCategory) {
        card.style.display = 'flex';
        visibleCount++;
      } else {
        card.style.display = 'none';
      }
    });

    const gridContainer = document.querySelector('.dept-grid-fignode, .dept-grid');
    let emptyState = document.getElementById('dept-empty-state');
    if (visibleCount === 0) {
      if (!emptyState && gridContainer) {
        emptyState = document.createElement('div');
        emptyState.id = 'dept-empty-state';
        emptyState.style.cssText = 'grid-column: 1 / -1; padding: 40px 20px; text-align: center; color: var(--color-secondary-gray); font-size: 16px; background: var(--color-bg-1); border-radius: 16px; margin: 10px 0;';
        emptyState.textContent = 'Ничего не найдено по вашему запросу. Попробуйте изменить запрос или записаться на консультацию.';
        gridContainer.appendChild(emptyState);
      } else if (emptyState) {
        emptyState.style.display = 'block';
      }
    } else if (emptyState) {
      emptyState.style.display = 'none';
    }
  }

  if (searchInput) searchInput.addEventListener('input', filterDepartments);

  deptTabs.forEach((tab) => {
    tab.addEventListener('click', (e) => {
      deptTabs.forEach((t) => t.classList.remove('active'));
      e.currentTarget.classList.add('active');
      filterDepartments();
    });
  });

  // URL Parameter / Hash check to activate specific tab
  if (deptTabs.length > 0) {
    const urlParams = new URLSearchParams(window.location.search);
    const tabParam = urlParams.get('tab') || (window.location.hash ? window.location.hash.replace('#', '') : null);
    if (tabParam) {
      const matchedTab = Array.from(deptTabs).find((t) => t.getAttribute('data-category') === tabParam);
      if (matchedTab) {
        deptTabs.forEach((t) => t.classList.remove('active'));
        matchedTab.classList.add('active');
      }
    }
  }

  if (deptCards.length > 0) {
    filterDepartments();
  }


  // ================= 5. FAQ ACCORDION =================
  const faqItems = document.querySelectorAll('.faq-fig-item, .faq-box-item, .faq-item');
  faqItems.forEach((item) => {
    const trigger = item.querySelector('.faq-fig-trigger, .faq-btn-trigger, .faq-question');
    if (trigger) {
      trigger.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        faqItems.forEach((other) => {
          other.classList.remove('active');
          const lastSpan = other.querySelector('.faq-fig-trigger span:last-child, .faq-icon');
          if (lastSpan) lastSpan.textContent = '⌄';
        });
        if (!isActive) {
          item.classList.add('active');
          const lastSpan = item.querySelector('.faq-fig-trigger span:last-child, .faq-icon');
          if (lastSpan) lastSpan.textContent = '⌃';
        }
      });
    }
  });


  // ================= 6. ONLINE BOOKING MODAL DIALOG =================
  const modalOverlay = document.getElementById('booking-modal') || document.getElementById('modal-booking');
  const openModalBtns = document.querySelectorAll('[data-open-modal="booking"]');
  const closeModalBtns = document.querySelectorAll('#modal-close-btn, [data-close-modal], .modal-close-btn, .modal-close');
  const bookingForm = document.getElementById('booking-form');
  const bookingSuccess = document.getElementById('booking-success');
  const bookingFormWrap = document.getElementById('booking-form-wrap');

  function openModal() {
    const targetModal = document.getElementById('booking-modal') || document.getElementById('modal-booking');
    if (targetModal) {
      targetModal.classList.add('active');
      targetModal.style.display = 'flex';
      document.body.style.overflow = 'hidden';
    }
  }

  function closeModal() {
    const targetModal = document.getElementById('booking-modal') || document.getElementById('modal-booking');
    if (targetModal) {
      targetModal.classList.remove('active');
      targetModal.style.display = 'none';
      document.body.style.overflow = '';
      setTimeout(() => {
        if (bookingSuccess) bookingSuccess.style.display = 'none';
        if (bookingFormWrap) bookingFormWrap.style.display = 'block';
        if (bookingForm) bookingForm.reset();
      }, 300);
    }
  }

  openModalBtns.forEach((btn) => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      openModal();
    });
  });

  closeModalBtns.forEach((btn) => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      closeModal();
    });
  });

  if (modalOverlay) {
    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) closeModal();
    });
  }

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
      closeModal();
    }
  });

  if (bookingForm) {
    bookingForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const submitBtn = bookingForm.querySelector('button[type="submit"]');
      if (submitBtn) {
        submitBtn.textContent = 'Обработка заявки...';
        submitBtn.disabled = true;

        setTimeout(() => {
          submitBtn.textContent = 'Подтвердить запись';
          submitBtn.disabled = false;
          if (bookingFormWrap) bookingFormWrap.style.display = 'none';
          if (bookingSuccess) bookingSuccess.style.display = 'block';
        }, 600);
      }
    });
  }


  // ================= 7. MOBILE FULLSCREEN BURGER MENU =================
  const burgerBtn = document.getElementById('burger-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  if (burgerBtn && mobileMenu) {
    burgerBtn.addEventListener('click', () => {
      const isActive = mobileMenu.classList.contains('active');
      if (isActive) {
        mobileMenu.classList.remove('active');
        burgerBtn.classList.remove('active');
        document.body.style.overflow = '';
      } else {
        mobileMenu.classList.add('active');
        burgerBtn.classList.add('active');
        document.body.style.overflow = 'hidden';
      }
    });

    mobileMenu.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        mobileMenu.classList.remove('active');
        burgerBtn.classList.remove('active');
        document.body.style.overflow = '';
      });
    });
  }

  // ================= 8. UNIVERSAL PHONE INPUT MASK =================
  function initPhoneMasks() {
    const phoneInputs = document.querySelectorAll('input[type="tel"], input[data-mask="phone"], .mask-phone, input[placeholder*="+7"]');

    phoneInputs.forEach((input) => {
      input.addEventListener('input', () => {
        let val = input.value.replace(/\D/g, '');
        if (!val) {
          input.value = '';
          return;
        }

        if (['7', '8', '9'].includes(val[0])) {
          if (val[0] === '9') val = '7' + val;
          let formatted = '+7 (';
          if (val.length > 1) formatted += val.substring(1, 4);
          if (val.length >= 5) formatted += ') ' + val.substring(4, 7);
          if (val.length >= 8) formatted += '-' + val.substring(7, 9);
          if (val.length >= 10) formatted += '-' + val.substring(9, 11);
          input.value = formatted;
        } else {
          input.value = '+' + val.substring(0, 16);
        }
      });

      input.addEventListener('keydown', (e) => {
        if (e.key === 'Backspace' && input.value.length <= 4) {
          input.value = '';
        }
      });

      input.addEventListener('focus', () => {
        if (!input.value) {
          input.value = '+7 (';
        }
      });

      input.addEventListener('blur', () => {
        if (input.value === '+7 (' || input.value === '+7') {
          input.value = '';
        }
      });
    });
  }

  initPhoneMasks();


  // ================= 9. CONTACTS MAP TABS SWITCHER =================
  const mapTabs = document.querySelectorAll('[data-map-tab]');
  const yandexMap = document.getElementById('map-yandex');
  const googleMap = document.getElementById('map-google');
  const routeBtn = document.getElementById('map-route-btn');

  mapTabs.forEach((tab) => {
    tab.addEventListener('click', (e) => {
      e.preventDefault();
      mapTabs.forEach((t) => t.classList.remove('active'));
      tab.classList.add('active');

      const target = tab.getAttribute('data-map-tab');
      if (target === 'google') {
        if (yandexMap) yandexMap.style.display = 'none';
        if (googleMap) googleMap.style.display = 'block';
        if (routeBtn) routeBtn.href = 'https://www.google.com/maps/dir/?api=1&destination=55.8239,49.1257';
      } else {
        if (googleMap) googleMap.style.display = 'none';
        if (yandexMap) yandexMap.style.display = 'block';
        if (routeBtn) routeBtn.href = 'https://yandex.ru/maps/?rtext=~55.8239,49.1257';
      }
    });
  });

  // ================= 10. PROTOCOL TABS SWITCHER (DIAGNOSTICS & TREATMENT) =================
  const protoTabs = document.querySelectorAll('.dept-proto-tab');
  const protoPanes = document.querySelectorAll('.dept-proto-pane');

  protoTabs.forEach((tab) => {
    tab.addEventListener('click', (e) => {
      e.preventDefault();
      const targetId = tab.getAttribute('data-tab');
      if (!targetId) return;

      protoTabs.forEach((t) => t.classList.remove('active'));
      tab.classList.add('active');

      protoPanes.forEach((pane) => {
        if (pane.id === targetId) {
          pane.style.display = 'grid';
          pane.classList.add('active');
        } else {
          pane.style.display = 'none';
          pane.classList.remove('active');
        }
      });
    });
  });

  // ================= 11. DOCTOR SINGLE PAGE TABS (SPECIALIZATION, EDUCATION, DOCUMENTS) =================
  function initDocTabs(barId, contentClass) {
    const bar = document.getElementById(barId);
    if (!bar) return;
    const btns = bar.querySelectorAll('.doc-tab-btn');
    btns.forEach((btn) => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        btns.forEach((b) => b.classList.remove('active'));
        btn.classList.add('active');
        const targetId = btn.getAttribute('data-tab-target');
        if (targetId) {
          const panels = document.querySelectorAll(contentClass);
          panels.forEach((p) => { p.style.display = 'none'; });
          const target = document.getElementById(targetId);
          if (target) target.style.display = 'flex';
        }
      });
    });
  }

  initDocTabs('spec-tabs', '.doc-spec-content');
  initDocTabs('edu-tabs', '.doc-edu-content');
  initDocTabs('doc-docs-tabs', '.doc-docs-content');

  // ================= 12. DOCTORS PAGE FILTERS & SORTING & PAGINATION (FIGMA 367:6574) =================
  const filterSpecialty = document.getElementById('filter-specialty');
  const filterExperience = document.getElementById('filter-experience');
  const filterDegree = document.getElementById('filter-degree');
  const filterGender = document.getElementById('filter-gender');
  const sortSelect = document.getElementById('sort-doctors');
  const labelSpecialty = document.getElementById('label-specialty');
  const labelExperience = document.getElementById('label-experience');
  const labelDegree = document.getElementById('label-degree');
  const labelGender = document.getElementById('label-gender');
  const labelSort = document.getElementById('label-sort');
  const activeChip = document.getElementById('active-filter-chip');
  const activeChipText = document.getElementById('active-filter-chip-text');
  const resetBtn = document.getElementById('filter-reset-btn');
  const doctorsContainer = document.getElementById('doctors-catalog-grid');
  const docCards = document.querySelectorAll('#doctors-catalog-grid .doc-card');

  function sortDoctorCards() {
    if (!doctorsContainer) return;
    const sortVal = sortSelect ? sortSelect.value : 'default';

    if (labelSort && sortSelect) {
      labelSort.textContent = sortSelect.selectedIndex > 0
        ? sortSelect.options[sortSelect.selectedIndex].text
        : 'Сортировка';
    }

    const cardsArray = Array.from(doctorsContainer.querySelectorAll('.doc-card'));
    cardsArray.sort((a, b) => {
      const nameA = (a.getAttribute('data-name') || '').trim();
      const nameB = (b.getAttribute('data-name') || '').trim();
      const priceA = parseFloat(a.getAttribute('data-price') || '0');
      const priceB = parseFloat(b.getAttribute('data-price') || '0');
      const expA = parseFloat(a.getAttribute('data-experience') || '0');
      const expB = parseFloat(b.getAttribute('data-experience') || '0');
      const ratingA = parseFloat(a.getAttribute('data-rating') || '0');
      const ratingB = parseFloat(b.getAttribute('data-rating') || '0');

      if (sortVal === 'name-asc') {
        return nameA.localeCompare(nameB, 'ru');
      } else if (sortVal === 'name-desc') {
        return nameB.localeCompare(nameA, 'ru');
      } else if (sortVal === 'price-asc') {
        return priceA - priceB;
      } else if (sortVal === 'price-desc') {
        return priceB - priceA;
      } else if (sortVal === 'exp-desc') {
        return expB - expA;
      } else if (sortVal === 'exp-asc') {
        return expA - expB;
      } else if (sortVal === 'rating-desc') {
        return ratingB - ratingA;
      }
      return 0;
    });

    cardsArray.forEach((card) => doctorsContainer.appendChild(card));
  }

  function updateDoctorFilters() {
    const specVal = filterSpecialty ? filterSpecialty.value : '';
    const expVal = filterExperience ? filterExperience.value : '';
    const degVal = filterDegree ? filterDegree.value : '';
    const genVal = filterGender ? filterGender.value : '';

    if (labelSpecialty) {
      labelSpecialty.textContent = filterSpecialty && filterSpecialty.selectedIndex > 0
        ? filterSpecialty.options[filterSpecialty.selectedIndex].text
        : 'Специализация';
    }
    if (labelExperience) {
      labelExperience.textContent = filterExperience && filterExperience.selectedIndex > 0
        ? filterExperience.options[filterExperience.selectedIndex].text
        : 'Стаж';
    }
    if (labelDegree) {
      labelDegree.textContent = filterDegree && filterDegree.selectedIndex > 0
        ? filterDegree.options[filterDegree.selectedIndex].text
        : 'Ученая степень';
    }
    if (labelGender) {
      labelGender.textContent = filterGender && filterGender.selectedIndex > 0
        ? filterGender.options[filterGender.selectedIndex].text
        : 'Пол';
    }

    // Active chip display
    const activeLabels = [];
    if (specVal && filterSpecialty) activeLabels.push(filterSpecialty.options[filterSpecialty.selectedIndex].text);
    if (expVal && filterExperience) activeLabels.push(filterExperience.options[filterExperience.selectedIndex].text);
    if (degVal && filterDegree) activeLabels.push(filterDegree.options[filterDegree.selectedIndex].text);
    if (genVal && filterGender) activeLabels.push(filterGender.options[filterGender.selectedIndex].text);

    if (activeChip) {
      if (activeLabels.length > 0) {
        activeChip.style.display = 'inline-flex';
        if (activeChipText) activeChipText.textContent = activeLabels.join(' • ');
      } else {
        activeChip.style.display = 'none';
      }
    }

    docCards.forEach((card) => {
      const cardSpec = card.getAttribute('data-specialty') || '';
      const cardExp = parseInt(card.getAttribute('data-experience') || '0', 10);
      const cardDeg = card.getAttribute('data-degree') || '';
      const cardGen = card.getAttribute('data-gender') || '';

      const matchSpec = !specVal || cardSpec.includes(specVal);

      let matchExp = true;
      if (expVal === '5-10') matchExp = cardExp <= 10;
      else if (expVal === '10-15') matchExp = cardExp >= 10 && cardExp <= 15;
      else if (expVal === '15-20') matchExp = cardExp >= 15 && cardExp <= 20;
      else if (expVal === '20+') matchExp = cardExp >= 20;

      const matchDeg = !degVal || cardDeg === degVal;
      const matchGen = !genVal || cardGen === genVal;

      if (matchSpec && matchExp && matchDeg && matchGen) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  }

  if (sortSelect) {
    sortSelect.addEventListener('change', () => {
      sortDoctorCards();
      updateDoctorFilters();
    });
  }

  if (filterSpecialty) filterSpecialty.addEventListener('change', updateDoctorFilters);
  if (filterExperience) filterExperience.addEventListener('change', updateDoctorFilters);
  if (filterDegree) filterDegree.addEventListener('change', updateDoctorFilters);
  if (filterGender) filterGender.addEventListener('change', updateDoctorFilters);

  if (activeChip) {
    activeChip.addEventListener('click', () => {
      if (filterSpecialty) filterSpecialty.value = '';
      if (filterExperience) filterExperience.value = '';
      if (filterDegree) filterDegree.value = '';
      if (filterGender) filterGender.value = '';
      updateDoctorFilters();
    });
  }

  if (resetBtn) {
    resetBtn.addEventListener('click', () => {
      if (filterSpecialty) filterSpecialty.value = '';
      if (filterExperience) filterExperience.value = '';
      if (filterDegree) filterDegree.value = '';
      if (filterGender) filterGender.value = '';
      if (sortSelect) sortSelect.value = 'default';
      if (labelSpecialty) labelSpecialty.textContent = 'Специализация';
      if (labelExperience) labelExperience.textContent = 'Стаж';
      if (labelDegree) labelDegree.textContent = 'Ученая степень';
      if (labelGender) labelGender.textContent = 'Пол';
      if (labelSort) labelSort.textContent = 'Сортировка';
      if (activeChip) activeChip.style.display = 'none';
      sortDoctorCards();
      docCards.forEach((c) => (c.style.display = 'flex'));
    });
  }

  // Pagination click handling
  const pageNums = document.querySelectorAll('.doc-pagination-bar .p-num');
  pageNums.forEach((p) => {
    p.addEventListener('click', () => {
      pageNums.forEach((el) => el.classList.remove('active'));
      p.classList.add('active');
      window.scrollTo({ top: 100, behavior: 'smooth' });
    });
  });

  // ================= 11. SCROLL REVEALS & HOVER DYNAMICS =================
  const revealElements = document.querySelectorAll('.reveal-on-scroll');
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-revealed');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08 });

    revealElements.forEach((el) => observer.observe(el));
  } else {
    revealElements.forEach((el) => el.classList.add('is-revealed'));
  }
});


