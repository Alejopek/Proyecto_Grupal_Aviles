document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("contactForm");
  const alertBox = document.getElementById("formAlert");

  function showAlert(message, type = "success") {
    alertBox.innerHTML = `<div class="alert alert-${type} p-2" role="alert">${message}</div>`;
  }

  form.addEventListener("submit", function (e) {
    e.preventDefault();
    const nombre = document.getElementById("nombre").value.trim();
    const telefono = document.getElementById("telefono").value.trim();
    const pedido = document.getElementById("pedido").value.trim();

    if (!nombre || !telefono) {
      showAlert("Por favor completa tu nombre y teléfono.", "danger");
      return;
    }

    // simulamos envío (proyecto escolar — no hay backend)
    showAlert("Pedido recibido. Gracias, nos comunicaremos a la brevedad.");
    form.reset();
    setTimeout(() => (alertBox.innerHTML = ""), 5000);
  });

  // anclas suaves
  document.querySelectorAll('a[href^="#"]').forEach((a) => {
    a.addEventListener("click", function (e) {
      const href = this.getAttribute("href");
      if (href === "#") return;
      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: "smooth", block: "start" });
      }
    });
  });
});
