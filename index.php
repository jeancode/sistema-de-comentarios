<html>


<head>
    <title>Sistema de com</title>
    
    <meta content='minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no' name='viewport' />
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
    <script>
     $(document).ready(function(){
         
          $.get("bd/com.json",function(data){
                 
                for(var i = data.length-1;i >= 0;i--){
                 
                      $("#con").append('<div class="item-com">'+data[i].con+'</div>'); 
                    
                }
                   
             });
         
         $("#enviar").click(function(){
             
            
             
           var com =  $("#com").val();
            if(com != ""){
                
               $.post("crear.php",{"ewretweret":com},function(data){
                   
                 $(".item-com").remove();
                
                var json = JSON.parse(data);
                        console.log(json[0]);
               
                 $("#com").val("");
                for(var i = json.length-1;i >= 0;i--){
                 
                      $("#con").append('<div class="item-com">'+json[i].con+'</div>'); 
                    
                }
                   
                   
                   
                 
               });
                
            }else{

                
            }
             
         });
         
     });
    
    </script>

    </head>

    <style>
        body{
         margin: 0px;
         width: 100%
         position: relative;
            margin-top: 10px;
               
        }
        #form{
           
            height: 80px;
            padding:20px;
            background:white;
            min-width: 300px;
            max-width: 800px;
            margin: 0 auto 0 auto;
            border-radius: 5px;
            position:relative;
            background-color: #efefef;
            cursor: default;
            
        }
        
        #com{
            width: 100%;
            height: 35px;
            padding-left: 5px;
            border: none;
            
        }
        #enviar{
            margin-top: 10px;
            width: 100%;
            height: 35px;
            border: none;
             -webkit-transition:cubic-bezier(.27, 0, .24, .93) .5s all;

        }
        #enviar:hover{
            background:#458df0;
            color:white;
            -webkit-transition:cubic-bezier(.27, 0, .24, .93) .5s all;
            
        }
        .item-com{
           
           max-width:  80px;
            padding:20px;
            background:white;
            min-width: 300px;
            max-width: 800px;
            margin: 0 auto 0 auto;
            border-radius: 5px;
            position:relative;
            background-color: #efefef;
            margin-top: 10px;
            cursor: default;
            -webkit-user-select:none;
        }
    </style>
    
    <body>
    <div id="con">
        <div id="form">
        <input type="text" id="com" placeholder="Comenta">
        <input type="submit" value="Enviar" id="enviar">
        </div>        
        
        
        
    </div>
    

    </body>

</html>