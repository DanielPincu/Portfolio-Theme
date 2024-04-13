document.addEventListener('DOMContentLoaded', function () {
  tailwind.config = {
    darkMode: 'class'
  };
  
  const darkModeCheckbox = document.getElementById('darkModeCheckbox');
  
  darkModeCheckbox.addEventListener('change', function () {
      if (this.checked) {
          document.body.classList.add('dark');
      } else {
          document.body.classList.remove('dark');
      }
  });
});

function toggleCardVisibility(title) {
  var div = document.getElementById(title);
  var cards = document.getElementsByClassName('expandable-card');

  // Hide all other cards except the one being clicked
  for (var i = 0; i < cards.length; i++) {
      if (cards[i].id !== title) {
          cards[i].classList.add('hidden');
      }
  }

  // Toggle visibility of clicked card
  div.classList.toggle('hidden');
}

function openModal(url) {
  const modal = document.getElementById('myModal');
  const iframe = document.getElementById('modalIframe');
  iframe.src = url;
  modal.classList.remove('hidden');
}

function closeModal() {
  const modal = document.getElementById('myModal');
  modal.classList.add('hidden');
}