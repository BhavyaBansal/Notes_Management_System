
    $(document).ready(function(){
        $('#sidebarCollapse').on('click',function(){
            $('#sidebar').toggleClass('active');
            var show=document.getElementById('sidebar');
        if(show.className=='text-light shadow p-3 mb-5 bg-dark rounded')
        {
            $('#sidebarCollapse').css('margin-left','220px');
        }
        else{
            $('#sidebarCollapse').css('margin-left','0px');
        }
    });

        });	
        var iframe=document.getElementById('folders').children[0];

        iframe.onload=function(){
            iframe.style.height=iframe.contentWindow.document.body.scrollHeight+'px';
        }
        iframe.onunload=function(){
            iframe.style.height=iframe.contentWindow.document.body.scrollHeight+'px';
        }
        $(window).resize(function(){
            
            iframe.style.height=iframe.contentWindow.document.body.scrollHeight+'px';
        })  
       