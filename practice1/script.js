const scroll = document.getElementById("dropdown");


for (let i = 18; i <= 65; i++) {
  const option = document.createElement("option");
  option.value = i;
  option.textContent = i;
  scroll.appendChild(option);
}