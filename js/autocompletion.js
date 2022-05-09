function get_text(event)
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
	.then(function(response)
    {
		return response.json();
	}
	)
	.then(function(responseData)
	{
		document.getElementsByName('search_box')[0].value = string;
		document.getElementById('resultat-de-recherche').innerHTML = '';
	}
	);
}
function load_data(query)
{
	if(query.length > 2)
	{
		var form_data = new FormData();
		form_data.append('query', query);
		var requete_ajax = new XMLHttpRequest();
		requete_ajax.open('POST', 'php/processus.php');
		requete_ajax.send(form_data);
		requete_ajax.onreadystatechange = function()
		{
			if(requete_ajax.readyState == 4 && requete_ajax.status == 200)
			{
				var response = JSON.parse(requete_ajax.responseText);
				var html = '<div class="liste-de-recherche">';
				if(response.length > 0)
				{
					for(var count = 0; count < response.length; count++)
					{
						html += '<a href="#" class="resultat" onclick="get_text(this)">'+response[count].name+'</a>';
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