setInterval(() => {
    fetch("./php/inc/execel.inc")
        .then(r => r.text())
        .then(t => console.log("AUTO EXPORT:", t))
        .catch(err => console.error(err));
}, 5000);
