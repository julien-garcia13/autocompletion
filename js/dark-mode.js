// Pour le dark mode de la page entière
const darkmode = document.getElementById('darkmode');
darkmode.addEventListener('change', () =>
{
	document.body.classList.toggle('dark');
	document.titre.classList.toggle('dark');
}
);