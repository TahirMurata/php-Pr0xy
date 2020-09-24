
   function copyURI(evt) {
    evt.preventDefault();
    navigator.clipboard.writeText(evt.target.getAttribute('href')).then(() => {
      alert("Copied Succesfully");
    }, () => {
      alert("Error");
    });
}
