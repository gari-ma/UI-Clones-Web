<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
     <script src="https://cdn.tailwindcss.com"></script>    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind practice</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class=" flex justify-between bg-green-900 text-white ">
        <div class="title p-4 font-semibold">WhatsApp</div>
        <div class="icons flex ">
            <div class="camera p-4">
                <i class="fa fa-camera"></i>
            </div>
            <div class="search p-4">
                <i class="fa fa-search"></i>
            </div>
            <div class="dots p-4">
                <i class="fa fa-ellipsis-v"></i>
            </div>
        </div>
    </div>

    <div class="menu bg-green-900 text-white flex gap-0">
        
        <div class="groupicon p-2">
            <i class="fa fa-group "></i>
        </div>

        <div class="menuitems flex w-full justify-around ">
            <div class="chats p-2  hover:border-b-2 border-b-2">Chats</div>
            <div class="status p-2 hover:border-b-2">Status</div>
            <div class="calls p-2  hover:border-b-2">Calls</div>
        </div>
    </div>

    <div class="archive flex justify-start p-2">
            <div class="image p-4">
                <i class="fa fa-archive  text-green-900"></i>
            </div>
           <div class="arch p-4">Archived</div> 
    </div> 

    <div class="messagesall">
        <div class="message flex justify-between p-4 hover:bg-blue-100">
        <div class="pinfo flex justify-between">
                <div class="image"><img class="rounded-full w-12 h-12  " src="https://images.unsplash.com/photo-1526547541286-73a7aaa08f2a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=60" alt=""></div>
                <div class="mbox px-4">
                    <div class="mname">Sanjog pokhrel</div>
                    <div class="msg">😀 me sanjog</div>
                </div>
        </div>
            <div class="mdate text-slate-500">4/1/23</div>
        </div>

        <div class="message flex justify-between p-4 hover:bg-blue-100">
        <div class="pinfo flex justify-between">
                <div class="image"><img class="rounded-full w-12 h-12  " src="https://media.licdn.com/dms/image/C4E03AQGk7tWZAhrqhQ/profile-displayphoto-shrink_800_800/0/1599020915646?e=2147483647&v=beta&t=RcwjVFY7t_iTfe7m-z1P0yaxHNBnVBqHjUBpNl8MTSg" alt=""></div>
                <div class="mbox px-4">
                    <div class="mname">Garima urau</div>
                    <div class="msg">huss ❤️</div>
                </div>
        </div>
            <div class="mdate text-slate-500">4/1/23</div>
        </div>

        <div class="message flex justify-between p-4 hover:bg-blue-100">
        <div class="pinfo flex justify-between">
                <div class="image"><img class="rounded-full w-12 h-12  " src="https://upload.wikimedia.org/wikipedia/commons/1/15/Anmol_KC.png"  alt=""></div>
                <div class="mbox px-4">
                    <div class="mname">Anmol kc</div>
                    <div class="msg">huss</div>
                </div>
        </div>
            <div class="mdate text-slate-500">4/1/23</div>
        </div>

        <div class="message flex justify-between p-4 hover:bg-blue-100">
        <div class="pinfo flex justify-between">
                <div class="image"><img class="rounded-full w-12 h-12  " src="https://upload.wikimedia.org/wikipedia/commons/1/15/Anmol_KC.png"  alt=""></div>
                <div class="mbox px-4">
                    <div class="mname">Anmol kc</div>
                    <div class="msg">❤️❤️</div>
                </div>
        </div>
            <div class="mdate text-slate-500">4/1/23</div>
        </div>

        <div class="message flex justify-between p-4 hover:bg-blue-100">
        <div class="pinfo flex justify-between">
                <div class="image"><img class="rounded-full w-12 h-12  " src="https://images.unsplash.com/photo-1526547541286-73a7aaa08f2a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=60" alt=""></div>
                <div class="mbox px-4">
                    <div class="mname">Sanjog pokhrel</div>
                    <div class="msg">huss</div>
                </div>
        </div>
            <div class="mdate text-slate-500">4/1/23</div>
        </div>
    </div>
    
    <div class="foot flex text-xs justify-center">
        <div class="lock px-2">
            <i class="fa fa-lock "></i>
        </div>
        <div class="mfoot">
            Your personal messages are &nbsp;
        </div>
        <div class="ahref text-lime-700"> end-to-end encrypted </div>
    </div>
</body>  
</html>