const form = document.querySelector("form");
form.addEventListener("submit", function (e) {
  e.preventDefault();

  const nim = document.getElementById("nim").value;
  const nama = document.getElementById("nama").value;
  const jk = document.getElementById("jk").value;
  const agama = document.getElementById("agama").value;
  const status = document.querySelector('input[name="status"]:checked')?.value || "";
  const jurusan = document.getElementById("jurusan").value;
  const komentar = document.getElementById("komentar").value;

  document.getElementById("r_nim").value = nim;
  document.getElementById("r_nama").value = nama;
  document.getElementById("r_jk").value = jk;
  document.getElementById("r_agama").value = agama;

  if (status === "Pria") {
    document.getElementById("r_pria").checked = true;
  } else if (status === "Wanita") {
    document.getElementById("r_wanita").checked = true;
  }

  document.getElementById("r_jurusan").value = jurusan;
  document.getElementById("r_komentar").value = komentar;
});
