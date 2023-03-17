const actionButton1 = document.getElementById("exce3-btn");

actionButton1.onclick = () => {
    activeAnswer.title.textContent = "Ejercicio 3:";
    activeAnswer.answer.textContent = JSON.stringify(
        vehiculo.filter(vehiculo => vehiculo.capacidad > 10 && vehiculo.color === "azul")
    );
};
// 4. A partir del siguiente listado filtre los vehículos que tengan una capacidad mayor a 10 y sean de color azul.

