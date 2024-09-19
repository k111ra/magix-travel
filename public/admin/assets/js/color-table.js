
    // fonction pour selection une ligne 
function selectRow(row) {
    // Retirer la classe 'selected-row' de toutes les lignes
    var rows = document.querySelectorAll('tr');
    rows.forEach(function(row) {
        row.classList.remove('selected-row');
    });

    // Ajouter la classe 'selected-row' à la ligne cliquée
    row.classList.add('selected-row');
}
