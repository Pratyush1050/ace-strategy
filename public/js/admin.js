window.addEventListener("DOMContentLoaded", (event) => {
    const datatablesSimple = document.getElementById("datatablesSimple");
    if (datatablesSimple) {
      new simpleDatatables.DataTable(datatablesSimple);
    }
    
    let regionNames = new Intl.DisplayNames(['en'], {type: 'region'});
    let tableCell = document.querySelectorAll('.country_name');
    console.log(tableCell);
    for(var i= 0; i<tableCell.length; ++i){
      let country = tableCell[i].innerHTML;
      let countyName = regionNames.of(country.toUpperCase());
      tableCell[i].innerHTML = countyName;
    }
  });
  