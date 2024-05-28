function openPopup(buku) {
  const notif = document.getElementById(`notif-${buku}`);
  notif.style.display = "block";
}

function closePopup(buku) {
  const notif = document.getElementById(`notif-${buku}`);
  notif.style.display = "none";
}
