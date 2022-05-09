// Pour le dark mode
const darkmode = document.getElementById('darkmode');
darkmode.addEventListener('change', () =>
{
	document.body.classList.toggle('dark');
	document.titre.classList.toggle('dark');
}
);