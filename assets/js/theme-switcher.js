/**
 * Medical Clinic Theme Switcher (4 Palettes)
 * B2B Client Pitch Feature
 */

(function () {
  'use strict';

  const STORAGE_KEY = 'rene_clinic_theme';
  const VALID_THEMES = ['blue', 'green', 'cream', 'rose'];

  function getInitialTheme() {
    const urlParams = new URLSearchParams(window.location.search);
    const themeFromUrl = urlParams.get('theme');
    if (themeFromUrl && VALID_THEMES.includes(themeFromUrl)) {
      return themeFromUrl;
    }
    const savedTheme = localStorage.getItem(STORAGE_KEY);
    if (savedTheme && VALID_THEMES.includes(savedTheme)) {
      return savedTheme;
    }
    return 'blue';
  }

  function applyTheme(themeName) {
    if (!VALID_THEMES.includes(themeName)) return;
    document.documentElement.setAttribute('data-theme', themeName);
    localStorage.setItem(STORAGE_KEY, themeName);

    // Update active dot in switcher widget
    document.querySelectorAll('.theme-dot').forEach((dot) => {
      if (dot.getAttribute('data-theme-val') === themeName) {
        dot.classList.add('active');
      } else {
        dot.classList.remove('active');
      }
    });
  }

  // Initialize on DOM load
  document.addEventListener('DOMContentLoaded', () => {
    const initialTheme = getInitialTheme();
    applyTheme(initialTheme);

    // Attach click listeners to all theme dots
    document.querySelectorAll('.theme-dot').forEach((dot) => {
      dot.addEventListener('click', (e) => {
        const selected = e.currentTarget.getAttribute('data-theme-val');
        applyTheme(selected);
      });
    });
  });

  window.ReneTheme = {
    setTheme: applyTheme,
    getTheme: () => document.documentElement.getAttribute('data-theme') || 'blue'
  };
})();
