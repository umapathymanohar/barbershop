/* ==========================================================
 * Site based js scripts
 * ========================================================== */


  // $(document).on('submit', '#barber-step-1', function(e) { 
  //   e.preventDefault();
  //   if(typeof ajax_request !== 'undefined') {
  //     ajax_request.abort();
  //   }
  //   host = window.location.origin;
  //   url = $(this).attr('action');
  //   data = $('form').serialize();
  //   ajax_request =  $.ajax({
  //     type: "POST",
  //     url: url,
  //     data:data,
  //     success: function(data)
  //     {
        
  //       $('#step-2').trigger('click');
  //       // $('#response').html(JSON.stopPropagationgify(data, null, "\t"));
  //     },
 
  //     error: function (request, textStatus, errorThrown) {
 
  //     // $('#response').html(JSON.stringify(request.responseJSON, null, "\t"));
  //      }
  //   });
  // });
  


$(document).ready(function(){ 
$('.dropdown-toggle').dropdown();



$('#barber-image').on('fileuploaded', function(event, data, previewId, index) {
    var form = data.form, files = data.files, extra = data.extra, 
        response = data.response, reader = data.reader;
        $('#barber-uploaded-image').val(response.name);
    
});



$('#style-image').on('fileuploaded', function(event, data, previewId, index) {
    var form = data.form, files = data.files, extra = data.extra, 
        response = data.response, reader = data.reader;
        $('#style-uploaded-image').val(response.name);
    
});


$('#shop-image').on('fileuploaded', function(event, data, previewId, index) {
    var form = data.form, files = data.files, extra = data.extra, 
        response = data.response, reader = data.reader;
        $('#shop-uploaded-image').val(response.name);
    
});

$("#style-image").fileinput({
    uploadUrl: "/style/fileupload",
    maxFileCount: 10
});

$("#barber-image").fileinput({
    uploadUrl: "/barber/fileupload",
    maxFileCount: 10
});


$("#shop-image").fileinput({
    uploadUrl: "/shop/fileupload",
    maxFileCount: 10
});






  $('.multiselect').multiselect({
        //nonSelectedText: 'Select options below';
        buttonWidth: '100%',
       
      
    });

  $('#register-shop').click(function() {
    $('#create-shop').removeClass('hide');

  });


  $('#register-style').click(function() {
    $('#barber-step-3').removeClass('hide');

  });
   
// pie chart
    $('.chart').each(function(){
      $(this).easyPieChart({
          size:150,
          animate: 2000,
          lineCap:'butt',
          scaleColor: false,
          barColor: '#ff7800',
          lineWidth: 5
        });
    });

// time schedule list for UI development 

 // for (var i = 0;i <=5; i++)
 //  $('.slots ul').append('<li><span class="checkmark"><input type="checkbox" /><label></label>9:30 AM</span></li>' + '<li><span class="checkmark"><input type="checkbox" /><label></label>10:00 AM</span></li>' + '<li><span class="checkmark"><input type="checkbox" /><label></label>10:30 AM</span></li>');
        

    // shop image selected

     $('.checkmark').on('click', function (event){
                     event.preventDefault();
                     event.stopPropagation();
                     var me = $(this);
                     var checkbox = me.find('input[type="checkbox"]');
                     var selected = checkbox.prop('checked');
                     if(selected) {
                        checkbox.prop('checked',false);
                        me.parent().find('.checked').addClass('hide');
                        }
                     else {
                        checkbox.prop('checked',true);
                        me.parent().find('.checked').removeClass('hide');
                        }
                 });
                 


    $(function () {
    $('#users').highcharts({
        chart: {
            type: 'area'
        },

        title: {
            text: 'Monthly Average Users by Gender'
        },
        xAxis: {
            title: {
                text: 'Users'
            }
        },
        yAxis: {
            title: {
                text: 'Age Group'
            }
        },
        
        plotOptions: {
            area: {
                dataLabels: {
                    enabled: true,
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'Male',
            data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: 'Female',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }]
    });
});


 // $('.appointment-calc').supercal({
 //              transition: 'carousel-vertical'
 //        });

});