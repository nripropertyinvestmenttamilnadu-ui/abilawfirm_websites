/* ABI LAW FIRM, site behaviour: menu, popup, enquiry forms, conversion tracking */
(function () {
  var S = window.SITE || {};
  var track = function (sendTo) {
    if (S.live && typeof gtag === 'function') gtag('event', 'conversion', { send_to: sendTo, transport_type: 'beacon' });
  };

  // Google Ads conversions on call & WhatsApp clicks (the link still opens normally)
  document.querySelectorAll('a[href^="tel:"]').forEach(function (a) { a.addEventListener('click', function () { track(S.convCall); }); });
  document.querySelectorAll('a[href*="whatsapp.com"]').forEach(function (a) { a.addEventListener('click', function () { track(S.convWa); }); });

  // Mobile menu
  var menu = document.getElementById('menu');
  var burger = document.querySelector('.burger');
  if (burger) burger.addEventListener('click', function () {
    var open = menu.classList.toggle('show');
    burger.setAttribute('aria-expanded', open);
  });
  document.querySelectorAll('.sub-toggle').forEach(function (b) {
    b.addEventListener('click', function () {
      var li = b.parentElement, open = li.classList.toggle('open');
      b.setAttribute('aria-expanded', open);
    });
  });
  document.querySelectorAll('#menu a').forEach(function (a) {
    a.addEventListener('click', function () { menu.classList.remove('show'); });
  });

  // Popup form: once per session, after 15 seconds
  var popup = document.getElementById('popup');
  if (popup) {
    var close = function () { popup.classList.remove('open'); };
    popup.addEventListener('click', function (e) { if (e.target === popup) close(); });
    popup.querySelector('.x').addEventListener('click', close);
    document.addEventListener('keydown', function (e) { if (e.key === 'Escape') close(); });
    setTimeout(function () {
      var shown = false;
      try { shown = sessionStorage.getItem('popupShown'); sessionStorage.setItem('popupShown', '1'); } catch (e) {}
      if (!shown) popup.classList.add('open');
    }, 15000);
    // Any "#contact" link on a page without an inline form opens the popup
    if (!document.getElementById('contact')) {
      document.querySelectorAll('a[href="#contact"]').forEach(function (a) {
        a.addEventListener('click', function (e) { e.preventDefault(); popup.classList.add('open'); });
      });
    }
  }

  // Enquiry forms
  document.querySelectorAll('.lead-form').forEach(function (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      form.querySelectorAll('.err').forEach(function (el) { el.textContent = ''; });
      form.querySelectorAll('input').forEach(function (el) { el.style.borderColor = ''; });

      var btn = form.querySelector('button[type="submit"]');
      var label = btn.textContent;
      btn.disabled = true; btn.textContent = 'Submitting...';

      var data = new FormData(form);
      data.append('page', location.pathname);

      fetch('/ajax/contact-enquiry.php', { method: 'POST', body: data })
        .then(function (r) { return r.json(); })
        .then(function (res) {
          if (res.status === 'success') { window.location = '/thank-you'; return; }
          if (res.errors) {
            Object.keys(res.errors).forEach(function (f) {
              var input = form.querySelector('[name="' + f + '"]');
              if (input) {
                input.style.borderColor = '#d33';
                var err = input.parentElement.querySelector('.err');
                if (err) err.textContent = res.errors[f];
              }
            });
          } else if (res.message) { alert(res.message); }
          btn.disabled = false; btn.textContent = label;
        })
        .catch(function () {
          alert('Sorry, your enquiry could not be sent. Please try again or call us on ' + S.phone + '.');
          btn.disabled = false; btn.textContent = label;
        });
    });
  });
})();
