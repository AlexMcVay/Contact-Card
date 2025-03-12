function downloadVCard() {
    window.location.href = 'download_vcard.php';
}

function getCurrentYear() {
  return new Date().getFullYear();
}

document.getElementById("currentYear").innerHTML = getCurrentYear();