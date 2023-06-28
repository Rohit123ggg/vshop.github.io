
   <!DOCTYPE html>
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <style>

       *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: all 0.4s;
            font-family: -apple-system,
            BlinkMacSystemFont,
            "Segoe UI",
            Roboto,
            Helvetica,
            Arial,
            sans-serif,
            "Apple Color Emoji",
            "Segoe UI Emoji",
            "Segoe UI Symbol";
        }
        
        /* .container{
            margin-left: ;
            margin-right: ;
        }
        
       Navbar section */
        
        .nav{
            width: 100%;
            height: 65px;
            position: fixed;
            line-height: 65px;
            text-align: center;
            background-color: #4158D0;
            background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);  
             display: flex;     
            justify-content: flex-start; }
        
        .nav div.logo{
            text-align: start;
            width: auto;
            height: 10px;
            position: absolute;
        }
        
        .nav div.logo a{
            text-decoration: none;
            color: #fff;
            font-size: larger;        }
        
        .nav div.logo a:hover {
            color: #c0c0c0;
        }
        .nav div.main_se{
            width: auto;
            height: auto;
            align-items: flex-end;
            float: right;
            display: flex;
            padding-left: 20px;

        }
        
        .nav div.main_list{
            width:auto ;
            height: auto;
            display: flex;
            float: right;
        }
        
        .nav div.main_list ul{
            width:100%;
            height: auto;
            display: flex;
            list-style: none;
            justify-content: center;
            align-items: center;
        }
        
        .nav div.main_list ul li{
            width: auto;
            height: 65px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .nav div.main_list ul li a{
            text-decoration: none;
            color: #fff;
            line-height: 65px;
            text-transform: uppercase;
        }
        
        .nav div.main_list ul li a:hover{
            color: #c0c0c0;
        }
        
        .nav div.media_button {
            width: 40px;
            height: 40px;
            background-color: transparent;
            position: absolute;
            right: 15px;
            top: 12px;
            display: none;
        }
        
        .nav div.media_button button.main_media_button {
            width: 100%;
            height: 100%;
            background-color: transparent;;
            outline: 0;
            border: none;
            cursor: pointer;
        }
        
        .nav div.media_button button.main_media_button span{
            width: 98%;
            height: 1px;
            display: block;
            background-color: #fff;
            margin-top: 9px;
            margin-bottom: 10px;
        }
        
        .nav div.media_button button.main_media_button:hover span:nth-of-type(1){
            transform: rotateY(180deg);
            transition: all 0.5s;
            background-color: #c0c0c0;
        }
        
        .nav div.media_button button.main_media_button:hover span:nth-of-type(2){
            transform: rotateY(180deg);
            transition: all 0.4s;
            background-color: #c0c0c0;
        }
        
        .nav div.media_button button.main_media_button:hover span:nth-of-type(3){
            transform: rotateY(180deg);
            transition: all 0.3s;
            background-color: #c0c0c0;
        }
        
        .nav div.media_button button.active span:nth-of-type(1) {
            transform: rotate3d(0, 0, 1, 45deg);
            position: absolute;
            margin: 0;
        }
        
        .nav div.media_button button.active span:nth-of-type(2) {
            display: none;
        }
        
        .nav div.media_button button.active span:nth-of-type(3) {
            transform: rotate3d(0, 0, 1, -45deg);
            position: absolute;
            margin: 0;
        }
        
        .nav div.media_button button.active:hover span:nth-of-type(1) {
            transform: rotate3d(0, 0, 1, 20deg);
        }
        
        .nav div.media_button button.active:hover span:nth-of-type(3) {
            transform: rotate3d(0, 0, 1, -20deg);
        }
        #search{
            width: 100px;
            height: auto;
        }
        /* Home section*/
        
        .home{
            width: 100%;
            height: 100%;
            background-image:linear-gradient(to left top,rgb(253, 242, 78),rgb(0, 247, 255))
        }
         
        /* Medai qurey section */
        
        @media screen and (min-width: 768px) and (max-width: 1024px) {
            
            .container-fluid{
                margin: 0;
            }
            
        }
        
        @media screen and (max-width:768px) {
            
            .container-fluid{
                margin: 0;
            }
            
            .nav div.logo{
                margin-left: 15px;
                position: absolute;
            }
            
            .nav div.main_list{
                width: 100%;
                margin-top: 61px;
                height: 0px;
                overflow: hidden;
            }
            
            .nav div.show_list{
                height: 250px;
            }
            
            .nav div.main_list ul{
                flex-direction: column;
                width: 100%;
                height: 100%;
                top: 80px;
                right: 0;
                left: 0;
            }
            
            .nav div.main_list ul li{
                width: 400px;
                height: 40px;
                background-color: #4158D0;
                background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);   background-color:rgba(0,0,255,0.8);
            }
            
            .nav div.main_list ul li a{
              text-align: center;
                line-height: 40px;
                width: 100%;
                height: 40px;
                display: table;
            }
            
            .nav div.media_button{
                display: block;
            }
            .nav div.main_se{
                width: 400px;
                display: flex;
                align-items: center;
                justify-items: center;
                background-color: #4158D0;
                background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);   background-color:rgba(0,0,255,0.8);
            }
            }
            .nav div.main_image{
                justify-items: center;
                background-color: #4158D0;
                background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);   background-color:rgba(0,0,255,0.8);
            }
       
            </style>
   <body>
    
   </body>
   </html>