const ctx = document.getElementById('myChart');
const nombres = ['Arte1','Arte2','Ciencia1','Ciencia2','Ciencia3','Desarrollo1','Desarrollo2'];
const datos = [2,0,4,3,1,2,4]

new Chart(ctx, {
type: 'radar',
data: {
    labels: nombres,
    datasets: [{
    label: 'Primer Bimestre',
    data: datos,
    borderWidth: 1
    }]
},
options: {
    elements:{
        line:{
            borderWidth:3
        }
    },
    scales: {
        r{
            min: 0,
            max: 5,
            ticks:{
                stepSize: 1
            }
        }
    }
}
}
});