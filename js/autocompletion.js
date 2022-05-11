function recupererTexte(event)
{
	var string = event.textContent;
	fetch("php/processus.php",
	{
        method:"POST",body: JSON.stringify
        (
            {
                search_query : string
            }
        ),
		headers :
        {
            "Content-type" : "application/json; charset=UTF-8"
        }
	}
	)
	.then(function(reponse)
    {
		document.getElementsByName('search_box')[0].value = string;
		document.getElementById('resultat-de-recherche').innerHTML = '';
	}
	)
}
function chargementDonnees(query)
{
	if(query.length > 2)
	{
		var via_donnees = new FormData();
		via_donnees.append('query', query);
		var requete_ajax = new XMLHttpRequest();
		requete_ajax.open('POST', 'php/processus.php');
		requete_ajax.send(via_donnees);
		requete_ajax.onreadystatechange = function()
		{
			if(requete_ajax.readyState == 4 && requete_ajax.status == 200)
			{
				var reponse = JSON.parse(requete_ajax.responseText);
				var html = '<div class="liste-de-recherche">';
				if(reponse.length > 0)
				{
					for(var count = 0; count < reponse.length; count++)
					{
						html += '<a href="#" id="myBtn" class="resultat" onclick="recupererTexte(this)">'+reponse[count].name+'</a><br />';
					}
				}
				else // Si aucun produit n'est trouvé dans la recherche
				{
					html += '<p6 class="message-aucun-produit">No products found.</p6>';
				}
				html += '</div>';
				document.getElementById('resultat-de-recherche').innerHTML = html;
			}
		}
	}
	else
	{
		document.getElementById('resultat-de-recherche').innerHTML = '';
	}
}