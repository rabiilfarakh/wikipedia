
function openPopup() {
    document.getElementById('popup').style.display = 'flex';
  }

  function closePopup() {
    document.getElementById('popup').style.display = 'none';
  }

  document.getElementById('openPopup').addEventListener('click', openPopup);