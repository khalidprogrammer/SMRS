
function NumMaleFemaleData(MaleFemalData) {
    $('#NumMFChart').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: MaleFemale
        }, 
        credits: {
            enabled: false
        },
        tooltip: {
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y:f}</b><br/>',
            shared: true,
            useHTML: true
        },  
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        }, 
        series: [{
            type: 'pie',
            name:TotalMF,
            data: MaleFemalData
        }]
    });
}