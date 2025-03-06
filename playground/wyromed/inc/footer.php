<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!--addon-->
<script src="addon/select2/select2.min.js"></script>
<script src="addon/datatables/datatables.min.js"></script>
<script src="addon/gijgo/gijgo.min.js"></script>
<script src="addon/highcharts/highcharts.js"></script>
<script src="addon/highcharts/export-data.js"></script>
<script src="addon/highcharts/exporting.js"></script>
<script src="addon/highcharts/series-label.js"></script>
<script src="addon/highcharts/accessibility.js"></script>
<script src="addon/thinscroll/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="addon/jquery-count-to/jquery.countTo.js"></script>

<!-- <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.5/lib/darkmode-js.min.js"></script> -->

<script>
$(document).ready(function() {
    //FORM-WIZZARD
    var navListItems = $('div.setup-panel div a'),
    allWells = $('.setup-content'),
    allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-warning').addClass('btn-default');
            $item.addClass('btn-warning');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-warning').trigger('click');


    var table = $('#datatables').DataTable( {
        responsive: true
    });
    new $.fn.dataTable.FixedHeader( table );


    //countToJs
    $('.customer').each(count);
    $('.supplier').each(count);
});

//Select2
$(function () {
    $('.select2').each(function () {
        $(this).select2({
            theme: 'bootstrap4',
            width: 'style',
            placeholder: $(this).attr('placeholder'),
            allowClear: Boolean($(this).data('allow-clear'))
        });
    });
});

//darkmodejs
//new Darkmode().showWidget();

var today, datepicker;
today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
$('#po_order_date').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'dd-mm-yyyy',
    maxDate: today
});
$('#po_end_date').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'dd-mm-yyyy'
});
$('#expired_date').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'dd-mm-yyyy',
    maxDate: today
});
$('#expired_date_2').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'dd-mm-yyyy',
    maxDate: today
});

$('#so_order_date').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'dd-mm-yyyy',
    maxDate: today
});
$('#so_send_date').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'dd-mm-yyyy',
    maxDate: today
});
$('#so_end_date').datepicker({
    uiLibrary: 'bootstrap4',
    format: 'dd-mm-yyyy',
    maxDate: today
});


//custom scrollbar
/* Dark Thin */
$("#sidebar-scroll").mCustomScrollbar({
    theme: "dark-thin"
    //theme: "rounded-dark"
});
$("#content-scroll").mCustomScrollbar({
    theme: "dark-thin"
    //theme: "rounded-dark"
});


//HIGHCHARTS
$('#chart-1').highcharts({
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Average Sales and Purchase'
    },
    subtitle: {
        text: 'Per December 2020'
    },
    credits: {
        enabled: false
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Percentage'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Sales',
        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2],
        color: '#0fcba3'
    }, {
        name: 'Purchase',
        data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1],
        color: '#FFCE67'

    }]
});

$('#chart-2').highcharts({
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Average Purchase'
    },
    subtitle: {
        text: 'Per December 2020'
    },
    credits: {
        enabled: false
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Percentage'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
    //     name: 'Sales',
    //     data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2],
    //     color: '#0fcba3'
    // }]
    // }, {
        name: 'Purchase',
        data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1],
        color: '#FFCE67'
    }]
});

$('#chart-3').highcharts({

    title: {
        text: 'Additional Customer'
    },

    subtitle: {
        text: 'Per Years'
    },

    credits: {
        enabled: false
    },

    yAxis: {
        title: {
            text: 'Number of Customer'
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2010
        }
    },

    series: [{
        name: 'Customer',
        data: [43, 52, 57, 69, 97, 119, 137, 154],
        color: '#FFCE67'
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }
});
</script>
