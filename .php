&lt;?php

$con = new mysqli(“localhost”,”root”,””,”concesionarioautos”); // Conectar a la BD
$sql = “select * from venta”; // Consulta SQL
$query = $con-&gt;query($sql); // Ejecutar la consulta SQL
$data = array(); // Array donde vamos a guardar los datos
While($r = $query-&gt;fetch_object()){ // Recorrer los resultados de Ejecutar la consulta SQL
$data[]=$r; // Guardar los resultados en la variable $data
}

¿&gt;

&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Grafica de Barra y Lineas con PHP y MySQL&lt;/title&gt;
&lt;script src=”chart.min.js”&gt;&lt;/script&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h1&gt;Grafica de Barra y Lineas con PHP y MySQL&lt;/h1&gt;
&lt;canvas id=”chart1” style=”width:100%;” height=”100”&gt;&lt;/canvas&gt;
&lt;script&gt;
Var ctx = document.getElementById(“chart1”);
Var data = {
Labels: [
&lt;?php foreach($data as $d):?&gt;
“&lt;?php echo $d-&gt;date_at?&gt;”,
&lt;?php endforeach; ¿&gt;
],
Datasets: [{
Label: ‘$ Ventas’,

Data: [
&lt;?php foreach($data as $d):?&gt;
&lt;?php echo $d-&gt;val;?&gt;,
&lt;?php endforeach; ¿&gt;
],
backgroundColor: “#14D767”,
borderColor: “#F768AB”,
borderWidth: 2
}]
};
Var options = {
Scales: {
yAxes: [{
ticks: {
beginAtZero:true
}
}]
}
};
Var chart1 = new Chart(ctx, {
Type: ‘bar’, /* valores: line, bar*/
Data: data,
Options: options
});
&lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;