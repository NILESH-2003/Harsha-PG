document.addEventListener('DOMContentLoaded', function() {
  const toggle = document.getElementById('toggleDark');
  const body = document.querySelector('body');

  toggle.addEventListener('click', function() {
      if (body.classList.contains('light-mode')) {
          body.classList.remove('light-mode');
          body.classList.add('dark-mode');
          toggle.classList.remove('bi-brightness-high-fill');
          toggle.classList.add('bi-moon');
      } else {
          body.classList.remove('dark-mode');
          body.classList.add('light-mode');
          toggle.classList.remove('bi-moon');
          toggle.classList.add('bi-brightness-high-fill');
      }
  });
});


