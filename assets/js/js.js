var _pathname = window.location.pathname; // Returns path only (/path/example.html)
var _url      = window.location.href;     // Returns full URL (https://example.com/path/example.html)
var _origin   = window.location.origin;   // Returns base URL (https://example.com)
var _baseurl  = window.location.origin+'/praktekdokric';   // Returns base URL (https://example.com)

$('#prov_id').on('select2:selecting', function (e) { 
    debugger
    var prov_id = e.params.args.data.id;  

    $.ajax({
        type    : "GET",
        url     : _baseurl.concat('/pasien/kabByID/'+prov_id),
        cache	: false,
        success: function(data, textStatus, jqXHR) {
            //debugger      
            var data = jQuery.parseJSON(data);   

            var kab = '';
                kab += '<option value=>--None--</option>';
            var i;
            for(i=0; i<data.length; i++){
                kab += '<option value='+data[i].kab_id+'>'+data[i].kab_name+'</option>';
            }
            $('#kab_id').html(kab);

            //swal_alert('success', 'Saved Successfully');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            swal_alert('error','Terjadi kesalahan '); 
        }
    });

  });

  $('#kab_id').on('select2:selecting', function (e) { 
    debugger
    var kab_id = e.params.args.data.id;  

    $.ajax({
        type    : "GET",
        url     : _baseurl.concat('/pasien/kecByID/'+kab_id),
        cache	: false,
        success: function(data, textStatus, jqXHR) {
            //debugger      
            var data = jQuery.parseJSON(data);   

            var kec = '';
                kec += '<option value=>--None--</option>';
            var i;
            for(i=0; i<data.length; i++){
                kec += '<option value='+data[i].kec_id+'>'+data[i].kec_name+'</option>';
            }
            $('#kec_id').html(kec);

            //swal_alert('success', 'Saved Successfully');
        },
        error: function(jqXHR, textStatus, errorThrown) {
            swal_alert('error','Terjadi kesalahan '); 
        }
    });

  });